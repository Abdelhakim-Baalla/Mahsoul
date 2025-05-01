@extends('layouts.admin')

@section('title', 'Ajouter un produit - Mahsoul')

@section('content')
<div class="py-6 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Ajouter un produit</h1>
            <a href="{{ route('admin.products.index') }}" class="inline-flex items-center px-5 py-3 border border-transparent text-sm font-medium rounded-lg shadow-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Retour
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{route('admin.products.store')}}" method="POST">
                @csrf
                <div class="space-y-6">
                    <!-- Basic Information Section -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Informations de base</h2>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="nom" class="block text-sm font-medium text-gray-700">Nom du produit</label>
                                <div class="mt-1">
                                    <input type="text" name="nom" id="nom" required class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
                                <div class="mt-1">
                                    <select id="categorie" name="categorie" required class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" size="5" style="overflow-y: auto;">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                    <textarea id="description" name="description" rows="4" class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing & Inventory Section -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Prix et stock</h2>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label for="prix" class="block text-sm font-medium text-gray-700">Prix (DH)</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <input type="number" step="0.01" name="prix" id="prix" required class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 pr-12 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="0.00">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">DH</span>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="quantite" class="block text-sm font-medium text-gray-700">Quantité</label>
                                <div class="mt-1">
                                    <input type="number" step="0.01" name="quantite" id="quantite" required class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="unite_mesure" class="block text-sm font-medium text-gray-700">Unité de mesure*</label>
                                <div class="mt-1">
                                    <select id="unite_mesure" name="unite_mesure" required class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        <option value="kg">Kilogramme (kg)</option>
                                        <option value="g">Gramme (g)</option>
                                        <option value="l">Litre (L)</option>
                                        <option value="ml">Millilitre (mL)</option>
                                        <option value="piece">Pièce</option>
                                        <option value="boite">Boîte</option>
                                        <option value="boteille">Botte</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Statut du stock</label>
                                <div class="mt-1 flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <input id="en_stock_oui" name="en_stock" type="radio" value="1" checked class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300">
                                        <label for="en_stock_oui" class="ml-2 block text-sm text-gray-700">En stock</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="en_stock_non" name="en_stock" type="radio" value="0" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300">
                                        <label for="en_stock_non" class="ml-2 block text-sm text-gray-700">Rupture</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Media Section -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Image du produit</h2>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="image" class="block text-sm font-medium text-gray-700">URL de l'image</label>
                                <div class="mt-1">
                                    <input type="url" name="image" id="image" class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="https://example.com/image.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vendor Information -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">Vendeur</h2>
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="vendeur" class="block text-sm font-medium text-gray-700">Nom du vendeur</label>
                                <div class="mt-1">
                                    <input type="text" name="vendeur" id="vendeur" value="Mahsoul Store" class="block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                        <button type="reset" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Annuler
                        </button>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection