<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Mahsoul</title>
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
        
        .sidebar {
            transition: all 0.3s ease;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.open {
                transform: translateX(0);
            }
        }
        
        .nav-link {
            transition: all 0.2s ease;
            border-radius: 8px;
        }
        
        .nav-link:hover {
            background-color: rgba(74, 153, 87, 0.1);
        }
        
        .nav-link.active {
            background-color: #4a9957;
            color: white;
        }
        
        .card {
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1), 0 4px 11px -3px rgba(0, 0, 0, 0.05);
        }
        
        .chart-bar {
            transition: height 0.3s ease;
        }
        
        .chart-bar:hover {
            opacity: 0.9;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            --tw-ring-color: rgba(74, 153, 87, 0.6);
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            border-color: rgba(74, 153, 87, 0.4);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar bg-white w-64 h-full fixed inset-y-0 left-0 z-30 shadow-custom md:translate-x-0">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="flex items-center justify-center h-16 border-b border-gray-100">
                    <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-500">Mahsoul Admin</span>
                </div>
                
                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 overflow-y-auto">
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="nav-link active flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-tachometer-alt w-5 h-5 mr-3 text-center"></i>
                                <span>Tableau de bord</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-users w-5 h-5 mr-3 text-center"></i>
                                <span>Utilisateurs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-box w-5 h-5 mr-3 text-center"></i>
                                <span>Produits</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-shopping-cart w-5 h-5 mr-3 text-center"></i>
                                <span>Commandes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-calendar-check w-5 h-5 mr-3 text-center"></i>
                                <span>Consultations</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-graduation-cap w-5 h-5 mr-3 text-center"></i>
                                <span>Formations</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-comments w-5 h-5 mr-3 text-center"></i>
                                <span>Forums</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-chart-bar w-5 h-5 mr-3 text-center"></i>
                                <span>Statistiques</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-cog w-5 h-5 mr-3 text-center"></i>
                                <span>Paramètres</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <!-- User Profile -->
                <div class="p-4 border-t border-gray-100">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-3 object-cover" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin Profile">
                        <div>
                            <p class="text-sm font-medium text-gray-900">Ahmed Benali</p>
                            <p class="text-xs text-gray-500">Administrateur</p>
                        </div>
                        <button class="ml-auto text-gray-500 hover:text-gray-700 bg-gray-100 p-2 rounded-full hover:bg-gray-200 transition duration-200">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-0 md:ml-64 overflow-x-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm h-16 flex items-center z-20 sticky top-0">
                <div class="container mx-auto px-4 flex justify-between items-center">
                    <button id="sidebar-toggle" class="md:hidden text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="text-gray-600 hover:text-gray-900 focus:outline-none p-2 rounded-full hover:bg-gray-100 transition duration-200">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full">3</span>
                            </button>
                        </div>
                        <div class="relative">
                            <button class="text-gray-600 hover:text-gray-900 focus:outline-none p-2 rounded-full hover:bg-gray-100 transition duration-200">
                                <i class="fas fa-envelope text-xl"></i>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-primary-500 rounded-full">5</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="container mx-auto px-4 py-8">
                <h1 class="text-2xl font-bold text-gray-900 mb-6">Tableau de bord</h1>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Users Stats -->
                    <div class="card bg-white rounded-xl shadow-custom p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center mr-4">
                                <i class="fas fa-users text-primary-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Utilisateurs</p>
                                <p class="text-2xl font-bold text-gray-900">1,248</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 12%
                            </span>
                            <span class="text-gray-500 ml-2">depuis le mois dernier</span>
                        </div>
                    </div>
                    
                    <!-- Orders Stats -->
                    <div class="card bg-white rounded-xl shadow-custom p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-secondary-100 flex items-center justify-center mr-4">
                                <i class="fas fa-shopping-cart text-secondary-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Commandes</p>
                                <p class="text-2xl font-bold text-gray-900">356</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 8%
                            </span>
                            <span class="text-gray-500 ml-2">depuis le mois dernier</span>
                        </div>
                    </div>
                    
                    <!-- Revenue Stats -->
                    <div class="card bg-white rounded-xl shadow-custom p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-dollar-sign text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Revenus</p>
                                <p class="text-2xl font-bold text-gray-900">45,250 DH</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-green-500 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 15%
                            </span>
                            <span class="text-gray-500 ml-2">depuis le mois dernier</span>
                        </div>
                    </div>
                    
                    <!-- Consultations Stats -->
                    <div class="card bg-white rounded-xl shadow-custom p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-check text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Consultations</p>
                                <p class="text-2xl font-bold text-gray-900">124</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center text-sm">
                            <span class="text-red-500 flex items-center">
                                <i class="fas fa-arrow-down mr-1"></i> 3%
                            </span>
                            <span class="text-gray-500 ml-2">depuis le mois dernier</span>
                        </div>
                    </div>
                </div>
                
                <!-- Charts and Tables Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Sales Chart -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-custom p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Ventes mensuelles</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-xs bg-primary-100 text-primary-700 rounded-full border border-primary-200">Année</button>
                                <button class="px-3 py-1 text-xs bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition duration-200">Mois</button>
                                <button class="px-3 py-1 text-xs bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition duration-200">Semaine</button>
                            </div>
                        </div>
                        <div class="h-64 flex items-end space-x-2">
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-20 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-32 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-24 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-40 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-28 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-36 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-44 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-52 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-48 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-56 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-500 hover:bg-primary-600 rounded-t-lg h-60 transition-all duration-300"></div>
                            <div class="w-1/12 chart-bar bg-primary-100 hover:bg-primary-200 rounded-t-lg h-40 transition-all duration-300"></div>
                        </div>
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <span>Jan</span>
                            <span>Fév</span>
                            <span>Mar</span>
                            <span>Avr</span>
                            <span>Mai</span>
                            <span>Juin</span>
                            <span>Juil</span>
                            <span>Août</span>
                            <span>Sep</span>
                            <span>Oct</span>
                            <span>Nov</span>
                            <span>Déc</span>
                        </div>
                    </div>
                    
                    <!-- Recent Activities -->
                    <div class="bg-white rounded-xl shadow-custom p-6">
                        <h2 class="text-lg font-bold text-gray-900 mb-6">Activités récentes</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-user-plus text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">Nouvel utilisateur inscrit</p>
                                    <p class="text-xs text-gray-500">Il y a 2 heures</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-shopping-bag text-green-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">Nouvelle commande #12345</p>
                                    <p class="text-xs text-gray-500">Il y a 3 heures</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-calendar-alt text-purple-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">Consultation réservée</p>
                                    <p class="text-xs text-gray-500">Il y a 5 heures</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-star text-yellow-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">Nouvel avis produit</p>
                                    <p class="text-xs text-gray-500">Il y a 6 heures</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-exclamation-circle text-red-600 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">Stock faible pour "Semences de Blé"</p>
                                    <p class="text-xs text-gray-500">Il y a 8 heures</p>
                                </div>
                            </div>
                        </div>
                        <button class="w-full mt-6 text-center text-sm text-primary-600 hover:text-primary-700 font-medium transition-all duration-200">
                            Voir toutes les activités
                        </button>
                    </div>
                </div>
                
                <!-- Recent Orders Table -->
                <div class="mt-8 bg-white rounded-xl shadow-custom overflow-hidden">
                    <div class="p-6 border-b border-gray-100">
                        <h2 class="text-lg font-bold text-gray-900">Commandes récentes</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produits</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-all duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#12345</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2 object-cover" src="https://randomuser.me/api/portraits/men/42.jpg" alt="">
                                            <div class="text-sm text-gray-900">Karim Tazi</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Semences de Blé (2), Fertilisant (1)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">325 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Livré</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/04/2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-primary-600 hover:text-primary-900 mr-3 transition-all duration-200">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-900 transition-all duration-200">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-all duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#12344</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2 object-cover" src="https://randomuser.me/api/portraits/women/24.jpg" alt="">
                                            <div class="text-sm text-gray-900">Fatima Zahra</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Système d'Irrigation (1)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1200 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">11/04/2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-primary-600 hover:text-primary-900 mr-3 transition-all duration-200">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-900 transition-all duration-200">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-all duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#12343</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2 object-cover" src="https://randomuser.me/api/portraits/men/86.jpg" alt="">
                                            <div class="text-sm text-gray-900">Ahmed Benali</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Complément Alimentaire (3), Traitement Bio (1)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">855 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Préparation</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10/04/2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-primary-600 hover:text-primary-900 mr-3 transition-all duration-200">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-900 transition-all duration-200">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-all duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#12342</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2 object-cover" src="https://randomuser.me/api/portraits/women/56.jpg" alt="">
                                            <div class="text-sm text-gray-900">Leila Gharbi</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Semences Variées (1), Outils (2)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">520 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Livré</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09/04/2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-primary-600 hover:text-primary-900 mr-3 transition-all duration-200">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-900 transition-all duration-200">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-all duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#12341</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2 object-cover" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                            <div class="text-sm text-gray-900">Youssef Alami</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Fertilisant Organique (2)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">170 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Annulé</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08/04/2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-primary-600 hover:text-primary-900 mr-3 transition-all duration-200">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-900 transition-all duration-200">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-100">
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-500">
                                Affichage de 5 sur 42 commandes
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded text-sm text-gray-600 hover:bg-gray-50 transition-all duration-200">Précédent</button>
                                <button class="px-3 py-1 border rounded text-sm bg-primary-50 text-primary-600 border-primary-200">1</button>
                                <button class="px-3 py-1 border rounded text-sm text-gray-600 hover:bg-gray-50 transition-all duration-200">2</button>
                                <button class="px-3 py-1 border rounded text-sm text-gray-600 hover:bg-gray-50 transition-all duration-200">3</button>
                                <button class="px-3 py-1 border rounded text-sm text-gray-600 hover:bg-gray-50 transition-all duration-200">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');
        
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 768 && !sidebar.contains(e.target) && e.target !== sidebarToggle && !sidebarToggle.contains(e.target)) {
                sidebar.classList.remove('open');
            }
        });

        // Chart animation
        const chartBars = document.querySelectorAll('.chart-bar');
        chartBars.forEach(bar => {
            bar.addEventListener('mouseenter', function() {
                this.style.transform = 'scaleY(1.05)';
            });
            bar.addEventListener('mouseleave', function() {
                this.style.transform = 'scaleY(1)';
            });
        });
    </script>
</body>
</html>
