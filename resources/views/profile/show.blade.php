@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Mon profil</h1>
                <p class="mt-2 text-lg text-gray-600">Gérez vos informations personnelles et vos préférences</p>
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
                    <!-- Personal Information Card -->
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
                                    <dd class="mt-1 text-lg text-gray-900">Mohammed</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Nom</dt>
                                    <dd class="mt-1 text-lg text-gray-900">Alami</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                                    <dd class="mt-1 text-lg text-gray-900">mohammed.alami@example.com</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Téléphone</dt>
                                    <dd class="mt-1 text-lg text-gray-900">+212 6XX XX XX XX</dd>
                                </div>
                                <div class="md:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">Adresse</dt>
                                    <dd class="mt-1 text-lg text-gray-900">123 Rue de l'Agriculture, Quartier des Oliviers, 10000 Ville, Maroc</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Type de compte</dt>
                                    <dd class="mt-1 text-lg text-gray-900">Client (Agriculteur)</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Date d'inscription</dt>
                                    <dd class="mt-1 text-lg text-gray-900">15 Mai 2023</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    
                    <!-- Farm Information Card -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                            <h3 class="text-xl font-bold text-gray-800">Informations sur l'exploitation</h3>
                            <a href="/profile/farm/edit" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-edit mr-1"></i>
                                Modifier
                            </a>
                        </div>
                        <div class="p-6">
                            <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Nom de l'exploitation</dt>
                                    <dd class="mt-1 text-lg text-gray-900">Ferme des Oliviers</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Type d'exploitation</dt>
                                    <dd class="mt-1 text-lg text-gray-900">Arboriculture</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Superficie</dt>
                                    <dd class="mt-1 text-lg text-gray-900">15 hectares</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Région</dt>
                                    <dd class="mt-1 text-lg text-gray-900">Marrakech-Safi</dd>
                                </div>
                                <div class="md:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">Cultures principales</dt>
                                    <dd class="mt-1 flex flex-wrap gap-2">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                                            Oliviers
                                        </span>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                                            Amandiers
                                        </span>
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                                            Figuiers
                                        </span>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    
                    <!-- Recent Activity Card -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-xl font-bold text-gray-800">Activité récente</h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-shopping-cart text-primary-600"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-gray-900">Commande #12345 passée</p>
                                        <p class="text-sm text-gray-500">Il y a 2 jours</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-calendar-check text-primary-600"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-gray-900">Consultation avec Dr. Karim Tazi</p>
                                        <p class="text-sm text-gray-500">Il y a 1 semaine</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                            <i class="fas fa-comment text-primary-600"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-gray-900">Commentaire sur l'article "Techniques d'irrigation modernes"</p>
                                        <p class="text-sm text-gray-500">Il y a 2 semaines</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <div class="mt-6 text-center">
                                <a href="/profile/activity" class="text-primary-600 hover:text-primary-700 font-medium">
                                    Voir toute l'activité
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
