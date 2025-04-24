<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return view('profile.show');
    }

    public function showeditProfile(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        return view('profile.edit');
    }
}
