@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
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
                

@endsection