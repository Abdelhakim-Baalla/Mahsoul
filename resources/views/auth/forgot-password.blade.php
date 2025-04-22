@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-primary-50 py-12">
        <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Mot de passe oublié</h1>
                <p class="mt-2 text-lg text-gray-600">Réinitialisez votre mot de passe</p>
            </div>
            
            <!-- Forgot Password Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <!-- Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-key text-primary-600 text-2xl"></i>
                        </div>
                    </div>
                    
                    <!-- Instructions -->
                    <p class="text-gray-600 mb-6 text-center">
                        Entrez votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.
                    </p>
                    
                    <!-- Success Message (conditionally shown) -->
                    <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative hidden" id="success-message">
                        <span class="block sm:inline">Un lien de réinitialisation a été envoyé à votre adresse email.</span>
                    </div>
                    
                    <!-- Forgot Password Form -->
                    <form action="/forgot-password" method="POST">
                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Envoyer le lien de réinitialisation
                        </button>
                    </form>
                    
                    <!-- Back to Login -->
                    <div class="mt-6 text-center">
                        <a href="/login" class="text-primary-600 hover:text-primary-700 font-medium">
                            <i class="fas fa-arrow-left mr-1"></i> Retour à la page de connexion
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
