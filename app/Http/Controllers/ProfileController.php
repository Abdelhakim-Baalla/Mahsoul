<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use App\Repositories\Interfaces\CategorieRepositoryInterface;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\OrderItemRepositoryInterface;
use App\Repositories\Interfaces\ProduitRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $utilisateurRepository;
    protected $agricoleRepository;
    protected $veterinaireRepository;
    protected $adminRepository;
    protected $clientRepository;
    protected $commandesRepository;
    protected $orderItemsRepository;
    protected $produitRepository;
    protected $categorieRepository;

    public function __construct(CategorieRepositoryInterface $categorieRepository, ProduitRepositoryInterface $produitRepository, OrderItemRepositoryInterface $orderItemsRepository, CommandeRepositoryInterface $commandesRepository, ClientRepositoryInterface $clientRepository, AdminRepositoryInterface $adminRepository, VeterinaireRepositoryInterface $veterinaireRepository, UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
        $this->agricoleRepository = $agricoleRepository;
        $this->veterinaireRepository = $veterinaireRepository;
        $this->adminRepository = $adminRepository;
        $this->clientRepository = $clientRepository;
        $this->commandesRepository = $commandesRepository;
        $this->orderItemsRepository = $orderItemsRepository;
        $this->produitRepository = $produitRepository;
        $this->categorieRepository = $categorieRepository;
    }
    public function showProfile()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.show');
    }

    public function showeditProfile()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.edit');
    }

    public function showeditProfileInformationAgricole()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.editAgricole');
    }

    public function showeditProfileInformationVeterinaire()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.editveterinaire');
    }

    public function showeditProfileInformationAdmin()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.editadmin');
    }


    public function showeditProfileInformationClient()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.editclient');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs,email,' . $user->id,
            'telephone' => 'required|string|max:13',
            'adresse' => 'required|string',
            'photo' => 'nullable|string'
        ]);

        $updated = $this->utilisateurRepository->modifierProfil($user->id, $validated);

        if (!$updated) {
            return back()->with('error', 'Failed to update profile');
        }

        Auth::user()->refresh();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }


    public function updateProfileInformartionAgricole(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'ferme' => 'required|string|max:255',
            'produit' => 'required|string|max:255',
            'superficie_terrain' => 'required|string|max:255',
            'region' => 'required|string|max:255'
        ]);


        $updated = $this->agricoleRepository->modifierProfilAgricole($user->agricole->id, $validated);

        if (!$updated) {
            return back()->with('error', 'Failed to update profile');
        }

        $user->agricole->refresh();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }

    public function updateProfileInformartionVeterinaire(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'specialite' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'annee_experience' => 'required|string|max:255',
            'prix_deplacement' => 'required|integer'
        ]);


        $updated = $this->veterinaireRepository->modifierProfilVeterinaire($user->veterinaire->id, $validated);

        if (!$updated) {
            return back()->with('error', 'Failed to update profile');
        }

        $user->veterinaire->refresh();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }

    public function updateProfileInformartionAdmin(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'about' => 'required|string',
            'domaines_expertise' => 'required|string|max:255',
            'contact_urgence' => 'required|string|max:255'
        ]);


        $updated = $this->adminRepository->modifierProfilAdmin($user->admin->id, $validated);

        if (!$updated) {
            return back()->with('error', 'Failed to update profile');
        }

        $user->admin->refresh();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }


    public function updateProfileInformartionClient(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'type_exploitation' => 'required|string',
            'nombre_animaux' => 'required|integer',
            'superficie_terres' => 'required|integer'
        ]);


        $updated = $this->clientRepository->modifierProfilClient($user->client->id, $validated);

        if (!$updated) {
            return back()->with('error', 'Failed to update profile');
        }

        $user->client->refresh();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }

    public function showProfileOrders()
    {
        // dd(Auth::user()->id);

        $commandes = $this->commandesRepository->getCommandesByClientId(Auth::user()->id);
        // dd($commandes);
        $order = [];
        foreach ($commandes as $commande) {
            $orderItems = $this->orderItemsRepository->getOrderItemByCommandeId($commande->id);
            array_push($order, $orderItems);
        }

        $produits = [];
        foreach ($order as $orde) {
            foreach ($orde as $or) {
                $produit = $this->produitRepository->getProduitById($or->produit);
                array_push($produits, $produit);
            }
        }

        // die();
        // dd($produits[0]);

        $produitsFinal = [];
        foreach ($produits as $produit) {
                // dd($produit->categorie);
                // dd($prod);
                $categorie = $this->categorieRepository->getCategorieById($produit->categorie);
                $commandes = $this->commandesRepository->getAllCommandes();
                // dd($commandes);
                $quantite = 0;

                $analyse = [
                    'id' => $produit->id,
                    'nom' => $produit->nom,
                    'image' => $produit->image,
                    'categorie' => $categorie->nom
                    // 'quantite' =>  $this->orderItemsRepository->getQuantityByProduitId($produit->id, $produit->id)
                ];

                array_push($produitsFinal, $analyse);
        }
        return view('profile.orders', compact('commandes', 'produitsFinal'));
    }
}
