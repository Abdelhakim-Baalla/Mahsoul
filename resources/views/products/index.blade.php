@extends('layouts.app')

@section('title', 'Marketplace - Mahsoul')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
@endsection

@section('content')
@include('components.page-hero', ['eyebrow' => 'Marketplace', 'title' => 'Produits du terroir', 'subtitle' => 'Des produits frais et authentiques, directement des fermes marocaines.'])

<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Filtres -->
        <div class="card-eco p-5 mb-8">
            <form action="{{ route('products.index') }}" method="GET" class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <label for="search-products" class="sr-only">Rechercher un produit</label>
                        <input type="text" id="search-products" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="Rechercher un produit..."
                               class="w-full pl-10 pr-4 py-3 input-eco"
                               aria-label="Rechercher un produit">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-earth-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <div class="flex gap-2">
                        <label for="category-filter" class="sr-only">Filtrer par catégorie</label>
                        <select id="category-filter" name="categorie" onchange="this.form.submit()" class="border border-earth-300 input-eco px-3 py-3 text-sm">
                            <option value="">Toutes catégories</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ ($filters['categorie'] ?? '') == $cat->id ? 'selected' : '' }}>{{ $cat->nom }}</option>
                            @endforeach
                        </select>
                        <select name="tri" onchange="this.form.submit()" class="border border-earth-300 input-eco px-3 py-3 text-sm">
                            <option value="recent" {{ ($filters['tri'] ?? 'recent') == 'recent' ? 'selected' : '' }}>Plus récents</option>
                            <option value="prix_asc" {{ ($filters['tri'] ?? '') == 'prix_asc' ? 'selected' : '' }}>Prix croissant</option>
                            <option value="prix_desc" {{ ($filters['tri'] ?? '') == 'prix_desc' ? 'selected' : '' }}>Prix décroissant</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-3 pt-2 border-t border-earth-200">
                    <div class="flex items-center gap-2">
                        <label for="prix_min" class="text-sm text-earth-600">Min DH</label>
                        <input type="number" min="0" id="prix_min" name="prix_min" value="{{ $filters['prix_min'] ?? '' }}" class="w-24 input-eco px-3 py-2 text-sm">
                        <label for="prix_max" class="text-sm text-earth-600">Max DH</label>
                        <input type="number" min="0" id="prix_max" name="prix_max" value="{{ $filters['prix_max'] ?? '' }}" class="w-24 input-eco px-3 py-2 text-sm">
                    </div>
                    <label class="flex items-center gap-2 text-sm text-earth-600">
                        <input type="checkbox" name="en_stock" value="1" {{ !empty($filters['en_stock']) ? 'checked' : '' }} onchange="this.form.submit()" class="h-4 w-4 text-forest rounded"> En stock uniquement
                    </label>
                    <button type="submit" class="btn-eco text-sm px-4 py-2">Filtrer</button>
                    @if(!empty(array_filter($filters ?? [])))
                    <a href="{{ route('products.index') }}" class="text-sm text-earth-500 hover:underline">Réinitialiser</a>
                    @endif
                </div>
            </form>
        </div>

        <!-- Produits -->
        @if($products->isEmpty())
        <div class="card-eco bg-cream/50 p-12 text-center">
            <i class="fas fa-seedling text-forest/30 text-6xl mb-4"></i>
            <h3 class="font-display text-xl font-bold text-forest mb-2">Aucun produit</h3>
            <p class="text-clay">Aucun produit ne correspond à votre recherche.</p>
            <a href="{{ route('products.index') }}" class="mt-4 inline-block btn-sun">Voir tous les produits</a>
        </div>
        @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $product)
            <article class="card-eco overflow-hidden">
                <div class="relative bg-cream/50 h-48">
                    @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->nom }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full flex items-center justify-center text-forest/30">
                        <i class="fas fa-leaf text-4xl"></i>
                    </div>
                    @endif
                    <div class="absolute top-2 left-2">
                        <span class="bg-white/90 backdrop-blur px-2 py-1 rounded-full text-xs font-semibold text-forest">{{ $product->categorie }}</span>
                    </div>
                    @if($product->en_stock)
                    <div class="absolute top-2 right-2 bg-white/90 backdrop-blur px-2 py-1 rounded-full text-xs font-medium text-leaf">En stock</div>
                    @else
                    <div class="absolute top-2 right-2 bg-white/90 backdrop-blur px-2 py-1 rounded-full text-xs font-medium text-coral">Rupture</div>
                    @endif
                </div>
                <div class="p-5">
                    <h3 class="font-display font-semibold text-forest text-lg mb-1">{{ $product->nom }}</h3>
                    <p class="text-sm text-clay mb-3 line-clamp-2">{{ $product->description }}</p>
                    <div class="flex items-center justify-between mb-3">
                        @include('components.stars', ['note' => $product->avg_note ?? 0, 'count' => $product->nb_reviews ?? 0])
                    </div>
                    <div class="flex justify-between items-center pt-3 border-t border-earth-200">
                        <span class="font-display font-bold text-leaf text-lg">{{ number_format($product->prix, 2) }} DH <span class="font-normal text-sm text-earth-500">/ {{ $product->unite_mesure }}</span></span>
                        <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn-eco text-sm px-4 py-2">Voir</a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @endif

        <!-- Pagination -->
        <div class="mt-8">
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection