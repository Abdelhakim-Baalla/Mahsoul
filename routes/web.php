<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/formation', function () {
    return view('formation');
});

Route::get('/marketplace', function () {
    return view('marketplace');
});

Route::get('/community', function () {
    return view('community');
});