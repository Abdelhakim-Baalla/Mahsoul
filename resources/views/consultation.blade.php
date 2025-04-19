<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation - Mahsoul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        sans: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'custom': '0 10px 30px -5px rgba(0, 0, 0, 0.1), 0 4px 11px -3px rgba(0, 0, 0, 0.05)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
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
                <h1 class="text-4xl font-bold mb-4">Obtenez des conseils d'experts pour votre exploitation</h1>
                <p class="text-xl text-primary-100">Réservez une consultation personnalisée avec nos experts agricoles et vétérinaires.</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-12">
                <!-- Booking Form and Calendar -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-custom p-6 mb-8">
                        <h2 class="text-2xl font-heading font-bold text-dark mb-6">Réserver une consultation</h2>
                        
                        <!-- Selected Expert Info -->
                        <div id="selectedExpertInfo" class="mb-6 border-b border-gray-200 pb-6 hidden">
                            <div class="flex items-center">
                                <img id="expertImage" src="/placeholder.svg?height=80&width=80" alt="" class="w-20 h-20 rounded-full object-cover mr-4">
                                <div>
                                    <h3 id="expertName" class="text-xl font-semibold text-dark"></h3>
                                    <p id="expertTitle" class="text-gray-500"></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Form -->
                        <form id="consultationForm">
                            <!-- Step 1: Personal Info -->
                            <div id="step1" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="firstName" class="block text-gray-700 font-medium mb-2">Prénom</label>
                                        <input type="text" id="firstName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                    </div>
                                    <div>
                                        <label for="lastName" class="block text-gray-700 font-medium mb-2">Nom</label>
                                        <input type="text" id="lastName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                    <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                </div>
                                
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                                    <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2">Type de consultation</label>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <label class="flex items-center p-4 border border-gray-300 rounded-md cursor-pointer hover:border-primary transition">
                                            <input type="radio" name="consultationType" value="agricultural" class="form-radio text-primary mr-3" checked>
                                            <div>
                                                <span class="block font-medium">Agricole</span>
                                                <span class="block text-sm text-gray-500">Pour les cultures et sols</span>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-4 border border-gray-300 rounded-md cursor-pointer hover:border-primary transition">
                                            <input type="radio" name="consultationType" value="veterinary" class="form-radio text-primary mr-3">
                                            <div>
                                                <span class="block font-medium">Vétérinaire</span>
                                                <span class="block text-sm text-gray-500">Pour les animaux</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="description" class="block text-gray-700 font-medium mb-2">Description du problème</label>
                                    <textarea id="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required></textarea>
                                </div>
                                
                                <div class="pt-4">
                                    <button type="button" id="nextToStep2" class="bg-primary hover:bg-primary/90 text-white font-medium px-6 py-2 rounded-md transition">
                                        Continuer <i class="fas fa-arrow-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Step 2: Date and Time -->
                            <div id="step2" class="hidden space-y-4">
                                <div class="flex flex-col md:flex-row gap-6">
                                    <!-- Calendar -->
                                    <div class="w-full md:w-1/2">
                                        <h3 class="font-semibold text-gray-700 mb-3">Sélectionner une date</h3>
                                        <div class="border border-gray-300 rounded-md p-4">
                                            <div class="flex justify-between mb-4">
                                                <button id="prevMonth" class="text-gray-600 hover:text-primary focus:outline-none">
                                                    <i class="fas fa-chevron-left"></i>
                                                </button>
                                                <h4 id="currentMonth" class="font-medium">Mars 2023</h4>
                                                <button id="nextMonth" class="text-gray-600 hover:text-primary focus:outline-none">
                                                    <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </div>
                                            <div class="grid grid-cols-7 gap-1 text-center">
                                                <div class="text-gray-500 text-sm font-medium py-1">Lu</div>
                                                <div class="text-gray-500 text-sm font-medium py-1">Ma</div>
                                                <div class="text-gray-500 text-sm font-medium py-1">Me</div>
                                                <div class="text-gray-500 text-sm font-medium py-1">Je</div>
                                                <div class="text-gray-500 text-sm font-medium py-1">Ve</div>
                                                <div class="text-gray-500 text-sm font-medium py-1">Sa</div>
                                                <div class="text-gray-500 text-sm font-medium py-1">Di</div>
                                                
                                                <!-- Calendar days (will be generated by JS) -->
                                                <div id="calendarDays" class="col-span-7 grid grid-cols-7 gap-1">
                                                    <!-- Days will be inserted here by JavaScript -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Time Slots -->
                                    <div class="w-full md:w-1/2">
                                        <h3 class="font-semibold text-gray-700 mb-3">Sélectionner une heure</h3>
                                        <div class="border border-gray-300 rounded-md p-4">
                                            <div id="timeSlots" class="grid grid-cols-2 gap-2">
                                                <!-- Time slots will be inserted here by JavaScript -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 flex justify-between">
                                    <button type="button" id="backToStep1" class="border border-gray-300 hover:bg-gray-100 text-gray-700 font-medium px-6 py-2 rounded-md transition">
                                        <i class="fas fa-arrow-left mr-2"></i> Retour
                                    </button>
                                    <button type="submit" id="submitBooking" class="bg-primary hover:bg-primary/90 text-white font-medium px-6 py-2 rounded-md transition" disabled>
                                        Réserver la consultation
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Info Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-lg shadow-custom p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-video text-xl text-primary"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-dark">Consultation vidéo</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Nos consultations se déroulent par vidéoconférence pour un accès facile depuis n'importe où. Un lien vous sera envoyé par email.</p>
                            <a href="#" class="text-primary hover:text-secondary transition inline-flex items-center">
                                Comment ça marche <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-custom p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-coins text-xl text-primary"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-dark">Tarifs</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Nos consultations agricoles commencent à 50 DT pour 30 minutes. Les consultations vétérinaires sont à partir de 70 DT.</p>
                            <a href="#" class="text-primary hover:text-secondary transition inline-flex items-center">
                                Voir tous les tarifs <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1 mt-12 lg:mt-0">
                    <div class="bg-white rounded-lg shadow-custom p-6">
                        <h2 class="text-xl font-semibold text-dark mb-4">Nos Experts</h2>
                        
                        <!-- Expert 1 -->
                        <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-50 p-2 rounded-md transition" data-expert='{"name": "Dr. Amina Ben Salem", "title": "Expert en Agriculture Biologique", "image": "assets/image/expert1.jpg"}'>
                            <img src="/placeholder.svg?height=60&width=60" alt="Dr. Amina Ben Salem" class="w-14 h-14 rounded-full object-cover mr-3">
                            <div>
                                <h3 class="text-lg font-medium text-dark">Dr. Amina Ben Salem</h3>
                                <p class="text-gray-500 text-sm">Expert en Agriculture Biologique</p>
                            </div>
                        </div>
                        
                        <!-- Expert 2 -->
                        <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-50 p-2 rounded-md transition" data-expert='{"name": "Mohamed Khelifi", "title": "Spécialiste en Irrigation", "image": "assets/image/expert2.jpg"}'>
                            <img src="/placeholder.svg?height=60&width=60" alt="Mohamed Khelifi" class="w-14 h-14 rounded-full object-cover mr-3">
                            <div>
                                <h3 class="text-lg font-medium text-dark">Mohamed Khelifi</h3>
                                <p class="text-gray-500 text-sm">Spécialiste en Irrigation</p>
                            </div>
                        </div>
                        
                        <!-- Expert 3 -->
                        <div class="flex items-center mb-4 cursor-pointer hover:bg-gray-50 p-2 rounded-md transition" data-expert='{"name": "Dr. Sonia Mansour", "title": "Vétérinaire", "image": "assets/image/expert3.jpg"}'>
                            <img src="/placeholder.svg?height=60&width=60" alt="Dr. Sonia Mansour" class="w-14 h-14 rounded-full object-cover mr-3">
                            <div>
                                <h3 class="text-lg font-medium text-dark">Dr. Sonia Mansour</h3>
                                <p class="text-gray-500 text-sm">Vétérinaire</p>
                            </div>
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
        
        // Consultation booking form
        const consultationForm = document.getElementById('consultationForm');
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        const nextToStep2Button = document.getElementById('nextToStep2');
        const backToStep1Button = document.getElementById('backToStep1');
        const submitBookingButton = document.getElementById('submitBooking');
        const expertImage = document.getElementById('expertImage');
        const expertName = document.getElementById('expertName');
        const expertTitle = document.getElementById('expertTitle');
        const selectedExpertInfo = document.getElementById('selectedExpertInfo');
        
        // Calendar elements
        const calendarDays = document.getElementById('calendarDays');
        const currentMonth = document.getElementById('currentMonth');
        const prevMonthButton = document.getElementById('prevMonth');
        const nextMonthButton = document.getElementById('nextMonth');
        
        let selectedDate = null;
        let selectedTime = null;
        let currentDate = new Date();
        
        // Function to generate calendar days
        function generateCalendar(year, month) {
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startDay = firstDay.getDay(); // 0 (Sunday) to 6 (Saturday)
            
            let daysHTML = '';
            
            // Add empty boxes for days before the first day of the month
            for (let i = 0; i < startDay; i++) {
                daysHTML += '<div class="py-2"></div>';
            }
            
            // Add days of the month
            for (let i = 1; i <= daysInMonth; i++) {
                const date = new Date(year, month, i);
                const isToday = date.toDateString() === new Date().toDateString();
                const isSelected = selectedDate && date.toDateString() === selectedDate.toDateString();
                
                const dayClass = `py-2 rounded-full cursor-pointer hover:bg-gray-200 transition ${isToday ? 'font-bold text-primary' : 'text-gray-700'} ${isSelected ? 'bg-primary text-white' : ''}`;
                
                daysHTML += `<div class="${dayClass}" data-date="${date.toDateString()}">${i}</div>`;
            }
            
            calendarDays.innerHTML = daysHTML;
        }
        
        // Function to generate time slots
        function generateTimeSlots() {
            const timeSlotsContainer = document.getElementById('timeSlots');
            let timeSlotsHTML = '';
            
            const timeSlots = ['09:00', '10:00', '11:00', '14:00', '15:00', '16:00'];
            
            timeSlots.forEach(time => {
                const isSelected = selectedTime === time;
                const timeSlotClass = `py-2 px-4 rounded-md border border-gray-300 cursor-pointer hover:bg-gray-100 transition ${isSelected ? 'bg-primary text-white' : 'text-gray-700'}`;
                
                timeSlotsHTML += `<div class="${timeSlotClass}" data-time="${time}">${time}</div>`;
            });
            
            timeSlotsContainer.innerHTML = timeSlotsHTML;
        }
        
        // Function to update the calendar and time slots
        function updateCalendarAndTimeSlots() {
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();

            currentMonth.textContent = new Date(year, month).toLocaleDateString('fr-FR', { year: 'numeric', month: 'long' });
            generateCalendar(year, month);
            generateTimeSlots();
        }
        
        // Event listeners for calendar navigation
        prevMonthButton.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendarAndTimeSlots();
        });
        
        nextMonthButton.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendarAndTimeSlots();
        });
        
        // Event listener for selecting a date
        calendarDays.addEventListener('click', (event) => {
            if (event.target.tagName === 'DIV' && event.target.textContent !== '') {
                // Remove selected class from previously selected date
                if (selectedDate) {
                    const prevSelected = calendarDays.querySelector(`[data-date="${selectedDate.toDateString()}"]`);
                    if (prevSelected) {
                        prevSelected.classList.remove('bg-primary', 'text-white');
                        prevSelected.classList.add('text-gray-700');
                    }
                }
                
                selectedDate = new Date(event.target.dataset.date);
                event.target.classList.add('bg-primary', 'text-white');
                
                // Enable time slots and generate them
                generateTimeSlots();
            }
        });
        
        // Event listener for selecting a time slot
        document.getElementById('timeSlots').addEventListener('click', (event) => {
            if (event.target.tagName === 'DIV') {
                // Remove selected class from previously selected time
                if (selectedTime) {
                    const prevSelected = document.querySelector(`[data-time="${selectedTime}"]`);
                    if (prevSelected) {
                        prevSelected.classList.remove('bg-primary', 'text-white');
                        prevSelected.classList.add('text-gray-700');
                    }
                }
                
                selectedTime = event.target.dataset.time;
                event.target.classList.add('bg-primary', 'text-white');
                
                // Enable submit button
                submitBookingButton.disabled = false;
            }
        });
        
        // Event listener for form submission
        consultationForm.addEventListener('submit', (event) => {
            event.preventDefault();
            
            // Gather form data
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const consultationType = document.querySelector('input[name="consultationType"]:checked').value;
            const description = document.getElementById('description').value;
            
            // Display confirmation message (you can replace this with an actual submission)
            alert(`Consultation réservée pour ${firstName} ${lastName} le ${selectedDate.toLocaleDateString()} à ${selectedTime} !`);
        });
        
        // Event listener for next button
        nextToStep2Button.addEventListener('click', () => {
            step1.classList.add('hidden');
            step2.classList.remove('hidden');
        });
        
        // Event listener for back button
        backToStep1Button.addEventListener('click', () => {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
        });

        // Expert selection
        document.querySelectorAll('.flex[data-expert]').forEach(expertElement => {
            expertElement.addEventListener('click', () => {
                const expertData = JSON.parse(expertElement.dataset.expert);

                expertImage.src = expertData.image;
                expertName.textContent = expertData.name;
                expertTitle.textContent = expertData.title;

                selectedExpertInfo.classList.remove('hidden');
            });
        });
        
        // Initialize calendar and time slots
        updateCalendarAndTimeSlots();
    </script>
</body>
</html>
