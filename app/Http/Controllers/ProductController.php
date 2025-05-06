<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CategorieRepositoryInterface;
use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\OrderItemRepositoryInterface;
use App\Repositories\Interfaces\ProduitRepositoryInterface;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductController extends Controller
{
    protected $produitRepository;
    protected $categorieRepository;
    protected $commandeRepository;
    protected $orderItem;

    public function __construct(OrderItemRepositoryInterface $orderItem, CommandeRepositoryInterface $commandeRepository, ProduitRepositoryInterface $produitRepository, CategorieRepositoryInterface $categorieRepository)
    {
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
        $this->commandeRepository = $commandeRepository;
        $this->orderItem = $orderItem;
    }

    public function index()
    {
        $products = $this->produitRepository->getAllProduitsClient();
        // dd($products);
        if (empty($products)) {
            return view('products.index', ['products' => []]);
        }
        foreach ($products as $product) {
            // dd($product->categorie);
            $categorie = $this->categorieRepository->getCategorieById($product->categorie);
            if ($categorie) {
                $product->categorie = $categorie->nom;
            } else {
                $product->categorie = 'Unknown';
            }
            // dd($product->categorie);
        }
        return view('products.index', compact('products'));
    }

    public function productShow(Request $request)
    {
        // $cart = session()->get('cart', []);
        // dd($cart);
        // dd($request->id);    
        $product = $this->produitRepository->getProduitById($request->id);
        if (empty($product)) {
            return view('products.index', ['product' => []]);
        }
        $categorie = $this->categorieRepository->getCategorieById($product->categorie);
        if ($categorie) {
            $product->categorie = $categorie->nom;
        } else {
            $product->categorie = 'Unknown';
        }
        // dd($product->categorie);
        return view('products.show', compact('product'));
    }

    public function checkoutIndex(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        // dd($cart);

        $cartItems = [];
        $total = 0;

        foreach ($cart as $productId => $item) {
            $product = $this->produitRepository->getProduitById($productId);

            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $item['quantity'],
                    'user_id' => $item['user_id']
                ];

                $total += $product->prix * $item['quantity'];
            }
            // dd($cartItems);
        }
        return view('checkout.index', compact('cartItems', 'total'));
    }

    public function checkoutpayment(Request $request)
    {
        // dd(auth()->id());
        // dd($request->all());
        $validated = $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'adresse' => 'required|string',
            'terms' => 'required|accepted'
        ]);

        $cartItems = session()->get('cart', []);
        $total = $request->total;
      
        $stripe =[
            "total" => $total
        ];
        
        session()->put('payer', $stripe);

        // $payer = session()->get('payer', []);
        // dd($payer);

        $commande = [
            'client' => auth()->id(),
            'date_commande' => now(),
            'total' => $total,
            'statut' => 'pending',
            'methode_paiement' => $request->payment_method,
            'reference_paiement' => '4242424242424242',
            'adresse_livraison' => $request->adresse,
            'frais_livraison' => 0.00
        ];
        $commandeE = $this->commandeRepository->creerCommande($commande);
        // dd($commandeE);

        foreach ($cartItems as $item) {
            // dd($item);
            $product = $this->produitRepository->getProduitById($item['product_id']);
            // dd($product->prix);
            $oritms = [
                'commande' => $commandeE->id,
                'produit' => $product->id,
                'quantite' => $item['quantity'],
                'prix_unitaire' => $product->prix
            ];
            $this->orderItem->creerOrderItem($oritms);
        }

        session()->forget('cart');

        return redirect()->route('checkout.stripe');
        
    }

    public function checkoutConfirmation()
    {
        return view('checkout.confirmation');
    }

    public function checkoutCancel()
    {
        return view('checkout.cancel');
    }

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'produitId' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            'utilisateurId' => 'required|integer',
        ]);
        // dd($validated);
        $cart = session()->get('cart', []);
        // dd($cart);

        $productKey = $validated['produitId'];
        // dd($productKey);

        if (isset($cart[$productKey])) {
            $cart[$productKey]['quantity'] += $validated['quantity'];
        } else {
            // Add new product to cart
            $cart[$productKey] = [
                'product_id' => $validated['produitId'],
                'user_id' => $validated['utilisateurId'],
                'quantity' => $validated['quantity'],
            ];
        }
        // dd($cart);
        session()->put('cart', $cart);
        // dd($cart);   


        $product = $this->produitRepository->getProduitById($validated['produitId']);
        // dd($product);


        if (empty($product)) {
            return view('products.index', ['product' => []]);
        }

        $categorie = $this->categorieRepository->getCategorieById($product->categorie);
        // dd($categorie);

        if ($categorie) {
            $product->categorie = $categorie->nom;
        } else {
            $product->categorie = 'Unknown';
        }
        // dd($product->id);
        $id = $product->id;
        // dd($product->categorie);
        return redirect()->route('products.show', compact('id'));
    }


    public function cartIndex(Request $request)
    {

        // $cart = json_decode($request['cart'], true);
        // session()->push('cart', $cart);
        $cart = $request->session()->get('cart', []);

        $cartItems = [];
        $total = 0;

        foreach ($cart as $productId => $item) {
            $product = $this->produitRepository->getProduitById($productId);

            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $item['quantity'],
                    'user_id' => $item['user_id']
                ];

                $total += $product->prix * $item['quantity'];
            }
            // dd($cartItems);
        }
        // dd($cart);
        return view('cart.index', compact('cartItems', 'total'));
    }

    public function cartDeleteItem(Request $request)
    {
        // dd($request->idProduit);
        $cart = $request->session()->get('cart', []);
        $id = $request->idProduit;
        // dd($cart[$id]);
        unset($cart[$id]);
        // dd($cart);

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produit supprimé du panier avec succès');
    }

    public function cartVider()
    {
        session()->forget('cart');

        return redirect()->route('cart.index')
            ->with('success', 'Votre panier a été vidé avec succès');
    }
}
