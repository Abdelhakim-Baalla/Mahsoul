<nav class="bg-white/95 backdrop-blur shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                    <img class="h-12 w-auto rounded-full" src="{{ asset('images/logo-white.png') }}" alt="Mahsoul Logo">
                        <span class="ml-3 text-2xl font-extrabold text-forest font-display">Mahsoul<span class="text-leaf">.</span></span>
                    </a>
                </div>
                
                <div class="hidden md:ml-10 md:flex md:items-center md:space-x-6">
                    <a href="{{ route('welcome') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">Accueil</a>
                    <a href="{{ route('products.index') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">Marketplace</a>
                    <a href="{{ route('experts.index') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">Consultations</a>
                    <a href="{{ route('articles.index') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">Formation</a>
                    @auth
                    @if(in_array(Auth::user()->type, ['agricole', 'admin']))
                    <a href="{{ route('farm.dashboard') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">Ma Ferme</a>
                    @endif
                    @endauth
                    <a href="{{ route('about') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">À propos</a>
                    <a href="{{ route('contact') }}" class="text-forest hover:text-leaf px-3 py-2 font-semibold font-display">Contact</a>
                </div>
            </div>
            
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    @php
                        $cartCount = count(session()->get('cart', []));
                    @endphp
                     <form action="{{ route('cart.index') }}">
                        <input type="hidden" name="cart" id="cartInput">
                        <button type="submit" class="text-primary-700 hover:text-primary-500 relative p-2">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-secondary-500 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs">{{$cartCount}}</span>
                        </button>
                     </form>
                    
                    
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
        color: #0e2207;
        padding: 0.6rem 1.25rem;
        font-weight: 700;
        font-family: 'Figtree', sans-serif;
        border: 2px solid #0e2207;
        border-radius: 9999px;
        transition: all 0.25s;
    }

    .login-button:hover {
        background: #0e2207;
        color: #fff;
    }

    .register-button {
        background-color: #0e2207;
        color: white;
        padding: 0.7rem 1.5rem;
        border-radius: 9999px;
        font-weight: 700;
        font-family: 'Figtree', sans-serif;
        transition: all 0.25s;
    }

    .register-button:hover {
        background-color: #1f6306;
        transform: translateY(-2px);
        box-shadow: 0 12px 24px -10px rgba(14,34,7,.5);
    }
</style>

