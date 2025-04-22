@extends('layouts.app')

@section('title', 'Articles - Tag: Irrigation')

@section('content')
<div class="bg-gradient-to-r from-green-600 to-green-800 py-8">
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-2 text-white mb-4">
            <a href="{{ url('articles') }}" class="hover:underline">Articles</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Tag: Irrigation</span>
        </div>
        <h1 class="text-3xl font-bold text-white">Articles sur l'irrigation</h1>
        <p class="text-white mt-2">Découvrez tous nos articles liés à l'irrigation et à la gestion de l'eau</p>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <!-- Filtres et recherche -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Rechercher un article..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-wrap gap-2">
                <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="recent">Plus récents</option>
                    <option value="popular">Plus populaires</option>
                    <option value="az">A-Z</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tags associés -->
    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-3">Tags associés</h2>
        <div class="flex flex-wrap gap-2">
            <a href="{{ url('articles/tag/economie-eau') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Économie d'eau</a>
            <a href="{{ url('articles/tag/techniques') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Techniques agricoles</a>
            <a href="{{ url('articles/tag/secheresse') }}" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200 transition">Sécheresse</a>
            <a href="{{ url('articles/tag/technologie') }}" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200 transition">Technologie</a>
        </div>
    </div>

    <!-- Liste des articles -->
    <div>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Articles sur l'irrigation</h2>
            <p class="text-gray-600">Affichage de 8 articles</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Techniques d'irrigation modernes" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Économie d'eau</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Techniques d'irrigation modernes pour économiser l'eau</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Découvrez les dernières techniques d'irrigation qui permettent d'économiser jusqu'à 60% d'eau tout en améliorant les rendements agricoles.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 2 jours</span>
                        <a href="{{ url('articles/1') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Gestion de l'eau" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Gestion efficace de l'eau en période de sécheresse</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Stratégies et techniques pour gérer efficacement l'eau pendant les périodes de sécheresse et minimiser l'impact sur vos cultures.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 1 mois</span>
                        <a href="{{ url('articles/6') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Irrigation goutte-à-goutte" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Économie</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Installation d'un système d'irrigation goutte-à-goutte : guide pratique</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Guide étape par étape pour installer vous-même un système d'irrigation goutte-à-goutte efficace et économique pour votre exploitation.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 2 mois</span>
                        <a href="{{ url('articles/10') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Capteurs d'humidité" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs">Technologie</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Capteurs d'humidité du sol : optimiser l'irrigation avec la technologie</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Comment les capteurs d'humidité du sol peuvent révolutionner votre approche de l'irrigation et vous aider à prendre des décisions basées sur des données réelles.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 3 mois</span>
                        <a href="{{ url('articles/11') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Irrigation solaire" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Énergie solaire</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Systèmes d'irrigation alimentés à l'énergie solaire</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Découvrez comment les systèmes d'irrigation solaires peuvent réduire vos coûts énergétiques tout en offrant une solution durable pour votre exploitation.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 4 mois</span>
                        <a href="{{ url('articles/12') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Irrigation cultures maraîchères" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Maraîchage</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Irrigation optimale pour les cultures maraîchères</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Guide spécifique pour l'irrigation des cultures maraîchères, avec des recommandations adaptées à chaque type de légume.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 5 mois</span>
                        <a href="{{ url('articles/13') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="flex items-center space-x-2">
                <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">Précédent</a>
                <a href="#" class="px-3 py-2 rounded-md border bg-green-600 text-white">1</a>
                <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-50">2</a>
                <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-50">3</a>
                <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">Suivant</a>
            </nav>
        </div>
    </div>
</div>
@endsection
