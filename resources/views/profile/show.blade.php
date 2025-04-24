@extends('layouts.app')

@section('content')

<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Mon profil</h1>
            <p class="mt-2 text-lg text-gray-600">Gérez vos informations personnelles et vos préférences</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/paysage.jpg') }}'); background-size: cover; background-position: center;">

                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="relative z-10 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-20 w-20 rounded-full object-cover border-4 border-white" src="{{ Auth::user()->photo ?? asset('images/default-avatar.jpg') }}" alt="Photo de profil">
                            </div>
                            <div class="ml-4">
    <h2 class="text-xl font-bold text-white">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
    <div class="mt-1 flex items-center space-x-2">
        @switch(Auth::user()->type)
            @case('admin')
                <i class="fas fa-crown text-yellow-400"></i>
                <span class="text-white font-medium">ADMINISTRATEUR</span>
                @break
            @case('veterinaire')
                <i class="fas fa-stethoscope text-blue-300"></i>
                <span class="text-white font-medium">VÉTÉRINAIRE</span>
                @break
            @case('agricole')
                <i class="fas fa-tractor text-green-300"></i>
                <span class="text-white font-medium">AGRICULTEUR</span>
                @break
            @case('client')
                <i class="fas fa-user-circle text-purple-300"></i>
                <span class="text-white font-medium">CLIENT</span>
                @break
            @default
                <i class="fas fa-user text-gray-300"></i>
                <span class="text-white font-medium">UTILISATEUR</span>
        @endswitch
    </div>
</div>
                        </div>
                    </div>

                    <nav class="p-4">
                        <ul class="space-y-2">
                            <li>
                                <a href="/profile" class="flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-md font-medium">
                                    <i class="fas fa-user mr-3"></i>
                                    Informations personnelles
                                </a>
                            </li>
                            <li>
                                <a href="/profile/orders" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
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

                    <div class="p-4 border-t border-gray-200">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-red-50 rounded-md">
                                <i class="fas fa-sign-out-alt mr-3"></i>
                                Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="text-xl font-bold text-gray-800">Informations personnelles</h3>
                        <a href="/profile/edit" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                            <i class="fas fa-edit mr-1"></i>
                            Modifier
                        </a>
                    </div>
                    <div class="p-6">
                        <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Prénom</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->prenom }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Nom</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->nom }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->email }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Téléphone</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->telephone }}</dd>
                            </div>
                            <div class="md:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">Adresse</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->adresse }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Type de compte</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->type }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Date d'inscription</dt>
                                <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->created_at }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
@endsection