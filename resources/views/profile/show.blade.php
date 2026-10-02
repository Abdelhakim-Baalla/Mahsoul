@extends('layouts.app')

@section('content')

<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="font-display text-3xl font-extrabold text-forest">Mon profil</h1>
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
                @include('profile.partials.sidebar', ['active' => 'profile'])
                        </div>

                        <div class="lg:col-span-2">
                            <div class="flex flex-col items-end justify-center mb-6">
                                @if(Auth::user()->type == 'agricole')
                                <a href="{{route('agricole.dashboard')}}" class="inline-block px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                                    Go to dashboard
                                </a>
                                @elseif(Auth::user()->type == 'veterinaire')
                                <a href="{{route('vet.dashboard')}}" class="inline-block px-4 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
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