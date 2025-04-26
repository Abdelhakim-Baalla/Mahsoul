<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $utilisateurRepository;
    protected $agricoleRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
        $this->agricoleRepository = $agricoleRepository;
    }

    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return redirect()->route('profile.show');
        }

        return view('auth.register');
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('profile.show');
        }
        
        return view('auth.login');
    }


    public function register(Request $request)
    {

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs,email',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:password',
            'telephone' => 'required|string|max:13',
            'adresse' => 'required|string',
            'type' => 'required|string|in:client,veterinaire,agricole',
            'terms' => 'required|accepted',
            'photo' => 'string'
        ]);



        $utilisateur = $this->utilisateurRepository->inscription($validated);
        
        if($utilisateur['type'] == 'agricole'){
            $utilisateurId = $utilisateur['id'];
            $utilisateurIdToCreate = ['compte' => $utilisateurId, 
            'ferme' => 'non spécifié',
            'produit' => 'non spécifiée',
            'superficie_terrain' => 'non spécifiée',
            'region' => 'non spécifiée'
        ];
            $this->agricoleRepository->create($utilisateurIdToCreate);
        }

        Auth::login($utilisateur);

        return redirect()->route('profile.show');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $utilisateur = $this->utilisateurRepository->connexion(
            $validated['email'],
            $validated['password']
        );

        

        Auth::login($utilisateur, $request->has('remember'));

        return redirect()->route('profile.show');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
