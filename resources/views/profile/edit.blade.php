    @extends('layouts.app')

    @section('content')
    <div class="bg-primary-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Modifier mon profil</h1>
                <p class="mt-2 text-lg text-gray-600">Mettez à jour vos informations personnelles</p>
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
                <!-- Sidebar -->
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
                                                <h2 class="text-xl font-bold">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
                                                <p class="text-primary-200">{{ Auth::user()->type }}</p>
                                                <p class="text-sm text-primary-100 mt-1">Membre depuis {{ Auth::user()->created_at->format('d-m-Y') }}</p>
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
                           
                                <!-- Edit Profile Form -->
                                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                                    <div class="p-6 border-b border-gray-200">
                                        <h3 class="text-xl font-bold text-gray-800">Modifier mes informations</h3>
                                    </div>
                                    <div class="p-6">
                                        <form action="/profile/update" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <!-- Profile Picture -->
                                            <div class="mb-6">
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Photo de profil</label>
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-16 w-16 rounded-full object-cover" src="{{ Auth::user()->photo ?? asset('images/default-avatar.jpg') }}" alt="Photo de profil actuelle">
                                                    </div>
                                                    <div class="ml-5">
                                                        <div class="relative">
                                                            <label for="photo" class="block text-sm font-medium text-gray-700 mb-1">Changer la photo</label>
                                                            <input type="text" id="photo" name="photo" value="{{ Auth::user()->photo }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Nom et prénom -->
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                                                <div>
                                                    <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                                    <input type="text" id="prenom" name="prenom" value="{{ Auth::user()->prenom }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                                </div>
                                                <div>
                                                    <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                                    <input type="text" id="nom" name="nom" value="{{ Auth::user()->nom }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="mb-6">
                                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                            </div>

                                            <!-- Téléphone -->
                                            <div class="mb-6">
                                                <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                                <input type="tel" id="telephone" name="telephone" value="{{ Auth::user()->telephone }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                            </div>



                                            <!-- Adresse -->
                                            <div class="mb-6">
                                                <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                                <textarea id="adresse" name="adresse" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">{{ Auth::user()->adresse }}</textarea>
                                            </div>
                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                            <!-- Buttons -->
                                            <div class="flex justify-end space-x-4">
                                                <a href="/profile" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 font-medium">
                                                    Annuler
                                                </a>
                                                <button type="submit" class="px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white rounded-md font-medium">
                                                    Enregistrer les modifications
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Change Password Form -->
                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                               
                                    <div class="p-6 border-b border-gray-200">
                                        <h3 class="text-xl font-bold text-gray-800">Changer le mot de passe</h3>
                                    </div>
                                    <div class="p-6">
                                        <form action="/profile/password/update" method="POST">
                                            @csrf
                                            <!-- Current Password -->
                                            <div class="mb-6">
                                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                                                <input type="password" id="current_password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                            </div>

                                            <!-- New Password -->
                                            <div class="mb-6">
                                                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                                                <input type="password" id="new_password" name="new_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" minlength="8">
                                                <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères</p>
                                            </div>

                                            <!-- Confirm New Password -->
                                            <div class="mb-6">
                                                <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le nouveau mot de passe</label>
                                                <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" minlength="8">
                                            </div>

                                            <!-- Buttons -->
                                            <div class="flex justify-end">
                                                <button type="submit" class="px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white rounded-md font-medium">
                                                    Mettre à jour le mot de passe
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection