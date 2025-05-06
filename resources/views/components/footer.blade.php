<footer class="bg-primary-800 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Logo et description -->
            <div class="col-span-1">
                <div class="flex items-center">
                    <img class="h-8 w-auto" src="{{ asset('images/logo-white.jpg') }}" alt="Mahsoul Logo">
                    <span class="ml-2 text-xl font-bold">Mahsoul</span>
                </div>
                <p class="mt-2 text-primary-200 text-xs">
                    Plateforme complète pour agriculteurs.
                </p>
                <div class="mt-3 flex space-x-3">
                    <a href="#" class="text-primary-200 hover:text-white text-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-primary-200 hover:text-white text-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-primary-200 hover:text-white text-sm">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <!-- Liens rapides -->
            <div>
                <h3 class="text-sm font-bold mb-2">Liens rapides</h3>
                <ul class="space-y-1">
                    <li><a href="{{ route('welcome') }}" class="text-primary-200 hover:text-white text-xs">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="text-primary-200 hover:text-white text-xs">À propos</a></li>
                    <li><a href="{{ route('contact') }}" class="text-primary-200 hover:text-white text-xs">Contact</a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div>
                <h3 class="text-sm font-bold mb-2">Services</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-primary-200 hover:text-white text-xs">Consultations</a></li>
                    <li><a href="#" class="text-primary-200 hover:text-white text-xs">Marketplace</a></li>
                    <li><a href="#" class="text-primary-200 hover:text-white text-xs">Formation</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div>
                <h3 class="text-sm font-bold mb-2">Contact</h3>
                <ul class="space-y-1">
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-xs text-secondary-400"></i>
                        <span class="text-primary-200 text-xs">+212 6XX XX XX XX</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2 text-xs text-secondary-400"></i>
                        <span class="text-primary-200 text-xs">contact@mahsoul.ma</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="mt-6 pt-4 border-t border-primary-700 flex flex-col md:flex-row justify-between items-center">
            <p class="text-primary-300 text-xs">&copy; {{ date('Y') }} Mahsoul. Tous droits réservés.</p>
            <div class="mt-2 md:mt-0 flex space-x-4">
                <a href="{{ route('privacy') }}" class="text-primary-300 hover:text-white text-xs">Confidentialité</a>
                <a href="{{ route('terms') }}" class="text-primary-300 hover:text-white text-xs">Conditions</a>
            </div>
        </div>
    </div>
</footer>