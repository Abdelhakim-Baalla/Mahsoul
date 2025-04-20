<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communauté - Mahsoul</title>
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
                        <a href="/marketplace" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Marketplace
                        </a>
                        <a href="/community" class="border-primary-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Communauté
                        </a>
                    </nav>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="cart.html" class="p-2 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <a href="login.html" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
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
                <a href="/formation" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Formation
                </a>
                <a href="/marketplace" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Marketplace
                </a>
                <a href="/community" class="bg-primary-50 border-primary-500 text-primary-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Communauté
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <a href="cart.html" class="p-2 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <a href="login.html" class="ml-3 block px-4 py-2 text-base font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-md">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Banner -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <div class="pt-10 sm:pt-16 lg:pt-8 xl:pt-16">
                    <div class="sm:text-center lg:text-left px-4 sm:px-8 xl:pl-12">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Communauté agricole</span>
                            <span class="block text-primary-600">partage et entraide</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Rejoignez notre communauté d'agriculteurs, partagez vos expériences et posez vos questions pour améliorer vos pratiques agricoles.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                                    Nouveau sujet
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-primary-100 hover:bg-primary-200 md:py-4 md:text-lg md:px-10">
                                    Explorer les sujets
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1594761051589-ad4f7a5d53da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1932&q=80" alt="Communauté agricole">
        </div>
    </div>

    <!-- Community Stats -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Notre Communauté</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Une communauté active et engagée
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Rejoignez des milliers d'agriculteurs qui partagent leurs connaissances et s'entraident quotidiennement.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-primary-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">3,250</h3>
                                <p class="mt-2 text-base text-gray-500">Membres actifs dans notre communauté</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-primary-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">1,845</h3>
                                <p class="mt-2 text-base text-gray-500">Sujets de discussion variés</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-primary-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">12,670</h3>
                                <p class="mt-2 text-base text-gray-500">Messages partagés entre agriculteurs</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-primary-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">85</h3>
                                <p class="mt-2 text-base text-gray-500">Membres en ligne aujourd'hui</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search & Filter Section -->
    <div class="bg-gray-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-grow">
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" name="search" id="search" class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="Rechercher dans la communauté...">
                    </div>
                </div>
                <div>
                    <button type="button" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <svg class="mr-2 -ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 00-1 1v5H4a1 1 0 100 2h5v5a1 1 0 102 0v-5h5a1 1 0 100-2h-5V4a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        Nouveau sujet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-10">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Catégories</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Explorez nos thématiques de discussion
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Category 1 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 border-b border-gray-200 bg-primary-50">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary-100 rounded-full p-3">
                                <svg class="h-6 w-6 text-primary-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Cultures & Semences</h3>
                        </div>
                        <p class="mt-3 text-base text-gray-500">Discussions sur les différentes cultures et les meilleures pratiques de semis.</p>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <span>425 sujets</span>
                            <span>1,250 membres</span>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <h4 class="font-medium text-gray-900">Sujet populaire :</h4>
                            <a href="#" class="mt-1 block text-primary-600 hover:text-primary-700">
                                Meilleure période pour planter des tomates
                            </a>
                            <p class="mt-1 text-sm text-gray-500">
                                Dernier message par <span class="font-medium">Ahmed T.</span> il y a 2 heures
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 text-center">
                        <a href="#" class="text-primary-600 font-medium hover:text-primary-500">Voir tous les sujets <span aria-hidden="true">→</span></a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 border-b border-gray-200 bg-blue-50">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
                                <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Irrigation & Eau</h3>
                        </div>
                        <p class="mt-3 text-base text-gray-500">Techniques d'irrigation et gestion efficace des ressources en eau.</p>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <span>312 sujets</span>
                            <span>980 membres</span>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <h4 class="font-medium text-gray-900">Sujet populaire :</h4>
                            <a href="#" class="mt-1 block text-primary-600 hover:text-primary-700">
                                Système goutte-à-goutte pour oliviers
                            </a>
                            <p class="mt-1 text-sm text-gray-500">
                                Dernier message par <span class="font-medium">Leila G.</span> il y a 5 heures
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 text-center">
                        <a href="#" class="text-primary-600 font-medium hover:text-primary-500">Voir tous les sujets <span aria-hidden="true">→</span></a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 border-b border-gray-200 bg-yellow-50">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-yellow-100 rounded-full p-3">
                                <svg class="h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13c-1.168-.775-2.754-1.253-4.5-1.253s-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="ml-4 text-xl font-semibold text-gray-900">Élevage</h3>
                        </div>
                        <p class="mt-3 text-base text-gray-500">Discussions sur l'élevage et la santé animale.</p>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between text-sm text-gray-500 mb-4">
                            <span>287 sujets</span>
                            <span>845 membres</span>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <h4 class="font-medium text-gray-900">Sujet populaire :</h4>
                            <a href="#" class="mt-1 block text-primary-600 hover:text-primary-700">
                                Alimentation des bovins en été
                            </a>
                            <p class="mt-1 text-sm text-gray-500">
                                Dernier message par <span class="font-medium">Karim B.</span> il y a 1 jour
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 text-center">
                        <a href="#" class="text-primary-600 font-medium hover:text-primary-500">Voir tous les sujets <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Members Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Membres Actifs</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Nos contributeurs les plus actifs
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Découvrez les membres qui partagent régulièrement leur expertise et aident la communauté à grandir.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-6">
                    <!-- Member 1 -->
                    <div class="text-center">
                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-20 h-20 rounded-full object-cover mx-auto mb-3">
                        <h4 class="font-medium text-gray-900">Ahmed T.</h4>
                        <p class="text-primary-600 text-sm">245 messages</p>
                        <div class="mt-2 flex justify-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Expert
                            </span>
                        </div>
                    </div>
                    
                    <!-- Member 2 -->
                    <div class="text-center">
                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-20 h-20 rounded-full object-cover mx-auto mb-3">
                        <h4 class="font-medium text-gray-900">Leila G.</h4>
                        <p class="text-primary-600 text-sm">198 messages</p>
                        <div class="mt-2 flex justify-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Modérateur
                            </span>
                        </div>
                    </div>
                    
                    <!-- Member 3 -->
                    <div class="text-center">
                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-20 h-20 rounded-full object-cover mx-auto mb-3">
                        <h4 class="font-medium text-gray-900">Mohamed K.</h4>
                        <p class="text-primary-600 text-sm">187 messages</p>
                        <div class="mt-2 flex justify-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Contributeur
                            </span>
                        </div>
                    </div>
                    
                    <!-- Member 4 -->
                    <div class="text-center">
                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-20 h-20 rounded-full object-cover mx-auto mb-3">
                        <h4 class="font-medium text-gray-900">Amina B.</h4>
                        <p class="text-primary-600 text-sm">165 messages</p>
                        <div class="mt-2 flex justify-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Expert
                            </span>
                        </div>
                    </div>
                    
                    <!-- Member 5 -->
                    <div class="text-center">
                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-20 h-20 rounded-full object-cover mx-auto mb-3">
                        <h4 class="font-medium text-gray-900">Karim B.</h4>
                        <p class="text-primary-600 text-sm">142 messages</p>
                        <div class="mt-2 flex justify-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Débutant
                            </span>
                        </div>
                    </div>
                    
                    <!-- Member 6 -->
                    <div class="text-center">
                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-20 h-20 rounded-full object-cover mx-auto mb-3">
                        <h4 class="font-medium text-gray-900">Sonia M.</h4>
                        <p class="text-primary-600 text-sm">128 messages</p>
                        <div class="mt-2 flex justify-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Contributeur
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Topics -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-10">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Discussions Récentes</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Les sujets les plus actifs
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sujet</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Réponses</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vues</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dernier message</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Topic 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <i class="fas fa-thumbtack text-red-500 mr-2"></i>
                                        <a href="#" class="text-primary-600 hover:text-primary-700 transition font-medium">Conseils pour lutter contre la sécheresse</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Irrigation & Eau</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-8 h-8 rounded-full object-cover mr-2">
                                        <span class="text-gray-700">Mohamed K.</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">24</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">342</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm">Aujourd'hui, 10:45</td>
                            </tr>
                            
                            <!-- Topic 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <a href="#" class="text-primary-600 hover:text-primary-700 transition font-medium">Meilleure période pour planter des tomates</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-primary-100 text-primary-800">Cultures & Semences</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-8 h-8 rounded-full object-cover mr-2">
                                        <span class="text-gray-700">Ahmed T.</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">18</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">256</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm">Aujourd'hui, 14:23</td>
                            </tr>
                            
                            <!-- Topic 3 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <a href="#" class="text-primary-600 hover:text-primary-700 transition font-medium">Alternatives naturelles aux pesticides</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Agriculture Bio</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-8 h-8 rounded-full object-cover mr-2">
                                        <span class="text-gray-700">Amina B.</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">32</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">418</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm">Hier, 18:05</td>
                            </tr>
                            
                            <!-- Topic 4 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <a href="#" class="text-primary-600 hover:text-primary-700 transition font-medium">Alimentation des bovins en été</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Élevage</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-8 h-8 rounded-full object-cover mr-2">
                                        <span class="text-gray-700">Karim B.</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">15</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">203</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm">Il y a 2 jours</td>
                            </tr>
                            
                            <!-- Topic 5 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <a href="#" class="text-primary-600 hover:text-primary-700 transition font-medium">Drones pour la surveillance des cultures</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Équipement & Technologie</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="/placeholder.svg?height=100&width=100" alt="Avatar" class="w-8 h-8 rounded-full object-cover mr-2">
                                        <span class="text-gray-700">Sofiane M.</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">29</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">375</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm">Il y a 1 jour</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-gray-50 p-4 text-center">
                    <a href="#" class="text-primary-600 font-medium hover:text-primary-500">Voir tous les sujets récents</a>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Questions fréquentes</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Tout ce que vous devez savoir sur notre communauté
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Découvrez comment participer et tirer le meilleur parti de notre communauté agricole.
                </p>
            </div>

            <div class="mt-12">
                <dl class="space-y-6 divide-y divide-gray-200">
                    <div class="pt-6">
                        <dt class="text-lg">
                            <button type="button" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none">
                                <span class="font-medium text-gray-900">Comment puis-je créer un nouveau sujet ?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12">
                            <p class="text-base text-gray-500">
                                Pour créer un nouveau sujet, connectez-vous à votre compte, puis cliquez sur le bouton "Nouveau sujet" en haut de la page. Choisissez la catégorie appropriée, donnez un titre à votre sujet et rédigez votre message. N'oubliez pas d'ajouter des tags pertinents pour faciliter la recherche.
                            </p>
                        </dd>
                    </div>

                    <div class="pt-6">
                        <dt class="text-lg">
                            <button type="button" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none">
                                <span class="font-medium text-gray-900">Quelles sont les règles de la communauté ?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12">
                            <p class="text-base text-gray-500">
                                Notre communauté est basée sur le respect mutuel. Nous vous demandons de rester courtois, d'éviter les propos offensants, de ne pas faire de publicité non autorisée et de respecter la propriété intellectuelle. Les discussions doivent rester constructives et pertinentes pour l'agriculture.
                            </p>
                        </dd>
                    </div>

                    <div class="pt-6">
                        <dt class="text-lg">
                            <button type="button" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none">
                                <span class="font-medium text-gray-900">Comment puis-je devenir modérateur ?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12">
                            <p class="text-base text-gray-500">
                                Les modérateurs sont sélectionnés parmi les membres actifs et respectueux de la communauté. Si vous participez régulièrement, aidez les autres membres et respectez les règles, vous pourriez être invité à rejoindre l'équipe de modération. Vous pouvez également contacter l'administration pour exprimer votre intérêt.
                            </p>
                        </dd>
                    </div>

                    <div class="pt-6">
                        <dt class="text-lg">
                            <button type="button" class="text-left w-full flex justify-between items-start text-gray-400 focus:outline-none">
                                <span class="font-medium text-gray-900">Comment signaler un contenu inapproprié ?</span>
                                <span class="ml-6 h-7 flex items-center">
                                    <svg class="h-6 w-6 transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="mt-2 pr-12">
                            <p class="text-base text-gray-500">
                                Si vous rencontrez un contenu inapproprié, cliquez sur le bouton "Signaler" situé sous le message concerné. Sélectionnez la raison du signalement et ajoutez des détails si nécessaire. Notre équipe de modération examinera votre signalement dans les plus brefs délais.
                            </p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-primary-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Restez informé des dernières discussions
                </h2>
                <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto">
                    Abonnez-vous à notre newsletter pour recevoir un résumé hebdomadaire des sujets les plus populaires et des événements à venir.
                </p>
            </div>
            <div class="mt-8 max-w-xl mx-auto">
                <form action="#" method="POST" class="sm:flex">
                    <label for="email-address" class="sr-only">Adresse email</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 border border-gray-300 shadow-sm placeholder-gray-400 focus:ring-primary-500 focus:border-primary-500 sm:max-w-xs rounded-md" placeholder="Votre adresse email">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            S'abonner
                        </button>
                    </div>
                </form>
                <p class="mt-3 text-sm text-gray-500">
                    Nous respectons votre vie privée. Consultez notre <a href="#" class="font-medium text-primary-600 hover:text-primary-500">politique de confidentialité</a>.
                </p>
            </div>
        </div>
    </div>

    <!-- Join Community CTA -->
    <div class="py-16 bg-primary-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Rejoignez notre communauté d'agriculteurs</h2>
            <p class="text-white/90 mb-8 max-w-3xl mx-auto">Partagez vos connaissances, posez vos questions et connectez-vous avec d'autres agriculteurs pour améliorer vos pratiques agricoles.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="register.html" class="bg-white hover:bg-gray-100 text-primary-600 font-medium px-8 py-3 rounded-lg transition">
                    S'inscrire maintenant
                </a>
                <a href="login.html" class="border border-white text-white hover:bg-white/20 font-medium px-8 py-3 rounded-lg transition">
                    Se connecter
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
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1
