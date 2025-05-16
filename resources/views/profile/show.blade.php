@extends('layouts.app')

@section('content')

<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Mon profil</h1>
            <p class="mt-2 text-lg text-gray-600">Gérez vos informations personnelles et vos préférences</p>
        </div>
        @if ($errors->any())
        <div class="lg:col-span-2 mb-6">
            <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Il y a {{ $errors->count() }} erreur(s) dans votre formulaire</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    @if(Auth::user()->type == 'agricole')
                    <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/agricole-banner.jpg') }}'); background-size: cover; background-position: center;">
                        @elseif(Auth::user()->type == 'veterinaire')
                        <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/veterinaire-banner.jpg') }}'); background-size: cover; background-position: center;">
                            @elseif(Auth::user()->type == 'client')
                            <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/client-banner.jpg') }}'); background-size: cover; background-position: center;">
                                @else
                                <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/paysage.jpg') }}'); background-size: cover; background-position: center;">
                                    @endif
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
                                                <span class="text-white font-medium">AGRICOLE</span>
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

                        <div class="lg:col-span-2">
                            <div class="flex flex-col items-end justify-center mb-6">
                                @if(Auth::user()->type == 'agricole')
                                <a href="{{route('agricole.dashboard')}}" class="inline-block px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                                    Go to dashboard
                                </a>
                                @elseif(Auth::user()->type == 'veterinaire')
                                <a href="{{route('veterinaire.dashboard')}}" class="inline-block px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                                    Go to dashboard
                                </a>
                                @elseif(Auth::user()->type == 'client')
                                <a href="{{route('client.dashboard')}}" class="inline-block px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                                    Go to dashboard
                                </a>
                                @elseif(Auth::user()->type == 'admin')
                                <a href="{{route('admin.dashboard')}}" class="inline-block px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                                    Go to dashboard
                                </a>
                                @endif
                            </div>
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

                    <!-- Farm Information Card -->
                    @if(Auth::user()->type == 'agricole')
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8 mt-5">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-xl font-bold text-gray-800">Informations sur l'exploitation</h3>
                            <a href="/profile/edit/information/agricole" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-edit mr-1"></i>
                                Modifier
                            </a>
                        </div>
                        <div class="p-6">
                            <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Nom de la Ferme</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->agricole->ferme ?? ''}}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Type des Produits</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->agricole->produit ?? ''}}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Superficie</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->agricole->superficie_terrain ?? ''}} ha</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Région</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->agricole->region ?? ''}}</dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                    @endif

                    <!-- Veterinaire Information card -->
                    @if(Auth::user()->type == 'veterinaire')
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8 mt-5">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-xl font-bold text-gray-800">Informations sur Vous</h3>
                            <a href="/profile/edit/information/veterinaire" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-edit mr-1"></i>
                                Modifier
                            </a>
                        </div>
                        <div class="p-6">
                            <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Specialite</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->veterinaire->specialite ?? '' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Diplome</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->veterinaire->diplome ?? '' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Année D'experience</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->veterinaire->annee_experience ?? '' }} ans</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Prix de déplacement</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->veterinaire->prix_deplacement ?? '' }}</dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                    @endif



                    <!-- Admin Information card -->
                    @if(Auth::user()->type == 'admin')
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8 mt-5">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-xl font-bold text-gray-800">Informations sur l'admin</h3>
                            <a href="/profile/edit/information/admin" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-edit mr-1"></i>
                                Modifier
                            </a>
                        </div>
                        <div class="p-6">
                            <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">About</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->admin->about ?? '' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Domaine D'experience</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->admin->domaines_expertise ?? '' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Contact Urgence</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->admin->contact_urgence ?? '' }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    @endif

                     <!-- Client Information card -->
                     @if(Auth::user()->type == 'client')
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8 mt-5">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-xl font-bold text-gray-800">Informations sur Vous</h3>
                            <a href="/profile/edit/information/client" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-edit mr-1"></i>
                                Modifier
                            </a>
                        </div>
                        <div class="p-6">
                            <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Type D'exploitation</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->client->type_exploitation ?? ''}}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Nombre D'animaux</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->client->nombre_animaux ?? ''}}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Superficie De terre (ha)</dt>
                                    <dd class="mt-1 text-lg text-gray-900">{{ Auth::user()->client->superficie_terres ?? ''}} (ha)</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
        @endsection