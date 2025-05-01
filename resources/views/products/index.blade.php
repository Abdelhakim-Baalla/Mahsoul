@extends('layouts.app')

@section('title', 'Marketplace - Mahsoul')

@section('head')
<!-- Intégration de la police arabe -->
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


    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Filters with improved accessibility -->
        <div class="mb-8 bg-white rounded-lg shadow-sm p-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative">
                    <label for="search-products" class="sr-only">Rechercher un produit</label>
                    <input type="text" id="search-products" placeholder="Rechercher un produit..." 
                           class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                           aria-label="Rechercher un produit">
                    <svg class="absolute left-3 top-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <div class="flex gap-2">
                    <label for="category-filter" class="sr-only">Filtrer par catégorie</label>
                    <select id="category-filter" class="border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500">
                        <option>Toutes catégories</option>
                        <option>Fruits</option>
                        <option>Légumes</option>
                        <option>Céréales</option>
                    </select>
                    <label for="sort-products" class="sr-only">Trier les produits</label>
                    <select id="sort-products" class="border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500">
                        <option>Trier par</option>
                        <option>Plus récents</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div>
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Produits disponibles</h2>
                <span class="text-sm text-gray-500">{{ $products->total() }} produits</span>
            </div>

            @if($products->isEmpty())
                <div class="text-center py-12 bg-white rounded-lg shadow-sm">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">Aucun produit trouvé</h3>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-shadow duration-200">
                        <!-- Image Container with visible background -->
                        <div class="relative bg-gray-100 h-72">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <img src="{{ $product->image }}" alt="{{ $product->nom }}" 
                                     class="max-h-full max-w-full object-scale-down">
                            </div>
                            
                            <!-- Badges -->
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
                        
                        <!-- Product Info -->
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
                                <form action="{{ route('products.show') }}" method="POST">
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

        <!-- Pagination -->
        <div class="mt-8">
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection