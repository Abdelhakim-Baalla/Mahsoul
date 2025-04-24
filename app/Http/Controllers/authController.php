<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $utilisateurRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
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
