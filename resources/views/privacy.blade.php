<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité - Mahsoul</title>
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
        
        .privacy-section h2 {
            position: relative;
            padding-left: 1rem;
        }
        
        .privacy-section h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            height: 1.5rem;
            width: 4px;
            background: linear-gradient(to bottom, #4a9957, #65b370);
            border-radius: 2px;
        }
        
        .privacy-section ul {
            list-style-type: disc;
            margin-left: 1.5rem;
        }
        
        .privacy-section ol {
            list-style-type: decimal;
            margin-left: 1.5rem;
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

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-600 to-primary-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Politique de Confidentialité</h1>
                <p class="text-xl text-primary-100">Nous nous engageons à protéger vos données personnelles et à respecter votre vie privée.</p>
                <div class="mt-8 flex items-center text-sm">
                    <span class="text-primary-200">Dernière mise à jour :</span>
                    <span class="ml-2 bg-white/20 px-3 py-1 rounded-full">15 avril 2023</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Content -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-custom p-8 md:p-10">
                <div class="prose prose-lg max-w-none privacy-section">
                    <p class="text-gray-600 mb-8">
                        Chez Mahsoul, nous accordons une grande importance à la protection de vos données personnelles. Cette politique de confidentialité explique comment nous collectons, utilisons, partageons et protégeons vos informations lorsque vous utilisez notre site web et nos services.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Informations que nous collectons</h2>
                    <p class="text-gray-600 mb-4">
                        Nous collectons différents types d'informations vous concernant, notamment :
                    </p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li><strong>Informations personnelles</strong> : nom, prénom, adresse email, numéro de téléphone, adresse postale.</li>
                        <li><strong>Informations de compte</strong> : nom d'utilisateur, mot de passe, préférences de compte.</li>
                        <li><strong>Informations de paiement</strong> : numéro de carte de crédit, informations bancaires (nous ne stockons pas ces informations directement, elles sont traitées par nos prestataires de paiement sécurisés).</li>
                        <li><strong>Informations d'utilisation</strong> : comment vous interagissez avec notre site, les pages que vous visitez, les fonctionnalités que vous utilisez.</li>
                        <li><strong>Informations techniques</strong> : adresse IP, type de navigateur, appareil utilisé, système d'exploitation.</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Comment nous utilisons vos informations</h2>
                    <p class="text-gray-600 mb-4">
                        Nous utilisons vos informations pour les finalités suivantes :
                    </p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>Fournir, maintenir et améliorer nos services.</li>
                        <li>Traiter vos transactions et gérer votre compte.</li>
                        <li>Vous envoyer des informations techniques, des mises à jour, des alertes de sécurité et des messages de support.</li>
                        <li>Répondre à vos commentaires, questions et demandes.</li>
                        <li>Communiquer avec vous à propos de nos produits, services, offres et événements.</li>
                        <li>Surveiller et analyser les tendances, l'utilisation et les activités liées à nos services.</li>
                        <li>Détecter, prévenir et résoudre les problèmes techniques et de sécurité.</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Partage de vos informations</h2>
                    <p class="text-gray-600 mb-4">
                        Nous ne vendons pas vos informations personnelles à des tiers. Nous pouvons partager vos informations dans les situations suivantes :
                    </p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>Avec des prestataires de services qui travaillent en notre nom pour nous aider à exploiter notre site et à fournir nos services.</li>
                        <li>Pour se conformer à la loi, à une procédure judiciaire, à une demande gouvernementale ou pour protéger nos droits.</li>
                        <li>Dans le cadre d'une fusion, acquisition ou vente d'actifs, vos informations peuvent être transférées.</li>
                        <li>Avec votre consentement ou selon vos instructions.</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Sécurité des données</h2>
                    <p class="text-gray-600 mb-6">
                        Nous prenons la sécurité de vos informations très au sérieux et mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos informations contre la perte, l'utilisation abusive et l'accès non autorisé. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est totalement sécurisée, et nous ne pouvons garantir une sécurité absolue.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Vos droits</h2>
                    <p class="text-gray-600 mb-4">
                        Selon les lois applicables en matière de protection des données, vous pouvez avoir certains droits concernant vos informations personnelles, notamment :
                    </p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>Le droit d'accéder à vos informations personnelles.</li>
                        <li>Le droit de rectifier ou mettre à jour vos informations personnelles.</li>
                        <li>Le droit de supprimer vos informations personnelles.</li>
                        <li>Le droit de restreindre ou de vous opposer au traitement de vos informations personnelles.</li>
                        <li>Le droit à la portabilité des données.</li>
                        <li>Le droit de retirer votre consentement à tout moment.</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Cookies et technologies similaires</h2>
                    <p class="text-gray-600 mb-6">
                        Nous utilisons des cookies et des technologies similaires pour collecter des informations sur votre activité, votre navigateur et votre appareil. Les cookies sont de petits fichiers texte stockés sur votre navigateur. Ils nous permettent de mémoriser vos préférences, de comprendre comment vous utilisez notre site et de personnaliser votre expérience. Vous pouvez configurer votre navigateur pour refuser tous les cookies ou pour vous avertir lorsqu'un cookie est envoyé. Cependant, certaines fonctionnalités de notre site peuvent ne pas fonctionner correctement sans cookies.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Modifications de cette politique</h2>
                    <p class="text-gray-600 mb-6">
                        Nous pouvons modifier cette politique de confidentialité de temps à autre. Si nous apportons des modifications importantes, nous vous en informerons par email ou par un avis sur notre site web. Nous vous encourageons à consulter régulièrement cette politique pour rester informé de la façon dont nous protégeons vos informations.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Nous contacter</h2>
                    <p class="text-gray-600 mb-4">
                        Si vous avez des questions ou des préoccupations concernant cette politique de confidentialité ou nos pratiques en matière de données, veuillez nous contacter à :
                    </p>
                    <div class="bg-gray-50 p-6 rounded-xl mb-6">
                        <p class="text-gray-700 mb-2"><strong>Adresse email</strong> : privacy@mahsoul.ma</p>
                        <p class="text-gray-700 mb-2"><strong>Adresse postale</strong> : 123 Avenue Mohammed V, Casablanca, 20000, Maroc</p>
                        <p class="text-gray-700"><strong>Téléphone</strong> : +212 522 123 456</p>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <p class="text-gray-600 mb-4 md:mb-0">Vous avez d'autres questions concernant notre politique de confidentialité ?</p>
                        <a href="/contact" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 transition duration-300">
                            Contactez-nous
                        </a>
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
                        <a href="/privacy" class="text-primary-400 hover:text-white text-sm transition duration-300">Confidentialité</a>
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
