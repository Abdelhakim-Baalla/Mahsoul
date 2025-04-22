<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo and primary navigation -->
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center">
                        <span class="ml-3 text-2xl font-bold text-primary-700">Mahsoul</span>
                    </a>
                </div>
                
                <!-- Desktop Navigation Links -->
                <div class="hidden md:ml-10 md:flex md:items-center md:space-x-6">
                    <a href="/" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Accueil</a>
                    <div class="relative group">
                        <button class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium flex items-center">
                            Marketplace
                            <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="absolute z-10 left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block">
                            <div class="py-1">
                                <a href="/marketplace/medicaments" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Médicaments</a>
                                <a href="/marketplace/aliments" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Aliments pour animaux</a>
                                <a href="/marketplace/equipements" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Équipements</a>
                                <a href="/marketplace/produits" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Tous les produits</a>
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
                        <div class="absolute z-10 left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block">
                            <div class="py-1">
                                <a href="/consultations/veterinaires" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Vétérinaires</a>
                                <a href="/consultations/experts-agricoles" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Experts agricoles</a>
                                <a href="/consultations/prendre-rendez-vous" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Prendre rendez-vous</a>
                            </div>
                        </div>
                    </div>
                    <a href="/formation" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Formation</a>
                    <a href="/about" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">À propos</a>
                    <a href="/contact" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Contact</a>
                </div>
            </div>
            
            <!-- User actions -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="/panier" class="text-primary-700 hover:text-primary-500 relative">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-secondary-500 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs">0</span>
                </a>
                <a href="/login" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Connexion</a>
                <a href="/register" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md font-medium">Inscription</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <a href="/panier" class="text-primary-700 hover:text-primary-500 mr-4 relative">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-secondary-500 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs">0</span>
                </a>
                <button onclick="toggleMobileMenu()" class="text-primary-700 hover:text-primary-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="block px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">Accueil</a>
            
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">
                    <span>Marketplace</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="pl-4 space-y-1" x-show="open">
                    <a href="/marketplace/medicaments" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Médicaments</a>
                    <a href="/marketplace/aliments" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Aliments pour animaux</a>
                    <a href="/marketplace/equipements" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Équipements</a>
                    <a href="/marketplace/produits" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Tous les produits</a>
                </div>
            </div>
            
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">
                    <span>Consultations</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="pl-4 space-y-1" x-show="open">
                    <a href="/consultations/veterinaires" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Vétérinaires</a>
                    <a href="/consultations/experts-agricoles" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Experts agricoles</a>
                    <a href="/consultations/prendre-rendez-vous" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-primary-50 rounded-md">Prendre rendez-vous</a>
                </div>
            </div>
            
            <a href="/formation" class="block px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">Formation</a>
            <a href="/about" class="block px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">À propos</a>
            <a href="/contact" class="block px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">Contact</a>
            
            <div class="pt-4 pb-3 border-t border-gray-200">
                <a href="/login" class="block px-3 py-2 text-base font-medium text-primary-700 hover:bg-primary-50 rounded-md">Connexion</a>
                <a href="/register" class="block px-3 py-2 text-base font-medium bg-primary-600 text-white hover:bg-primary-700 rounded-md mt-2">Inscription</a>
            </div>
        </div>
    </div>
</nav>
