<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        var_dump($request);
    }
}
