@extends('layouts.admin')

@section('title', 'Tableau de bord administrateur - Mahsoul')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Tableau de bord administrateur</h1>
        
        <!-- Cartes de statistiques -->
        <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Utilisateurs -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Total Utilisateurs
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        1,482
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="{{ route('admin.users.index') }}" class="font-medium text-green-600 hover:text-green-500">
                            Voir tous les utilisateurs
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produits -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Total Produits
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        356
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="{{ route('admin.products.index') }}" class="font-medium text-green-600 hover:text-green-500">
                            Voir tous les produits
                        </a>
                    </div>
                </div>
            </div>

            <!-- Commandes -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Commandes
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        243
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">
                            Voir toutes les commandes
                        </a>
                    </div>
                </div>
            </div>

            <!-- Consultations -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Consultations
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        98
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">
                            Voir toutes les consultations
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques et statistiques -->
        <div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Graphique des ventes -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Ventes mensuelles</h3>
                <div class="mt-4 h-64 bg-gray-50 rounded-md flex items-center justify-center">
                    <!-- Placeholder pour le graphique -->
                    <p class="text-gray-500">Graphique des ventes mensuelles</p>
                </div>
            </div>

            <!-- Graphique des utilisateurs -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Nouveaux utilisateurs</h3>
                <div class="mt-4 h-64 bg-gray-50 rounded-md flex items-center justify-center">
                    <!-- Placeholder pour le graphique -->
                    <p class="text-gray-500">Graphique des nouveaux utilisateurs</p>
                </div>
            </div>
        </div>

        <!-- Activités récentes -->
        <div class="mt-8 bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Activités récentes
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Les dernières activités sur la plateforme.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        Ahmed Benali
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        a créé un nouveau compte
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 2 heures
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        Fatima Zahra
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        a ajouté un nouveau produit
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 3 heures
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        Karim Alaoui
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        a passé une commande
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 5 heures
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        Samira Tazi
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        a demandé une consultation
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 8 heures
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200"></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        Youssef Mansouri
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        a publié un nouvel article
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 12 heures
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="#" class="font-medium text-green-600 hover:text-green-500">
                        Voir toutes les activités
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
