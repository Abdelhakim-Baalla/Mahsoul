<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Mahsoul</title>
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
        
        .contact-card {
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
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
        
        .faq-item {
            transition: all 0.3s ease;
        }
        
        .faq-item:hover {
            background-color: #f0f9f1;
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
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden  fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Nous sommes à votre écoute</h1>
                <p class="text-xl text-primary-100">Vous avez des questions ou besoin d'assistance ? Notre équipe est là pour vous aider. N'hésitez pas à nous contacter.</p>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Card 1 -->
                <div class="contact-card bg-white rounded-2xl shadow-custom p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Notre adresse</h3>
                    <p class="text-gray-600">
                        123 Avenue Mohammed V<br />
                        Casablanca, 20000
                        <br />
                        Maroc
                    </p>
                </div>

                <!-- Contact Card 2 -->
                <div class="contact-card bg-white rounded-2xl shadow-custom p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-phone-alt text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Téléphone</h3>
                    <p class="text-gray-600">
                        +212 522 123 456
                        <br />
                        +212 661 789 012
                    </p>
                    <p class="text-sm text-gray-500 mt-2">
                        Lun-Ven: 9h-18h
                        <br />
                        Sam: 9h-13h
                    </p>
                </div>

                <!-- Contact Card 3 -->
                <div class="contact-card bg-white rounded-2xl shadow-custom p-8 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full bg-primary-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-600">
                        info@mahsoul.ma
                        <br />
                        support@mahsoul.ma
                    </p>
                    <p class="text-sm text-gray-500 mt-2">
                        Nous répondons généralement
                        <br />
                        sous 24-48 heures
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Formulaire de contact
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Envoyez-nous un message</h2>
                <p class="text-lg text-gray-600">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-custom overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-8 lg:p-12">
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="form-transition">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                                        Prénom
                                    </label>
                                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre prénom">
                                </div>
                                <div class="form-transition">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                                        Nom
                                    </label>
                                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre nom">
                                </div>
                            </div>

                            <div class="mb-6 form-transition">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email
                                </label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre adresse email">
                            </div>

                            <div class="mb-6 form-transition">
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Téléphone
                                </label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre numéro de téléphone">
                            </div>

                            <div class="mb-6 form-transition">
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                    Sujet
                                </label>
                                <select id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200">
                                    <option value="" selected disabled>Sélectionnez un sujet</option>
                                    <option value="general">Renseignement général</option>
                                    <option value="support">Support technique</option>
                                    <option value="sales">Service commercial</option>
                                    <option value="partnership">Partenariat</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>

                            <div class="mb-6 form-transition">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                    Message
                                </label>
                                <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-200" placeholder="Votre message"></textarea>
                            </div>

                            <div class="mb-6">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="privacy" name="privacy" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded transition-all duration-200">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="privacy" class="text-gray-600">
                                            J'accepte la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-medium rounded-lg hover:shadow-lg transition duration-300">
                                Envoyer le message
                            </button>
                        </form>
                    </div>

                    <div class="relative h-96 lg:h-auto">
                        <iframe class="absolute inset-0 w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.846447851806!2d-7.6192183!3d33.5731104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDM0JzIzLjIiTiA3wrAzNycwOS4yIlc!5e0!3m2!1sfr!2sma!4v1650000000000!5m2!1sfr!2sma" style="border: 0;" allowFullScreen loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="inline-block px-4 py-2 rounded-full bg-secondary-100 text-secondary-800 font-medium text-sm mb-4">
                    FAQ
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Questions fréquemment posées</h2>
                <p class="text-lg text-gray-600">Trouvez rapidement des réponses aux questions les plus courantes.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item bg-gray-50 rounded-xl p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="text-lg font-bold text-gray-900">Comment puis-je passer une commande ?</h3>
                            <i class="fas fa-chevron-down text-primary-600"></i>
                        </button>
                        <div class="mt-4 text-gray-600">
                            <p>
                                Pour passer une commande, vous devez d'abord créer un compte sur notre site. Ensuite, parcourez notre catalogue, ajoutez les produits souhaités à votre panier et suivez les étapes du processus de paiement. Vous recevrez une confirmation par email une fois votre commande validée.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item bg-gray-50 rounded-xl p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="text-lg font-bold text-gray-900">Quels sont les délais de livraison ?</h3>
                            <i class="fas fa-chevron-down text-primary-600"></i>
                        </button>
                        <div class="mt-4 text-gray-600">
                            <p>
                                Les délais de livraison varient en fonction de votre localisation. En général, les commandes sont livrées dans un délai de 2 à 5 jours ouvrables dans les grandes villes, et de 5 à 10 jours pour les zones rurales. Vous pouvez suivre l'état de votre commande dans votre espace client.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item bg-gray-50 rounded-xl p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="text-lg font-bold text-gray-900">Comment réserver une consultation ?</h3>
                            <i class="fas fa-chevron-down text-primary-600"></i>
                        </button>
                        <div class="mt-4 text-gray-600">
                            <p>
                                Pour réserver une consultation, rendez-vous sur la page "Consultations", choisissez le type de consultation qui vous intéresse, sélectionnez un expert disponible et choisissez une date et une heure qui vous conviennent. Vous devrez ensuite procéder au paiement pour confirmer votre réservation.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <p class="text-gray-600 mb-4">Vous n'avez pas trouvé la réponse à votre question ?</p>
                    <a href="#" class="inline-block px-8 py-4 text-center font-medium rounded-full text-white bg-gradient-to-r from-primary-500 to-primary-600 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                        Contactez notre équipe
                    </a>
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
                        <li><a href="/contact" class="text-primary-400 hover:text-white transition duration-300">Contactez-nous</a></li>
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
        
        // FAQ toggle
        const faqButtons = document.querySelectorAll('.faq-item button');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');
                
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            });
        });
    </script>
</body>
</html>
