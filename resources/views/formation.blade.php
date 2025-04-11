<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation - Mahsoul</title>
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
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
                        <a href="/formation" class="border-primary-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Formation
                        </a>
                        <a href="/marketplace" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Marketplace
                        </a>
                        <a href="/community" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Communauté
                        </a>
                    </nav>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="/cart" class="p-2 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <a href="/login" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                        Connexion
                    </a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="mobile-menu hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="/" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Accueil
                </a>
                <a href="/consultation" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Consultations
                </a>
                <a href="/formation" class="bg-primary-50 border-primary-500 text-primary-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
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
                    <a href="/cart" class="p-2 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <a href="/login" class="ml-3 block px-4 py-2 text-base font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-md">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <!-- Blog Posts (Main Content) -->
                <div class="lg:col-span-2">
                    <!-- Featured Article -->
                    <div class="bg-white shadow rounded-lg overflow-hidden mb-8">
                        <div class="relative">
                            <img src="https://via.placeholder.com/800x400" alt="Techniques modernes d'irrigation" class="w-full h-72 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary-600 text-white text-sm px-3 py-1 rounded-md">Irrigation</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-2 hover:text-primary-600 transition">
                                <a href="/articles/irrigation-moderne">Techniques modernes d'irrigation pour économiser l'eau</a>
                            </h2>
                            <div class="flex items-center text-gray-500 text-sm mb-4">
                                <span class="mr-4"><i class="far fa-calendar mr-1"></i> 12 Mars 2023</span>
                                <span><i class="far fa-user mr-1"></i> Par Mohamed Khelifi</span>
                            </div>
                            <p class="text-gray-600 mb-4">Découvrez les dernières technologies d'irrigation qui permettent aux agriculteurs de réduire considérablement leur consommation d'eau tout en améliorant les rendements des cultures. Cet article explore les systèmes goutte-à-goutte, l'irrigation par aspersion contrôlée et les solutions connectées...</p>
                            <a href="/articles/irrigation-moderne" class="inline-block text-primary-600 font-medium hover:text-primary-700 transition">
                                Lire la suite <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Blog Posts Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Blog Post 1 -->
                        <div class="blog-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                            <div class="relative">
                                <img src="https://via.placeholder.com/500x250" alt="Cultures biologiques" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-secondary-600 text-white text-xs px-2 py-1 rounded-md">Agriculture Bio</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/guide-agriculture-bio">Guide complet pour convertir votre exploitation en bio</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 8 Mars 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Amina Ben Salem</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">La transition vers l'agriculture biologique peut sembler intimidante, mais avec une bonne planification et les bonnes pratiques, elle peut être très bénéfique...</p>
                                <a href="/articles/guide-agriculture-bio" class="text-primary-600 text-sm font-medium hover:text-primary-700 transition">
                                    Lire la suite <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Blog Post 2 -->
                        <div class="blog-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                            <div class="relative">
                                <img src="https://via.placeholder.com/500x250" alt="Santé animale" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-md">Élevage</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/prevention-maladies-bovins">Prévention des maladies courantes chez les bovins</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 5 Mars 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Dr. Sonia Mansour</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">Maintenir la santé de votre troupeau est essentiel pour une exploitation rentable. Découvrez les signes précoces des maladies courantes et comment les prévenir...</p>
                                <a href="/articles/prevention-maladies-bovins" class="text-primary-600 text-sm font-medium hover:text-primary-700 transition">
                                    Lire la suite <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Blog Post 3 -->
                        <div class="blog-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                            <div class="relative">
                                <img src="https://via.placeholder.com/500x250" alt="Gestion des sols" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-md">Agronomie</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/fertilite-sols">Améliorer la fertilité de vos sols naturellement</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 28 Février 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Dr. Ahmed Benali</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">Un sol sain est à la base d'une agriculture productive. Apprenez à utiliser les engrais verts, le compost et la rotation des cultures pour améliorer naturellement votre sol...</p>
                                <a href="/articles/fertilite-sols" class="text-primary-600 text-sm font-medium hover:text-primary-700 transition">
                                    Lire la suite <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Blog Post 4 -->
                        <div class="blog-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                            <div class="relative">
                                <img src="https://via.placeholder.com/500x250" alt="Agriculture de précision" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-purple-500 text-white text-xs px-2 py-1 rounded-md">Technologie</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/agriculture-precision">L'agriculture de précision accessible aux petits exploitants</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 20 Février 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Karim Bouazizi</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">Les technologies de l'agriculture de précision ne sont plus réservées aux grandes exploitations. Découvrez les outils abordables qui peuvent transformer votre petite ferme...</p>
                                <a href="/articles/agriculture-precision" class="text-primary-600 text-sm font-medium hover:text-primary-700 transition">
                                    Lire la suite <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-10 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-500 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="px-3 py-1 rounded-md bg-primary-600 text-white">1</a>
                            <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">2</a>
                            <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">3</a>
                            <span class="px-3 py-1 text-gray-500">...</span>
                            <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">8</a>
                            <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-gray-500 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1 mt-8 lg:mt-0">
                    <!-- Search -->
                    <div class="bg-white shadow rounded-lg p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Rechercher</h3>
                        <div class="relative">
                            <input type="text" placeholder="Rechercher un article..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-search"></i>
                            </div>
                            <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white bg-primary-600 hover:bg-primary-700 px-2 py-1 rounded-md text-sm transition">
                                Chercher
                            </button>
                        </div>
                    </div>
                    
                    <!-- Categories -->
                    <div class="bg-white shadow rounded-lg p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Catégories</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="/categories/agriculture-bio" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Agriculture biologique
                            </a>
                            <a href="/categories/elevage" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Élevage
                            </a>
                            <a href="/categories/irrigation" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Irrigation
                            </a>
                            <a href="/categories/technologie" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Technologie
                            </a>
                            <a href="/categories/agronomie" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Agronomie
                            </a>
                            <a href="/categories/maladies-vegetales" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Maladies végétales
                            </a>
                            <a href="/categories/sante-animale" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Santé animale
                            </a>
                            <a href="/categories/gestion-agricole" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Gestion agricole
                            </a>
                        </div>
                    </div>
                    
                    <!-- Recent Posts -->
                    <div class="bg-white shadow rounded-lg p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Articles récents</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <img src="https://via.placeholder.com/100x100" alt="Article récent" class="w-16 h-16 object-cover rounded mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-900 hover:text-primary-600 transition">
                                        <a href="/articles/cultures-saison-seche">Les meilleures cultures pour la saison sèche</a>
                                    </h4>
                                    <p class="text-gray-500 text-xs">15 Février 2023</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://via.placeholder.com/100x100" alt="Article récent" class="w-16 h-16 object-cover rounded mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-900 hover:text-primary-600 transition">
                                        <a href="/articles/parasites-naturel">Comment traiter les parasites naturellement</a>
                                    </h4>
                                    <p class="text-gray-500 text-xs">10 Février 2023</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://via.placeholder.com/100x100" alt="Article récent" class="w-16 h-16 object-cover rounded mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-900 hover:text-primary-600 transition">
                                        <a href="/articles/alimentation-betail">Optimiser l'alimentation du bétail</a>
                                    </h4>
                                    <p class="text-gray-500 text-xs">5 Février 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Subscribe -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">S'abonner</h3>
                        <p class="text-gray-600 mb-4">Recevez nos derniers articles et conseils directement dans votre boîte mail.</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" placeholder="Votre email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500">
                            </div>
                            <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-2 rounded-md transition">
                                S'abonner
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Online Courses Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Nos cours en ligne</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Développez vos compétences avec nos cours en ligne conçus par des experts en agriculture.</p>
            </div>
            
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course 1 -->
                <div class="course-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/500x250" alt="Fondamentaux de l'agriculture biologique" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-primary-600 text-white px-4 py-1">
                            Bestseller
                            </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Fondamentaux de l'agriculture biologique</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm">(124 avis)</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm mb-4">
                            <span class="mr-3"><i class="far fa-clock mr-1"></i> 10 heures</span>
                            <span><i class="far fa-user mr-1"></i> Dr. Amina Ben Salem</span>
                        </div>
                        <p class="text-gray-600 mb-4">Apprenez les principes fondamentaux de l'agriculture biologique, de la certification aux techniques de culture et de gestion des sols.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold text-xl">120 DT</span>
                            <a href="/courses/agriculture-bio" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md transition">
                                S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Course 2 -->
                <div class="course-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/500x250" alt="Gestion de l'irrigation" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Gestion efficace de l'irrigation</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm">(87 avis)</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm mb-4">
                            <span class="mr-3"><i class="far fa-clock mr-1"></i> 8 heures</span>
                            <span><i class="far fa-user mr-1"></i> Mohamed Khelifi</span>
                        </div>
                        <p class="text-gray-600 mb-4">Maîtrisez les techniques d'irrigation modernes et économiques pour optimiser l'utilisation de l'eau dans votre exploitation.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold text-xl">90 DT</span>
                            <a href="/courses/irrigation" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md transition">
                                S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Course 3 -->
                <div class="course-card bg-white shadow rounded-lg overflow-hidden transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/500x250" alt="Santé des bovins" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-4 py-1">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Santé et bien-être des bovins</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm">(42 avis)</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm mb-4">
                            <span class="mr-3"><i class="far fa-clock mr-1"></i> 10 heures</span>
                            <span><i class="far fa-user mr-1"></i> Dr. Sonia Mansour</span>
                        </div>
                        <p class="text-gray-600 mb-4">Apprenez à détecter, prévenir et traiter les problèmes de santé courants chez les bovins pour améliorer leur productivité.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold text-xl">150 DT</span>
                            <a href="/courses/sante-bovins" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md transition">
                                S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="/all-courses" class="inline-block border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-medium px-6 py-3 rounded-md transition">
                    Voir tous les cours <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Ce que disent nos apprenants</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Découvrez les témoignages de ceux qui ont suivi nos formations et mis en pratique nos conseils.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Les cours sur l'agriculture biologique m'ont permis de transformer complètement mon exploitation. J'ai augmenté ma production et ma rentabilité tout en respectant l'environnement."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/100x100" alt="Témoignage" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Karim Bouazizi</h4>
                            <p class="text-gray-500 text-sm">Agriculteur à Nabeul</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">"La formation sur l'irrigation m'a fait économiser 40% d'eau tout en améliorant mes rendements. Les formateurs sont très compétents et les conseils pratiques."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/100x100" alt="Témoignage" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Leila Gharbi</h4>
                            <p class="text-gray-500 text-sm">Agricultrice à Sfax</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Grâce au cours sur la santé bovine, j'ai pu identifier rapidement une maladie dans mon troupeau et agir avant qu'elle ne se propage. Cela m'a sauvé beaucoup de pertes potentielles."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/100x100" alt="Témoignage" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Ahmed Trabelsi</h4>
                            <p class="text-gray-500 text-sm">Éleveur à Béja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-16 bg-primary-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white mb-6">Prêt à améliorer vos compétences agricoles ?</h2>
            <p class="text-primary-100 mb-8 max-w-3xl mx-auto">Rejoignez notre communauté d'agriculteurs passionnés et accédez à des formations de qualité pour développer votre exploitation.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="/courses" class="bg-white text-primary-600 hover:bg-gray-100 font-medium px-8 py-3 rounded-md transition">
                    Explorer les cours
                </a>
                <a href="/articles" class="bg-transparent border border-white text-white hover:bg-white/10 font-medium px-8 py-3 rounded-md transition">
                    Voir les articles
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
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
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-center text-base text-gray-400">
                &copy; 2023 Mahsoul, Inc. Tous droits réservés.
            </p>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" id="back-to-top" class="fixed bottom-6 right-6 bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-primary-700 transition hidden">
        <i class="fas fa-chevron-up"></i>
    </a>
    
    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const menuBtn = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
