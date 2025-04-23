<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo and primary navigation -->
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                        <span class="ml-3 text-2xl font-bold text-primary-700">Mahsoul</span>
                    </a>
                </div>
                
                <!-- Desktop Navigation Links -->
                <div class="hidden md:ml-10 md:flex md:items-center md:space-x-6">
                    <a href="{{ route('welcome') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Accueil</a>
                    <div class="relative group">
                        <button class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium flex items-center">
                            Marketplace
                            <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="absolute z-10 left-0 pt-2 w-48 transition-all duration-200 ease-in-out origin-top">
                            <div class="rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block transform opacity-0 group-hover:opacity-100">
                                <div class="py-1">
                                    <a href="{{ route('products.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Tous les produits</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Médicaments</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Aliments pour animaux</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Équipements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium flex items-center">
                            Consultations
                            <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="absolute z-10 left-0 pt-2 w-48 transition-all duration-200 ease-in-out origin-top">
                            <div class="rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block transform opacity-0 group-hover:opacity-100">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Vétérinaires</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Experts agricoles</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Prendre rendez-vous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('articles.index') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Formation</a>
                    <a href="{{ route('about') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">À propos</a>
                    <a href="{{ route('contact') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Contact</a>
                </div>
            </div>
            
            <!-- User actions -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-primary-700 hover:text-primary-500 relative">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-secondary-500 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs">0</span>
                </a>
                <a href="{{ route('login') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Connexion</a>
                <a href="{{ route('register') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md font-medium">Inscription</a>
            </div>
        </div>
    </div>
</nav>