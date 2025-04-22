@extends('layouts.admin')

@section('title', 'Détail utilisateur - Mahsoul')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('admin.users.index') }}" class="text-green-600 hover:text-green-900 mr-2">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <h1 class="text-2xl font-semibold text-gray-900">Détail de l'utilisateur</h1>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.users.edit', 1) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Modifier
                </a>
                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Supprimer
                </button>
            </div>
        </div>

        <div class="mt-6 bg-white shadow overflow-hidden rounded-lg">
            <div class="px-4 py-5 sm:px-6 bg-gray-50">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-16 w-16">
                        <img class="h-16 w-16 rounded-full" src="/placeholder.svg?height=64&width=64" alt="Avatar">
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Ahmed Benali
                        </h3>
                        <p class="text-sm text-gray-500">
                            ID: #12345 | Agriculteur | <span class="text-green-600">Actif</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 md:grid-cols-3">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Nom complet
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Ahmed Benali
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Email
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            ahmed.benali@example.com
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Téléphone
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            +212 6 12 34 56 78
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Date d'inscription
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            12/04/2023
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Dernière connexion
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Aujourd'hui à 10:45
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Rôle
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Agriculteur
                        </dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Adresse
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            123 Rue des Oliviers, Quartier El Fida, Casablanca, Maroc
                        </dd>
                    </div>
                    <div class="sm:col-span-3">
                        <dt class="text-sm font-medium text-gray-500">
                            Bio
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Agriculteur spécialisé dans la culture d'agrumes et d'olives dans la région de Souss. Pratique l'agriculture biologique depuis plus de 10 ans.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Produits publiés
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        12
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">
                            Voir tous les produits
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Commandes reçues
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        28
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">
                            Voir toutes les commandes
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Chiffre d'affaires
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        15,240 DH
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-green-600 hover:text-green-500">
                            Voir les détails financiers
                        </a>
                    </div>
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
                    Les dernières actions effectuées par cet utilisateur.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-900">
                                A ajouté un nouveau produit: <span class="font-medium">Oranges fraîches</span>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 2 jours
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-900">
                                A mis à jour son profil
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 5 jours
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-900">
                                A répondu à un commentaire sur son produit: <span class="font-medium">Huile d'olive</span>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 1 semaine
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-900">
                                A expédié une commande à <span class="font-medium">Karim Alaoui</span>
                            </div>
                            <div class="text-sm text-gray-500">
                                Il y a 2 semaines
                            </div>
                        </div>
                    </li>
                    <li class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-900">
                                S'est inscrit à la plateforme
                            </div>
                            <div class="text-sm text-gray-500">
                                12/04/2023
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
