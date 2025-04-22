@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Modifier mon profil</h1>
                <p class="mt-2 text-lg text-gray-600">Mettez à jour vos informations personnelles</p>
            </div>
            
            <!-- Profile Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <!-- User Info -->
                        <div class="p-6 bg-primary-700 text-white">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-20 w-20 rounded-full object-cover border-4 border-white" src="/images/profile-avatar.jpg" alt="Photo de profil">
                                </div>
                                <div class="ml-4">
                                    <h2 class="text-xl font-bold">Mohammed Alami</h2>
                                    <p class="text-primary-200">Client (Agriculteur)</p>
                                    <p class="text-sm text-primary-100 mt-1">Membre depuis Mai 2023</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation -->
                        <nav class="p-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="/profile" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
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
                        
                        <!-- Logout -->
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
                
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Edit Profile Form -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800">Modifier mes informations</h3>
                        </div>
                        <div class="p-6">
                            <form action="/profile/update" method="POST">
                                <!-- Profile Picture -->
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Photo de profil</label>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="h-16 w-16 rounded-full object-cover" src="/images/profile-avatar.jpg" alt="Photo de profil actuelle">
                                        </div>
                                        <div class="ml-5">
                                            <div class="relative bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded-md font-medium cursor-pointer transition duration-150 ease-in-out inline-block">
                                                <span>Changer la photo</span>
                                                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                                            </div>
                                            <p class="mt-1 text-xs text-gray-500">JPG, PNG ou GIF. 2 MB maximum.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Nom et prénom -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                        <input type="text" id="first_name" name="first_name" value="Mohammed" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                        <input type="text" id="last_name" name="last_name" value="Alami" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email" value="mohammed.alami@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                
                                <!-- Téléphone -->
                                <div class="mb-6">
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                    <input type="tel" id="phone" name="phone" value="+212 6XX XX XX XX" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                
                                <!-- Adresse -->
                                <div class="mb-6">
                                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                    <textarea id="address" name="address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>123 Rue de l'Agriculture, Quartier des Oliviers, 10000 Ville, Maroc</textarea>
                                </div>
                                
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
                                <!-- Current Password -->
                                <div class="mb-6">
                                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                
                                <!-- New Password -->
                                <div class="mb-6">
                                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                                    <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères</p>
                                </div>
                                
                                <!-- Confirm New Password -->
                                <div class="mb-6">
                                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le nouveau mot de passe</label>
                                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
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
