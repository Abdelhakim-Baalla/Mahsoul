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
        
        .blog-card {
            transition: all 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .course-card {
            transition: all 0.3s ease;
        }
        
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .category-tag {
            transition: all 0.2s ease;
        }
        
        .category-tag:hover {
            transform: scale(1.05);
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
                        <a href="/formation" class="relative text-gray-900 font-medium group">
                            Formation
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/marketplace" class="relative text-gray-500 hover:text-gray-900 font-medium group">
                            Marketplace
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
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
                <a href="/formation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-900 bg-primary-50">
                    Formation
                </a>
                <a href="/marketplace" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
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

    <!-- Page Banner -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <!-- Decorative circles -->
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-blue-500 rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-primary-500 rounded-full opacity-20 blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-4 py-2 rounded-full bg-white/20 text-white font-medium text-sm mb-6">
                    Développez vos compétences agricoles
                </span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Formations et ressources agricoles</h1>
                <p class="text-lg text-blue-100 mb-8">
                    Découvrez nos articles, guides et formations pour améliorer vos connaissances et pratiques agricoles.
                </p>
                <a href="#courses" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-white text-blue-600 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                    Voir nos formations
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-12">
                <!-- Blog Posts (Main Content) -->
                <div class="lg:col-span-2">
                    <!-- Featured Article -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-10 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1594761051589-ad4f7a5d53da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1932&q=80" alt="Techniques modernes d'irrigation" class="w-full h-80 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary-600 text-white text-sm px-4 py-2 rounded-full font-medium">Irrigation</span>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-6">
                                <h2 class="text-2xl font-bold text-white mb-2">
                                    <a href="/articles/irrigation-moderne" class="hover:underline">Techniques modernes d'irrigation pour économiser l'eau</a>
                                </h2>
                                <div class="flex items-center text-white/80 text-sm">
                                    <span class="mr-4"><i class="far fa-calendar mr-1"></i> 12 Mars 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Mohamed Khelifi</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Découvrez les dernières technologies d'irrigation qui permettent aux agriculteurs de réduire considérablement leur consommation d'eau tout en améliorant les rendements des cultures. Cet article explore les systèmes goutte-à-goutte, l'irrigation par aspersion contrôlée et les solutions connectées...</p>
                            <a href="/articles/irrigation-moderne" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                                <span>Lire la suite</span>
                                <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Blog Posts Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Blog Post 1 -->
                        <div class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Cultures biologiques" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-secondary-600 text-white text-xs px-3 py-1 rounded-full font-medium">Agriculture Bio</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/guide-agriculture-bio">Guide complet pour convertir votre exploitation en bio</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 8 Mars 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Amina Ben Salem</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">La transition vers l'agriculture biologique peut sembler intimidante, mais avec une bonne planification et les bonnes pratiques, elle peut être très bénéfique...</p>
                                <a href="/articles/guide-agriculture-bio" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                                    <span>Lire la suite</span>
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Blog Post 2 -->
                        <div class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Santé animale" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-yellow-500 text-white text-xs px-3 py-1 rounded-full font-medium">Élevage</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/prevention-maladies-bovins">Prévention des maladies courantes chez les bovins</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 5 Mars 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Dr. Sonia Mansour</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">Maintenir la santé de votre troupeau est essentiel pour une exploitation rentable. Découvrez les signes précoces des maladies courantes et comment les prévenir...</p>
                                <a href="/articles/prevention-maladies-bovins" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                                    <span>Lire la suite</span>
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Blog Post 3 -->
                        <div class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Gestion des sols" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-blue-500 text-white text-xs px-3 py-1 rounded-full font-medium">Agronomie</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/fertilite-sols">Améliorer la fertilité de vos sols naturellement</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 28 Février 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Dr. Ahmed Benali</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">Un sol sain est à la base d'une agriculture productive. Apprenez à utiliser les engrais verts, le compost et la rotation des cultures pour améliorer naturellement votre sol...</p>
                                <a href="/articles/fertilite-sols" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                                    <span>Lire la suite</span>
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Blog Post 4 -->
                        <div class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Agriculture de précision" class="w-full h-48 object-cover">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-purple-500 text-white text-xs px-3 py-1 rounded-full font-medium">Technologie</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-primary-600 transition">
                                    <a href="/articles/agriculture-precision">L'agriculture de précision accessible aux petits exploitants</a>
                                </h3>
                                <div class="flex items-center text-gray-500 text-sm mb-3">
                                    <span class="mr-3"><i class="far fa-calendar mr-1"></i> 20 Février 2023</span>
                                    <span><i class="far fa-user mr-1"></i> Par Karim Bouazizi</span>
                                </div>
                                <p class="text-gray-600 mb-3 line-clamp-3">Les technologies de l'agriculture de précision ne sont plus réservées aux grandes exploitations. Découvrez les outils abordables qui peuvent transformer votre petite ferme...</p>
                                <a href="/articles/agriculture-precision" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                                    <span>Lire la suite</span>
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-primary-600 text-white">1</a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">2</a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">3</a>
                            <span class="px-3 py-1 text-gray-500">...</span>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-700 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">8</a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-500 hover:bg-primary-600 hover:text-white hover:border-primary-600 transition">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1 mt-12 lg:mt-0">
                    <!-- Search -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Rechercher</h3>
                        <div class="relative">
                            <input type="text" placeholder="Rechercher un article..." class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-search"></i>
                            </div>
                            <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white bg-primary-600 hover:bg-primary-700 px-3 py-1 rounded-lg text-sm transition">
                                Chercher
                            </button>
                        </div>
                    </div>
                    
                    <!-- Categories -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Catégories</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="/categories/agriculture-bio" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Agriculture biologique
                            </a>
                            <a href="/categories/elevage" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Élevage
                            </a>
                            <a href="/categories/irrigation" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Irrigation
                            </a>
                            <a href="/categories/technologie" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Technologie
                            </a>
                            <a href="/categories/agronomie" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Agronomie
                            </a>
                            <a href="/categories/maladies-vegetales" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Maladies végétales
                            </a>
                            <a href="/categories/sante-animale" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Santé animale
                            </a>
                            <a href="/categories/gestion-agricole" class="category-tag bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-primary-600 hover:text-white transition duration-200">
                                Gestion agricole
                            </a>
                        </div>
                    </div>
                    
                    <!-- Recent Posts -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Articles récents</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Article récent" class="w-20 h-20 object-cover rounded-lg mr-4">
                                <div>
                                    <h4 class="font-medium text-gray-900 hover:text-primary-600 transition">
                                        <a href="/articles/cultures-saison-seche">Les meilleures cultures pour la saison sèche</a>
                                    </h4>
                                    <p class="text-gray-500 text-xs mt-1">15 Février 2023</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Article récent" class="w-20 h-20 object-cover rounded-lg mr-4">
                                <div>
                                    <h4 class="font-medium text-gray-900 hover:text-primary-600 transition">
                                        <a href="/articles/parasites-naturel">Comment traiter les parasites naturellement</a>
                                    </h4>
                                    <p class="text-gray-500 text-xs mt-1">10 Février 2023</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <img src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Article récent" class="w-20 h-20 object-cover rounded-lg mr-4">
                                <div>
                                    <h4 class="font-medium text-gray-900 hover:text-primary-600 transition">
                                        <a href="/articles/alimentation-betail">Optimiser l'alimentation du bétail</a>
                                    </h4>
                                    <p class="text-gray-500 text-xs mt-1">5 Février 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Subscribe -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 relative overflow-hidden">
                        <div class="blob-shape bg-primary-100 absolute -top-10 -right-10 w-40 h-40 z-0"></div>
                        <div class="relative z-10">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">S'abonner</h3>
                            <p class="text-gray-600 mb-6">Recevez nos derniers articles et conseils directement dans votre boîte mail.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" placeholder="Votre email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                </div>
                                <button type="submit" class="w-full bg-gradient-to-r from-primary-500 to-primary-700 text-white font-medium py-3 rounded-xl hover:shadow-lg transition duration-300">
                                    S'abonner
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Online Courses Section -->
    <section id="courses" class="py-16 diagonal-box">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Nos cours en ligne
                </span>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Développez vos compétences agricoles</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Nos formations en ligne sont conçues par des experts pour vous aider à améliorer vos pratiques agricoles.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course 1 -->
                <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Fondamentaux de l'agriculture biologique" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-primary-600 text-white px-4 py-1 rounded-full font-medium">
                            Bestseller
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fondamentaux de l'agriculture biologique</h3>
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
                        <p class="text-gray-600 mb-6">Apprenez les principes fondamentaux de l'agriculture biologique, de la certification aux techniques de culture et de gestion des sols.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold text-xl">120 DT</span>
                            <a href="/courses/agriculture-bio" class="bg-gradient-to-r from-primary-500 to-primary-700 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Course 2 -->
                <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1594761051589-ad4f7a5d53da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1932&q=80" alt="Gestion de l'irrigation" class="w-full h-56 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Gestion efficace de l'irrigation</h3>
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
                        <p class="text-gray-600 mb-6">Maîtrisez les techniques d'irrigation modernes et économiques pour optimiser l'utilisation de l'eau dans votre exploitation.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold text-xl">90 DT</span>
                            <a href="/courses/irrigation" class="bg-gradient-to-r from-primary-500 to-primary-700 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Course 3 -->
                <div class="course-card bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Santé des bovins" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-1 rounded-full font-medium">
                            Nouveau
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Santé et bien-être des bovins</h3>
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
                        <p class="text-gray-600 mb-6">Apprenez à détecter, prévenir et traiter les problèmes de santé courants chez les bovins pour améliorer leur productivité.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold text-xl">150 DT</span>
                            <a href="/courses/sante-bovins" class="bg-gradient-to-r from-primary-500 to-primary-700 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="/all-courses" class="inline-block border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-medium px-8 py-3 rounded-full transition duration-300">
                    Voir tous les cours <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-800 font-medium text-sm mb-4">
                    Témoignages
                </span>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Ce que disent nos apprenants</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Découvrez les témoignages de ceux qui ont suivi nos formations et mis en pratique nos conseils.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 relative transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
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
                        "Les cours sur l'agriculture biologique m'ont permis de transformer complètement mon exploitation. J'ai augmenté ma production et ma rentabilité tout en respectant l'environnement."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Karim Bouazizi" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Karim Bouazizi</h4>
                            <p class="text-sm text-gray-500">Agriculteur à Nabeul</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 relative transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
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
                        "La formation sur l'irrigation m'a fait économiser 40% d'eau tout en améliorant mes rendements. Les formateurs sont très compétents et les conseils pratiques."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Leila Gharbi" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Leila Gharbi</h4>
                            <p class="text-sm text-gray-500">Agricultrice à Sfax</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 relative transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
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
                        "Grâce au cours sur la santé bovine, j'ai pu identifier rapidement une maladie dans mon troupeau et agir avant qu'elle ne se propage. Cela m'a sauvé beaucoup de pertes potentielles."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/86.jpg" alt="Ahmed Trabelsi" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900">Ahmed Trabelsi</h4>
                            <p class="text-sm text-gray-500">Éleveur à Béja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-primary-600 to-primary-800 transform -skew-y-6 origin-top-right z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 text-white">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à améliorer vos compétences agricoles ?</h2>
                    <p class="text-primary-100 text-lg mb-8">Rejoignez notre communauté d'agriculteurs passionnés et accédez à des formations de qualité pour développer votre exploitation.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#courses" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-white text-primary-600 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                            Explorer les cours
                        </a>
                        <a href="#" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-primary-500 text-white border border-primary-400 hover:bg-primary-400 transform hover:-translate-y-1 transition duration-300">
                            Voir les articles
                        </a>
                    </div>
                </div>
                <div class="lg:w-2/5">
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center">
                                <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13c-1.168-.775-2.754-1.253-4.5-1.253s-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4">Demandez notre catalogue</h3>
                        <p class="text-gray-600 text-center mb-6">Recevez notre catalogue complet de formations avec tous les détails et tarifs.</p>
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Votre nom" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <input type="email" placeholder="Votre adresse email" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <button type="submit" class="w-full px-4 py-3 rounded-xl font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transition duration-300">
                                Recevoir le catalogue
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