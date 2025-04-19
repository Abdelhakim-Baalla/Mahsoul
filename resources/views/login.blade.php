@extends('layouts.app')

@section('content')
    <!-- Login Section -->
    <section class="py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <!-- Left Column - Image and Text -->
                <div class="w-full md:w-1/2 md:pr-12 mb-10 md:mb-0">
                    <div class="relative">
                        <div class="blob-shape bg-primary-100 absolute top-0 right-0 w-64 h-64 -mt-10 -mr-10 z-0"></div>
                        <div class="relative z-10 overflow-hidden rounded-2xl shadow-custom">
                            <img class="w-full h-auto" src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Agriculture landscape">
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-custom z-20">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Connexion sécurisée</h3>
                                    <p class="text-sm text-gray-600">Vos données sont protégées</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-16 space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Accès à votre compte personnel</h3>
                                <p class="text-gray-600">Gérez vos commandes, consultations et formations en un seul endroit.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Participez à la communauté</h3>
                                <p class="text-gray-600">Échangez avec d'autres agriculteurs et experts du secteur.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Accès aux offres exclusives</h3>
                                <p class="text-gray-600">Bénéficiez de promotions et d'offres spéciales réservées aux membres.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Login Form -->
                <div class="w-full md:w-1/2 md:pl-12">
                    <div class="bg-white rounded-2xl shadow-custom p-8 md:p-10">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-2">Connexion</h2>
                            <p class="text-gray-600">Accédez à votre compte Mahsoul</p>
                        </div>
                        
                        <form class="space-y-6">
                            <div class="form-transition">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" name="email" class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre adresse email">
                                </div>
                            </div>
                            
                            <div class="form-transition">
                                <div class="flex items-center justify-between mb-2">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                                    <a href="#" class="text-sm text-primary-600 hover:text-primary-700">Mot de passe oublié ?</a>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="password" name="password" class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre mot de passe">
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded transition-all duration-200">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-700">Se souvenir de moi</label>
                            </div>
                            
                            <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-medium rounded-lg hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Se connecter
                            </button>
                        </form>
                        
                        
                        
                        <div class="mt-8 text-center">
                            <p class="text-gray-600">
                                Vous n'avez pas de compte ? 
                                <a href="/register" class="font-medium text-primary-600 hover:text-primary-700">
                                    S'inscrire
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
