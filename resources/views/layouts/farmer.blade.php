@if (Auth::check())
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Espace Vétérinaire - Mahsoul')</title>
    <meta name="description" content="Espace Vétérinaire Mahsoul - Plateforme agricole complète">
    <link rel="shortcut icon" href="{{ asset('images/logo-white.jpg') }}" type="image/x-icon">
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
                        earth: '#795548',
                        sky: '#1976D2',
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
        .sidebar-active {
            background-color: rgba(90, 157, 69, 0.1);
            border-left: 4px solid #5a9d45;
        }
    </style>
</head>
<body class="font-sans bg-gray-100 flex h-screen">
    <div id="sidebar" class="bg-white w-64 shadow-md flex-shrink-0 hidden md:block">
        <div class="flex items-center justify-center h-16 border-b">
            <a href="" class="text-xl font-bold text-primary-600">
                Espace Vétérinaire
            </a>
        </div>
        <nav class="mt-5">
            <ul>
                <li>
                    <a href="/vet" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.dashboard') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                 <li>
                    <a href="/vet/consultations" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.consultations.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-comments w-5 h-5 mr-3"></i>
                        <span>Consultations</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.products.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-box w-5 h-5 mr-3"></i>
                        <span>Mes produits</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.orders.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-shopping-cart w-5 h-5 mr-3"></i>
                        <span>Mes commandes</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.crops.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-seedling w-5 h-5 mr-3"></i>
                        <span>Mes cultures</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.weather.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-cloud-sun w-5 h-5 mr-3"></i>
                        <span>Météo</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('vet.reports.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-chart-bar w-5 h-5 mr-3"></i>
                        <span>Rapports</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('messages.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-envelope w-5 h-5 mr-3"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('profile.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-user w-5 h-5 mr-3"></i>
                        <span>Mon profil</span>
                    </a>
                </li>
                <li class="border-t mt-5 pt-3">
                    <a href="" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-arrow-left w-5 h-5 mr-3"></i>
                        <span>Retour au site</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                        @csrf
                        <button type="submit" class="flex items-center w-full text-left">
                            <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6">
            <div class="flex items-center">
                <button id="sidebar-toggle" class="md:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-lg font-medium ml-4">@yield('header', 'Espace Vétérinaire')</h1>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <button id="user-menu-button" class="flex items-center focus:outline-none">
                        <span class="mr-2 text-sm font-medium text-gray-700">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</span>
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ auth()->user()->photo }}" alt="{{ auth()->user()->nom }} {{ auth()->user()->prenom }}">
                    </button>
                    <div id="user-menu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                        <div class="py-1">
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Déconnexion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto bg-gray-100">
            @yield('content')
        </main>
    </div>

    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        });

        // Toggle user menu
        document.getElementById('user-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('user-menu');
            menu.classList.toggle('hidden');
        });

        // Close user menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('user-menu');
            const button = document.getElementById('user-menu-button');
            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>

@else
    <script>
        window.location.href = "{{ route('login') }}";
    </script>
@endif