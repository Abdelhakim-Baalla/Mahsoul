<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsoul - Consultation Agricole et Produits</title>
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
                        earth: {
                            100: '#f5f1e8',
                            200: '#e8e0cc',
                            300: '#d8cdb1',
                            400: '#c2b28e',
                            500: '#a89878',
                            600: '#8c7d5e',
                            700: '#6f6349',
                            800: '#544b37',
                            900: '#3a3326',
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #f8f7f4;
        }
        .hero-pattern {
            background-color: #f8f7f4;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23e0daca' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #5a9d45;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-500">Mahsoul</span>
                    </div>
                </div>
                
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link active text-gray-900 py-2 text-sm font-medium">
                        Accueil
                    </a>
                    <a href="/consultation" class="nav-link text-gray-500 hover:text-gray-900 py-2 text-sm font-medium">
                        Consultations
                    </a>
                    <a href="/formation" class="nav-link text-gray-500 hover:text-gray-900 py-2 text-sm font-medium">
                        Formation
                    </a>
                    <a href="/marketplace" class="nav-link text-gray-500 hover:text-gray-900 py-2 text-sm font-medium">
                        Marketplace
                    </a>
                    <a href="/community" class="nav-link text-gray-500 hover:text-gray-900 py-2 text-sm font-medium">
                        Communauté
                    </a>
                </nav>
                
                <div class="hidden md:flex items-center space-x-4">
                    <a href="cart.html" class="p-2 text-gray-500 hover:text-gray-700 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-primary-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                    </a>
                    <a href="login.html" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-white bg-primary-600 hover:bg-primary-700 shadow-sm transition-all duration-200 hover:shadow">
                        Connexion
                    </a>
                </div>
                
                <div class="flex items-center md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="mobile-menu hidden md:hidden">
            <div class="pt-2 pb-3 space-y-1 border-t border-gray-200">
                <a href="/" class="bg-primary-50 border-l-4 border-primary-500 text-primary-700 block pl-3 pr-4 py-2 text-base font-medium">
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
                <div class="flex items-center justify-between px-4">
                    <a href="cart.html" class="p-2 text-gray-500 hover:text-gray-700 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-primary-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                    </a>
                    <a href="login.html" class="block px-4 py-2 text-base font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-full">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-pattern py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight">
                        <span class="block text-gray-900">Solutions agricoles</span>
                        <span class="block mt-2 bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-500">pour un avenir durable</span>
                    </h1>
                    <p class="mt-6 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto lg:mx-0">
                        Consultations avec des experts, produits agricoles de qualité et formations pour les agriculteurs et éleveurs.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="consultation.html" class="px-8 py-4 rounded-full bg-primary-600 text-white font-medium shadow-lg shadow-primary-500/20 hover:shadow-xl hover:shadow-primary-500/30 transform hover:-translate-y-1 transition-all duration-200">
                            Réserver une consultation
                        </a>
                        <a href="products.html" class="px-8 py-4 rounded-full bg-white text-primary-700 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200 border border-gray-200">
                            Voir nos produits
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary-100 rounded-full"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary-100 rounded-full"></div>
                    <img class="relative z-10 w-full h-auto rounded-2xl shadow-2xl object-cover" src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Agriculture landscape">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-3 py-1 rounded-full bg-primary-100 text-primary-800 text-sm font-medium mb-4">Nos Services</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Tout ce dont vous avez besoin pour votre exploitation
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Mahsoul vous accompagne dans tous les aspects de votre activité agricole.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white rounded-2xl p-8 border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 rounded-full bg-primary-100 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Consultations en ligne</h3>
                    <p class="text-gray-600 mb-6">
                        Réservez des consultations avec des experts agricoles et vétérinaires pour résoudre vos problèmes.
                    </p>
                    <a href="consultation.html" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                        En savoir plus
                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white rounded-2xl p-8 border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 rounded-full bg-secondary-100 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-secondary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Produits agricoles</h3>
                    <p class="text-gray-600 mb-6">
                        Découvrez notre catalogue de produits agricoles de qualité, des semences aux équipements.
                    </p>
                    <a href="products.html" class="inline-flex items-center text-secondary-600 font-medium hover:text-secondary-700 transition-colors">
                        Voir le catalogue
                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card bg-white rounded-2xl p-8 border border-gray-100 shadow-lg">
                    <div class="w-14 h-14 rounded-full bg-earth-100 flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-earth-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Formation en ligne</h3>
                    <p class="text-gray-600 mb-6">
                        Améliorez vos compétences avec nos formations sur les techniques agricoles modernes.
                    </p>
                    <a href="formation.html" class="inline-flex items-center text-earth-700 font-medium hover:text-earth-800 transition-colors">
                        Découvrir les formations
                        <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-3 py-1 rounded-full bg-primary-100 text-primary-800 text-sm font-medium mb-4">Témoignages</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Ce que disent nos clients
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg relative">
                    <div class="absolute -top-5 left-8">
                        <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-6">
                        <p class="text-gray-600 mb-8">
                            "Grâce aux consultations avec les experts de Mahsoul, j'ai pu résoudre un problème persistant avec mes cultures. Leur conseil a été précieux et m'a permis d'augmenter mon rendement de 30%."
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                                <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Ahmed Benali</h4>
                                <p class="text-sm text-gray-500">Agriculteur, Région de Fès</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg relative">
                    <div class="absolute -top-5 left-8">
                        <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-6">
                        <p class="text-gray-600 mb-8">
                            "Les produits vétérinaires que j'ai achetés sur Mahsoul sont de très bonne qualité. La livraison a été rapide et le service client exceptionnel. Je recommande vivement!"
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                                <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Fatima Zahra</h4>
                                <p class="text-sm text-gray-500">Éleveuse, Région de Marrakech</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg relative">
                    <div class="absolute -top-5 left-8">
                        <div class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                    </div>
                    <div class="pt-6">
                        <p class="text-gray-600 mb-8">
                            "Les formations en ligne m'ont permis d'apprendre de nouvelles techniques de culture du safran. J'ai pu mettre en pratique ces connaissances et améliorer la qualité de ma production."
                        </p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                                <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Karim Tazi</h4>
                                <p class="text-sm text-gray-500">Producteur de safran, Taliouine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-primary-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                <defs>
                    <pattern id="pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M0 0L20 0L20 20L0 20Z" fill="none" stroke="white" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#pattern)"/>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:max-w-xl">
                    <h2 class="text-3xl md:text-4xl font-bold text-white">
                        Prêt à améliorer votre exploitation?
                    </h2>
                    <p class="mt-4 text-lg text-primary-100">
                        Rejoignez Mahsoul aujourd'hui et accédez à nos services d'experts, produits de qualité et formations spécialisées.
                    </p>
                </div>
                <div class="mt-8 lg:mt-0 flex flex-col sm:flex-row gap-4">
                    <a href="register.html" class="px-8 py-4 rounded-full bg-white text-primary-700 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                        S'inscrire
                    </a>
                    <a href="consultation.html" class="px-8 py-4 rounded-full bg-primary-500 text-white font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200 border border-primary-400">
                        Réserver une consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 mb-12">
                <div class="col-span-2 lg:col-span-1">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-500">Mahsoul</span>
                    <p class="mt-4 text-gray-600">
                        Solutions agricoles pour un avenir durable et prospère.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">
                        Services
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Consultations</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Produits</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Formations</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Communauté</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">
                        Entreprise
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">À propos</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Emplois</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Partenaires</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">
                        Légal
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Confidentialité</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Conditions</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-4 lg:col-span-1">
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase mb-4">
                        Newsletter
                    </h3>
                    <p class="text-gray-600 mb-4">Restez informé des dernières actualités agricoles</p>
                    <form class="flex">
                        <input type="email" placeholder="Votre email" class="px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 flex-grow">
                        <button type="submit" class="px-4 py-2 rounded-r-lg bg-primary-600 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-100 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; 2023 Mahsoul, Inc. Tous droits réservés.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-600 transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
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
