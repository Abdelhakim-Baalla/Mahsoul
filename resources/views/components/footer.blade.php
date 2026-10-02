<footer class="bg-forest text-white pt-14 pb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-10 mb-10 border-b border-white/10">
            <div>
                <h3 class="font-display text-2xl font-extrabold">Restez informé<span class="text-sun">.</span></h3>
                <p class="text-cream/60 text-sm mt-1">Conseils agricoles, nouveautés marketplace, 1 email par mois.</p>
            </div>
            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex w-full md:w-auto gap-2">
                @csrf
                <input type="email" name="email" placeholder="votre@email.ma" required class="flex-1 md:w-72 px-5 py-3 rounded-full bg-white/10 border border-white/20 text-white placeholder:text-cream/40 focus:outline-none focus:border-sun text-sm">
                <button type="submit" class="px-6 py-3 bg-sun hover:bg-yellow-300 text-forest font-display font-bold text-sm rounded-full transition">OK</button>
            </form>
        </div>
        @if(session('newsletter'))
        <div class="mb-6 bg-sun/15 border border-sun/40 p-4 rounded-2xl">
            <p class="text-sm text-sun">{{ session('newsletter') }}</p>
        </div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <div class="col-span-1">
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/logo-white.jpg') }}" alt="Mahsoul Logo">
                    <span class="ml-2 text-2xl font-extrabold font-display">Mahsoul<span class="text-sun">.</span></span>
                </div>
                <p class="mt-3 text-cream/70 text-sm">
                    Plateforme agricole intelligente : experts, marketplace et formation pour le Maroc.
                </p>
                <p class="mt-3 text-cream/60 text-xs">Lun – Sam : 09h00 – 18h00</p>
                <div class="mt-4 flex space-x-3">
                    <a href="#" aria-label="Facebook" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-sm hover:bg-sun hover:text-forest transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" aria-label="X" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-sm hover:bg-sun hover:text-forest transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-sm hover:bg-sun hover:text-forest transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://github.com/Abdelhakim-Baalla/Mahsoul" aria-label="GitHub" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-sm hover:bg-sun hover:text-forest transition">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-display text-sm font-bold mb-3 uppercase tracking-widest text-sun">Liens rapides</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('welcome') }}" class="text-cream/70 hover:text-sun text-sm">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="text-cream/70 hover:text-sun text-sm">À propos</a></li>
                    <li><a href="{{ route('contact') }}" class="text-cream/70 hover:text-sun text-sm">Contact</a></li>
                    <li><a href="{{ route('faq') }}" class="text-cream/70 hover:text-sun text-sm">FAQ</a></li>
                    <li><a href="{{ route('farm.dashboard') }}" class="text-cream/70 hover:text-sun text-sm">Ma Ferme (Farm OS)</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-display text-sm font-bold mb-3 uppercase tracking-widest text-sun">Services</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('experts.index') }}" class="text-cream/70 hover:text-sun text-sm">Consultations d'experts</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-cream/70 hover:text-sun text-sm">Marketplace</a></li>
                    <li><a href="{{ route('articles.index') }}" class="text-cream/70 hover:text-sun text-sm">Formation</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-display text-sm font-bold mb-3 uppercase tracking-widest text-sun">Contact</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-xs text-sun"></i>
                        <span class="text-cream/70 text-sm">+212 620 022 074</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2 text-xs text-sun"></i>
                        <span class="text-cream/70 text-sm">contact@mahsoul.ma</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2 text-xs text-sun"></i>
                        <span class="text-cream/70 text-sm">Agadir, Maroc</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-10 pt-5 border-t border-white/10 flex flex-col md:flex-row justify-between items-center">
            <p class="text-cream/50 text-xs">&copy; {{ date('Y') }} Mahsoul — Farm OS. Tous droits réservés.</p>
            <div class="mt-2 md:mt-0 flex space-x-4">
                <a href="{{ route('privacy') }}" class="text-cream/50 hover:text-sun text-xs">Confidentialité</a>
                <a href="{{ route('terms') }}" class="text-cream/50 hover:text-sun text-xs">Conditions</a>
            </div>
        </div>
    </div>
</footer>
