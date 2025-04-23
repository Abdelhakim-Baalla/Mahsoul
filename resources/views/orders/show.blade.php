@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                            <a href="/orders" class="text-gray-700 hover:text-primary-600">
                                Mes commandes
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-primary-600 font-medium">Commande #MAH-12345</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-primary-800">Détails de la commande</h1>
                    <p class="mt-2 text-lg text-gray-600">Commande #MAH-12345 - Passée le 22 Avril 2023</p>
                </div>
                <div class="mt-4 md:mt-0 flex space-x-3">
                    <a href="/orders/12345/invoice" class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-md font-medium flex items-center">
                        <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                        Télécharger la facture
                    </a>
                    <a href="/contact?order=12345" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md font-medium flex items-center">
                        <i class="fas fa-question-circle mr-2"></i>
                        Besoin d'aide ?
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-bold text-gray-800">Statut de la commande</h2>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Livrée
                            </span>
                            <span class="ml-3 text-gray-600">Votre commande a été livrée le 25 Avril 2023</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Numéro de suivi: <span class="font-medium">TRK-987654321</span></span>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="absolute left-5 top-0 h-full w-0.5 bg-gray-200"></div>
                        
                        <div class="relative mb-8">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-10 h-10 bg-primary-600 rounded-full">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Commande passée</h3>
                                    <p class="text-sm text-gray-600">22 Avril 2023 à 14:30</p>
                                </div>
                            </div>
                            <div class="ml-14 mt-2">
                                <p class="text-gray-700">Votre commande a été reçue et confirmée.</p>
                            </div>
                        </div>


@endsection