<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Mahsoul
|--------------------------------------------------------------------------
| Routes statiques vers les vues .blade.php pour prototypage
|
*/

// Pages communes
Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');

// Authentification
Route::controller(AuthController::class)->group(function () {
    // Routes GET
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::get('/login', 'showLoginForm')->name('login');
    
    // Routes POST
    Route::post('/inscription', 'register')->name('register.submit');
    Route::post('/connexion', 'login')->name('login.submit');
    Route::post('/logout', 'logout')->name('logout');
});

Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
Route::view('/reset-password', 'auth.reset-password')->name('password.reset');


// Profil
Route::view('/profile', 'profile.show')->name('profile.show');
Route::view('/profile/edit', 'profile.edit')->name('profile.edit');

// Marketplace - Utilisateur
Route::view('/products', 'products.index')->name('products.index');
Route::view('/products/show', 'products.show')->name('products.show');
Route::view('/cart', 'cart.index')->name('cart.index');
Route::view('/checkout', 'checkout.index')->name('checkout.index');
Route::view('/checkout/confirmation', 'checkout.confirmation')->name('checkout.confirmation');
Route::view('/orders', 'orders.index')->name('orders.index');
Route::view('/orders/show', 'orders.show')->name('orders.show');

// Consultations - Utilisateur
Route::view('/experts', 'experts.index')->name('experts.index');
Route::view('/experts/show', 'experts.show')->name('experts.show');
Route::view('/appointments/create', 'appointments.create')->name('appointments.create');
Route::view('/appointments', 'appointments.index')->name('appointments.index');
Route::view('/appointments/show', 'appointments.show')->name('appointments.show');
Route::view('/consultations', 'consultations.index')->name('consultations.index');
Route::view('/consultations/show', 'consultations.show')->name('consultations.show');

// Formation
Route::view('/formation', 'articles.index')->name('articles.index');
Route::view('/formation/show', 'articles.show')->name('articles.show');
Route::view('/formation/tag', 'articles.tag')->name('articles.tag');

// Dashboard Admin
Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/users', 'admin.users.index')->name('admin.users.index');
Route::view('/admin/users/show', 'admin.users.show')->name('admin.users.show');
Route::view('/admin/users/edit', 'admin.users.edit')->name('admin.users.edit');
Route::view('/admin/products', 'admin.products.index')->name('admin.products.index');
Route::view('/admin/products/create', 'admin.products.create')->name('admin.products.create');
Route::view('/admin/products/edit', 'admin.products.edit')->name('admin.products.edit');
Route::view('/admin/categories', 'admin.categories.index')->name('admin.categories.index');
Route::view('/admin/orders', 'admin.orders.index')->name('admin.orders.index');
Route::view('/admin/orders/show', 'admin.orders.show')->name('admin.orders.show');
Route::view('/admin/articles', 'admin.articles.index')->name('admin.articles.index');
Route::view('/admin/articles/create', 'admin.articles.create')->name('admin.articles.create');
Route::view('/admin/articles/edit', 'admin.articles.edit')->name('admin.articles.edit');
Route::view('/admin/comments', 'admin.comments.index')->name('admin.comments.index');
Route::view('/admin/tags', 'admin.tags.index')->name('admin.tags.index');

// Dashboard Expert Agricole
Route::view('/expert', 'expert.dashboard')->name('expert.dashboard');
Route::view('/expert/appointments', 'expert.appointments.index')->name('expert.appointments.index');
Route::view('/expert/appointments/show', 'expert.appointments.show')->name('expert.appointments.show');
Route::view('/expert/consultations', 'expert.consultations.index')->name('expert.consultations.index');
Route::view('/expert/consultations/show', 'expert.consultations.show')->name('expert.consultations.show');
Route::view('/expert/consultations/respond', 'expert.consultations.respond')->name('expert.consultations.respond');

// Dashboard Vétérinaire
Route::view('/vet', 'vet.dashboard')->name('vet.dashboard');
Route::view('/vet/appointments', 'vet.appointments.index')->name('vet.appointments.index');
Route::view('/vet/appointments/show', 'vet.appointments.show')->name('vet.appointments.show');
Route::view('/vet/consultations', 'vet.consultations.index')->name('vet.consultations.index');
Route::view('/vet/consultations/show', 'vet.consultations.show')->name('vet.consultations.show');
Route::view('/vet/consultations/respond', 'vet.consultations.respond')->name('vet.consultations.respond');

// Dashboard Client
Route::view('/client', 'client.dashboard')->name('client.dashboard');
Route::view('/client/appointments', 'client.appointments.index')->name('client.appointments.index');
Route::view('/client/consultations', 'client.consultations.index')->name('client.consultations.index');
Route::view('/client/orders', 'client.orders.index')->name('client.orders.index');
Route::view('/client/documents', 'client.documents.index')->name('client.documents.index');

