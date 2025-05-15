<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
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
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/inscription', 'register')->name('register.submit');
    Route::post('/connexion', 'login')->name('login.submit');
    Route::post('/logout', 'logout')->name('logout');
});

Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
Route::view('/reset-password', 'auth.reset-password')->name('password.reset');

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'showProfile')->name('profile.show');
    Route::get('/profile/orders', 'showProfileOrders')->name('profile.show.orders');
    Route::get('/profile/edit', 'showeditProfile')->name('profile.edit');
    Route::PUT('/profile/update', 'updateProfile')->name('profile.update');
    Route::get('/profile/edit/information/agricole', 'showeditProfileInformationAgricole')->name('profile.updateAgricole');
    Route::get('/profile/edit/information/veterinaire', 'showeditProfileInformationVeterinaire')->name('profile.updateVeterinaire');
    Route::get('/profile/edit/information/admin', 'showeditProfileInformationAdmin')->name('profile.updateAdmin');
    Route::get('/profile/edit/information/client', 'showeditProfileInformationClient')->name('profile.updateClient');

    Route::PUT('/agricole/information/update', 'updateProfileInformartionAgricole')->name('profile.updateAgricoleInfo');
    Route::PUT('/veterinaire/information/update', 'updateProfileInformartionVeterinaire')->name('profile.updateVeterinaireInfo');
    Route::PUT('/admin/information/update', 'updateProfileInformartionAdmin')->name('profile.updateAdminInfo');
    Route::PUT('/client/information/update', 'updateProfileInformartionClient')->name('profile.updateClientInfo');
});

// Marketplace - Utilisateur
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/show', 'productShow')->name('products.show');
    Route::get('/cart/save', 'addToCart')->name('add.cart.save');
    Route::get('/cart', 'cartIndex')->name('cart.index');
    Route::post('/cart/delete', 'cartDeleteItem')->name('cart.delete.product');
    Route::get('/cart/vider', 'cartVider')->name('cart.vider');

    Route::get('/checkout', 'checkoutIndex')->name('checkout.index');
    Route::get('/checkout/confirmation', 'checkoutConfirmation')->name('payment.success');
    Route::get('/checkout/cancel', 'checkoutCancel')->name('payment.cancel');
    Route::post('/checkout/payment', 'checkoutpayment')->name('checkout.payment');

    Route::get('/orders', 'ordersIndex')->name('orders.index');
    Route::get('/orders/show', 'ordersShow')->name('orders.show');
});



Route::controller(StripePaymentController::class)->group(function () {
    Route::get('/checkout/stripe', 'checkout')->name('checkout.stripe');
});



// Consultations - Utilisateur
Route::controller(ConsultationController::class)->group(function () {
    Route::get('/experts', 'AfficherExperts')->name('experts.index');
    Route::get('/experts/show', 'expertShow')->name('experts.show');
});
Route::view('/appointments/create', 'appointments.create')->name('appointments.create');
Route::view('/appointments', 'appointments.index')->name('appointments.index');
Route::view('/appointments/show', 'appointments.show')->name('appointments.show');
Route::view('/consultations', 'consultations.index')->name('consultations.index');
Route::view('/consultations/show', 'consultations.show')->name('consultations.show');

// Formation
Route::controller(ArticleController::class)->group(function () {
    Route::get('/formation', 'articlesIndex')->name('articles.index');
    Route::get('/formation/show', 'articlesShow')->name('articles.show');
    Route::get('/formation/tag', 'articlesTag')->name('articles.tag');
    Route::get('/formation/show/add/comment', 'articlesAddComment')->name('articles.addComment');
    Route::delete('/formation/show/delete/comment', 'articlesDeleteComment')->name('articles.deleteComment');
    Route::get('/formation/show/edit/comment', 'articleseditComment')->name('articles.editComment');
    Route::put('/formation/show/edit/comment/submit', 'articleseditCommentSubmit')->name('articles.editComment.submit');
});


// Dashboard Admin
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'dashboard')->name('admin.dashboard');

    Route::get('/admin/users', 'usersIndex')->name('admin.users.index');
    Route::get('/admin/users/show', 'usersShow')->name('admin.users.show');
    Route::get('/admin/users/edit', 'usersEdit')->name('admin.users.edit');
    Route::post('/admin/users/edit/submit', 'usersEditSubmit')->name('admin.users.edit.submit');
    Route::post('/admin/users/delete', 'usersDelete')->name('admin.users.delete');

    Route::get('/admin/products', 'productsIndex')->name('admin.products.index');
    Route::get('/admin/products/create', 'productsCreate')->name('admin.products.create');
    Route::post('/admin/products/store', 'productsStore')->name('admin.products.store');
    Route::post('/admin/products/edit', 'productsEdit')->name('admin.products.edit');
    Route::put('/admin/products/edit/store', 'productsEditSubmit')->name('admin.products.edit.store');
    Route::delete('/admin/product/delete', 'productDelete')->name('admin.products.delete');
    
    Route::get('/admin/categories', 'categoriesIndex')->name('admin.categories.index');
    Route::get('/admin/categories/add', 'categoriesAdd')->name('admin.categories.add');
    Route::post('/admin/categories/store', 'categoriesStore')->name('admin.categories.store');
    Route::post('/admin/categories/edit', 'categoriesedit')->name('admin.categories.edit');
    Route::put('/admin/categories/edit/submit', 'categorieseditSubmit')->name('admin.categories.edit.submit');
    Route::delete('/admin/categories/delete', 'categoriesdelete')->name('admin.categories.delete');

    Route::get('/admin/orders', 'ordersIndex')->name('admin.orders.index');
    Route::get('/admin/orders/show', 'ordersShow')->name('admin.orders.show');

    Route::get('/admin/articles', 'articlesIndex')->name('admin.articles.index');
    Route::get('/admin/articles/create', 'articlesCreate')->name('admin.articles.create');
    Route::post('/admin/articles/store', 'articlesStore')->name('admin.articles.store');
    Route::post('/admin/articles/store-with-categorie', 'articlesStorewithCategorie')->name('admin.articles.store.submit');
    Route::get('/admin/articles/edit', 'articlesEdit')->name('admin.articles.edit');
    Route::post('/admin/articles/edit/store', 'articlesEditStore')->name('admin.articles.update.store');
    Route::post('/admin/articles/edit/store/submit', 'articlesEditStoreSubmit')->name('admin.articles.update.store.submit');

    Route::delete('/admin/articles/supprimer', 'articlesSupprimer')->name('admin.articles.supprimer');
    Route::get('/admin/articles/tag', 'articlesTag')->name('admin.articles.tag');

    Route::get('/admin/comments', 'commentsIndex')->name('admin.comments.index');
    Route::delete('/admin/comments/delete', 'commentsDelete')->name('admin.comments.delete');

    Route::get('/admin/tags', 'tagsIndex')->name('admin.tags.index');
    Route::get('/admin/tag/create', 'tagCreate')->name('admin.tags.create');
    Route::post('/admin/tag/store', 'tagStore')->name('admin.tags.store');
    Route::post('/admin/tag/update', 'tagUpdate')->name('admin.tags.update');
    Route::put('/admin/tag/update/store', 'tagUpdateStore')->name('admin.tags.update.store');
    Route::post('/admin/tag/delete', 'tagDelete')->name('admin.tags.delete');
});

// Dashboard Expert Agricole
Route::view('/expert', 'expert.dashboard')->name('expert.dashboard');
Route::view('/expert/appointments', 'expert.appointments.index')->name('expert.appointments.index');
Route::view('/expert/appointments/show', 'expert.appointments.show')->name('expert.appointments.show');
Route::view('/expert/consultations', 'expert.consultations.index')->name('expert.consultations.index');
Route::view('/expert/consultations/show', 'expert.consultations.show')->name('expert.consultations.show');
Route::view('/expert/consultations/respond', 'expert.consultations.respond')->name('expert.consultations.respond');

// Dashboard Vétérinaire
Route::view('/vet', 'vet.dashboard')->name('veterinaire.dashboard');
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


// Route::view('/not-found', 'error.404')->name('error.404');
// Route::fallback(function () {
//     return redirect('/not-found');
// });

Route::get('/maintenance', function () {
    return view('error.maintenance');
});
