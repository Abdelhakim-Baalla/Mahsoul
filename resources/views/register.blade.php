@extends('layouts.app')

@section('content')
    <!-- Register Section -->
    <section class="py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <!-- Left Column - Image and Text -->
                <div class="w-full md:w-1/2 md:pr-12 mb-10 md:mb-0">
                    <div class="relative">
                        <div class="blob-shape bg-primary-100 absolute top-0 right-0 w-64 h-64 -mt-10 -mr-10 z-0"></div>
                        <div class="relative z-10 overflow-hidden rounded-2xl shadow-soft">
                            <img class="w-full h-auto" src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Agriculture landscape">
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-soft z-20">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Inscription sécurisée</h3>
                                    <p class="text-sm text-gray-600">Vos données sont protégées</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-16 space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Accès à tous nos services</h3>
                                <p class="text-gray-600">Consultations, marketplace, formations et communauté en un seul compte.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Offres exclusives</h3>
                                <p class="text-gray-600">Bénéficiez de promotions et d'offres spéciales réservées aux membres.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Suivi personnalisé</h3>
                                <p class="text-gray-600">Recevez des recommandations adaptées à votre profil et à vos besoins.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full md:w-1/2 md:pl-12">
                    <div class="bg-white rounded-2xl shadow-soft p-8 md:p-10">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-2">Créer un compte</h2>
                            <p class="text-gray-600">Rejoignez la communauté Mahsoul</p>
                        </div>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre prénom">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre nom">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre adresse email">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre numéro de téléphone">
                            </div>
                            
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Créez un mot de passe">
                                <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.</p>
                            </div>
                            
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Confirmez votre mot de passe">
                            </div>
                            
                            <div>
                                <label for="user_type" class="block text-sm font-medium text-gray-700 mb-2">Type d'utilisateur</label>
                                <select id="user_type" name="user_type" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                    <option value="" selected disabled>Sélectionnez votre profil</option>
                                    <option value="farmer">Agriculteur</option>
                                    <option value="breeder">Éleveur</option>
                                    <option value="supplier">Fournisseur</option>
                                    <option value="expert">Expert/Consultant</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="text-gray-600">J'accepte les <a href="#" class="text-primary-600 hover:text-primary-700">conditions d'utilisation</a> et la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a></label>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="newsletter" name="newsletter" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="newsletter" class="text-gray-600">Je souhaite recevoir la newsletter et les offres promotionnelles</label>
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-primary-500 to-primary-700 text-white font-medium rounded-lg hover:shadow-lg transition duration-300">
                                Créer mon compte
                            </button>
                        </form>

                        
                        <div class="mt-8 text-center">
                            <p class="text-gray-600">
                                Vous avez déjà un compte ? 
                                <a href="/login" class="font-medium text-primary-600 hover:text-primary-700">
                                    Se connecter
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection
</body>
</html>
