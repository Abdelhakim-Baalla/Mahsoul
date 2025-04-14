<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mahsoul')</title>
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
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        }
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
            0% {
                border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%;
            }

            50% {
                border-radius: 40% 60% 70% 30% / 50% 60% 40% 50%;
            }

            50% {
                border-radius: 60% 40% 50% 50% / 60% 30% 70% 40%;
            }
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

        .card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: transparent;
        }

        .gradient-text {
            background: linear-gradient(135deg, #5a9d45 0%, #db9418 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-link {
            position: relative;
            color: #6b7280;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #111827;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #5a9d45;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .nav-link:hover::after {
            transform: scaleX(1);
        }

        .nav-link.active {
            color: #111827;
        }

        .nav-link.active::after {
            transform: scaleX(1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #5a9d45 0%, #db9418 100%);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background: white;
            color: #5a9d45;
            border: 2px solid #5a9d45;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: #5a9d45;
            color: white;
            transform: translateY(-2px);
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 4px;
            background: linear-gradient(135deg, #5a9d45 0%, #db9418 100%);
            border-radius: 2px;
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #5a9d45 0%, #db9418 100%);
            color: white;
            border-radius: 12px;
            margin-bottom: 16px;
        }

        .testimonial-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .form-input {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 12px 16px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: #5a9d45;
            box-shadow: 0 0 0 3px rgba(90, 157, 69, 0.1);
            outline: none;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 32px;
        }

        .pagination-item {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: white;
            color: #6b7280;
            transition: all 0.3s ease;
        }

        .pagination-item:hover,
        .pagination-item.active {
            background: #5a9d45;
            color: white;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed w-full bg-white/80 backdrop-blur-sm z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-8">
                    <div>
                        <span class="text-3xl font-bold gradient-text">Mahsoul</span>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                            Accueil
                        </a>
                        <a href="/consultation" class="nav-link {{ request()->is('consultation') ? 'active' : '' }}">
                            Consultations
                        </a>
                        <a href="/formation" class="nav-link {{ request()->is('formation') ? 'active' : '' }}">
                            Formation
                        </a>
                        <a href="/marketplace" class="nav-link {{ request()->is('marketplace') ? 'active' : '' }}">
                            Marketplace
                        </a>
                        <a href="/community" class="nav-link {{ request()->is('community') ? 'active' : '' }}">
                            Communauté
                        </a>
                    </nav>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/cart" class="p-2 text-gray-500 hover:text-gray-900 transition">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </a>
                    @auth
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900">
                            <img src="{{ auth()->user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}"
                                alt="{{ auth()->user()->name }}"
                                class="w-8 h-8 rounded-full">
                            <span>{{ auth()->user()->name }}</span>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block">
                            <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
                            <a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Paramètres</a>
                            <form method="POST" action="{{ route('logout') }}" class="block">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                    Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                    @else
                    <a href="/login" class="btn-primary px-6 py-2 rounded-full">
                        Connexion
                    </a>
                    @endauth
                </div>
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-lg mx-4">
                <a href="/" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Accueil
                </a>
                <a href="/consultation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Consultations
                </a>
                <a href="/formation" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Formation
                </a>
                <a href="/marketplace" class="block px-4 py-3 rounded-md text-base font-medium text-gray-500 hover:text-gray-900 hover:bg-primary-50">
                    Marketplace
                </a>
                <a href="/community" class="block px-4 py-3 rounded-md text-base font-medium text-gray-900 bg-primary-50">
                    Communauté
                </a>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <a href="/cart" class="p-2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-shopping-cart text-xl"></i>
                        </a>
                        @auth
                        <a href="/profile" class="ml-3 block px-6 py-3 rounded-full text-base font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700">
                            Mon profil
                        </a>
                        @else
                        <a href="/login" class="ml-3 block px-6 py-3 rounded-full text-base font-medium text-white bg-gradient-to-r from-primary-500 to-primary-700">
                            Connexion
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="col-span-1 md:col-span-2">
                    <div class="mb-6">
                        <span class="text-3xl font-bold gradient-text">Mahsoul</span>
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
                        <li><a href="/consultation" class="text-gray-400 hover:text-white transition duration-300">Consultations</a></li>
                        <li><a href="/marketplace" class="text-gray-400 hover:text-white transition duration-300">Marketplace</a></li>
                        <li><a href="/formation" class="text-gray-400 hover:text-white transition duration-300">Formation</a></li>
                        <li><a href="/community" class="text-gray-400 hover:text-white transition duration-300">Communauté</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">À propos</h3>
                    <ul class="space-y-3">
                        <li><a href="/about" class="text-gray-400 hover:text-white transition duration-300">Qui sommes-nous</a></li>
                        <li><a href="/experts" class="text-gray-400 hover:text-white transition duration-300">Nos experts</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition duration-300">Contactez-nous</a></li>
                        <li><a href="/careers" class="text-gray-400 hover:text-white transition duration-300">Carrières</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row md:justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2023 Mahsoul, Inc. Tous droits réservés.</p>
                    <div class="flex space-x-6">
                        <a href="/privacy" class="text-gray-400 hover:text-white text-sm transition duration-300">Confidentialité</a>
                        <a href="/terms" class="text-gray-400 hover:text-white text-sm transition duration-300">Conditions d'utilisation</a>
                        <a href="/cookies" class="text-gray-400 hover:text-white text-sm transition duration-300">Cookies</a>
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

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>