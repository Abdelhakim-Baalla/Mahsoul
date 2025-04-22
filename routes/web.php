<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Mahsoul
|--------------------------------------------------------------------------
| Routes statiques vers les vues .blade.php pour prototypage
|
*/

// Pages communes
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/privacy', 'privacy');
Route::view('/terms', 'terms');

// Authentification
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::view('/forgot-password', 'auth.forgot-password');
Route::view('/reset-password', 'auth.reset-password');

// Profil
Route::view('/profile', 'profile.show');
Route::view('/profile/edit', 'profile.edit');

// Marketplace - Utilisateur
Route::view('/products', 'products.index');
Route::view('/products/show', 'products.show');
Route::view('/cart', 'cart.index');
Route::view('/checkout', 'checkout.index');
Route::view('/checkout/confirmation', 'checkout.confirmation');
Route::view('/orders', 'orders.index');
Route::view('/orders/show', 'orders.show');

// Consultations - Utilisateur
Route::view('/experts', 'experts.index');
Route::view('/experts/show', 'experts.show');
Route::view('/appointments/create', 'appointments.create');
Route::view('/appointments', 'appointments.index');
Route::view('/appointments/show', 'appointments.show');
Route::view('/consultations', 'consultations.index');
Route::view('/consultations/show', 'consultations.show');

// Formation
Route::view('/formation', 'articles.index');
Route::view('/formation/show', 'articles.show');
Route::view('/formation/tag', 'articles.tag');

// Dashboard Admin
Route::view('/admin', 'admin.dashboard');
Route::view('/admin/users', 'admin.users.index');
Route::view('/admin/users/show', 'admin.users.show');
Route::view('/admin/users/edit', 'admin.users.edit');
Route::view('/admin/products', 'admin.products.index');
Route::view('/admin/products/create', 'admin.products.create');
Route::view('/admin/products/edit', 'admin.products.edit');
Route::view('/admin/categories', 'admin.categories.index');
Route::view('/admin/orders', 'admin.orders.index');
Route::view('/admin/orders/show', 'admin.orders.show');
Route::view('/admin/articles', 'admin.articles.index');
Route::view('/admin/articles/create', 'admin.articles.create');
Route::view('/admin/articles/edit', 'admin.articles.edit');
Route::view('/admin/comments', 'admin.comments.index');
Route::view('/admin/tags', 'admin.tags.index');

// Dashboard Expert Agricole
Route::view('/expert', 'expert.dashboard');
Route::view('/expert/appointments', 'expert.appointments.index');
Route::view('/expert/appointments/show', 'expert.appointments.show');
Route::view('/expert/consultations', 'expert.consultations.index');
Route::view('/expert/consultations/show', 'expert.consultations.show');
Route::view('/expert/consultations/respond', 'expert.consultations.respond');

// Dashboard Vétérinaire
Route::view('/vet', 'vet.dashboard');
Route::view('/vet/appointments', 'vet.appointments.index');
Route::view('/vet/appointments/show', 'vet.appointments.show');
Route::view('/vet/consultations', 'vet.consultations.index');
Route::view('/vet/consultations/show', 'vet.consultations.show');
Route::view('/vet/consultations/respond', 'vet.consultations.respond');

// Dashboard Client
Route::view('/client', 'client.dashboard');
Route::view('/client/appointments', 'client.appointments.index');
Route::view('/client/consultations', 'client.consultations.index');
Route::view('/client/orders', 'client.orders.index');
Route::view('/client/documents', 'client.documents.index');

