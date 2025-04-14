<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Mahsoul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9f1',
                            100: '#dcf1de',
                            200: '#bce3bf',
                            300: '#92d096',
                            400: '#68b86e',
                            500: '#4a9d50',
                            600: '#3a7f3f',
                            700: '#316735',
                            800: '#2a522d',
                            900: '#244527',
                        },
                        secondary: {
                            50: '#fef8ec',
                            100: '#fcefd0',
                            200: '#f9dea1',
                            300: '#f5c767',
                            400: '#f1b03c',
                            500: '#e99520',
                            600: '#d17818',
                            700: '#ad5917',
                            800: '#8c461a',
                            900: '#733b19',
                        },
                        dark: '#1c2434',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
                    },
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
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
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="relative z-20 bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-8">
                    <div>
                        <a href="/" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-800">Mahsoul</a>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="/" class="relative text-gray-600 hover:text-gray-900 font-medium group">
                            Accueil
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/consultation" class="relative text-gray-600 hover:text-gray-900 font-medium group">
                            Consultations
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/formation" class="relative text-gray-600 hover:text-gray-900 font-medium group">
                            Formation
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/marketplace" class="relative text-gray-600 hover:text-gray-900 font-medium group">
                            Marketplace
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                        <a href="/community" class="relative text-gray-600 hover:text-gray-900 font-medium group">
                            Communauté
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-400 rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                        </a>
                    </nav>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/login" class="font-medium text-primary-600 hover:text-primary-700 transition duration-300">
                        Se connecter
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
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Register Section -->
    <section class="py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <!-- Left Column - Image and Text -->
                <div class="w-full md:w-1/2 md:pr-12 mb-10 md:mb-0">
                    <div class="relative">
                        <div class="blob-shape bg-primary-100 absolute top-0 right-0 w-64 h-64 -mt-10 -mr-10 z-0"></div>
                        <div class="relative z-10 overflow-hidden rounded-2xl shadow-soft">
                            <img class="w-full h-auto" src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Agriculture landscape">
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-soft z-20">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Inscription sécurisée</h3>
                                    <p class="text-sm text-gray-600">Vos données sont protégées</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-16 space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Accès à tous nos services</h3>
                                <p class="text-gray-600">Consultations, marketplace, formations et communauté en un seul compte.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Offres exclusives</h3>
                                <p class="text-gray-600">Bénéficiez de promotions et d'offres spéciales réservées aux membres.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Suivi personnalisé</h3>
                                <p class="text-gray-600">Recevez des recommandations adaptées à votre profil et à vos besoins.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Register Form -->
                <div class="w-full md:w-1/2 md:pl-12">
                    <div class="bg-white rounded-2xl shadow-soft p-8 md:p-10">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-2">Créer un compte</h2>
                            <p class="text-gray-600">Rejoignez la communauté Mahsoul</p>
                        </div>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre prénom">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre nom">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre adresse email">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Votre numéro de téléphone">
                            </div>
                            
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Créez un mot de passe">
                                <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.</p>
                            </div>
                            
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer le mot de passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Confirmez votre mot de passe">
                            </div>
                            
                            <div>
                                <label for="user_type" class="block text-sm font-medium text-gray-700 mb-2">Type d'utilisateur</label>
                                <select id="user_type" name="user_type" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                    <option value="" selected disabled>Sélectionnez votre profil</option>
                                    <option value="farmer">Agriculteur</option>
                                    <option value="breeder">Éleveur</option>
                                    <option value="supplier">Fournisseur</option>
                                    <option value="expert">Expert/Consultant</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="text-gray-600">J'accepte les <a href="#" class="text-primary-600 hover:text-primary-700">conditions d'utilisation</a> et la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a></label>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="newsletter" name="newsletter" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="newsletter" class="text-gray-600">Je souhaite recevoir la newsletter et les offres promotionnelles</label>
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-primary-500 to-primary-700 text-white font-medium rounded-lg hover:shadow-lg transition duration-300">
                                Créer mon compte
                            </button>
                        </form>
                        
                        <div class="mt-8">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-2 bg-white text-gray-500">Ou s'inscrire avec</span>
                                </div>
                            </div>
                            
                            <div class="mt-6 grid grid-cols-2 gap-3">
                                <a href="#" class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <i class="fab fa-google text-red-600 mr-2"></i>
                                    Google
                                </a>
                                <a href="#" class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <i class="fab fa-facebook text-blue-600 mr-2"></i>
                                    Facebook
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt-8 text-center">
                            <p class="text-gray-600">
                                Vous avez déjà un compte ? 
                                <a href="/login" class="font-medium text-primary-600 hover:text-primary-700">
                                    Se connecter
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
                        <span class="text-2xl font-bold">Mahsoul</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Votre partenaire pour une agriculture moderne et durable. Nous proposons des services et produits adaptés aux besoins des agriculteurs et éleveurs, pour améliorer votre productivité tout en respectant l'environnement.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
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
