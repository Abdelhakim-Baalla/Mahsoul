<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Mahsoul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f3f9ee',
                            100: '#e5f2dc',
                            200: '#cce5bc',
                            300: '#aad394',
                            400: '#85bd6d',
                            500: '#5a9d45',
                            600: '#4a8339',
                            700: '#3d692f',
                            800: '#345429',
                            900: '#2c4624',
                        },
                        secondary: {
                            50: '#fdf8e9',
                            100: '#f9edc7',
                            200: '#f4dc91',
                            300: '#eec65a',
                            400: '#e9b033',
                            500: '#db9418',
                            600: '#c07513',
                            700: '#9c5815',
                            800: '#814518',
                            900: '#6c3a18',
                        },
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .category-card {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .category-card:hover {
            background-color: #f3f9ee;
            transform: translateX(5px);
        }
        .category-card.active {
            background-color: #4a8339;
            color: white;
        }
        .category-card.active:hover {
            background-color: #3d692f;
            color: white;
        }
        .add-to-cart {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .add-to-cart:hover {
            background-color: #3d692f;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-primary-600">Mahsoul</span>
                    </div>
                    <nav class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Accueil
                        </a>
                        <a href="/consultation" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Consultations
                        </a>
                        <a href="/formation" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Formation
                        </a>
                        <a href="/marketplace" class="border-primary-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold">
                            Marketplace
                        </a>
                        <a href="/community" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Communauté
                        </a>
                    </nav>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button id="cartBtn" class="p-2 text-gray-500 hover:text-gray-700 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span id="cartCount" class="absolute -top-1 -right-1 bg-primary-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                    </button>
                    <a href="login.html" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                        Connexion
                    </a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" id="menuBtn" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div id="mobileMenu" class="mobile-menu hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="/" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Accueil
                </a>
                <a href="/consultation" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Consultations
                </a>
                <a href="/formation" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Formation
                </a>
                <a href="/marketplace" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Marketplace
                </a>
                <a href="/community" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Communauté
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <button id="mobileCartBtn" class="p-2 text-gray-500 hover:text-gray-700 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-primary-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                    </button>
                    <a href="login.html" class="ml-3 block px-4 py-2 text-base font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-md">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Search & Filters -->
    <div class="bg-white shadow-sm py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <!-- Search Bar -->
                <div class="w-full md:w-1/3">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher un produit..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Filters -->
                <div class="flex flex-wrap gap-3 w-full md:w-auto">
                    <select class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 bg-white">
                        <option value="">Trier par</option>
                        <option value="price-asc">Prix: croissant</option>
                        <option value="price-desc">Prix: décroissant</option>
                        <option value="newest">Plus récents</option>
                        <option value="popular">Popularité</option>
                    </select>
                    
                    <select class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 bg-white">
                        <option value="">Prix</option>
                        <option value="0-50">0 - 50 DT</option>
                        <option value="50-100">50 - 100 DT</option>
                        <option value="100-200">100 - 200 DT</option>
                        <option value="200+">200+ DT</option>
                    </select>
                    
                    <select class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 bg-white">
                        <option value="">Disponibilité</option>
                        <option value="in-stock">En stock</option>
                        <option value="out-of-stock">Rupture de stock</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Categories -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-sm p-6 sticky top-28">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Catégories</h2>
                        
                        <div class="space-y-2">
                            <div class="category-card active cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Tous les produits</span>
                                <span class="bg-white text-primary-600 text-sm px-2 py-1 rounded-full">145</span>
                            </div>
                            
                            <div class="category-card cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Médicaments</span>
                                <span class="bg-gray-100 text-gray-700 text-sm px-2 py-1 rounded-full">38</span>
                            </div>
                            
                            <div class="category-card cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Aliments</span>
                                <span class="bg-gray-100 text-gray-700 text-sm px-2 py-1 rounded-full">42</span>
                            </div>
                            
                            <div class="category-card cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Équipements</span>
                                <span class="bg-gray-100 text-gray-700 text-sm px-2 py-1 rounded-full">25</span>
                            </div>
                            
                            <div class="category-card cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Semences</span>
                                <span class="bg-gray-100 text-gray-700 text-sm px-2 py-1 rounded-full">18</span>
                            </div>
                            
                            <div class="category-card cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Pesticides</span>
                                <span class="bg-gray-100 text-gray-700 text-sm px-2 py-1 rounded-full">12</span>
                            </div>
                            
                            <div class="category-card cursor-pointer p-3 rounded-md transition duration-200 flex justify-between items-center">
                                <span>Engrais</span>
                                <span class="bg-gray-100 text-gray-700 text-sm px-2 py-1 rounded-full">10</span>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6 mt-6">
                            <h3 class="font-semibold text-gray-700 mb-4">Filtrer par marque</h3>
                            
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-2" checked>
                                    <span class="text-gray-700">AgroPlus</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-2" checked>
                                    <span class="text-gray-700">FarmStar</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-2" checked>
                                    <span class="text-gray-700">VetOne</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-2" checked>
                                    <span class="text-gray-700">GreenTech</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-2" checked>
                                    <span class="text-gray-700">EcoFarm</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product Grid -->
                <div class="lg:col-span-3">
                    <!-- Featured Products -->
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Produits en vedette</h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Product 1 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Antibiotique pour volailles" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Antibiotique pour volailles</h3>
                                        <span class="text-primary-600 font-bold">75 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">VetOne</p>
                                    <p class="text-gray-600 text-sm mb-4">Traitement antibiotique à large spectre pour volailles, 500ml.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="text-gray-600 ml-1">(4.5)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="1" data-name="Antibiotique pour volailles" data-price="75" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 2 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Aliment pour bovins" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Aliment pour bovins</h3>
                                        <span class="text-primary-600 font-bold">120 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">FarmStar</p>
                                    <p class="text-gray-600 text-sm mb-4">Aliment complet pour bovins, riche en nutriments, sac de 25kg.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="text-gray-600 ml-1">(5.0)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="2" data-name="Aliment pour bovins" data-price="120" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 3 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Système d'irrigation goutte-à-goutte" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-15%</div>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Système d'irrigation</h3>
                                        <div>
                                            <span class="text-primary-600 font-bold">170 DT</span>
                                            <span class="text-gray-400 text-sm line-through ml-1">200 DT</span>
                                        </div>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">GreenTech</p>
                                    <p class="text-gray-600 text-sm mb-4">Système d'irrigation goutte-à-goutte, économie d'eau, kit complet.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span class="text-gray-600 ml-1">(4.0)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="3" data-name="Système d'irrigation" data-price="170" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- All Products -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Tous les produits</h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Product 4 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Semences de tomates" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Semences de tomates</h3>
                                        <span class="text-primary-600 font-bold">45 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">AgroPlus</p>
                                    <p class="text-gray-600 text-sm mb-4">Semences de tomates résistantes aux maladies, variété locale.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="text-gray-600 ml-1">(4.7)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="4" data-name="Semences de tomates" data-price="45" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 5 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Engrais biologique" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Engrais biologique</h3>
                                        <span class="text-primary-600 font-bold">55 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">EcoFarm</p>
                                    <p class="text-gray-600 text-sm mb-4">Engrais biologique à base de compost pour tous types de cultures.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="text-gray-600 ml-1">(4.9)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="5" data-name="Engrais biologique" data-price="55" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 6 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Pesticide naturel" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Pesticide naturel</h3>
                                        <span class="text-primary-600 font-bold">65 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">EcoFarm</p>
                                    <p class="text-gray-600 text-sm mb-4">Pesticide biologique à base d'huiles essentielles, sans résidus.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span class="text-gray-600 ml-1">(4.1)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="6" data-name="Pesticide naturel" data-price="65" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 7 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Vaccin pour ovins" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Vaccin pour ovins</h3>
                                        <span class="text-primary-600 font-bold">90 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">VetOne</p>
                                    <p class="text-gray-600 text-sm mb-4">Vaccin polyvalent pour la prévention des maladies courantes chez les ovins.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="text-gray-600 ml-1">(4.6)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="7" data-name="Vaccin pour ovins" data-price="90" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 8 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Tracteur miniature" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-yellow-500 text-white text-xs px-2 py-1 rounded">Dernières unités</div>
                                    <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-20%</div>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Tracteur miniature</h3>
                                        <div>
                                            <span class="text-primary-600 font-bold">1600 DT</span>
                                            <span class="text-gray-400 text-sm line-through ml-1">2000 DT</span>
                                        </div>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">FarmStar</p>
                                    <p class="text-gray-600 text-sm mb-4">Tracteur miniature pour petites exploitations, moteur économique.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="text-gray-600 ml-1">(4.9)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="8" data-name="Tracteur miniature" data-price="1600" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 9 -->
                            <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden transition duration-300">
                                <div class="relative">
                                    <img src="/api/placeholder/400/240" alt="Station météo agricole" class="w-full h-48 object-cover">
                                    <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">En stock</div>
                                    <button class="absolute top-2 right-2 bg-white rounded-full p-2 text-gray-600 hover:text-primary-600 transition">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                
                                <div class="p-4">
                                    <div class="flex justify-between items-start mb-1">
                                        <h3 class="font-semibold text-gray-900">Station météo agricole</h3>
                                        <span class="text-primary-600 font-bold">350 DT</span>
                                    </div>
                                    <p class="text-gray-500 text-sm mb-2">GreenTech</p>
                                    <p class="text-gray-600 text-sm mb-4">Station météo connectée pour suivre les conditions climatiques de votre exploitation.</p>
                                    
                                    <div class="flex justify-between items-center">
                                        <div class="flex text-yellow-400 text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="text-gray-600 ml-1">(4.3)</span>
                                        </div>
                                        <button class="add-to-cart bg-primary-600 hover:bg-primary-700 text-white text-sm px-3 py-1 rounded-md transition" data-id="9" data-name="Station météo agricole" data-price="350" data-image="/api/placeholder/400/240">
                                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="mt-10 flex justify-center">
                            <nav class="flex items-center space-x-2">
                                <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-500 hover:bg-primary-600 hover:text-white transition">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" class="px-3 py-1 rounded-md bg-primary-600 text-white">1</a>
                                <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white transition">2</a>
                                <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white transition">3</a>
                                <span class="px-3 py-1 text-gray-500">...</span>
                                <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white transition">8</a>
                                <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-500 hover:bg-primary-600 hover:text-white transition">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Shopping Cart Offcanvas -->
    <div id="cartOffcanvas" class="fixed top-0 right-0 h-full w-0 bg-white shadow-xl z-50 transition-all duration-300 overflow-hidden">
        <div class="p-6 h-full flex flex-col">
            <div class="flex justify-between items-center mb-6 border-b border-gray-200 pb-4">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                    <i class="fas fa-shopping-cart mr-3 text-primary-600"></i> Votre panier
                </h2>
                <button id="closeCart" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div id="cartItems" class="flex-grow overflow-y-auto">
                <!-- Empty cart message -->
                <div id="emptyCart" class="text-center py-8">
                    <i class="fas fa-shopping-cart text-gray-300 text-5xl mb-4"></i>
                    <p class="text-gray-500">Votre panier est vide</p>
                    <button id="continueShopping" class="mt-4 text-primary-600 hover:text-primary-700 transition">
                        Continuer vos achats
                    </button>
                </div>
                
                <!-- Cart items will be inserted here by JavaScript -->
            </div>
            
            <div id="cartSummary" class="border-t border-gray-200 pt-4 mt-4 hidden">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-gray-600">Sous-total:</span>
                    <span id="subtotal" class="font-medium">0 DT</span>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-gray-600">Livraison:</span>
                    <span id="shipping" class="font-medium">7 DT</span>
                </div>
                <div class="flex justify-between items-center mb-4 pt-2 border-t border-gray-200">
                    <span class="text-gray-800 font-bold">Total:</span>
                    <span id="total" class="text-primary-600 font-bold">0 DT</span>
                </div>
                
                <a href="#" class="block bg-primary-600 hover:bg-primary-700 text-white text-center font-medium py-3 rounded-md transition">
                    Passer la commande
                </a>
            </div>
        </div>
    </div>
    
    <!-- Product Details Modal -->
    <div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-8 max-w-4xl w-full mx-4">
            <div class="flex justify-between items-start mb-6">
                <h2 id="modalProductTitle" class="text-2xl font-bold text-gray-900">Détails du produit</h2>
                <button id="closeProductModal" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img id="modalProductImage" src="/api/placeholder/400/320" alt="Produit" class="w-full h-80 object-cover rounded-lg">
                </div>
                
                <div>
                    <h3 id="modalProductName" class="text-xl font-bold text-gray-900 mb-2">Nom du produit</h3>
                    <div id="modalProductRating" class="flex text-yellow-400 text-sm mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-600 ml-1">(4.5)</span>
                    </div>
                    <p id="modalProductBrand" class="text-gray-500 mb-4">Marque</p>
                    
                    <div class="mb-4">
                        <span class="text-gray-700 font-medium">Prix:</span>
                        <span id="modalProductPrice" class="text-primary-600 font-bold text-xl ml-2">0 DT</span>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-2">Description:</h4>
                        <p id="modalProductDescription" class="text-gray-600">
                            Description détaillée du produit.
                        </p>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <span class="text-gray-700 font-medium mr-4">Quantité:</span>
                            <div class="flex items-center border border-gray-300 rounded-md">
                                <button id="decreaseQuantity" class="px-3 py-1 text-gray-600 hover:text-primary-600 focus:outline-none">-</button>
                                <input id="productQuantity" type="number" min="1" value="1" class="w-12 text-center border-0 focus:outline-none">
                                <button id="increaseQuantity" class="px-3 py-1 text-gray-600 hover:text-primary-600 focus:outline-none">+</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex space-x-3">
                        <button id="modalAddToCart" class="flex-1 bg-primary-600 hover:bg-primary-700 text-white font-medium py-2 rounded-md transition">
                            <i class="fas fa-cart-plus mr-2"></i> Ajouter au panier
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    
                    <div class="mt-6 text-sm text-gray-500">
                        <p><i class="fas fa-truck mr-2"></i> Livraison en 2-4 jours ouvrables</p>
                        <p><i class="fas fa-shield-alt mr-2"></i> Garantie de qualité</p>
                        <p><i class="fas fa-exchange-alt mr-2"></i> Retours acceptés sous 14 jours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        À propos
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Blog
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Emplois
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Partenaires
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Confidentialité
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Conditions d'utilisation
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                        Contact
                    </a>
                </div>
            </nav>
            <div class="mt-8 flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p class="mt-8 text-center text-base text-gray-400">
                &copy; 2023 Mahsoul, Inc. Tous droits réservés.
            </p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Toggle Mobile Menu
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Category Selection
        const categoryCards = document.querySelectorAll('.category-card');
        
        categoryCards.forEach(card => {
            card.addEventListener('click', () => {
                // Remove active class from all cards
                categoryCards.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked card
                card.classList.add('active');
            });
        });
        
        // Cart Functionality
        const cartBtn = document.getElementById('cartBtn');
        const mobileCartBtn = document.getElementById('mobileCartBtn');
        const cartOffcanvas = document.getElementById('cartOffcanvas');
        const closeCart = document.getElementById('closeCart');
        const cartItems = document.getElementById('cartItems');
        const emptyCart = document.getElementById('emptyCart');
        const cartSummary = document.getElementById('cartSummary');
        const subtotalEl = document.getElementById('subtotal');
        const totalEl = document.getElementById('total');
        const cartCountEl = document.getElementById('cartCount');
        const continueShopping = document.getElementById('continueShopping');
        
        let cart = [];
        
        // Add to cart buttons
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const price = parseFloat(button.getAttribute('data-price'));
                const image = button.getAttribute('data-image');
                
                addToCart(id, name, price, image, 1);
                
                // Show notification
                showNotification(name + ' ajouté au panier');
            });
        });
        
        function addToCart(id, name, price, image, quantity) {
            // Check if item already in cart
            const existingItem = cart.find(item => item.id === id);
            
            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                cart.push({
                    id,
                    name,
                    price,
                    image,
                    quantity
                });
            }
            
            updateCart();
        }
        
        function updateCart() {
            // Update cart count
            cartCountEl.textContent = cart.reduce((total, item) => total + item.quantity, 0);
            
            // Update cart items
            if (cart.length === 0) {
                emptyCart.classList.remove('hidden');
                cartSummary.classList.add('hidden');
                cartItems.innerHTML = '';
                cartItems.appendChild(emptyCart);
            } else {
                emptyCart.classList.add('hidden');
                cartSummary.classList.remove('hidden');
                
                // Clear cart items
                cartItems.innerHTML = '';
                
                // Add cart items
                cart.forEach(item => {
                    const cartItem = document.createElement('div');
                    cartItem.classList.add('flex', 'items-center', 'border-b', 'border-gray-200', 'py-4');
                    cartItem.innerHTML = `
                        <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded mr-4">
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-800">${item.name}</h4>
                            <div class="flex justify-between mt-1">
                                <div class="flex items-center">
                                    <button class="decrease-qty text-gray-500 hover:text-primary-600" data-id="${item.id}">
                                        <i class="fas fa-minus text-xs"></i>
                                    </button>
                                    <span class="mx-2">${item.quantity}</span>
                                    <button class="increase-qty text-gray-500 hover:text-primary-600" data-id="${item.id}">
                                        <i class="fas fa-plus text-xs"></i>
                                    </button>
                                </div>
                                <span class="text-primary-600 font-medium">${(item.price * item.quantity).toFixed(2)} DT</span>
                            </div>
                        </div>
                        <button class="remove-item ml-2 text-gray-400 hover:text-red-500" data-id="${item.id}">
                            <i class="fas fa-trash"></i>
                        </button>
                    `;
                    
                    cartItems.appendChild(cartItem);
                });
                
                // Add event listeners to quantity buttons and remove buttons
                document.querySelectorAll('.decrease-qty').forEach(button => {
                    button.addEventListener('click', () => {
                        const id = button.getAttribute('data-id');
                        decreaseQuantity(id);
                    });
                });
                
                document.querySelectorAll('.increase-qty').forEach(button => {
                    button.addEventListener('click', () => {
                        const id = button.getAttribute('data-id');
                        increaseQuantity(id);
                    });
                });
                
                document.querySelectorAll('.remove-item').forEach(button => {
                    button.addEventListener('click', () => {
                        const id = button.getAttribute('data-id');
                        removeItem(id);
                    });
                });
                
                // Update summary
                const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
                const shipping = 7;
                const total = subtotal + shipping;
                
                subtotalEl.textContent = subtotal.toFixed(2) + ' DT';
                totalEl.textContent = total.toFixed(2) + ' DT';
            }
        }
        
        function decreaseQuantity(id) {
            const item = cart.find(item => item.id === id);
            if (item) {
                item.quantity--;
                if (item.quantity <= 0) {
                    removeItem(id);
                } else {
                    updateCart();
                }
            }
        }
        
        function increaseQuantity(id) {
            const item = cart.find(item => item.id === id);
            if (item) {
                item.quantity++;
                updateCart();
            }
        }
        
        function removeItem(id) {
            cart = cart.filter(item => item.id !== id);
            updateCart();
        }
        
        // Show/hide cart
        cartBtn.addEventListener('click', () => {
            cartOffcanvas.style.width = '400px';
        });
        
        if (mobileCartBtn) {
            mobileCartBtn.addEventListener('click', () => {
                cartOffcanvas.style.width = '400px';
            });
        }
        
        closeCart.addEventListener('click', () => {
            cartOffcanvas.style.width = '0';
        });
        
        continueShopping.addEventListener('click', () => {
            cartOffcanvas.style.width = '0';
        });
        
        // Product Modal
        const productCards = document.querySelectorAll('.product-card');
        const productModal = document.getElementById('productModal');
        const closeProductModal = document.getElementById('closeProductModal');
        const modalProductTitle = document.getElementById('modalProductTitle');
        const modalProductImage = document.getElementById('modalProductImage');
        const modalProductName = document.getElementById('modalProductName');
        const modalProductBrand = document.getElementById('modalProductBrand');
        const modalProductPrice = document.getElementById('modalProductPrice');
        const modalProductDescription = document.getElementById('modalProductDescription');
        const modalAddToCart = document.getElementById('modalAddToCart');
        const productQuantity = document.getElementById('productQuantity');
        const decreaseQuantity = document.getElementById('decreaseQuantity');
        const increaseQuantity = document.getElementById('increaseQuantity');
        
        // Sample product data (in a real app, this would come from a database)
        const products = [
            {
                id: '1',
                name: 'Antibiotique pour volailles',
                brand: 'VetOne',
                price: 75,
                image: '/api/placeholder/400/240',
                description: 'Traitement antibiotique à large spectre pour volailles. Efficace contre les infections respiratoires et intestinales courantes. Dosage facile et précis grâce au bouchon doseur. Flacon de 500ml avec notice détaillée incluse. Prescription vétérinaire recommandée.'
            },
            {
                id: '2',
                name: 'Aliment pour bovins',
                brand: 'FarmStar',
                price: 120,
                image: '/api/placeholder/400/240',
                description: 'Aliment complet pour bovins, formulé pour assurer une nutrition optimale et un développement sain. Enrichi en vitamines et minéraux essentiels pour renforcer le système immunitaire. Contient des fibres de haute qualité pour améliorer la digestion. Sac de 25kg avec fermeture refermable pour une meilleure conservation.'
            },
            {
                id: '3',
                name: 'Système d\'irrigation',
                brand: 'GreenTech',
                price: 170,
                image: '/api/placeholder/400/240',
                description: 'Système d\'irrigation goutte-à-goutte économe en eau, idéal pour les petites et moyennes exploitations. Installation facile sans outils spéciaux. Comprend 100m de tuyau principal, 500m de lignes goutte-à-goutte, filtres, connecteurs et manuel d\'installation détaillé. Économisez jusqu\'à 60% d\'eau par rapport aux méthodes traditionnelles.'
            }
        ];
        
        productCards.forEach(card => {
            card.addEventListener('click', (e) => {
                // Don't open modal if clicking on add to cart button
                if (e.target.closest('.add-to-cart')) {
                    return;
                }
                
                // Get product data (in a real app, you would fetch this from your backend)
                const productId = card.querySelector('.add-to-cart').getAttribute('data-id');
                const product = products.find(p => p.id === productId) || {
                    id: productId,
                    name: card.querySelector('h3').textContent,
                    brand: card.querySelector('p:nth-of-type(1)').textContent,
                    price: parseFloat(card.querySelector('.add-to-cart').getAttribute('data-price')),
                    image: card.querySelector('img').src,
                    description: card.querySelector('p:nth-of-type(2)').textContent + ' Description détaillée qui serait normalement plus longue et fournirait toutes les informations importantes sur le produit, ses avantages et son utilisation.'
                };
                
                // Update modal with product data
                modalProductTitle.textContent = 'Détails du produit';
                modalProductImage.src = product.image;
                modalProductImage.alt = product.name;
                modalProductName.textContent = product.name;
                modalProductBrand.textContent = product.brand;
                modalProductPrice.textContent = product.price.toFixed(2) + ' DT';
                modalProductDescription.textContent = product.description;
                
                // Reset quantity
                productQuantity.value = 1;
                
                // Set add to cart button data
                modalAddToCart.setAttribute('data-id', product.id);
                modalAddToCart.setAttribute('data-name', product.name);
                modalAddToCart.setAttribute('data-price', product.price);
                modalAddToCart.setAttribute('data-image', product.image);
                
                // Show modal
                productModal.classList.remove('hidden');
            });
        });
        
        // Close product modal
        closeProductModal.addEventListener('click', () => {
            productModal.classList.add('hidden');
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', (e) => {
            if (e.target === productModal) {
                productModal.classList.add('hidden');
            }
        });
        
        // Quantity controls in modal
        decreaseQuantity.addEventListener('click', () => {
            if (productQuantity.value > 1) {
                productQuantity.value = parseInt(productQuantity.value) - 1;
            }
        });
        
        increaseQuantity.addEventListener('click', () => {
            productQuantity.value = parseInt(productQuantity.value) + 1;
        });
        
        // Add to cart from modal
        modalAddToCart.addEventListener('click', () => {
            const id = modalAddToCart.getAttribute('data-id');
            const name = modalAddToCart.getAttribute('data-name');
            const price = parseFloat(modalAddToCart.getAttribute('data-price'));
            const image = modalAddToCart.getAttribute('data-image');
            const quantity = parseInt(productQuantity.value);
            
            addToCart(id, name, price, image, quantity);
            
            // Show notification and open cart
            showNotification(name + ' ajouté au panier');
            productModal.classList.add('hidden');
            cartOffcanvas.style.width = '400px';
        });
        
        // Notification function
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.classList.add('fixed', 'bottom-4', 'right-4', 'bg-green-500', 'text-white', 'px-4', 'py-2', 'rounded-md', 'shadow-lg', 'z-50', 'transform', 'transition-all', 'duration-300');
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Show notification with a slight delay for animation
            setTimeout(() => {
                notification.classList.add('translate-y-0', 'opacity-100');
            }, 100);
            
            // Hide and remove notification
            setTimeout(() => {
                notification.classList.add('translate-y-10', 'opacity-0');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }
    </script>
</body>
</html>
