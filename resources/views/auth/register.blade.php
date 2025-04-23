@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-primary-50 py-12">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8"> <!-- Conteneur plus large -->
           
            <!-- Registration Card - Plus large avec image plus visible -->
            <div class="rounded-lg shadow-lg overflow-hidden bg-white">
            @if($errors->all())
                <ul class="errorban px-4 py-2 bg-red-100">
                                    @foreach($errors->all() as $error)
                                        <li class="error my-2 text-red-500">{{ $error }}</li>
                                    @endforeach
                                     </ul>
                                @endif
                           
                <div class="flex flex-col md:flex-row">

                    <div class="md:w-2/5 lg:w-1/2 relative h-64 md:h-auto"> 
                        <img src="{{ asset('images/register-pages-header.jpg') }}" 
                             alt="Docteur et femme agriculteur" 
                             class="absolute w-full h-full object-cover object-center"> 
                        <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                    </div>
                    <div class="md:w-3/5 lg:w-1/2 p-8 md:p-10"> 
                        <form action="/inscription" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type de compte</label>
                                <select id="type" name="type" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    <option value="">Sélectionnez votre type de compte</option>
                                    <option value="client">Client</option>
                                    <option value="veterinaire">Vétérinaire</option>
                                    <option value="agricole">Expert agricole</option>
                                </select>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                                <div>
                                    <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                    <input type="text" id="prenom" name="prenom" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                <div>
                                    <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                    <input type="text" id="nom" name="nom" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                            </div>
                            
                            <div class="mb-6">
                                <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                <input type="tel" id="telephone" name="telephone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                            </div>
                            
                            <div class="mb-6">
                                <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                <textarea id="adresse" name="adresse" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required></textarea>
                            </div>
                            
                            <div class="mb-6">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                                <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères</p>
                            </div>
                            
                            <div class="mb-6">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                            </div>

                            <div class="mb-6">
                                <label for="photo" class="block text-sm font-medium text-gray-700 mb-1">Lien de Photo Profile</label>
                                <input type="text" id="photo" name="photo" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            
                            <!-- Terms and Conditions -->
                            <div class="mb-6">
                                <div class="flex items-start">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                    <label for="terms" class="ml-2 block text-sm text-gray-600">
                                        J'accepte les <a href="/terms" class="text-primary-600 hover:text-primary-700">conditions d'utilisation</a> et la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a>
                                    </label>
                                </div>
                            </div>
                            
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
        </div>
    </div>
@endsection