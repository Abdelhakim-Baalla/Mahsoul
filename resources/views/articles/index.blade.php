@extends('layouts.app')

@section('title', 'Formation - Mahsoul')

@section('content')
@include('components.page-hero', ['eyebrow' => 'Formation', 'title' => 'Apprenez, progressez', 'subtitle' => 'Guides pratiques rédigés par nos experts agricoles et vétérinaires.'])

<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Filtres -->
        <div class="card-eco p-5 mb-8">
            <form action="{{ route('articles.index') }}" method="GET" class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex-1 relative">
                    <input type="text" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="Rechercher un article..."
                        class="w-full pl-12 pr-4 py-3 input-eco">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute left-3 top-1/2 -translate-y-1/2 text-earth-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="flex flex-wrap gap-3 items-center">
                    <select name="categorie" onchange="this.form.submit()" class="border border-earth-300 input-eco px-4 py-2">
                        <option value="">Toutes catégories</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ ($filters['categorie'] ?? '') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                    <select name="tri" onchange="this.form.submit()" class="border border-earth-300 input-eco px-4 py-2">
                        <option value="recent" {{ ($filters['tri'] ?? 'recent') == 'recent' ? 'selected' : '' }}>Plus récents</option>
                        <option value="az" {{ ($filters['tri'] ?? '') == 'az' ? 'selected' : '' }}>A-Z</option>
                    </select>
                    <button type="submit" class="btn-eco text-sm px-4 py-2">Filtrer</button>
                    @if(!empty(array_filter($filters ?? [])))
                    <a href="{{ route('articles.index') }}" class="text-sm text-earth-500 hover:underline">Réinitialiser</a>
                    @endif
                </div>
            </form>
        </div>

        <!-- Articles -->
        @if($articles->isEmpty())
        <div class="card-eco bg-cream/50 p-12 text-center">
            <i class="fas fa-book-open text-forest/30 text-6xl mb-4"></i>
            <h3 class="font-display text-xl font-bold text-forest mb-2">Aucun article</h3>
            <p class="text-clay">Aucun article ne correspond à votre recherche.</p>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
            <article class="card-eco overflow-hidden">
                <div class="relative h-48">
                    @if($article->photo)
                    <img src="{{ $article->photo }}" alt="{{ Str::limit(strip_tags($article->titre), 15) }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full flex items-center justify-center text-forest/30"><i class="fas fa-book-open text-4xl"></i></div>
                    @endif
                </div>
                <div class="p-5">
                    <div class="flex gap-2 mb-3">
                        <span class="px-3 py-1 bg-leaf/10 text-leaf rounded-full text-xs font-medium">{{ $article->categorie }}</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-forest group-hover:text-leaf transition duration-300">{{ Str::limit(strip_tags($article->titre), 40) }}</h3>
                    <p class="text-clay mb-4 line-clamp-2">{{ Str::limit(strip_tags($article->contenu), 100) }}</p>
                    <div class="flex items-center gap-2 text-sm text-earth-500">
                        @include('components.stars', ['note' => $article->avg_note ?? 0, 'count' => $article->nb_comments ?? 0])
                        <span class="text-earth-500">{{ $article->created_at ? $article->created_at->format('d/m/Y') : '' }}</span>
                    </div>
                    <a href="{{ route('articles.show', ['id' => $article->id]) }}" class="mt-3 block text-center btn-eco text-sm">Lire l'article</a>
                </div>
            </article>
            @endforeach
        </div>
        @endif

        {{ $articles->links('pagination::tailwind') }}
    </div>
</div>
@endsection