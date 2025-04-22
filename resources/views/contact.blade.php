@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-primary-700 text-white py-20">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <img src="/images/pattern-leaves.png" alt="" class="absolute w-full h-full object-cover">
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Contactez-nous</h1>
                <p class="mt-4 text-xl text-gray-200 max-w-3xl mx-auto">
                    Nous sommes là pour répondre à vos questions et vous aider dans votre parcours agricole.
                </p>
            </div>
        </div>
        
        <!-- Wave separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" class="w-full h-auto">
                <path fill="#ffffff" fill-opacity="1" d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z"></path>
            </svg>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-primary-800 mb-6">Envoyez-nous un message</h2>
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        
                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                            <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="consultation">Consultation avec un expert</option>
                                <option value="marketplace">Marketplace et produits</option>
                                <option value="formation">Formation et articles</option>
                                <option value="technical">Support technique</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500"></textarea>
                        </div>
                        
                        <div class="mb-6">
                            <div class="flex items-start">
                                <input id="privacy" name="privacy" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="privacy" class="ml-2 block text-sm text-gray-600">
                                    J'accepte que mes données soient traitées conformément à la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a>.
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Envoyer le message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <div class="bg-primary-50 rounded-lg p-8 mb-8">
                        <h2 class="text-2xl font-bold text-primary-800 mb-6">Nos coordonnées</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Adresse</h3>
                                    <p class="text-gray-600 mt-1">123 Rue de l'Agriculture, 10000 Ville, Maroc</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-phone-alt text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Téléphone</h3>
                                    <p class="text-gray-600 mt-1">+212 5XX XX XX XX</p>
                                    <p class="text-gray-600">Lun-Ven: 9h-18h | Sam: 9h-13h</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-envelope text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                                    <p class="text-gray-600 mt-1">contact@mahsoul.ma</p>
                                    <p class="text-gray-600">support@mahsoul.ma</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Suivez-nous</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.5762034057647!2d-6.8498!3d33.9715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDU4JzE3LjQiTiA2wrA1MCc1OS4zIlc!5e0!3m2!1sfr!2sma!4v1620123456789!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-800">Questions fréquentes</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Trouvez rapidement des réponses aux questions les plus courantes sur nos services.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Comment prendre rendez-vous avec un expert ?</h3>
                                <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Pour prendre rendez-vous avec un expert, connectez-vous à votre compte, accédez à la section "Consultations", choisissez entre un vétérinaire ou un expert agricole, sélectionnez l'expert de votre choix et cliquez sur "Prendre rendez-vous". Vous pourrez ensuite choisir une date et une heure disponibles, décrire votre problème et joindre des documents si nécessaire.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Comment commander des produits sur la marketplace ?</h3>
                                <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Pour commander des produits, parcourez notre marketplace, ajoutez les produits souhaités à votre panier, puis procédez au paiement. Vous pouvez filtrer les produits par catégorie, prix ou disponibilité. Une fois votre commande confirmée, vous recevrez un email de confirmation avec les détails de livraison.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Quels sont les délais de livraison ?</h3>
                                <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Les délais de livraison varient en fonction de votre localisation. En général, les livraisons sont effectuées dans un délai de 2 à 5 jours ouvrables dans les grandes villes, et de 5 à 10 jours ouvrables dans les zones rurales. Vous pouvez suivre l'état de votre commande dans votre espace client.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Comment accéder aux articles de formation ?</h3>
                                <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Tous nos articles de formation sont accessibles gratuitement dans la section "Formation" de notre plateforme. Vous pouvez les filtrer par thème ou utiliser la barre de recherche pour trouver des sujets spécifiques. Pour recevoir des notifications sur les nouveaux articles, inscrivez-vous à notre newsletter.
                            </p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Comment devenir expert sur Mahsoul ?</h3>
                                <i class="fas fa-chevron-down text-primary-600 transform transition-transform duration-200"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Si vous êtes un vétérinaire ou un expert agricole et souhaitez rejoindre notre plateforme, contactez-nous via le formulaire de contact en sélectionnant "Devenir expert" comme sujet. Notre équipe examinera vos qualifications et vous contactera pour discuter des prochaines étapes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-16 bg-primary-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Besoin d'aide supplémentaire ?</h2>
                <p class="mt-4 text-lg text-gray-200 max-w-2xl mx-auto">
                    Notre équipe de support est disponible pour vous aider à résoudre tous vos problèmes.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="tel:+212500000000" class="bg-secondary-500 hover:bg-secondary-600 text-white px-6 py-3 rounded-md font-medium text-center flex items-center justify-center">
                        <i class="fas fa-phone-alt mr-2"></i>
                        Appelez-nous
                    </a>
                    <a href="mailto:support@mahsoul.ma" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-6 py-3 rounded-md font-medium text-center flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i>
                        Envoyez-nous un email
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function toggleFAQ(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('i');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
@endsection
