<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use App\Repositories\Interfaces\CategorieRepositoryInterface;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\OrderItemRepositoryInterface;
use App\Repositories\Interfaces\ProduitRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\VeterinaireRepositoryInterface;
use App\Models\Produit;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $rendezVousRepository;

    public function __construct(RendezVousRepositoryInterface $rendezVousRepository, CategorieRepositoryInterface $categorieRepository, ProduitRepositoryInterface $produitRepository, OrderItemRepositoryInterface $orderItemsRepository, CommandeRepositoryInterface $commandesRepository, ClientRepositoryInterface $clientRepository, AdminRepositoryInterface $adminRepository, VeterinaireRepositoryInterface $veterinaireRepository, UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->middleware('auth');
        $this->rendezVousRepository = $rendezVousRepository;
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

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

    public function showProfileConsultations()
    {
        $user = Auth::user();

        if ($user->type === 'client') {
            $rendezVous = RendezVous::where('client', $user->id)->latest()->get();
        } elseif (in_array($user->type, ['veterinaire', 'agricole'])) {
            $rendezVous = RendezVous::where('expert', $user->id)->latest()->get();
        } else {
            $rendezVous = RendezVous::latest()->get();
        }

        foreach ($rendezVous as $rdv) {
            $rdv->expertUser = $this->utilisateurRepository->getById($rdv->expert);
            $rdv->clientUser = $this->utilisateurRepository->getById($rdv->client);
        }

        return view('profile.consultations', compact('rendezVous'));
    }

    public function showProfileFavorites()
    {
        $ids = session()->get('favorites', []);
        $produits = $ids ? Produit::whereIn('id', $ids)->get() : collect();

        foreach ($produits as $produit) {
            $categorie = $this->categorieRepository->getCategorieById($produit->categorie);
            $produit->categorie_nom = $categorie ? $categorie->nom : 'Unknown';
        }

        return view('profile.favorites', compact('produits'));
    }

    public function toggleFavorite(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:produits,id',
        ]);

        $favorites = session()->get('favorites', []);
        if (in_array($validated['id'], $favorites)) {
            $favorites = array_values(array_diff($favorites, [$validated['id']]));
            $message = 'Produit retiré de vos favoris.';
        } else {
            $favorites[] = $validated['id'];
            $message = 'Produit ajouté à vos favoris.';
        }
        session()->put('favorites', $favorites);

        return redirect()->back()->with('success', $message);
    }

    public function showProfileSecurity()
    {
        return view('profile.security');
    }

    public function updateProfilePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
        }

        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->route('profile.security')->with('success', 'Mot de passe mis à jour avec succès.');
    }

    public function showProfileNotifications()
    {
        $user = Auth::user();
        $notifications = collect();

        if ($user->type === 'client') {
            $commandes = $this->commandesRepository->getCommandesByClientId($user->id);
            foreach ($commandes as $commande) {
                $notifications->push([
                    'icon' => 'fa-shopping-bag',
                    'color' => 'primary',
                    'title' => 'Commande #' . $commande->id . ' : ' . $commande->statut,
                    'body' => 'Total de ' . $commande->total . ' DH — ' . ($commande->date_commande ?? ''),
                    'date' => $commande->created_at,
                ]);
            }
            $rdvs = RendezVous::where('client', $user->id)->latest()->take(5)->get();
        } elseif (in_array($user->type, ['veterinaire', 'agricole'])) {
            $rdvs = RendezVous::where('expert', $user->id)->latest()->take(5)->get();
        } else {
            $rdvs = RendezVous::latest()->take(5)->get();
        }

        foreach ($rdvs as $rdv) {
            $notifications->push([
                'icon' => 'fa-calendar-check',
                'color' => 'secondary',
                'title' => 'Rendez-vous : ' . ($rdv->sujet ?? 'Consultation') . ' (' . $rdv->statut . ')',
                'body' => $rdv->description ?? '',
                'date' => $rdv->created_at,
            ]);
        }

        $notifications = $notifications->sortByDesc('date')->values();

        return view('profile.notifications', compact('notifications'));
    }
}
