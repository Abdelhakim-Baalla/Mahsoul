@extends('layouts.app')

@section('title', 'Marketplace - Mahsoul')

@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
<style>
    .font-arabic {
        font-family: 'Tajawal', sans-serif;
    }
    /* Classe pour les éléments qui doivent afficher du texte en arabe (direction RTL) */
    .text-arabic {
        direction: rtl;
        font-family: 'Tajawal', sans-serif;
    }
</style>
@endsection

@section('content')
<div class="min-h-screen bg-gray-50 font-arabic">


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 bg-white rounded-lg shadow-sm p-4">
            <form action="{{ route('products.index') }}" method="GET" class="flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <label for="search-products" class="sr-only">Rechercher un produit</label>
                        <input type="text" id="search-products" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="Rechercher un produit..."
                               class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                               aria-label="Rechercher un produit">
                        <svg class="absolute left-3 top-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <div class="flex gap-2">
                        <label for="category-filter" class="sr-only">Filtrer par catégorie</label>
                        <select id="category-filter" name="categorie" onchange="this.form.submit()" class="border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500">
                            <option value="">Toutes catégories</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ ($filters['categorie'] ?? '') == $cat->id ? 'selected' : '' }}>{{ $cat->nom }}</option>
                            @endforeach
                        </select>
                        <label for="sort-products" class="sr-only">Trier les produits</label>
                        <select id="sort-products" name="tri" onchange="this.form.submit()" class="border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500">
                            <option value="recent" {{ ($filters['tri'] ?? 'recent') == 'recent' ? 'selected' : '' }}>Plus récents</option>
                            <option value="prix_asc" {{ ($filters['tri'] ?? '') == 'prix_asc' ? 'selected' : '' }}>Prix croissant</option>
                            <option value="prix_desc" {{ ($filters['tri'] ?? '') == 'prix_desc' ? 'selected' : '' }}>Prix décroissant</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <div class="flex items-center gap-2">
                        <label for="prix_min" class="text-sm text-gray-600">Min DH</label>
                        <input type="number" min="0" id="prix_min" name="prix_min" value="{{ $filters['prix_min'] ?? '' }}" class="w-24 border border-gray-200 rounded-lg px-3 py-2 text-sm">
                        <label for="prix_max" class="text-sm text-gray-600">Max DH</label>
                        <input type="number" min="0" id="prix_max" name="prix_max" value="{{ $filters['prix_max'] ?? '' }}" class="w-24 border border-gray-200 rounded-lg px-3 py-2 text-sm">
                    </div>
                    <label class="flex items-center gap-2 text-sm text-gray-600">
                        <input type="checkbox" name="en_stock" value="1" {{ !empty($filters['en_stock']) ? 'checked' : '' }} onchange="this.form.submit()" class="h-4 w-4 text-green-600 rounded"> En stock uniquement
                    </label>
                    <button type="submit" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-lg">Rechercher</button>
                    @if(!empty(array_filter($filters ?? [])))
                    <a href="{{ route('products.index') }}" class="text-sm text-gray-500 hover:underline">Réinitialiser</a>
                    @endif
                </div>
            </form>
        </div>

        <div>
            <div class="flex justify-between items-center mb-6">
                <div><span class="eco-eyebrow mb-2">Marketplace</span><h2 class="font-display text-2xl font-extrabold text-forest">Produits disponibles</h2></div>
                <span class="text-sm text-gray-500">{{ $products->total() }} produits</span>
            </div>

            @if($products->isEmpty())
                <div class="text-center py-12 bg-white rounded-lg shadow-sm">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">Aucun produit trouvé</h3>
                    <p class="mt-1 text-sm text-gray-500">Essayez d'ajuster votre recherche ou vos filtres.</p>
                    <a href="{{ route('products.index') }}" class="mt-4 inline-block text-sm font-medium text-green-700 hover:underline">Voir tous les produits</a>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-shadow duration-200">
                       
                        <div class="relative bg-gray-100 h-72">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="{{ $product->image }}" alt="{{ $product->nom }}" 
                                     class="max-h-full max-w-full object-scale-down">
                            </div>
                            
                            <div class="absolute top-2 left-2">
                                <span class="bg-white px-2 py-1 rounded text-xs font-medium text-gray-700 shadow-sm">
                                    {{ $product->categorie }}
                                </span>
                            </div>
                            
                            @if($product->en_stock)
                            <div class="absolute top-2 right-2 bg-white px-2 py-1 rounded text-xs font-medium text-green-700 shadow-sm">
                                En stock
                            </div>
                            @else
                            <div class="absolute top-2 right-2 bg-white px-2 py-1 rounded text-xs font-medium text-red-600 shadow-sm">
                                Rupture
                            </div>
                            @endif
                        </div>
                        
                        <div class="p-4">
                            <h3 class="font-medium text-gray-900 mb-1">{{ $product->nom }}</h3>
                            <p class="text-sm text-gray-500 mb-3 line-clamp-2">{{ $product->description }}</p>
                            
                            <div class="flex items-center mb-3">
                                @if($product->vendeur == 'Mahsoul Store')
                                <img src="{{ asset('images/logo-white.jpg') }}" class="w-6 h-6 rounded-full mr-2" alt="Mahsoul Store">
                                @else
                                <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                    <span class="text-xs text-green-800">{{ strtoupper(substr($product->vendeur, 0, 1)) }}</span>
                                </div>
                                @endif
                                <span class="text-sm text-gray-600">{{ $product->vendeur }}</span>
                            </div>
                            
                            <div class="flex justify-between items-center pt-3 border-t border-gray-100">
                                <div>
                                    <span class="font-bold text-green-700">
                                        {{ number_format($product->prix, 2) }} DH
                                        <span class="text-xs text-gray-500">/ {{ $product->unite_mesure }}</span>
                                    </span>
                                </div>
                                <form action="{{ route('products.show') }}" method="get">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <button type="submit" class="text-sm font-medium text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors duration-200">
                                         Voir produit
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="mt-8">
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection