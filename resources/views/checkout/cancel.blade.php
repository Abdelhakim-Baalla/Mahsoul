@extends('layouts.app')

@section('content')
    <div class="bg-amber-50 min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-gray-700 hover:text-amber-600">
                            <i class="fas fa-home mr-2"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-amber-600 font-medium">Paiement annulé</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="mb-8">
                <div class="flex items-center justify-center">
                    <div class="flex items-center text-gray-400 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-400 bg-gray-400 text-white flex items-center justify-center">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500">Panier</div>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-400"></div>
                    <div class="flex items-center text-gray-400 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-400 bg-gray-400 text-white flex items-center justify-center">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500">Informations</div>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-400"></div>
                    <div class="flex items-center text-amber-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-amber-600 bg-amber-600 text-white flex items-center justify-center">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-amber-600">Paiement</div>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300"></div>
                    <div class="flex items-center text-gray-300 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300 bg-white text-gray-300 flex items-center justify-center">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-300">Confirmation</div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6 bg-amber-500 text-white text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pause-circle text-amber-500 text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">Paiement annulé</h1>
                    <p class="mt-2">Votre processus de paiement a été interrompu.</p>
                </div>
                
                <div class="p-6 text-center">
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Que se passe-t-il maintenant ?</h2>
                        <p class="text-gray-700 mb-4">Ne vous inquiétez pas, votre panier a été sauvegardé. Aucun montant n'a été débité de votre compte.</p>
                        
                    </div>
                    
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Pourquoi continuer votre achat ?</h2>
                        <ul class="text-left max-w-md mx-auto text-gray-700 mb-6">
                            <li class="flex items-start mb-2">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Produits de qualité supérieure pour votre exploitation agricole</span>
                            </li>
                            <li class="flex items-start mb-2">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Livraison rapide partout au Maroc</span>
                            </li>
                            <li class="flex items-start mb-2">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Service client disponible pour vous accompagner</span>
                            </li>
                            <li class="flex items-start mb-2">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Garantie de satisfaction sur tous nos produits</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mt-8">
                        <a href="/checkout" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            <i class="fas fa-credit-card mr-2"></i> Reprendre le paiement
                        </a>
                        <a href="/panier" class="ml-4 inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            <i class="fas fa-shopping-cart mr-2"></i> Voir mon panier
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Vous avez des questions ?</h3>
                <p class="text-gray-700 mb-4">Si vous avez rencontré des difficultés lors du processus de paiement ou si vous avez des questions, notre équipe est là pour vous aider.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <div class="flex items-center">
                        <i class="fas fa-phone text-amber-600 text-xl mr-2"></i>
                        <span class="text-gray-700">+212 620022084</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-amber-600 text-xl mr-2"></i>
                        <span class="text-gray-700">support@mahsoul.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection