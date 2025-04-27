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

        <div class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Tous les articles</h2>
            </div>
            
            @if($articles->isEmpty())
            <div class="text-center py-10">
                <p class="text-gray-500">Aucun article trouvé.</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($articles as $article)
                <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-lg transition duration-300">
                    <div class="relative h-48">
                        <img src="{{ $article->photo }}" alt="{{ Str::limit(strip_tags($article->titre), 15) }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition duration-300"></div>
                    </div>
                    <div class="p-5">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">{{ $article->categorie }}</span>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-gray-900 group-hover:text-primary-600 transition duration-300">
                            {{ Str::limit(strip_tags($article->titre), 40) }}
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            {{ Str::limit(strip_tags($article->contenu), 80) }}
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Dernier Modification: {{ $article->updated_at->format('d/m/Y') }}</span>
                            <a href="{{ route('articles.show', $article->id) }}" class="text-primary-600 hover:text-primary-800 font-medium text-sm">
                                Lire l'article →
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>

        <div class="flex justify-center mt-8">
            {{ $articles->links() }}
        </div>
    </div>
</section>
@endsection