<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CategorieRepositoryInterface;
use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\ProduitRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $produitRepository;
    protected $categorieRepository;
    protected $commandeRepository;
    
    public function __construct(CommandeRepositoryInterface $commandeRepository, ProduitRepositoryInterface $produitRepository, CategorieRepositoryInterface $categorieRepository)
    {
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
        $this->commandeRepository = $commandeRepository;
    }

    public function index(){
        $products = $this->produitRepository->getAllProduitsClient();
        // dd($products);
        if (empty($products)) {
            return view('products.index', ['products' => []]);
        }
        foreach ($products as $product){
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

    public function productShow(Request $request){
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

    public function cartIndex(Request $request){
        $cart = json_decode($request['cart'], true);
        // dd($pp);
        // $cart = $this->commandeRepository->getAllCommandes();
        // $user =  $request->session()->put('cart', $request->input('cart'));
        // dd($user);
        // dd($cart);
        return view('cart.index', compact('cart'));
    }
}
