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
        
        .blob-shape {
            border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%;
            animation: blob-animation 8s ease-in-out infinite;
        }
        
        @keyframes blob-animation {
            0% { border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%; }
            50% { border-radius: 40% 60% 70% 30% / 50% 60% 40% 50%; }
            100% { border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%; }
        }
        
        .diagonal-box {
            position: relative;
            overflow: hidden;
        }
        
        .diagonal-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f3f9ee;
            transform: skewY(-5deg);
            transform-origin: top left;
            z-index: -1;
        }
        
        .product-card {
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .category-card {
            transition: all 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center space-x-8">
                    <div>
                        <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-800">Mahsoul</span>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="/" class="relative text-gray-500 hover:text-gray-900 font-medium group">
                            Accueil
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/consultation" class="relative text-gray-500 hover:text-gray-900 font-medium group">
                            Consultations
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/formation" class="relative text-gray-500 hover:text-gray-900 font-medium group">
                            Formation
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/marketplace" class="relative text-gray-900 font-medium group">
                            Marketplace
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/community" class="relative text-gray-500 hover:text-gray-900 font-medium group">
                            Communauté
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                    </nav>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="cart.html" class="p-2 text-gray-500 hover:text-gray-900 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <a href="login.html" class="flex items-center font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700 px-6 py-3 rounded-full hover:shadow-lg transition duration-300">
                        Connexion
                    </a>
                </div>
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, hidden by default -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-lg mx-4">
                <a href="/" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Accueil
                </a>
                <a href="/consultation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Consultations
                </a>
                <a href="/formation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Formation
                </a>
                <a href="/marketplace" class="block px-4 py-3 rounded-md text-base font-medium text-gray-900 bg-primary-50">
                    Marketplace
                </a>
                <a href="/community" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Communauté
                </a>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <a href="cart.html" class="p-2 text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                        <a href="login.html" class="ml-3 block px-6 py-3 rounded-full text-base font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700">
                            Connexion
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-secondary-600 to-secondary-800 text-white py-16">
        <!-- Decorative circles -->
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-secondary-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-4 py-2 rounded-full bg-white/20 text-white font-medium text-sm mb-6">
                    Marketplace Agricole
                </span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Tous vos produits agricoles en un seul endroit</h1>
                <p class="text-lg text-secondary-100 mb-8">
                    Découvrez notre sélection de produits de qualité pour l'agriculture et l'élevage, livrés directement à votre exploitation.
                </p>
                <div class="relative max-w-xl mx-auto">
                    <input type="text" placeholder="Rechercher un produit..." class="w-full px-6 py-4 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-primary-600 text-white px-4 py-2 rounded-full hover:bg-primary-700 transition duration-300">
                        <i class="fas fa-search mr-2"></i> Rechercher
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Catégories
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Explorez nos catégories de produits</h2>
                <p class="text-lg text-gray-600">
                    Trouvez facilement ce dont vous avez besoin parmi notre large gamme de produits agricoles.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-seedling text-2xl text-primary-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Semences</h3>
                        <p class="text-sm text-gray-500 mt-1">42 produits</p>
                    </div>
                </a>
                
                <!-- Category 2 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-secondary-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-prescription-bottle text-2xl text-secondary-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Fertilisants</h3>
                        <p class="text-sm text-gray-500 mt-1">28 produits</p>
                    </div>
                </a>
                
                <!-- Category 3 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-tractor text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Équipement</h3>
                        <p class="text-sm text-gray-500 mt-1">35 produits</p>
                    </div>
                </a>
                
                <!-- Category 4 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-bug text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Protection</h3>
                        <p class="text-sm text-gray-500 mt-1">19 produits</p>
                    </div>
                </a>
                
                <!-- Category 5 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-syringe text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Vétérinaire</h3>
                        <p class="text-sm text-gray-500 mt-1">24 produits</p>
                    </div>
                </a>
                
                <!-- Category 6 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-water text-2xl text-red-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Irrigation</h3>
                        <p class="text-sm text-gray-500 mt-1">31 produits</p>
                    </div>
                </a>
                
                <!-- Category 7 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-warehouse text-2xl text-yellow-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Stockage</h3>
                        <p class="text-sm text-gray-500 mt-1">17 produits</p>
                    </div>
                </a>
                
                <!-- Category 8 -->
                <a href="#" class="category-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 rounded-full bg-pink-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-tools text-2xl text-pink-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Outils</h3>
                        <p class="text-sm text-gray-500 mt-1">23 produits</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-20 diagonal-box">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-800 font-medium text-sm mb-4">
                    Produits Vedettes
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Nos produits les plus populaires</h2>
                <p class="text-lg text-gray-600">
                    Découvrez les produits préférés de nos clients, sélectionnés pour leur qualité et leur efficacité.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Semences de blé" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-primary-500 text-white text-xs px-2 py-1 rounded-full">
                            Populaire
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Semences de Blé Premium</h3>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Semences de blé à haut rendement, résistantes aux maladies et adaptées au climat local.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">120 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Fertilisant organique" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-secondary-500 text-white text-xs px-2 py-1 rounded-full">
                            Bio
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Fertilisant Organique</h3>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Fertilisant 100% organique pour améliorer la qualité du sol et augmenter les rendements.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">85 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Système d'irrigation" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-blue-500 text-white text-xs px-2 py-1 rounded-full">
                            Économique
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Système d'Irrigation Goutte-à-Goutte</h3>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Système d'irrigation efficace qui économise l'eau et assure une distribution optimale.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">350 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Traitement vétérinaire" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-purple-500 text-white text-xs px-2 py-1 rounded-full">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Complément Alimentaire Bovin</h3>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Complément alimentaire pour bovins qui améliore la santé et la productivité du bétail.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">220 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-medium px-8 py-3 rounded-full transition duration-300">
                    Voir tous les produits <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Nouveautés
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Découvrez nos derniers produits</h2>
                <p class="text-lg text-gray-600">
                    Restez à la pointe de l'innovation avec nos produits récemment ajoutés à notre catalogue.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- New Product 1 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Drone agricole" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Drone Agricole de Surveillance</h3>
                        <p class="text-gray-600 text-sm mb-4">Drone équipé de caméras haute résolution pour surveiller les cultures et détecter les problèmes rapidement.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">4500 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- New Product 2 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Capteurs d'humidité" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Capteurs d'Humidité Connectés</h3>
                        <p class="text-gray-600 text-sm mb-4">Capteurs intelligents qui mesurent l'humidité du sol et envoient les données à votre smartphone.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">780 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- New Product 3 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Traitement biologique" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Traitement Biologique Anti-Parasites</h3>
                        <p class="text-gray-600 text-sm mb-4">Solution biologique pour lutter contre les parasites sans produits chimiques nocifs.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-primary-600">195 DH</span>
                            <button class="bg-primary-600 text-white px-3 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="py-20 diagonal-box">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-800 font-medium text-sm mb-4">
                    Offres Spéciales
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Promotions limitées dans le temps</h2>
                <p class="text-lg text-gray-600">
                    Profitez de nos offres spéciales pour économiser sur vos achats de produits agricoles.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Offer 1 -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-2/5">
                            <img src="/placeholder.svg?height=300&width=300" alt="Pack semences" class="w-full h-full object-cover">
                        </div>
                        <div class="md:w-3/5 p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-gray-900">Pack Semences Variées</h3>
                                <div class="bg-red-500 text-white text-sm px-3 py-1 rounded-full">-30%</div>
                            </div>
                            <p class="text-gray-600 mb-4">Pack de semences variées incluant blé, maïs et légumineuses. Idéal pour la rotation des cultures.</p>
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-primary-600 mr-3">350 DH</span>
                                <span class="text-lg text-gray-500 line-through">500 DH</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="text-gray-500 text-sm ml-2">(42 avis)</span>
                                </div>
                                <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Offer 2 -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-2/5">
                            <img src="/placeholder.svg?height=300&width=300" alt="Kit irrigation" class="w-full h-full object-cover">
                        </div>
                        <div class="md:w-3/5 p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-gray-900">Kit Irrigation Complet</h3>
                                <div class="bg-red-500 text-white text-sm px-3 py-1 rounded-full">-25%</div>
                            </div>
                            <p class="text-gray-600 mb-4">Kit complet d'irrigation goutte-à-goutte pour une surface de 1000m². Facile à installer.</p>
                            <div class="flex items-center mb-4">
                                <span class="text-2xl font-bold text-primary-600 mr-3">1200 DH</span>
                                <span class="text-lg text-gray-500 line-through">1600 DH</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-500 text-sm ml-2">(38 avis)</span>
                                </div>
                                <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-2"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-medium px-8 py-3 rounded-full transition duration-300">
                    Voir toutes les offres <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Témoignages
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ce que disent nos clients</h2>
                <p class="text-lg text-gray-600">
                    Découvrez les expériences de ceux qui ont acheté nos produits et services.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative shadow-lg">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-16 h-16 bg-primary-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                        </svg>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Les semences que j'ai achetées chez Mahsoul sont d'excellente qualité. Le rendement a dépassé mes attentes et le service client a été impeccable."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Ahmed Benali">
                        <div>
                            <h4 class="font-bold text-gray-900">Ahmed Benali</h4>
                            <p class="text-sm text-gray-500">Agriculteur, Région de Fès</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative shadow-lg">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-16 h-16 bg-secondary-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                        </svg>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Le système d'irrigation que j'ai acheté a considérablement réduit ma consommation d'eau tout en améliorant la santé de mes cultures. Un investissement qui en vaut vraiment la peine."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Fatima Zahra">
                        <div>
                            <h4 class="font-bold text-gray-900">Fatima Zahra</h4>
                            <p class="text-sm text-gray-500">Agricultrice, Région de Marrakech</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative shadow-lg">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                        </svg>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Les produits vétérinaires achetés sur Mahsoul ont aidé à améliorer la santé de mon bétail. La livraison rapide et les conseils personnalisés font toute la différence."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://randomuser.me/api/portraits/men/86.jpg" alt="Karim Tazi">
                        <div>
                            <h4 class="font-bold text-gray-900">Karim Tazi</h4>
                            <p class="text-sm text-gray-500">Éleveur, Région de Meknès</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-primary-600 to-primary-800 transform -skew-y-6 origin-top-right z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 text-white">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à améliorer votre exploitation?</h2>
                    <p class="text-primary-100 text-lg mb-8">Rejoignez Mahsoul aujourd'hui et découvrez notre large gamme de produits agricoles de qualité à des prix compétitifs.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-white text-primary-600 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                            S'inscrire
                        </a>
                        <a href="#" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-primary-500 text-white border border-primary-400 hover:bg-primary-400 transform hover:-translate-y-1 transition duration-300">
                            Voir le catalogue
                        </a>
                    </div>
                </div>
                <div class="lg:w-2/5">
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center">
                                <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4">Recevez nos offres exclusives</h3>
                        <p class="text-gray-600 text-center mb-6">Inscrivez-vous à notre newsletter pour recevoir nos offres spéciales et nos conseils agricoles.</p>
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Votre nom" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <input type="email" placeholder="Votre adresse email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <button type="submit" class="w-full px-4 py-3 rounded-lg font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transition duration-300">
                                S'abonner
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="col-span-1 md:col-span-2">
                    <div class="mb-6">
                        <span class="text-3xl font-bold">Mahsoul</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Votre partenaire pour une agriculture moderne et durable. Nous proposons des services et produits adaptés aux besoins des agriculteurs et éleveurs, pour améliorer votre productivité tout en respectant l'environnement.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Consultations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Marketplace</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Formation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Communauté</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">À propos</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Qui sommes-nous</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Nos experts</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Contactez-nous</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Carrières</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row md:justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2023 Mahsoul, Inc. Tous droits réservés.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Confidentialité</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Conditions d'utilisation</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
