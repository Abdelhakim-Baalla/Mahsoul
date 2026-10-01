@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Mes favoris</h1>
            <p class="mt-2 text-lg text-gray-600">Vos produits coups de cœur de la marketplace</p>
        </div>
        @if(session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
            <p class="text-sm text-green-700">{{ session('success') }}</p>
        </div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                @include('profile.partials.sidebar', ['active' => 'favorites'])
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Produits favoris ({{ $produits->count() }})</h2>
                    </div>
                    @if($produits->isEmpty())
                    <div class="p-10 text-center">
                        <i class="far fa-heart text-gray-300 text-5xl mb-4"></i>
                        <p class="text-gray-600">Aucun favori pour le moment.</p>
                        <a href="{{ route('products.index') }}" class="mt-4 inline-block px-6 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Découvrir la marketplace</a>
                    </div>
                    @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
                        @foreach($produits as $produit)
                        <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition">
                            <img src="{{ $produit->image }}" alt="{{ $produit->nom }}" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <p class="text-xs text-primary-600 font-medium">{{ $produit->categorie_nom }}</p>
                                <h3 class="font-semibold text-gray-800 mt-1">{{ $produit->nom }}</h3>
                                <p class="text-primary-700 font-bold mt-1">{{ $produit->prix }} DH / {{ $produit->unite_mesure }}</p>
                                <div class="mt-3 flex gap-2">
                                    <a href="{{ route('products.show', ['id' => $produit->id]) }}" class="flex-1 text-center px-3 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">Voir</a>
                                    <form action="{{ route('favorites.toggle') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $produit->id }}">
                                        <button type="submit" class="px-3 py-2 bg-red-50 text-red-600 text-sm font-medium rounded-md hover:bg-red-100" title="Retirer des favoris">
                                            <i class="fas fa-heart-broken"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
