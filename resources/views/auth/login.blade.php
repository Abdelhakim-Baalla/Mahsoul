@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-primary-50 py-12">
        <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Connexion</h1>
                <p class="mt-2 text-lg text-gray-600">Accédez à votre compte Mahsoul</p>
            </div>
            
            <!-- Login Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <!-- Logo -->
                    <div class="flex justify-center mb-8">
                        <img class="h-16 w-auto" src="/images/logo.png" alt="Mahsoul Logo">
                    </div>
                    
                    <!-- Login Form -->
                    <form action="/login" method="POST">
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
                        
                        <!-- Password -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <a href="/forgot-password" class="text-sm text-primary-600 hover:text-primary-700">Mot de passe oublié ?</a>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password" class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                            </div>
                        </div>
                        
                        <!-- Remember Me -->
                        <div class="mb-6">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                                    Se souvenir de moi
                                </label>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Se connecter
                        </button>
                    </form>
                    
                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Ou connectez-vous avec</span>
                        </div>
                    </div>
                    
                    <!-- Social Login -->
                    <div class="grid grid-cols-2 gap-4">
                        <a href="/auth/google" class="flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i class="fab fa-google text-red-500 mr-2"></i>
                            Google
                        </a>
                        <a href="/auth/facebook" class="flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i class="fab fa-facebook-f text-blue-600 mr-2"></i>
                            Facebook
                        </a>
                    </div>
                    
                    <!-- Register Link -->
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Vous n'avez pas de compte ? <a href="/register" class="text-primary-600 hover:text-primary-700 font-medium">Inscrivez-vous</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
