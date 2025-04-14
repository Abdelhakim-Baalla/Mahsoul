<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation - Mahsoul</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.02);
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
                        <a href="/consultation" class="relative text-gray-900 font-medium group">
                            Consultations
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/formation" class="relative text-gray-500 hover:text-gray-900 font-medium group">
                            Formation
                            <span class="absolute bottom-0 left-0 w-full h-1 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
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
                <a href="/consultation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-900 bg-primary-50">
                    Consultations
                </a>
                <a href="/formation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
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

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <!-- Decorative circles -->
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-primary-100 rounded-full opacity-50 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-secondary-100 rounded-full opacity-50 blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-12 mb-10 md:mb-0 z-10">
                    <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-6">
                        Service Premium
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Consultation <span class="text-primary-600">Personnalisée</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg">
                        Bénéficiez de l'expertise de nos consultants pour vous accompagner dans vos projets et défis agricoles. Une approche sur mesure pour des résultats concrets.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#services" class="inline-block px-8 py-4 text-center font-medium rounded-full text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                            Découvrir nos services
                        </a>
                        <a href="#contact" class="inline-block px-8 py-4 text-center font-medium rounded-full text-primary-700 bg-primary-50 hover:bg-primary-100 border border-primary-200 transform hover:-translate-y-1 transition duration-300">
                            Nous contacter
                        </a>
                    </div>
                    
                    <div class="mt-10 flex items-center space-x-8">
                        <div class="flex -space-x-2">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/men/86.jpg" alt="">
                        </div>
                        <div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-600 text-sm mt-1">Plus de <span class="font-semibold">98% de satisfaction</span> client</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="blob-shape bg-secondary-100 absolute top-0 right-0 w-80 h-80 -mt-10 -mr-10 z-0"></div>
                    <div class="relative z-10 overflow-hidden rounded-2xl shadow-2xl transform rotate-1">
                        <img class="w-full h-auto" src="/placeholder.svg?height=400&width=600" alt="Consultation agricole">
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-lg z-20">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Expertise vérifiée</h3>
                                <p class="text-sm text-gray-600">Consultants certifiés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 diagonal-box">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Nos Services
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Solutions de consultation adaptées à vos besoins</h2>
                <p class="text-lg text-gray-600">
                    Découvrez notre gamme complète de services de consultation conçus pour répondre à vos défis spécifiques et vous aider à atteindre vos objectifs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-primary-50 flex items-center justify-center mb-6 group-hover:bg-primary-100 transition duration-300">
                            <i class="fas fa-chart-line text-2xl text-primary-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary-600 transition duration-300">Stratégie d'entreprise</h3>
                        <p class="text-gray-600 mb-6">
                            Élaborez une vision claire et des objectifs stratégiques pour guider votre entreprise vers le succès à long terme.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-primary-500"></div>
                </div>

                <!-- Service 2 -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-secondary-50 flex items-center justify-center mb-6 group-hover:bg-secondary-100 transition duration-300">
                            <i class="fas fa-users text-2xl text-secondary-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-secondary-600 transition duration-300">Gestion des ressources humaines</h3>
                        <p class="text-gray-600 mb-6">
                            Optimisez votre capital humain avec des stratégies de recrutement, de formation et de rétention efficaces.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-secondary-600 hover:text-secondary-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-secondary-500"></div>
                </div>

                <!-- Service 3 -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-100 transition duration-300">
                            <i class="fas fa-bullhorn text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition duration-300">Marketing et communication</h3>
                        <p class="text-gray-600 mb-6">
                            Développez des stratégies marketing percutantes pour atteindre votre public cible et augmenter votre visibilité.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-blue-500"></div>
                </div>
                
                <!-- Service 4 -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-purple-50 flex items-center justify-center mb-6 group-hover:bg-purple-100 transition duration-300">
                            <i class="fas fa-cogs text-2xl text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-purple-600 transition duration-300">Optimisation des processus</h3>
                        <p class="text-gray-600 mb-6">
                            Améliorez l'efficacité opérationnelle en identifiant et en éliminant les goulots d'étranglement dans vos processus.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-purple-600 hover:text-purple-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                          d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-purple-500"></div>
                </div>
                
                <!-- Service 5 -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-green-50 flex items-center justify-center mb-6 group-hover:bg-green-100 transition duration-300">
                            <i class="fas fa-laptop-code text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-green-600 transition duration-300">Transformation digitale</h3>
                        <p class="text-gray-600 mb-6">
                            Intégrez les technologies numériques pour moderniser votre entreprise et rester compétitif dans l'ère numérique.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-green-600 hover:text-green-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-green-500"></div>
                </div>
                
                <!-- Service 6 -->
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-yellow-50 flex items-center justify-center mb-6 group-hover:bg-yellow-100 transition duration-300">
                            <i class="fas fa-coins text-2xl text-yellow-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-yellow-600 transition duration-300">Conseil financier</h3>
                        <p class="text-gray-600 mb-6">
                            Obtenez des conseils financiers stratégiques pour optimiser vos investissements et assurer la croissance de votre entreprise.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-yellow-600 hover:text-yellow-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-yellow-500"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-800 font-medium text-sm mb-4">
                    Notre Processus
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Comment nous travaillons avec vous</h2>
                <p class="text-lg text-gray-600">
                    Notre approche méthodique garantit des résultats optimaux pour chaque projet de consultation.
                </p>
            </div>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-primary-100 transform -translate-x-1/2"></div>
                
                <!-- Step 1 -->
                <div class="flex flex-col md:flex-row items-center mb-16 relative">
                    <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 md:text-right">
                        <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-2">Étape 1</span>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Analyse des besoins</h3>
                        <p class="text-gray-600">Nous commençons par comprendre en profondeur vos défis, objectifs et contraintes pour établir une base solide pour notre collaboration.</p>
                    </div>
                    <div class="hidden md:flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary-600 text-white">
                        <span class="font-bold">1</span>
                    </div>
                    <div class="md:w-1/2 md:pl-12 md:text-left">
                        <img src="/placeholder.svg?height=200&width=300" alt="Analyse des besoins" class="rounded-lg shadow-lg">
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center mb-16 relative">
                    <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 md:text-left">
                        <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-2">Étape 2</span>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Élaboration de la stratégie</h3>
                        <p class="text-gray-600">Nos experts élaborent une stratégie personnalisée basée sur votre situation spécifique et les meilleures pratiques du secteur.</p>
                    </div>
                    <div class="hidden md:flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary-600 text-white">
                        <span class="font-bold">2</span>
                    </div>
                    <div class="md:w-1/2 md:pr-12 md:text-right">
                        <img src="/placeholder.svg?height=200&width=300" alt="Élaboration de la stratégie" class="rounded-lg shadow-lg">
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="flex flex-col md:flex-row items-center mb-16 relative">
                    <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 md:text-right">
                        <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-2">Étape 3</span>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Mise en œuvre</h3>
                        <p class="text-gray-600">Nous travaillons en étroite collaboration avec votre équipe pour mettre en œuvre les solutions recommandées de manière efficace.</p>
                    </div>
                    <div class="hidden md:flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary-600 text-white">
                        <span class="font-bold">3</span>
                    </div>
                    <div class="md:w-1/2 md:pl-12 md:text-left">
                        <img src="/placeholder.svg?height=200&width=300" alt="Mise en œuvre" class="rounded-lg shadow-lg">
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="flex flex-col md:flex-row-reverse items-center relative">
                    <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 md:text-left">
                        <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-2">Étape 4</span>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Suivi et optimisation</h3>
                        <p class="text-gray-600">Nous assurons un suivi régulier pour mesurer les résultats, ajuster la stratégie si nécessaire et garantir l'atteinte de vos objectifs.</p>
                    </div>
                    <div class="hidden md:flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 w-12 h-12 rounded-full bg-primary-600 text-white">
                        <span class="font-bold">4</span>
                    </div>
                    <div class="md:w-1/2 md:pr-12 md:text-right">
                        <img src="/placeholder.svg?height=200&width=300" alt="Suivi et optimisation" class="rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 diagonal-box">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-800 font-medium text-sm mb-4">
                    Témoignages
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ce que nos clients disent</h2>
                <p class="text-lg text-gray-600">
                    Découvrez les expériences de ceux qui ont bénéficié de nos services de consultation.
                </p>
            </div>
            
            <!-- Testimonials Slider -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white rounded-2xl p-8 relative shadow-lg">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-16 h-16 bg-primary-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                        </svg>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "Grâce à l'expertise de Mahsoul, nous avons pu transformer notre stratégie commerciale et augmenter nos revenus de 35% en seulement six mois."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sophie Martin">
                        <div>
                            <h4 class="font-bold text-gray-900">Sophie Martin</h4>
                            <p class="text-sm text-gray-500">Directrice Marketing, TechCorp</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-white rounded-2xl p-8 relative shadow-lg">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-16 h-16 bg-secondary-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                        </svg>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "L'équipe de Mahsoul a su identifier rapidement les problèmes dans nos processus et nous a fourni des solutions concrètes qui ont transformé notre efficacité opérationnelle."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Thomas Dubois">
                        <div>
                            <h4 class="font-bold text-gray-900">Thomas Dubois</h4>
                            <p class="text-sm text-gray-500">PDG, InnovateCo</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-white rounded-2xl p-8 relative shadow-lg">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                        </svg>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-6">
                        "La consultation en ressources humaines de Mahsoul nous a permis de réduire notre taux de rotation du personnel de 25% et d'améliorer considérablement la satisfaction de nos employés."
                    </p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://randomuser.me/api/portraits/women/28.jpg" alt="Julie Leroy">
                        <div>
                            <h4 class="font-bold text-gray-900">Julie Leroy</h4>
                            <p class="text-sm text-gray-500">DRH, GlobalServices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-primary-600 to-primary-800 transform -skew-y-6 origin-top-right z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 text-white">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à transformer votre entreprise?</h2>
                    <p class="text-primary-100 text-lg mb-8">Contactez-nous dès aujourd'hui pour discuter de vos besoins spécifiques et découvrir comment nos services de consultation peuvent vous aider à atteindre vos objectifs.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-white text-primary-600 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                            Nous appeler
                        </a>
                        <a href="#" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-primary-500 text-white border border-primary-400 hover:bg-primary-400 transform hover:-translate-y-1 transition duration-300">
                            Prendre rendez-vous
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
                        <h3 class="text-xl font-bold text-center mb-4">Contactez-nous</h3>
                        <p class="text-gray-600 text-center mb-6">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Votre nom" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <input type="email" placeholder="Votre adresse email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <textarea placeholder="Votre message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"></textarea>
                            </div>
                            <button type="submit" class="w-full px-4 py-3 rounded-lg font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transition duration-300">
                                Envoyer
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

