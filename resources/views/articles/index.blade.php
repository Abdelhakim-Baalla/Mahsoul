@extends('layouts.app')

@section('title', 'Articles de Formation')

@section('content')

<section class="py-12 diagonal-box bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex-1 relative">
                    <input type="text" placeholder="Rechercher un article..." 
                           class="w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute left-3 top-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="flex flex-wrap gap-3">
                    <select class="border border-gray-200 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <option value="">Toutes catégories</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="elevage">Élevage</option>
                        <option value="irrigation">Irrigation</option>
                        <option value="maladies">Maladies</option>
                        <option value="techniques">Techniques</option>
                    </select>
                    <select class="border border-gray-200 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <option value="recent">Plus récents</option>
                        <option value="popular">Plus populaires</option>
                        <option value="az">A-Z</option>
                    </select>
                </div>
            </div>
        </div>

        
        <div class="mb-10">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Tags populaires</h2>
            <div class="flex flex-wrap gap-3">
                <a href="{{ url('articles/tag/agriculture') }}" class="px-4 py-2 bg-primary-50 text-primary-700 rounded-full text-sm font-medium hover:bg-primary-100 transition duration-300">
                    Agriculture
                </a>
                <a href="{{ url('articles/tag/elevage') }}" class="px-4 py-2 bg-secondary-50 text-secondary-700 rounded-full text-sm font-medium hover:bg-secondary-100 transition duration-300">
                    Élevage
                </a>
                <a href="{{ url('articles/tag/irrigation') }}" class="px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-100 transition duration-300">
                    Irrigation
                </a>
                <a href="{{ url('articles/tag/maladies') }}" class="px-4 py-2 bg-red-50 text-red-700 rounded-full text-sm font-medium hover:bg-red-100 transition duration-300">
                    Maladies
                </a>
                <a href="{{ url('articles/tag/techniques') }}" class="px-4 py-2 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition duration-300">
                    Techniques
                </a>
                <a href="{{ url('articles/tag/semences') }}" class="px-4 py-2 bg-yellow-50 text-yellow-700 rounded-full text-sm font-medium hover:bg-yellow-100 transition duration-300">
                    Semences
                </a>
                <a href="{{ url('articles/tag/recolte') }}" class="px-4 py-2 bg-orange-50 text-orange-700 rounded-full text-sm font-medium hover:bg-orange-100 transition duration-300">
                    Récolte
                </a>
                <a href="{{ url('articles/tag/stockage') }}" class="px-4 py-2 bg-purple-50 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-100 transition duration-300">
                    Stockage
                </a>
            </div>
        </div>

        <div class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Tous les articles</h2>
                <!-- <p class="text-gray-600">Affichage de 12 articles sur 48</p> -->
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-lg transition duration-300">
                    <div class="relative h-48">
                        <img src="{{ asset('images/rotation.jpg') }}" alt="Rotation des cultures" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition duration-300"></div>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Agriculture</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition duration-300">
                            Rotation des cultures pour sols fertiles
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            Techniques de rotation pour améliorer la santé de vos sols et augmenter vos rendements à long terme.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Il y a 2 semaines</span>
                            <a href="{{ url('articles/4') }}" class="text-primary-600 hover:text-primary-800 font-medium text-sm">
                                Lire l'article →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-lg transition duration-300">
                    <div class="relative h-48">
                        <img src="{{ asset('images/semences.jpg') }}" alt="Semences de qualité" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition duration-300"></div>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Semences</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition duration-300">
                            Sélection des semences de qualité
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            Guide pratique pour choisir les meilleures semences adaptées à votre région et conditions de culture.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Il y a 3 semaines</span>
                            <a href="{{ url('articles/5') }}" class="text-primary-600 hover:text-primary-800 font-medium text-sm">
                                Lire l'article →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-lg transition duration-300">
                    <div class="relative h-48">
                        <img src="{{ asset('images/secheresse.jpg') }}" alt="Gestion de l'eau" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition duration-300"></div>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Irrigation</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition duration-300">
                            Gestion de l'eau en période de sécheresse
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            Stratégies pour gérer efficacement l'eau pendant les sécheresses et minimiser l'impact sur vos cultures.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Il y a 1 mois</span>
                            <a href="{{ url('articles/6') }}" class="text-primary-600 hover:text-primary-800 font-medium text-sm">
                                Lire l'article →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2">
                <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" class="px-4 py-2 rounded-lg bg-primary-600 text-white font-medium">1</a>
                <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-50 transition duration-300">2</a>
                <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-50 transition duration-300">3</a>
                <span class="px-2 text-gray-500">...</span>
                <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-50 transition duration-300">8</a>
                <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</section>
@endsection