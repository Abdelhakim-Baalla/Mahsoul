@extends('layouts.admin')

@section('title', 'Modifier un produit - Mahsoul')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <a href="{{ route('admin.products.index') }}" class="text-green-600 hover:text-green-900 mr-2">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h1 class="text-2xl font-semibold text-gray-900">Modifier le produit</h1>
        </div>

        <div class="mt-6 bg-white shadow overflow-hidden rounded-lg">
            <form action="#" method="POST">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Nom du produit
                            </label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" value="Oranges fraîches" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="category" class="block text-sm font-medium text-gray-700">
                                Catégorie
                            </label>
                            <div class="mt-1">
                                <select id="category" name="category" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="">Sélectionner une catégorie</option>
                                    <option value="fruits" selected>Fruits</option>
                                    <option value="vegetables">Légumes</option>
                                    <option value="cereals">Céréales</option>
                                    <option value="dairy">Produits laitiers</option>
                                    <option value="honey">Miel et dérivés</option>
                                    <option value="oils">Huiles</option>
                                    <option value="nuts">Fruits secs</option>
                                    <option value="spices">Épices</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="4" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">Oranges juteuses et sucrées, cultivées sans pesticides dans la région de Souss. Riches en vitamine C et parfaites pour les jus frais.</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Description détaillée du produit.
                            </p>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="price" class="block text-sm font-medium text-gray-700">
                                Prix
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="price" id="price" value="25" class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">
                                        DH
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="unit" class="block text-sm font-medium text-gray-700">
                                Unité
                            </label>
                            <div class="mt-1">
                                <select id="unit" name="unit" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="kg" selected>Kilogramme (kg)</option>
                                    <option value="g">Gramme (g)</option>
                                    <option value="l">Litre (L)</option>
                                    <option value="ml">Millilitre (mL)</option>
                                    <option value="piece">Pièce</option>
                                    <option value="box">Boîte</option>
                                    <option value="bunch">Botte</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="stock" class="block text-sm font-medium text-gray-700">
                                Stock disponible
                            </label>
                            <div class="mt-1">
                                <input type="number" name="stock" id="stock" value="150" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md" min="0">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="region" class="block text-sm font-medium text-gray-700">
                                Région d'origine
                            </label>
                            <div class="mt-1">
                                <select id="region" name="region" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="">Sélectionner une région</option>
                                    <option value="casablanca">Casablanca-Settat</option>
                                    <option value="rabat">Rabat-Salé-Kénitra</option>
                                    <option value="marrakech">Marrakech-Safi</option>
                                    <option value="fes">Fès-Meknès</option>
                                    <option value="tanger">Tanger-Tétouan-Al Hoceïma</option>
                                    <option value="souss" selected>Souss-Massa</option>
                                    <option value="oriental">L'Oriental</option>
                                    <option value="beni">Béni Mellal-Khénifra</option>
                                    <option value="draa">Drâa-Tafilalet</option>
                                    <option value="guelmim">Guelmim-Oued Noun</option>
                                    <option value="laayoune">Laâyoune-Sakia El Hamra</option>
                                    <option value="dakhla">Dakhla-Oued Ed-Dahab</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="farmer" class="block text-sm font-medium text-gray-700">
                                Agriculteur
                            </label>
                            <div class="mt-1">
                                <select id="farmer" name="farmer" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="">Sélectionner un agriculteur</option>
                                    <option value="1" selected>Ahmed Benali</option>
                                    <option value="2">Fatima Zahra</option>
                                    <option value="3">Karim Alaoui</option>
                                    <option value="4">Samira Tazi</option>
                                    <option value="5">Youssef Mansouri</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">
                                Photos du produit
                            </label>
                            <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="relative">
                                    <img src="/placeholder.svg?height=150&width=150" alt="Photo du produit" class="h-32 w-32 object-cover rounded-md">
                                    <button type="button" class="absolute top-0 right-0 -mt-2 -mr-2 bg-red-100 rounded-full p-1 text-red-600 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative">
                                    <img src="/placeholder.svg?height=150&width=150" alt="Photo du produit" class="h-32 w-32 object-cover rounded-md">
                                    <button type="button" class="absolute top-0 right-0 -mt-2 -mr-2 bg-red-100 rounded-full p-1 text-red-600 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                            <span>Télécharger des fichiers</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                                        </label>
                                        <p class="pl-1">ou glisser-déposer</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF jusqu'à 10MB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-700">
                                    Certifications
                                </legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="bio" name="bio" type="checkbox" checked class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="bio" class="font-medium text-gray-700">Agriculture Biologique</label>
                                            <p class="text-gray-500">Produit certifié biologique.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="local" name="local" type="checkbox" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="local" class="font-medium text-gray-700">Produit Local</label>
                                            <p class="text-gray-500">Produit cultivé localement.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="fair_trade" name="fair_trade" type="checkbox" class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="fair_trade" class="font-medium text-gray-700">Commerce Équitable</label>
                                            <p class="text-gray-500">Produit issu du commerce équitable.</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="status" class="block text-sm font-medium text-gray-700">
                                Statut
                            </label>
                            <div class="mt-1">
                                <select id="status" name="status" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="active" selected>Actif</option>
                                    <option value="inactive">Inactif</option>
                                    <option value="pending">En attente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-3">
                        Annuler
                    </button>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
