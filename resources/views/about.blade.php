@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    
</section>
    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-primary-800">Notre histoire</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Fondée en 2024, Mahsoul est née d'une vision simple mais puissante : révolutionner le secteur agricole en mettant la technologie au service des agriculteurs. Notre fondateur, issu d'une famille d'agriculteurs, a constaté les défis quotidiens auxquels font face les exploitants agricoles.
                    </p>
                    <p class="mt-4 text-lg text-gray-600">
                        Face aux difficultés d'accès aux conseils d'experts, aux produits de qualité et aux connaissances techniques, nous avons créé une plateforme complète qui répond à tous ces besoins en un seul endroit.
                    </p>
                    <p class="mt-4 text-lg text-gray-600">
                        Aujourd'hui, Mahsoul est fière de servir des milliers d'agriculteurs à travers le pays, contribuant à l'amélioration de leur productivité et à la durabilité de leurs pratiques.
                    </p>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/logo-white.jpg') }}" alt="L'équipe Mahsoul" class="rounded-lg shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-secondary-500 rounded-lg p-6 shadow-lg">
                        <p class="text-white font-bold text-xl">Depuis 2024</p>
                        <p class="text-white">Au service des agriculteurs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section class="py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-800">Notre équipe</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Des passionnés d'agriculture et de technologie qui travaillent ensemble pour transformer le secteur agricole.
                </p>
            </div>
            
            <div class="flex justify-center">
                <div class="bg-white rounded-lg shadow-md overflow-hidden w-full max-w-md">
                    <!-- Conteneur image avec focus sur le haut du visage -->
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/abdelhakim-baalla.jpg') }}" alt="Abdelhakim Baalla" 
                             class="absolute w-full h-full object-cover object-top"
                             style="object-position: 50% 25%;">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Abdelhakim Baalla</h3>
                        <p class="text-primary-600 font-medium">Fondateur & CEO</p>
                        <p class="mt-3 text-gray-600">Développeur web full stack passionné par l'innovation numérique et le développement durable, avec une sensibilité pour les solutions AgriTech.</p>
                        <div class="mt-4 flex space-x-3">
                            <a href="https://www.linkedin.com/in/abdelhakimbaalla/" class="text-gray-400 hover:text-primary-600" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://x.com/Abdelhakim99891" class="text-gray-400 hover:text-primary-600" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="mailto:abdelhakimbaalla50@gmail.com" class="text-gray-400 hover:text-primary-600">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mission & Vision Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-800">Notre mission et notre vision</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Guidés par des valeurs fortes, nous travaillons chaque jour pour transformer le secteur agricole.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-primary-50 rounded-lg shadow-md p-8">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary-800 mb-4">Notre mission</h3>
                    <p class="text-gray-600">
                        Mahsoul a pour mission de démocratiser l'accès aux connaissances, aux produits et aux services agricoles de qualité. Nous voulons donner à chaque agriculteur, quelle que soit la taille de son exploitation, les outils nécessaires pour prospérer dans un environnement en constante évolution.
                    </p>
                    <p class="mt-4 text-gray-600">
                        Nous nous engageons à :
                    </p>
                    <ul class="mt-2 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-600 mt-1 mr-2"></i>
                            <span>Fournir des conseils d'experts accessibles et personnalisés</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-600 mt-1 mr-2"></i>
                            <span>Offrir des produits agricoles de qualité à des prix compétitifs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-600 mt-1 mr-2"></i>
                            <span>Partager des connaissances et des techniques agricoles modernes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary-600 mt-1 mr-2"></i>
                            <span>Promouvoir des pratiques agricoles durables et respectueuses de l'environnement</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Vision -->
                <div class="bg-primary-50 rounded-lg shadow-md p-8">
                    <div class="w-16 h-16 bg-secondary-500 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary-800 mb-4">Notre vision</h3>
                    <p class="text-gray-600">
                        Nous aspirons à créer un écosystème agricole connecté, où les agriculteurs, les experts et les fournisseurs collaborent pour construire une agriculture plus productive, plus rentable et plus durable.
                    </p>
                    <p class="mt-4 text-gray-600">
                        Notre vision pour l'avenir :
                    </p>
                    <ul class="mt-2 space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-lightbulb text-secondary-500 mt-1 mr-2"></i>
                            <span>Une agriculture technologiquement avancée et accessible à tous</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-lightbulb text-secondary-500 mt-1 mr-2"></i>
                            <span>Des communautés agricoles connectées et collaboratives</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-lightbulb text-secondary-500 mt-1 mr-2"></i>
                            <span>Une production alimentaire durable qui préserve les ressources naturelles</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-lightbulb text-secondary-500 mt-1 mr-2"></i>
                            <span>Une valorisation du savoir-faire agricole traditionnel combiné aux innovations modernes</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partners Section -->
    <section class="py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-800">Nos partenaires</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Nous collaborons avec des organisations de premier plan pour offrir les meilleurs services à nos utilisateurs.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-1.png" alt="Partenaire 1" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-2.png" alt="Partenaire 2" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-3.png" alt="Partenaire 3" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-4.png" alt="Partenaire 4" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-5.png" alt="Partenaire 5" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-6.png" alt="Partenaire 6" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-7.png" alt="Partenaire 7" class="h-16">
                </div>
                <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                    <img src="/images/partner-8.png" alt="Partenaire 8" class="h-16">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Values Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-800">Nos valeurs</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Les principes qui guident nos actions et nos décisions au quotidien.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-primary-50 rounded-lg p-8 text-center">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-800 mb-4">Authenticité</h3>
                    <p class="text-gray-600">
                        Nous valorisons l'authenticité dans nos relations avec les agriculteurs, nos partenaires et notre équipe. Nous sommes transparents dans nos actions et fidèles à nos engagements.
                    </p>
                </div>
                
                <!-- Value 2 -->
                <div class="bg-primary-50 rounded-lg p-8 text-center">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-laptop-code text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-800 mb-4">Innovation</h3>
                    <p class="text-gray-600">
                        Nous croyons au pouvoir de l'innovation pour transformer l'agriculture. Nous recherchons constamment de nouvelles solutions pour répondre aux défis du secteur agricole.
                    </p>
                </div>
                
                <!-- Value 3 -->
                <div class="bg-primary-50 rounded-lg p-8 text-center">
                    <div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary-800 mb-4">Engagement</h3>
                    <p class="text-gray-600">
                        Nous sommes engagés envers la réussite des agriculteurs et la durabilité de l'agriculture. Nous mettons tout en œuvre pour avoir un impact positif sur le secteur agricole.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    @guest
    <section class="py-16 bg-primary-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Rejoignez la communauté Mahsoul</h2>
                <p class="mt-4 text-lg text-gray-200 max-w-2xl mx-auto">
                    Faites partie de notre mission pour transformer l'agriculture et construire un avenir plus durable.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/register" class="bg-secondary-500 hover:bg-secondary-600 text-white px-6 py-3 rounded-md font-medium text-center">
                        Créer un compte
                    </a>
                    <a href="/contact" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-6 py-3 rounded-md font-medium text-center">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endguest
@endsection