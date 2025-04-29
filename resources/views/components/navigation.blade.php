<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo et navigation principale -->
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                    <img class="h-12 w-auto" src="{{ asset('images/logo-white.png') }}" alt="Mahsoul Logo">
                        <span class="ml-3 text-2xl font-bold text-primary-700">Mahsoul</span>
                    </a>
                </div>
                
                <!-- Liens de navigation -->
                <div class="hidden md:ml-10 md:flex md:items-center md:space-x-6">
                    <a href="{{ route('welcome') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Accueil</a>
                    <a href="{{ route('products.index') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Marketplace</a>
                    <a href="{{ route('experts.index') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Consultations</a>
                    <a href="{{ route('articles.index') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Formation</a>
                    <a href="{{ route('about') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">À propos</a>
                    <a href="{{ route('contact') }}" class="text-primary-700 hover:text-primary-500 px-3 py-2 font-medium">Contact</a>
                </div>
            </div>
            
            <!-- Actions utilisateur -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <!-- Panier -->
                    <a href="{{ route('cart.index') }}" class="text-primary-700 hover:text-primary-500 relative p-2">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-secondary-500 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs">0</span>
                    </a>
                    
                    <!-- Menu profil - Solution CSS pure -->
                    <div class="profile-dropdown">
                        <button class="profile-button">
                            <img src="{{ Auth::user()->photo ?? asset('images/default-avatar.jpg') }}" 
                                 alt="Photo de profil" 
                                 class="h-8 w-8 rounded-full object-cover border-2 border-primary-200">
                        </button>
                        
                        <div class="dropdown-menu">
                            <div class="dropdown-header">
                                <p class="user-name">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</p>
                                <p class="user-email">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="dropdown-content">
                                <a href="{{ route('profile.show') }}" class="dropdown-item">
                                    <i class="fas fa-user-circle mr-2"></i> Mon profil
                                </a>
                                <a href="{{ route('orders.index') }}" class="dropdown-item">
                                    <i class="fas fa-shopping-bag mr-2"></i> Mes commandes
                                </a>
                                <a href="{{ route('consultations.index') }}" class="dropdown-item">
                                    <i class="fas fa-calendar-alt mr-2"></i> Mes consultations
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Liens connexion/inscription -->
                    <a href="{{ route('login') }}" class="login-button">Connexion</a>
                    <a href="{{ route('register') }}" class="register-button">Inscription</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<style>
    /* Styles de base */
    .profile-dropdown {
        position: relative;
        margin-left: 0.5rem;
    }

    .profile-button {
        display: flex;
        align-items: center;
        padding: 0.5rem;
        border-radius: 9999px;
        transition: background-color 0.2s;
    }

    .profile-button:hover {
        background-color: rgba(236, 253, 245, 0.5); /* primary-50 avec opacité */
    }

    /* Menu dropdown */
    .dropdown-menu {
        position: absolute;
        right: 0;
        margin-top: 0.5rem;
        width: 14rem;
        border-radius: 0.375rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        background-color: white;
        border: 1px solid rgba(0, 0, 0, 0.1);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.2s ease;
        z-index: 50;
    }

    /* Solution CSS pour garder le menu ouvert */
    .profile-dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Contenu du dropdown */
    .dropdown-header {
        padding: 0.5rem 1rem;
        border-bottom: 1px solid #f3f4f6;
    }

    .user-name {
        font-size: 0.875rem;
        font-weight: 500;
        color: #111827;
    }

    .user-email {
        font-size: 0.75rem;
        color: #6b7280;
    }

    .dropdown-content {
        padding: 0.25rem 0;
    }

    .dropdown-item {
        display: block;
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        color: #374151;
        transition: all 0.2s;
    }

    .dropdown-item:hover {
        background-color: #ecfdf5; /* primary-50 */
        color: #047857; /* primary-700 */
    }

    /* Boutons connexion/inscription */
    .login-button {
        color: #047857; /* primary-700 */
        padding: 0.5rem 1rem;
        font-weight: 500;
        transition: color 0.2s;
    }

    .login-button:hover {
        color: #065f46; /* primary-800 */
    }

    .register-button {
        background-color: #059669; /* primary-600 */
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        font-weight: 500;
        transition: background-color 0.2s;
    }

    .register-button:hover {
        background-color: #047857; /* primary-700 */
    }
</style>