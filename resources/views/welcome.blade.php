@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden">
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-primary-100 rounded-full opacity-50 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-secondary-100 rounded-full opacity-50 blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-12 mb-10 md:mb-0 z-10">
                    <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-6">
                        Plateforme agricole innovante
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Solutions agricoles <span class="text-primary-600">pour un avenir durable</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg">
                        Consultations avec des experts, produits agricoles de qualité et formations pour les agriculteurs et éleveurs.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="/consultation" class="inline-block px-8 py-4 text-center font-medium rounded-full text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                            Réserver une consultation
                        </a>
                        <a href="/marketplace" class="inline-block px-8 py-4 text-center font-medium rounded-full text-primary-700 bg-primary-50 hover:bg-primary-100 border border-primary-200 transform hover:-translate-y-1 transition duration-300">
                            Voir nos produits
                        </a>
                    </div>
                    
                  
                </div>
                <div class="md:w-1/2 relative">
                    <div class="relative z-10 overflow-hidden rounded-2xl shadow-2xl transform rotate-1">
                        <img class="w-full h-auto" src="{{ asset('images/farm.jpg') }}" alt="Agriculture landscape">
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-lg shadow-lg z-20">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">100% Fiable</h3>
                                <p class="text-sm text-gray-600">Expertise agricole vérifiée</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 diagonal-box">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-800 font-medium text-sm mb-4">
                    Nos Services
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Tout ce dont vous avez besoin pour votre exploitation</h2>
                <p class="text-lg text-gray-600">
                    Mahsoul vous accompagne dans tous les aspects de votre activité agricole pour optimiser votre production.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-primary-50 flex items-center justify-center mb-6 group-hover:bg-primary-100 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary-600 transition duration-300">Consultations en ligne</h3>
                        <p class="text-gray-600 mb-6">
                            Réservez des consultations avec des experts agricoles et vétérinaires pour résoudre vos problèmes.
                        </p>
                        <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:text-primary-700 group">
                            <span>En savoir plus</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-primary-500"></div>
                </div>

                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-secondary-50 flex items-center justify-center mb-6 group-hover:bg-secondary-100 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-secondary-600 transition duration-300">Produits agricoles</h3>
                        <p class="text-gray-600 mb-6">
                            Découvrez notre catalogue de produits agricoles de qualité, des semences aux équipements.
                        </p>
                        <a href="/products" class="inline-flex items-center font-medium text-secondary-600 hover:text-secondary-700 group">
                            <span>Voir le catalogue</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-secondary-500"></div>
                </div>

                <div class="feature-card bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl">
                    <div class="p-8">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-100 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition duration-300">Formation en ligne</h3>
                        <p class="text-gray-600 mb-6">
                            Améliorez vos compétences avec nos formations sur les techniques agricoles modernes.
                        </p>
                        <a href="/formation" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-700 group">
                            <span>Découvrir les formations</span>
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="h-2 bg-blue-500"></div>
                </div>
            </div>
        </div>
    </section>


    @guest
<section class="relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-primary-600 to-primary-800 transform -skew-y-6 origin-top-right z-0"></div>
    <div class="max-w-7xl mx-auto px-2 sm:px-2 lg:px-2 relative z-10">
        <div class="flex flex-col lg:flex-row justify-between items-center">
            <div class="lg:w-1/2 ">
                <img src="{{ asset('images/personne.jpg') }}" alt="personne" class="w-full h-auto max-w-md lg:max-w-none ">
            </div>
            <div class="lg:w-1/2 mb-10 lg:mb-0 text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à améliorer votre exploitation?</h2>
                <p class="text-primary-100 text-lg mb-8">Rejoignez Mahsoul aujourd'hui et transformez votre approche de l'agriculture avec nos experts et nos solutions adaptées.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/register" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-white text-primary-600 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                        S'inscrire
                    </a>
                    <a href="/consultation" class="inline-block px-8 py-4 text-center font-medium rounded-full bg-primary-500 text-white border border-primary-400 hover:bg-primary-400 transform hover:-translate-y-1 transition duration-300">
                        Réserver une consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endguest

@endsection