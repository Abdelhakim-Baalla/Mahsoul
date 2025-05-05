<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\AgricoleRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $utilisateurRepository;
    protected $agricoleRepository;

    public function __construct(UtilisateurRepositoryInterface $utilisateurRepository, AgricoleRepositoryInterface $agricoleRepository)
    {
        $this->utilisateurRepository = $utilisateurRepository;
        $this->agricoleRepository = $agricoleRepository;
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

    public function showeditProfileInformationVeterinaire(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.editveterinaire');
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
}
