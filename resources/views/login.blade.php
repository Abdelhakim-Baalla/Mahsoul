<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Mahsoul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9f1',
                            100: '#dcf1df',
                            200: '#bce3c2',
                            300: '#92ce9a',
                            400: '#65b370',
                            500: '#4a9957',
                            600: '#3b7c45',
                            700: '#32653a',
                            800: '#2c5232',
                            900: '#25452b',
                        },
                        secondary: {
                            50: '#fdf9ed',
                            100: '#f7efd1',
                            200: '#efdc9e',
                            300: '#e5c365',
                            400: '#dba93d',
                            500: '#cb8d27',
                            600: '#b06f20',
                            700: '#8c5320',
                            800: '#734321',
                            900: '#61381f',
                        },
                        dark: '#1f2937',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'custom': '0 10px 30px -5px rgba(0, 0, 0, 0.1), 0 4px 11px -3px rgba(0, 0, 0, 0.05)',
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
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            --tw-ring-color: rgba(74, 153, 87, 0.6);
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            border-color: rgba(74, 153, 87, 0.4);
        }

        .form-transition {
            transition: all 0.3s ease;
        }
        
        .form-transition:hover {
            transform: translateY(-2px);
        }

        .header-nav-link {
            position: relative;
        }
        
        .header-nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, #4a9957, #65b370);
            transition: width 0.3s ease;
        }
        
        .header-nav-link:hover::after,
        .header-nav-link.active::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-5">
                <div class="flex items-center space-x-10">
                    <div>
                        <a href="/" class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-500">Mahsoul</a>
                    </div>
                    <nav class="hidden md:flex space-x-10">
                        <a href="/" class="header-nav-link text-gray-600 hover:text-gray-900 font-medium transition">
                            Accueil
                        </a>
                        <a href="/consultation" class="header-nav-link text-gray-600 hover:text-gray-900 font-medium transition">
                            Consultations
                        </a>
                        <a href="/formation" class="header-nav-link text-gray-600 hover:text-gray-900 font-medium transition">
                            Formation
                        </a>
                        <a href="/marketplace" class="header-nav-link text-gray-600 hover:text-gray-900 font-medium transition">
                            Marketplace
                        </a>
                        <a href="/community" class="header-nav-link text-gray-600 hover:text-gray-900 font-medium transition">
                            Communauté
                        </a>
                    </nav>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/login" class="font-medium text-primary-600 hover:text-primary-700 transition">
                        Se connecter
                    </a>
                    <a href="/register" class="flex items-center font-medium px-6 py-2.5 rounded-full bg-gradient-to-r from-primary-500 to-primary-600 text-white hover:shadow-lg transition duration-300">
                        S'inscrire
                    </a>
                </div>
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, hidden by default -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-lg mx-4 mt-1">
                <a href="/" class="block px-4 py-3 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-primary-50">
                    Accueil
                </a>
                <a href="/consultation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-primary-50">
                    Consultations
                </a>
                <a href="/formation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-primary-50">
                    Formation
                </a>
                <a href="/marketplace" class="block px-4 py-3 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-primary-50">
                    Marketplace
                </a>
                <a href="/community" class="block px-4 py-3 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-primary-50">
                    Communauté
                </a>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <a href="/login" class="block px-4 py-2 rounded-md text-base font-medium text-primary-600 hover:text-primary-700">
                            Se connecter
                        </a>
                        <a href="/register" class="block ml-4 px-4 py-2 rounded-md text-base font-medium bg-primary-600 text-white hover:bg-primary-700">
                            S'inscrire
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                        
                        <div class="mt-8">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-white text-gray-500">Ou continuer avec</span>
                                </div>
                            </div>
                            
                            <div class="mt-6 grid grid-cols-2 gap-3">
                                <a href="#" class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
                                    <i class="fab fa-google text-red-600 mr-2"></i>
                                    Google
                                </a>
                                <a href="#" class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
                                    <i class="fab fa-facebook text-blue-600 mr-2"></i>
                                    Facebook
                                </a>
                            </div>
                        </div>
                        
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

    <!-- Footer -->
    <footer class="bg-dark text-white pt-16 pb-8">
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
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="/consultation" class="text-gray-400 hover:text-white transition duration-300">Consultations</a></li>
                        <li><a href="/marketplace" class="text-gray-400 hover:text-white transition duration-300">Marketplace</a></li>
                        <li><a href="/formation" class="text-gray-400 hover:text-white transition duration-300">Formation</a></li>
                        <li><a href="/community" class="text-gray-400 hover:text-white transition duration-300">Communauté</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">À propos</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Qui sommes-nous</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Nos experts</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition duration-300">Contactez-nous</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Carrières</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row md:justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2023 Mahsoul, Inc. Tous droits réservés.</p>
                    <div class="flex space-x-6">
                        <a href="/privacy" class="text-gray-400 hover:text-white text-sm transition duration-300">Confidentialité</a>
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
