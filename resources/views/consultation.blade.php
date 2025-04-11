<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsoul - Consultations Agricoles</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #f8f7f4;
        }
        .calendar-day-selected {
            background-color: #4a8339;
            color: white;
        }
        .time-slot-selected {
            border-color: #4a8339;
            background-color: #f3f9ee;
        }
        .time-slot-disabled {
            color: #d1d5db;
            cursor: not-allowed;
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
        .expert-card {
            transition: all 0.3s ease;
        }
        .expert-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
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
                    <a href="/" class="nav-link text-gray-500 hover:text-gray-900 py-2 text-sm font-medium">
                        Accueil
                    </a>
                    <a href="/consultation" class="nav-link active text-gray-900 py-2 text-sm font-medium">
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
                <a href="/" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Accueil
                </a>
                <a href="/consultation" class="bg-primary-50 border-l-4 border-primary-500 text-primary-700 block pl-3 pr-4 py-2 text-base font-medium">
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


    <!-- Main Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Sidebar: Expert Filters -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8 sticky top-28">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Nos Experts</h2>
                        
                        <!-- Expert Search -->
                        <div class="mb-6">
                            <div class="relative">
                                <input type="text" placeholder="Rechercher un expert..." class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Expert Filters -->
                        <div class="mb-6">
                            <h3 class="font-medium text-gray-900 mb-3">Filtrer par spécialité</h3>
                            <div class="space-y-3">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-3 h-5 w-5" checked>
                                    <span class="text-gray-700">Agriculture générale</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-3 h-5 w-5" checked>
                                    <span class="text-gray-700">Médecine vétérinaire</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-3 h-5 w-5" checked>
                                    <span class="text-gray-700">Agronomie</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-3 h-5 w-5" checked>
                                    <span class="text-gray-700">Protection des cultures</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox text-primary-600 rounded mr-3 h-5 w-5" checked>
                                    <span class="text-gray-700">Irrigation</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Expert List -->
                        <div>
                            <h3 class="font-medium text-gray-900 mb-3">Experts disponibles</h3>
                            
                            <!-- Expert Card 1 -->
                            <div class="expert-card bg-gray-50 rounded-xl p-4 mb-3 cursor-pointer hover:bg-primary-50 transition" onclick="selectExpert('Dr. Ahmed Benali', 'Agronome, spécialiste en irrigation', 'assets/image/expert1.jpg')">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-12 w-12 rounded-full overflow-hidden bg-gray-200">
                                        <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-sm font-medium text-gray-900">Dr. Ahmed Benali</h4>
                                        <p class="text-xs text-gray-500">Agronome, spécialiste en irrigation</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Expert Card 2 -->
                            <div class="expert-card bg-gray-50 rounded-xl p-4 mb-3 cursor-pointer hover:bg-primary-50 transition" onclick="selectExpert('Dr. Sonia Mejri', 'Vétérinaire, spécialiste en santé bovine', 'assets/image/expert2.jpg')">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-12 w-12 rounded-full overflow-hidden bg-gray-200">
                                        <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-sm font-medium text-gray-900">Dr. Sonia Mejri</h4>
                                        <p class="text-xs text-gray-500">Vétérinaire, spécialiste en santé bovine</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Expert Card 3 -->
                            <div class="expert-card bg-gray-50 rounded-xl p-4 cursor-pointer hover:bg-primary-50 transition" onclick="selectExpert('Mohamed Khelifi', 'Expert en protection des cultures', 'assets/image/expert3.jpg')">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-12 w-12 rounded-full overflow-hidden bg-gray-200">
                                        <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-sm font-medium text-gray-900">Mohamed Khelifi</h4>
                                        <p class="text-xs text-gray-500">Expert en protection des cultures</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content: Booking Form and Info -->
                <div class="lg:col-span-9">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-8">
                        <div class="px-6 py-6 border-b border-gray-200 bg-gray-50">
                            <h2 class="text-2xl font-bold text-gray-900">Réserver une consultation</h2>
                        </div>
                        
                        <!-- Selected Expert Info (Hidden by default) -->
                        <div id="selectedExpertInfo" class="px-6 py-4 border-b border-gray-200 hidden bg-primary-50">
                            <div class="flex items-center">
                                <img id="expertImage" src="assets/image/expert1.jpg" alt="" class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-white shadow-md">
                                <div>
                                    <h3 id="expertName" class="text-lg font-bold text-gray-900">Dr. Ahmed Benali</h3>
                                    <p id="expertTitle" class="text-gray-600 text-sm">Agronome, spécialiste en irrigation</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Form Steps -->
                        <form id="consultationForm" class="px-6 py-6">
                            <!-- Form Steps Navigation -->
                            <div class="border-b border-gray-200 mb-6">
                                <nav class="-mb-px flex space-x-8">
                                    <button type="button" id="personalInfoTab" class="border-primary-500 text-primary-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Informations personnelles
                                    </button>
                                    <button type="button" id="dateTimeTab" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                        Date et heure
                                    </button>
                                </nav>
                            </div>
                            
                            <!-- Step 1: Personal Info -->
                            <div id="step1" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="firstName" class="block text-gray-700 font-medium mb-2">Prénom</label>
                                        <input type="text" id="firstName" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" required>
                                    </div>
                                    <div>
                                        <label for="lastName" class="block text-gray-700 font-medium mb-2">Nom</label>
                                        <input type="text" id="lastName" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" required>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                    <input type="email" id="email" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" required>
                                </div>
                                
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                                    <input type="tel" id="phone" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" required>
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 font-medium mb-3">Type de consultation</label>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary-500 hover:bg-primary-50 transition">
                                            <input type="radio" name="consultationType" value="agricultural" class="form-radio text-primary-600 mr-3 h-5 w-5" checked>
                                            <div>
                                                <span class="block font-medium">Agricole</span>
                                                <span class="block text-sm text-gray-500">Pour les cultures et sols</span>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-primary-500 hover:bg-primary-50 transition">
                                            <input type="radio" name="consultationType" value="veterinary" class="form-radio text-primary-600 mr-3 h-5 w-5">
                                            <div>
                                                <span class="block font-medium">Vétérinaire</span>
                                                <span class="block text-sm text-gray-500">Pour les animaux</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="description" class="block text-gray-700 font-medium mb-2">Description du problème</label>
                                    <textarea id="description" rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" required></textarea>
                                </div>
                                
                                <div class="pt-4">
                                    <button type="button" id="nextToStep2" class="px-8 py-3 rounded-xl bg-primary-600 text-white font-medium shadow-lg shadow-primary-500/20 hover:shadow-xl hover:shadow-primary-500/30 transform hover:-translate-y-1 transition-all duration-200">
                                        Continuer <i class="fas fa-arrow-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Step 2: Date and Time -->
                            <div id="step2" class="hidden space-y-6">
                                <div class="flex flex-col md:flex-row gap-8">
                                    <!-- Calendar -->
                                    <div class="w-full md:w-1/2">
                                        <h3 class="font-medium text-gray-900 mb-3">Sélectionner une date</h3>
                                        <div class="border border-gray-200 rounded-xl p-4 shadow-sm">
                                            <div class="flex justify-between mb-4">
                                                <button type="button" id="prevMonth" class="text-gray-600 hover:text-primary-600 focus:outline-none">
                                                    <i class="fas fa-chevron-left"></i>
                                                </button>
                                                <h4 id="currentMonth" class="font-medium">Mars 2023</h4>
                                                <button type="button" id="nextMonth" class="text-gray-600 hover:text-primary-600 focus:outline-none">
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
                                                
                                                <!-- Calendar days -->
                                                <div id="calendarDays" class="col-span-7 grid grid-cols-7 gap-1">
                                                    <!-- Will be populated with JavaScript -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Time Slots -->
                                    <div class="w-full md:w-1/2">
                                        <h3 class="font-medium text-gray-900 mb-3">Sélectionner une heure</h3>
                                        <div class="border border-gray-200 rounded-xl p-4 shadow-sm">
                                            <div id="timeSlots" class="grid grid-cols-2 gap-3">
                                                <!-- Will be populated with JavaScript -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 flex justify-between">
                                    <button type="button" id="backToStep1" class="px-8 py-3 rounded-xl bg-white text-gray-700 font-medium shadow-sm hover:shadow border border-gray-200 transition-all duration-200">
                                        <i class="fas fa-arrow-left mr-2"></i> Retour
                                    </button>
                                    <button type="submit" id="submitBooking" class="px-8 py-3 rounded-xl bg-primary-600 text-white font-medium shadow-lg shadow-primary-500/20 hover:shadow-xl hover:shadow-primary-500/30 transform hover:-translate-y-1 transition-all duration-200" disabled>
                                        Réserver la consultation
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Info Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Consultation vidéo</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Nos consultations se déroulent par vidéoconférence pour un accès facile depuis n'importe où. Un lien vous sera envoyé par email.</p>
                            <a href="#" class="inline-flex items-center text-primary-600 font-medium hover:text-primary-700 transition-colors">
                                Comment ça marche <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                        
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-secondary-100 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-secondary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895 -3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Tarifs</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Nos consultations agricoles commencent à 250 DH pour 30 minutes. Les consultations vétérinaires sont à partir de 300 DH.</p>
                            <a href="#" class="inline-flex items-center text-secondary-600 font-medium hover:text-secondary-700 transition-colors">
                                Voir tous les tarifs <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonials Section -->
            <div class="mt-20">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="inline-block px-3 py-1 rounded-full bg-primary-100 text-primary-800 text-sm font-medium mb-4">Témoignages</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Ce que disent nos clients</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Découvrez les témoignages de nos clients qui ont bénéficié de consultations d'experts.
                    </p>
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
                            <div class="flex text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8">
                                "J'avais un problème avec mes oliviers et Dr. Ahmed m'a fourni des conseils précieux pour traiter la maladie. En quelques semaines, mes arbres étaient en bonne santé. Merci Mahsoul!"
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                                    <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Karim Bouazizi</h4>
                                    <p class="text-sm text-gray-500">Agriculteur à Fès</p>
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
                            <div class="flex text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="text-gray-600 mb-8">
                                "La consultation vétérinaire avec Dr. Sonia a été très utile. Elle a diagnostiqué rapidement le problème de mes vaches laitières et a suggéré un traitement efficace. Je recommande vivement ce service."
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                                    <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Sofiane Mejri</h4>
                                    <p class="text-sm text-gray-500">Éleveur à Marrakech</p>
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
                            <div class="flex text-yellow-400 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-600 mb-8">
                                "Mohamed Khelifi m'a aidé à concevoir un système d'irrigation efficace pour mon exploitation. J'ai réduit ma consommation d'eau de 30% tout en améliorant mes rendements. Un service qui a vraiment changé mon approche!"
                            </p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden mr-4">
                                    <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Leila Gharbi</h4>
                                    <p class="text-sm text-gray-500">Agricultrice à Tanger</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                        Réservez une consultation dès aujourd'hui et bénéficiez de l'expertise de nos spécialistes.
                    </p>
                </div>
                <div class="mt-8 lg:mt-0 flex flex-col sm:flex-row gap-4">
                    <a href="#consultationForm" class="px-8 py-4 rounded-full bg-white text-primary-700 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                        Réserver maintenant
                    </a>
                    <a href="contact.html" class="px-8 py-4 rounded-full bg-primary-500 text-white font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200 border border-primary-400">
                        Nous contacter
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
    
    <!-- Booking Confirmation Modal -->
    <div id="bookingConfirmationModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 shadow-2xl">
            <div class="text-center mb-6">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-2xl text-green-500"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Réservation confirmée !</h2>
                <p class="text-gray-600">Votre consultation a été réservée avec succès.</p>
            </div>
            
            <div class="border-t border-gray-200 pt-6 mb-6">
                <div class="mb-4">
                    <h3 class="font-bold text-gray-900 mb-3">Détails de la réservation</h3>
                    <p class="text-gray-600"><span class="font-medium">Expert:</span> <span id="confirmExpertName">Dr. Ahmed Benali</span></p>
                    <p class="text-gray-600"><span class="font-medium">Date:</span> <span id="confirmDate">23 Mars 2023</span></p>
                    <p class="text-gray-600"><span class="font-medium">Heure:</span> <span id="confirmTime">14:30</span></p>
                    <p class="text-gray-600"><span class="font-medium">Type:</span> <span id="confirmType">Consultation agricole</span></p>
                </div>
                
                <p class="text-gray-600 text-sm mb-4">Vous recevrez un email de confirmation avec un lien vers la visioconférence et les détails du paiement.</p>
            </div>
            
            <div class="flex justify-center">
                <button id="closeConfirmationModal" class="px-8 py-3 rounded-xl bg-primary-600 text-white font-medium shadow-lg shadow-primary-500/20 hover:shadow-xl hover:shadow-primary-500/30 transform hover:-translate-y-1 transition-all duration-200">
                    Fermer
                </button>
            </div>
        </div>
    </div>
    
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Expert selection
        function selectExpert(name, title, image) {
            const expertInfo = document.getElementById('selectedExpertInfo');
            const expertName = document.getElementById('expertName');
            const expertTitle = document.getElementById('expertTitle');
            const expertImage = document.getElementById('expertImage');
            const confirmExpertName = document.getElementById('confirmExpertName');
            
            expertName.textContent = name;
            expertTitle.textContent = title;
            expertImage.src = image;
            expertImage.alt = 'Photo de ' + name;
            confirmExpertName.textContent = name;
            
            expertInfo.classList.remove('hidden');
        }
        
        // Form tabs navigation
        const personalInfoTab = document.getElementById('personalInfoTab');
        const dateTimeTab = document.getElementById('dateTimeTab');
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        
        personalInfoTab.addEventListener('click', () => {
            personalInfoTab.classList.add('border-primary-500', 'text-primary-600');
            personalInfoTab.classList.remove('border-transparent', 'text-gray-500');
            dateTimeTab.classList.add('border-transparent', 'text-gray-500');
            dateTimeTab.classList.remove('border-primary-500', 'text-primary-600');
            
            step1.classList.remove('hidden');
            step2.classList.add('hidden');
        });
        
        dateTimeTab.addEventListener('click', () => {
            dateTimeTab.classList.add('border-primary-500', 'text-primary-600');
            dateTimeTab.classList.remove('border-transparent', 'text-gray-500');
            personalInfoTab.classList.add('border-transparent', 'text-gray-500');
            personalInfoTab.classList.remove('border-primary-500', 'text-primary-600');
            
            step2.classList.remove('hidden');
            step1.classList.add('hidden');
        });
        
        // Form next/back buttons
        const nextToStep2 = document.getElementById('nextToStep2');
        const backToStep1 = document.getElementById('backToStep1');
        
        nextToStep2.addEventListener('click', () => {
            const fields = step1.querySelectorAll('[required]');
            let isValid = true;
            
            fields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (isValid) {
                dateTimeTab.click();
            }
        });
        
        backToStep1.addEventListener('click', () => {
            personalInfoTab.click();
        });
        
        // Calendar functionality
        const calendarDays = document.getElementById('calendarDays');
        const currentMonthEl = document.getElementById('currentMonth');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');
        
        // Get current date
        const today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();
        
        function generateCalendar() {
            calendarDays.innerHTML = '';
            
            // Set month and year in the header
            const monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            currentMonthEl.textContent = `${monthNames[currentMonth]} ${currentYear}`;
            
            // Get first day of month
            const firstDay = new Date(currentYear, currentMonth, 1);
            // Get last day of month
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            
            // Add empty cells for days before first day of month (European calendar: Mon-Sun)
            const firstDayIndex = firstDay.getDay() === 0 ? 6 : firstDay.getDay() - 1;
            for (let i = 0; i < firstDayIndex; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.classList.add('h-10', 'w-10', 'mx-auto');
                calendarDays.appendChild(emptyCell);
            }
            
            // Add days of the month
            for (let day = 1; day <= lastDay.getDate(); day++) {
                const date = new Date(currentYear, currentMonth, day);
                const dayElement = document.createElement('div');
                dayElement.classList.add('h-10', 'w-10', 'mx-auto', 'flex', 'items-center', 'justify-center', 'rounded-full', 'cursor-pointer', 'text-sm');
                
                // Check if the date is in the past or is today
                const isToday = date.toDateString() === today.toDateString();
                const isPast = date < today && !isToday;
                
                // Check if it's Sunday (0)
                const isSunday = date.getDay() === 0;
                
                if (isPast || isSunday) {
                    dayElement.classList.add('text-gray-400', 'cursor-not-allowed');
                } else {
                    dayElement.classList.add('hover:bg-primary-100');
                    
                    // Add click event to select date
                    dayElement.addEventListener('click', () => {
                        // Remove selected class from all days
                        document.querySelectorAll('.calendar-day-selected').forEach(el => {
                            el.classList.remove('calendar-day-selected');
                            el.classList.remove('bg-primary-600', 'text-white');
                        });
                        
                        // Add selected class to this day
                        dayElement.classList.add('calendar-day-selected', 'bg-primary-600', 'text-white');
                        
                        // Generate time slots for the selected date
                        generateTimeSlots(date);
                        
                        // Update confirmation date
                        document.getElementById('confirmDate').textContent = date.toLocaleDateString('fr-FR', { 
                            day: 'numeric', 
                            month: 'long', 
                            year: 'numeric' 
                        });
                    });
                }
                
                // Highlight today
                if (isToday) {
                    dayElement.classList.add('bg-primary-100', 'font-bold', 'text-primary-700');
                }
                
                dayElement.textContent = day;
                calendarDays.appendChild(dayElement);
            }
        }
        
        // Generate time slots for a given date
        function generateTimeSlots(date) {
            const timeSlots = document.getElementById('timeSlots');
            timeSlots.innerHTML = '';
            
            // Example time slots (9:00 - 17:00, 30 min intervals)
            const slots = [
                '09:00', '09:30', '10:00', '10:30', '11:00', '11:30',
                '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00'
            ];
            
            // Randomly make some slots unavailable
            const unavailableSlots = new Set();
            const totalUnavailable = Math.floor(Math.random() * 5) + 2; // 2-6 unavailable slots
            
            for (let i = 0; i < totalUnavailable; i++) {
                const randomIndex = Math.floor(Math.random() * slots.length);
                unavailableSlots.add(randomIndex);
            }
            
            // Create time slot elements
            slots.forEach((time, index) => {
                const slotElement = document.createElement('div');
                slotElement.classList.add('py-3', 'text-center', 'border', 'rounded-xl', 'text-sm');
                
                if (unavailableSlots.has(index)) {
                    // Unavailable slot
                    slotElement.classList.add('time-slot-disabled', 'border-gray-200', 'bg-gray-50');
                    slotElement.textContent = time;
                } else {
                    // Available slot
                    slotElement.classList.add('hover:border-primary-500', 'hover:bg-primary-50', 'cursor-pointer', 'border-gray-200');
                    slotElement.textContent = time;
                    
                    // Add click event to select time slot
                    slotElement.addEventListener('click', () => {
                        // Remove selected class from all slots
                        document.querySelectorAll('.time-slot-selected').forEach(el => {
                            el.classList.remove('time-slot-selected', 'border-primary-500', 'bg-primary-50');
                        });
                        
                        // Add selected class to this slot
                        slotElement.classList.add('time-slot-selected', 'border-primary-500', 'bg-primary-50');
                        
                        // Enable submit button
                        document.getElementById('submitBooking').disabled = false;
                        
                        // Update confirmation time
                        document.getElementById('confirmTime').textContent = time;
                    });
                }
                
                timeSlots.appendChild(slotElement);
            });
        }
        
        // Initialize calendar
        generateCalendar();
        
        // Previous month button
        prevMonthBtn.addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar();
        });
        
        // Next month button
        nextMonthBtn.addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar();
        });
        
        // Form submission
        const consultationForm = document.getElementById('consultationForm');
        const bookingConfirmationModal = document.getElementById('bookingConfirmationModal');
        
        consultationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get consultation type
            const consultationType = document.querySelector('input[name="consultationType"]:checked').value;
            const confirmType = document.getElementById('confirmType');
            
            if (consultationType === 'agricultural') {
                confirmType.textContent = 'Consultation agricole';
            } else {
                confirmType.textContent = 'Consultation vétérinaire';
            }
            
            // Show confirmation modal
            bookingConfirmationModal.classList.remove('hidden');
        });
        
        // Close confirmation modal
        const closeConfirmationModal = document.getElementById('closeConfirmationModal');
        
        closeConfirmationModal.addEventListener('click', () => {
            bookingConfirmationModal.classList.add('hidden');
            
            // Reset form
            consultationForm.reset();
            
            // Hide selected expert info
            document.getElementById('selectedExpertInfo').classList.add('hidden');
            
            // Switch back to first step
            personalInfoTab.click();
            
            // Disable submit button
            document.getElementById('submitBooking').disabled = true;
            
            // Clear selected date and time
            document.querySelectorAll('.calendar-day-selected').forEach(el => {
                el.classList.remove('calendar-day-selected', 'bg-primary-600', 'text-white');
            });
            
            document.querySelectorAll('.time-slot-selected').forEach(el => {
                el.classList.remove('time-slot-selected', 'border-primary-500', 'bg-primary-50');
            });
        });
    </script>
</body>
</html>
