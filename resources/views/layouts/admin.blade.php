@if (Auth::check())
@if(Auth::user()->type == 'admin')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administration - Mahsoul')</title>
    <meta name="description" content="Panneau d'administration Mahsoul - Gestion de la plateforme agricole">
    <link rel="shortcut icon" href="{{ asset('images/logo-white.jpg') }}" type="image/x-icon">
    <!-- Tailwind CSS -->
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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles supplémentaires pour l'admin -->
    <style>
        .sidebar-active {
            background-color: rgba(90, 157, 69, 0.1);
            border-left: 4px solid #5a9d45;
        }

        .border-red-500 {
            border-color: #ef4444;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            line-height: 1.25rem;
            margin-top: 0.25rem;
        }
    </style>
</head>

<body class="font-sans bg-gray-100 flex h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-white w-54 shadow-md flex-shrink-0 hidden md:block">
        <div class="flex items-center justify-center h-16 border-b">
            <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-primary-600">
                Mahsoul Admin
            </a>
        </div>
        <nav class="mt-5">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.users.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-users w-5 h-5 mr-3"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.products.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.products.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-box w-5 h-5 mr-3"></i>
                        <span>Produits</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.categories.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-tags w-5 h-5 mr-3"></i>
                        <span>Catégories</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.orders.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.orders.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-shopping-cart w-5 h-5 mr-3"></i>
                        <span>Commandes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.articles.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.articles.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-newspaper w-5 h-5 mr-3"></i>
                        <span>Articles</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.comments.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.comments.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-comments w-5 h-5 mr-3"></i>
                        <span>Commentaires</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tags.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.tags.*') ? 'sidebar-active' : '' }}">
                        <i class="fas fa-hashtag w-5 h-5 mr-3"></i>
                        <span>Tags</span>
                    </a>
                </li>
                <li class="border-t mt-5 pt-3">
                    <a href="/" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
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

    <!-- Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header -->
        <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6">
            <div class="flex items-center">
                <button id="sidebar-toggle" class="md:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-lg font-medium ml-4">@yield('header', 'Administration')</h1>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <button id="user-menu-button" class="flex items-center focus:outline-none">
                        <span class="mr-2 text-sm font-medium text-gray-700">{{ Auth::user()->prenom }} {{ Auth::user()->nom}}</span>
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->photo ?? asset('images/default-avatar.jpg') }}" alt="{{ auth()->user()->nom }} {{ auth()->user()->prenom }}">
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

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-gray-100">
            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Scripts -->
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
    @yield('scripts')
</body>

</html>
@else
<script>
    window.location.href = "{{ route('profile.show') }}";
</script>
@endif

@else
<script>
    window.location.href = "{{ route('login') }}";
</script>
@endif