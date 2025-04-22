@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            &lt;!-- Breadcrumbs -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-primary-600 font-medium">Confirmation de commande</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            &lt;!-- Checkout Steps -->
            <div class="mb-8">
                <div class="flex items-center justify-center">
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Panier</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Informations</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Paiement</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Confirmation</div>
                    </div>
                </div>
            </div>
            
            &lt;!-- Confirmation Content -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6 bg-primary-600 text-white text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check text-primary-600 text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">Merci pour votre commande !</h1>
                    <p class="mt-2">Votre commande a été confirmée et sera traitée rapidement.</p>
                </div>
                
                <div class="p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Détails de la commande</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-gray-600">Numéro de commande:</p>
                                <p class="font-medium text-gray-800">#MAH-12345</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Date:</p>
                                <p class="font-medium text-gray-800">22 Avril 2023</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Statut du paiement:</p>
                                <p class="font-medium text-green-600">Payé</p>
                            </div>
                            <div>
                                <p class="text-gray-600">Méthode de paiement:</p>
                                <p class="font-medium text-gray-800">Carte bancaire (se terminant par 4242)</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 pt-6 mb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Récapitulatif des articles</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produit</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix unitaire</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-md object-cover" src="/images/product-1.jpg" alt="Antibiotique Bovins Premium">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Antibiotique Bovins Premium</div>
                                                    <div class="text-sm text-gray-500">Flacon 100ml</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">350 DH</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">350 DH</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-md object-cover" src="/images/product-2.jpg" alt="Aliment Complet Bovins">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Aliment Complet Bovins</div>
                                                    <div class="text-sm text-gray-500">Sac 25kg</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">2</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">180 DH</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">360 DH</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-md object-cover" src="/images/product-6.jpg" alt="Engrais Organique Premium">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Engrais Organique Premium</div>
                                                    <div class="text-sm text-gray-500">Sac 20kg</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">220 DH</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">220 DH</div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" class="px-6 py-4 whitespace-nowrap"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Sous-total</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">930 DH</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="px-6 py-4 whitespace-nowrap"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Frais de livraison</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">50 DH</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="px-6 py-4 whitespace-nowrap"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">Taxes (20%)</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">186 DH</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="px-6 py-4 whitespace-nowrap"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold text-gray-900">Total</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-base font-bold text-primary-700">1166 DH</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-gray-200 pt-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Adresse de livraison</h3>
                            <address class="not-italic text-gray-700">
                                Mohammed Alami<br>
                                123 Rue de l'Agriculture<br>
                                10000 Ville<br>
                                Maroc<br>
                                <span class="mt-2 block">Téléphone: +212 6XX XX XX XX</span>
                            </address>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Informations de livraison</h3>
                            <p class="text-gray-700">
                                <span class="font-medium">Méthode de livraison:</span> Livraison standard<br>
                


## Historique des commandes

```html file="orders/index.blade.php"
@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            &lt;!-- Breadcrumbs -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <a href="/profile" class="text-gray-700 hover:text-primary-600">
                                Mon profil
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-primary-600 font-medium">Mes commandes</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            &lt;!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Historique des commandes</h1>
                <p class="mt-2 text-lg text-gray-600">Consultez et suivez toutes vos commandes</p>
            </div>
            
            &lt;!-- Orders Content -->
            <div class="flex flex-col lg:flex-row gap-8">
                &lt;!-- Sidebar -->
                <div class="lg:w-1/4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden sticky top-6">
                        &lt;!-- User Info -->
                        <div class="p-6 bg-primary-700 text-white">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-16 w-16 rounded-full object-cover border-4 border-white" src="/images/profile-avatar.jpg" alt="Photo de profil">
                                </div>
                                <div class="ml-4">
                                    <h2 class="text-xl font-bold">Mohammed Alami</h2>
                                    <p class="text-primary-200">Client (Agriculteur)</p>
                                </div>
                            </div>
                        </div>
                        
                        &lt;!-- Navigation -->
                        <nav class="p-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="/profile" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                                        <i class="fas fa-user mr-3"></i>
                                        Informations personnelles
                                    </a>
                                </li>
                                <li>
                                    <a href="/orders" class="flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-md font-medium">
                                        <i class="fas fa-shopping-bag mr-3"></i>
                                        Mes commandes
                                    </a>
                                </li>
                                <li>
                                    <a href="/profile/consultations" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                                        <i class="fas fa-calendar-check mr-3"></i>
                                        Mes consultations
                                    </a>
                                </li>
                                <li>
                                    <a href="/profile/favorites" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                                        <i class="fas fa-heart mr-3"></i>
                                        Mes favoris
                                    </a>
                                </li>
                                <li>
                                    <a href="/profile/security" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                                        <i class="fas fa-shield-alt mr-3"></i>
                                        Sécurité
                                    </a>
                                </li>
                                <li>
                                    <a href="/profile/notifications" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                                        <i class="fas fa-bell mr-3"></i>
                                        Notifications
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        
                        &lt;!-- Logout -->
                        <div class="p-4 border-t border-gray-200">
                            <form action="/logout" method="POST">
                                <button type="submit" class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-red-50 rounded-md">
                                    <i class="fas fa-sign-out-alt mr-3"></i>
                                    Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                &lt;!-- Main Content -->
                <div class="lg:w-3/4">
                    &lt;!-- Filters -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                                <div>
                                    <label for="order-status" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                                    <select id="order-status" name="order-status" class="border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 w-full sm:w-auto">
                                        <option value="all">Tous les statuts</option>
                                        <option value="processing">En traitement</option>
                                        <option value="shipped">Expédiée</option>
                                        <option value="delivered">Livrée</option>
                                        <option value="cancelled">Annulée</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="order-date" class="block text-sm font-medium text-gray-700 mb-1">Période</label>
                                    <select id="order-date" name="order-date" class="border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 w-full sm:w-auto">
                                        <option value="all">Toutes les périodes</option>
                                        <option value="last-month">Dernier mois</option>
                                        <option value="last-3-months">3 derniers mois</option>
                                        <option value="last-6-months">6 derniers mois</option>
                                        <option value="last-year">Dernière année</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex-1 md:max-w-xs">
                                <label for="order-search" class="block text-sm font-medium text-gray-700 mb-1">Rechercher</label>
                                <div class="relative">
                                    <input type="text" id="order-search" name="order-search" placeholder="Numéro de commande..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-search text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    &lt;!-- Orders List -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Vos commandes</h2>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Commande
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Statut
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    &lt;!-- Order 1 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#MAH-12345</div>
                                            <div class="text-sm text-gray-500">4 articles</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">22 Avril 2023</div>
                                            <div class="text-sm text-gray-500">14:30</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Livrée
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            1166 DH
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/orders/12345" class="text-primary-600 hover:text-primary-900 mr-3">Détails</a>
                                            <a href="/orders/12345/invoice" class="text-primary-600 hover:text-primary-900">Facture</a>
                                        </td>
                                    </tr>
                                    
                                    &lt;!-- Order 2 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#MAH-12344</div>
                                            <div class="text-sm text-gray-500">2 articles</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">15 Mars 2023</div>
                                            <div class="text-sm text-gray-500">09:45</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Livrée
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            720 DH
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/orders/12344" class="text-primary-600 hover:text-primary-900 mr-3">Détails</a>
                                            <a href="/orders/12344/invoice" class="text-primary-600 hover:text-primary-900">Facture</a>
                                        </td>
                                    </tr>
                                    
                                    &lt;!-- Order 3 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#MAH-12343</div>
                                            <div class="text-sm text-gray-500">1 article</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">28 Février 2023</div>
                                            <div class="text-sm text-gray-500">16:20</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Livrée
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            1450 DH
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/orders/12343" class="text-primary-600 hover:text-primary-900 mr-3">Détails</a>
                                            <a href="/orders/12343/invoice" class="text-primary-600 hover:text-primary-900">Facture</a>
                                        </td>
                                    </tr>
                                    
                                    &lt;!-- Order 4 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#MAH-12342</div>
                                            <div class="text-sm text-gray-500">3 articles</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">15 Janvier 2023</div>
                                            <div class="text-sm text-gray-500">11:10</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Livrée
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            890 DH
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/orders/12342" class="text-primary-600 hover:text-primary-900 mr-3">Détails</a>
                                            <a href="/orders/12342/invoice" class="text-primary-600 hover:text-primary-900">Facture</a>
                                        </td>
                                    </tr>
                                    
                                    &lt;!-- Order 5 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#MAH-12341</div>
                                            <div class="text-sm text-gray-500">2 articles</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">5 Décembre 2022</div>
                                            <div class="text-sm text-gray-500">13:45</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Livrée
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            560 DH
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="/orders/12341" class="text-primary-600 hover:text-primary-900 mr-3">Détails</a>
                                            <a href="/orders/12341/invoice" class="text-primary-600 hover:text-primary-900">Facture</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        &lt;!-- Pagination -->
                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-between">
                            <div class="flex-1 flex justify-between sm:hidden">
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Précédent
                                </a>
                                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Suivant
                                </a>
                            </div>
                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm text-gray-700">
                                        Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur <span class="font-medium">12</span> résultats
                                    </p>
                                </div>
                                <div>
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Précédent</span>
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                        <a href="#" aria-current="page" class="z-10 bg-primary-50 border-primary-500 text-primary-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            1
                                        </a>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            2
                                        </a>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            3
                                        </a>
                                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                            ...
                                        </span>
                                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            8
                                        </a>
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Suivant</span>
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    &lt;!-- Need Help -->
                    <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Besoin d'aide ?</h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-100 text-primary-600">
                                            <i class="fas fa-question-circle text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Questions sur votre commande</h3>
                                        <p class="mt-2 text-sm text-gray-600">
                                            Si vous avez des questions concernant votre commande, n'hésitez pas à contacter notre service client.
                                        </p>
                                        <a href="/contact" class="mt-3 text-sm font-medium text-primary-600 hover:text-primary-500">
                                            Contacter le service client <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-100 text-primary-600">
                                            <i class="fas fa-exchange-alt text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Retours et remboursements</h3>
                                        <p class="mt-2 text-sm text-gray-600">
                                            Consultez notre politique de retour pour plus d'informations sur les retours et remboursements.
                                        </p>
                                        <a href="/returns-policy" class="mt-3 text-sm font-medium text-primary-600 hover:text-primary-500">
                                            Voir la politique de retour <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const statusFilter = document.getElementById('order-status');
            const dateFilter = document.getElementById('order-date');
            const searchInput = document.getElementById('order-search');
            
            // Add event listeners for filters
            statusFilter.addEventListener('change', applyFilters);
            dateFilter.addEventListener('change', applyFilters);
            searchInput.addEventListener('input', applyFilters);
            
            function applyFilters() {
                // This would typically make an AJAX call to filter orders
                // For now, we'll just log the filter values
                console.log('Filters applied:', {
                    status: statusFilter.value,
                    date: dateFilter.value,
                    search: searchInput.value
                });
            }
        });
    </script>
@endsection
