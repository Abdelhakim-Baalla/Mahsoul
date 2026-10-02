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

        <div class="card-eco bg-white p-5 mb-8">
            <form action="{{ route('admin.products.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative">
                    <label for="search" class="sr-only">Rechercher</label>
                    <input type="text" id="search" name="q" value="{{ request('q') }}" placeholder="Rechercher un produit..."
                           class="w-full pl-10 pr-4 py-3 input-eco" aria-label="Rechercher un produit">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-earth-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <div class="flex items-center gap-3">
                    <button type="submit" class="px-4 py-2 btn-eco text-sm">Filtrer</button>
                    @if(request('q'))
                    <a href="{{ route('admin.products.index') }}" class="text-sm text-forest hover:underline">Réinitialiser</a>
                    @endif
                </div>
            </form>
        </div>

        <div class="card-eco bg-white overflow-hidden">
            @if($produits->isEmpty())
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
                        @foreach($produits as $produit)
                        <tr class="hover:bg-sand/30">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="{{ $produit->image ?? asset('images/pattern-leaves.jpg') }}" alt="{{ $produit->nom }}" class="w-12 h-12 rounded-xl object-cover mr-3">
                                    <div>
                                        <p class="font-semibold text-forest">{{ $produit->nom }}</p>
                                        <p class="text-xs text-earth-500">ID: #{{ $produit->id }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-leaf/10 text-leaf">{{ $produit->categorie->nom ?? '—' }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="font-semibold text-forest">{{ number_format($produit->prix, 2) }} DH</span>
                                <span class="text-xs text-earth-500">/ {{ $produit->unite_mesure }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-forest">{{ $produit->quantite }} {{ $produit->unite_mesure }}</td>
                            <td class="px-6 py-4">
                                @if($produit->en_stock && $produit->quantite > 0)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-leaf/10 text-leaf">En stock</span>
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-100 text-rose-700">Rupture</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-clay">{{ $produit->vendeur }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <form action="{{ route('admin.products.edit') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $produit->id }}">
                                        <button type="submit" class="px-3 py-1.5 bg-leaf/10 text-leaf text-sm font-medium rounded-full hover:bg-leaf/20 transition">Modifier</button>
                                    </form>
                                    <form action="{{ route('admin.products.delete') }}" method="POST" onsubmit="return confirm('Supprimer ce produit ?')">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $produit->id }}">
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

        {{ $produits->links('pagination::tailwind') }}
    </div>
</div>
@endsection