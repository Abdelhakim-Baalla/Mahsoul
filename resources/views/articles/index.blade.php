@extends('layouts.app')

@section('title', 'Articles de Formation')

@section('content')
<div class="bg-gradient-to-r from-green-600 to-green-800 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-white">Articles de Formation</h1>
        <p class="text-white mt-2">Découvrez nos ressources éducatives pour améliorer vos connaissances agricoles</p>
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
                    <option value="">Toutes les catégories</option>
                    <option value="agriculture">Agriculture</option>
                    <option value="elevage">Élevage</option>
                    <option value="irrigation">Irrigation</option>
                    <option value="maladies">Maladies des plantes</option>
                    <option value="techniques">Techniques agricoles</option>
                </select>
                <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="recent">Plus récents</option>
                    <option value="popular">Plus populaires</option>
                    <option value="az">A-Z</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Tags populaires -->
    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-3">Tags populaires</h2>
        <div class="flex flex-wrap gap-2">
            <a href="{{ url('articles/tag/agriculture') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Agriculture</a>
            <a href="{{ url('articles/tag/elevage') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Élevage</a>
            <a href="{{ url('articles/tag/irrigation') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Irrigation</a>
            <a href="{{ url('articles/tag/maladies') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Maladies des plantes</a>
            <a href="{{ url('articles/tag/techniques') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Techniques agricoles</a>
            <a href="{{ url('articles/tag/semences') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Semences</a>
            <a href="{{ url('articles/tag/recolte') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Récolte</a>
            <a href="{{ url('articles/tag/stockage') }}" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200 transition">Stockage</a>
        </div>
    </div>

    <!-- Articles mis en avant -->
    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-4">Articles à la une</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Techniques d'irrigation modernes" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Irrigation</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Économie d'eau</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Techniques d'irrigation modernes pour économiser l'eau</h3>
                    <p class="text-gray-600 mb-3 line-clamp-2">Découvrez les dernières techniques d'irrigation qui permettent d'économiser jusqu'à 60% d'eau tout en améliorant les rendements agricoles.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Il y a 2 jours</span>
                        <a href="{{ url('articles/1') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Lutte contre les parasites" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Maladies</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Bio</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Lutte biologique contre les parasites communs</h3>
                    <p class="text-gray-600 mb-3 line-clamp-2">Apprenez à identifier et combattre les parasites les plus courants en utilisant des méthodes biologiques respectueuses de l'environnement.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Il y a 5 jours</span>
                        <a href="{{ url('articles/2') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Élevage durable" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs">Élevage</span>
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Durable</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Pratiques d'élevage durable pour petites exploitations</h3>
                    <p class="text-gray-600 mb-3 line-clamp-2">Guide complet sur les pratiques d'élevage durable adaptées aux petites exploitations agricoles, avec des conseils pratiques et économiques.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Il y a 1 semaine</span>
                        <a href="{{ url('articles/3') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des articles -->
    <div>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Tous les articles</h2>
            <p class="text-gray-600">Affichage de 12 articles sur 48</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Rotation des cultures" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Agriculture</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Rotation des cultures : maximiser la fertilité des sols</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Apprenez comment planifier efficacement la rotation des cultures pour améliorer la santé de vos sols et augmenter vos rendements à long terme.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 2 semaines</span>
                        <a href="{{ url('articles/4') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Semences de qualité" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Semences</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Comment sélectionner des semences de qualité</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Guide pour choisir les meilleures semences adaptées à votre région et à vos conditions de culture spécifiques.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 3 semaines</span>
                        <a href="{{ url('articles/5') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
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

            <!-- Article 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Compostage" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Techniques</span>
                        <span class="px-2 py-1 bg-brown-100 text-yellow-800 rounded-full text-xs">Compost</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Guide complet du compostage pour agriculteurs</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Tout ce que vous devez savoir pour créer un compost de qualité et l'utiliser efficacement dans vos cultures.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 1 mois</span>
                        <a href="{{ url('articles/7') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Santé animale" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs">Élevage</span>
                        <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Santé</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Signes précoces de maladies chez les bovins</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Apprenez à reconnaître les signes précoces de maladies chez les bovins pour intervenir rapidement et éviter les complications.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 1 mois</span>
                        <a href="{{ url('articles/8') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full transition-transform hover:scale-[1.02]">
                <img src="https://via.placeholder.com/600x300" alt="Stockage des récoltes" class="w-full h-48 object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="flex gap-2 mb-2">
                        <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs">Stockage</span>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Récolte</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Techniques de stockage pour préserver la qualité des récoltes</h3>
                    <p class="text-gray-600 mb-3 flex-1 line-clamp-3">Méthodes efficaces pour stocker vos récoltes et préserver leur qualité sur de longues périodes, même sans équipement sophistiqué.</p>
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-sm text-gray-500">Il y a 2 mois</span>
                        <a href="{{ url('articles/9') }}" class="text-green-600 hover:text-green-800 font-medium">Lire plus</a>
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
                <span class="px-3 py-2 text-gray-600">...</span>
                <a href="#" class="px-3 py-2 rounded-md border text-gray-700 hover:bg-gray-50">8</a>
                <a href="#" class="px-3 py-2 rounded-md border text-gray-500 hover:bg-gray-50">Suivant</a>
            </nav>
        </div>
    </div>
</div>
@endsection
