@extends('layouts.admin')

@section('title', 'Gestion des produits - Mahsoul')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="eco-eyebrow mb-2">Administration</span>
                <h1 class="font-display text-3xl font-extrabold text-forest">Gestion des produits</h1>
                <p class="mt-2 text-clay">Liste complète de tous vos produits artisanaux</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="btn-sun shrink-0">
                <i class="fas fa-plus mr-2"></i>Ajouter un produit
            </a>
        </div>

        <!-- Filtres et recherche -->
        <div class="card-eco bg-white p-5 mb-8">
            <form action="{{ route('admin.products.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <label for="search" class="sr-only">Rechercher</label>
                    <div class="relative">
                        <label for="search" class="sr-only">Rechercher</label>
                        <input type="text" id="search" name="q" value="{{ request('q') }}" placeholder="Rechercher un produit..."
                               class="w-full pl-10 pr-4 py-3 input-eco"
                               aria-label="Rechercher un produit">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-earth-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <label for="category" class="block text-sm font-medium text-forest mb-1">Catégorie</label>
                    <select name="categorie" id="category" onchange="this.form.submit()" class="w-full input-eco px-4 py-2">
                        <option value="">Toutes catégories</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('categorie') == $cat->id ? 'selected' : '' }}>{{ $cat->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="sort" class="block text-sm font-medium text-forest mb-1">Trier</label>
                    <select name="tri" onchange="this.form.submit()" class="w-full input-eco px-4 py-2">
                        <option value="recent" {{ (request('tri') ?? 'recent') == 'recent' ? 'selected' : '' }}>Plus récents</option>
                        <option value="prix_asc" {{ request('tri') == 'prix_asc' ? 'selected' : '' }}>Prix croissant</option>
                        <option value="prix_desc" {{ request('tri') == 'prix_desc' ? 'selected' : '' }}>Prix décroissant</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <a href="{{ route('admin.products.index') }}" class="px-4 py-2 text-forest hover:text-forest-dark font-medium text-sm underline">Réinitialiser</a>
                </div>
            </form>
        </div>

        <!-- Produits -->
        <div class="card-eco bg-white overflow-hidden">
            @if($products->isEmpty())
            <div class="p-12 text-center">
                <i class="fas fa-box-open text-forest/30 text-6xl mb-4"></i>
                <h3 class="font-display text-xl font-bold text-forest mb-2">Aucun produit</h3>
                <p class="text-clay">Aucun produit ne correspond à votre recherche.</p>
                <a href="{{ route('admin.products.create') }}" class="mt-4 inline-block btn-sun">Ajouter le premier produit</a>
            </div>
            @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-earth-200">
                    <thead class="thead-eco">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Produit</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Catégorie</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Prix</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Stock</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Statut</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Vendeur</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-earth-200">
                        @foreach($products as $product)
                        <tr class="hover:bg-sand/30">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="{{ $product->image ?? asset('images/pattern-leaves.jpg') }}" alt="{{ $product->nom }}" class="w-12 h-12 rounded-lg object-cover mr-3">
                                    <div>
                                        <p class="font-semibold text-forest">{{ $product->nom }}</p>
                                        <p class="text-xs text-earth-500">ID: #{{ $product->id }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-leaf/10 text-leaf">{{ $product->categorie_nom ?? '—' }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="font-semibold text-forest">{{ number_format($product->prix, 2) }} DH</span>
                                <span class="text-xs text-earth-500">/ {{ $product->unite_mesure }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="font-medium text-forest">{{ $product->quantite }} {{ $product->unite_mesure }}</span>
                            </td>
                            <td class="px-6 py-4">
                                @if($product->en_stock && $product->quantite > 0)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-leaf/10 text-leaf">
                                    <i class="fas fa-check-circle mr-1.5"></i>En stock
                                </span>
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-700">
                                    <svg class="w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 8 8"><circle cx="4" cy="4" r="3" /></svg>
                                    Rupture
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="{{ $product->image_vendeur ?? asset('images/logo-white.jpg') }}" alt="{{ $product->vendeur }}" class="w-8 h-8 rounded-full mr-2">
                                    <span class="text-sm text-clay ml-2">{{ $product->vendeur }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="px-3 py-1.5 bg-leaf/10 text-leaf text-sm font-medium rounded-full hover:bg-leaf/20 transition">Modifier</a>
                                    <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" onsubmit="return confirm('Supprimer ce produit ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-rose-50 text-rose-600 text-sm font-medium rounded-full hover:bg-rose-100 transition">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

        {{ $products->links('pagination::tailwind') }}
    </div>
</div>
@endsection