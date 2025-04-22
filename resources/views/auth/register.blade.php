@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-primary-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Créer un compte</h1>
                <p class="mt-2 text-lg text-gray-600">Rejoignez la communauté Mahsoul et accédez à tous nos services</p>
            </div>
            
            <!-- Registration Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <!-- Left Side - Image and Benefits -->
                    <div class="hidden md:block md:w-1/2 bg-primary-700 text-white p-8 relative">
                        <div class="absolute inset-0 overflow-hidden opacity-10">
                            <img src="/images/pattern-leaves.png" alt="" class="absolute w-full h-full object-cover">
                        </div>
                        <div class="relative z-10">
                            <h2 class="text-2xl font-bold mb-6">Les avantages de Mahsoul</h2>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-secondary-400 mt-1 mr-3"></i>
                                    <span>Consultations avec des experts agricoles et vétérinaires</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-secondary-400 mt-1 mr-3"></i>
                                    <span>Accès à notre marketplace de produits agricoles de qualité</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-secondary-400 mt-1 mr-3"></i>
                                    <span>Articles et ressources de formation spécialisés</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-secondary-400 mt-1 mr-3"></i>
                                    <span>Suivi personnalisé de votre exploitation agricole</span>
                                </li>
                            </ul>
                            
                            <div class="mt-8">
                                <img src="/images/farmer-illustration.png" alt="Agriculteur" class="w-full max-w-xs mx-auto">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Side - Registration Form -->
                    <div class="md:w-1/2 p-8">
                        <form action="/register" method="POST">
                            <!-- Type d'utilisateur -->
                            <div class="mb-6">
                                <label for="user_type" class="block text-sm font-medium text-gray-700 mb-1">Type de compte</label>
                                <select id="user_type" name="user_type" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    <option value="">Sélectionnez votre type de compte</option>
                                    <option value="client">Client (Agriculteur)</option>
                                    <option value="veterinaire">Vétérinaire</option>
                                    <option value="agricole">Expert agricole</option>
                                </select>
                            </div>
                            
                            <!-- Nom et prénom -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="mb-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                            </div>
                            
                            <!-- Téléphone -->
                            <div class="mb-6">
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                            </div>
                            
                            <!-- Adresse -->
                            <div class="mb-6">
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                <textarea id="address" name="address" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required></textarea>
                            </div>
                            
                            <!-- Mot de passe -->
                            <div class="mb-6">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                                <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères</p>
                            </div>
                            
                            <!-- Confirmation du mot de passe -->
                            <div class="mb-6">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                            </div>
                            
                            <!-- Terms and Conditions -->
                            <div class="mb-6">
                                <div class="flex items-start">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded" required>
                                    <label for="terms" class="ml-2 block text-sm text-gray-600">
                                        J'accepte les <a href="/terms" class="text-primary-600 hover:text-primary-700">conditions d'utilisation</a> et la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                                Créer mon compte
                            </button>
                            
                            <!-- Login Link -->
                            <div class="mt-6 text-center">
                                <p class="text-sm text-gray-600">
                                    Vous avez déjà un compte ? <a href="/login" class="text-primary-600 hover:text-primary-700 font-medium">Connectez-vous</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Additional Information -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    Pour les vétérinaires et experts agricoles, une vérification supplémentaire de vos qualifications sera nécessaire après l'inscription.
                </p>
            </div>
        </div>
    </div>
@endsection
