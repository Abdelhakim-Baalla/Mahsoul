@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            &lt;!-- Breadcrumbs -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <a href="/profile" class="text-gray-700 hover:text-primary-600">
                                Mon profil
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <a href="/orders" class="text-gray-700 hover:text-primary-600">
                                Mes commandes
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-primary-600 font-medium">Commande #MAH-12345</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            &lt;!-- Header -->
            <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-primary-800">Détails de la commande</h1>
                    <p class="mt-2 text-lg text-gray-600">Commande #MAH-12345 - Passée le 22 Avril 2023</p>
                </div>
                <div class="mt-4 md:mt-0 flex space-x-3">
                    <a href="/orders/12345/invoice" class="bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-md font-medium flex items-center">
                        <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                        Télécharger la facture
                    </a>
                    <a href="/contact?order=12345" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-md font-medium flex items-center">
                        <i class="fas fa-question-circle mr-2"></i>
                        Besoin d'aide ?
                    </a>
                </div>
            </div>
            
            &lt;!-- Order Status -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-bold text-gray-800">Statut de la commande</h2>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Livrée
                            </span>
                            <span class="ml-3 text-gray-600">Votre commande a été livrée le 25 Avril 2023</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Numéro de suivi: <span class="font-medium">TRK-987654321</span></span>
                        </div>
                    </div>
                    
                    &lt;!-- Order Timeline -->
                    <div class="relative">
                        <div class="absolute left-5 top-0 h-full w-0.5 bg-gray-200"></div>
                        
                        &lt;!-- Step 1: Order Placed -->
                        <div class="relative mb-8">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-10 h-10 bg-primary-600 rounded-full">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Commande passée</h3>
                                    <p class="text-sm text-gray-600">22 Avril 2023 à 14:30</p>
                                </div>
                            </div>
                            <div class="ml-14 mt-2">
                                <p class="text-gray-700">Votre commande a été reçue et confirmée.</p>
                            </div>
                        </div>
                        
                        &lt;!-- Step 2: Processing -->
                


## Liste des produits

```html file="products/index.blade.php"
@extends('layouts.app')

@section('title', 'Marketplace - Mahsoul')

@section('content')
<div class="bg-gradient-to-b from-green-50 to-white py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-green-800 mb-6">Marketplace des Produits Agricoles</h1>
        <p class="text-gray-600 mb-8">Découvrez des produits frais directement des agriculteurs locaux</p>
        
        <div class="flex flex-col md:flex-row gap-6">
            &lt;!-- Filtres et catégories -->
            <div class="w-full md:w-1/4 bg-white rounded-lg shadow-md p-4 h-fit">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Filtres</h2>
                
                <div class="mb-6">
                    <h3 class="font-medium text-gray-700 mb-2">Catégories</h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input id="cat-all" type="radio" name="category" value="all" class="h-4 w-4 text-green-600 focus:ring-green-500" checked>
                            <label for="cat-all" class="ml-2 text-gray-700">Tous les produits</label>
                        </div>
                        <div class="flex items-center">
                            <input id="cat-fruits" type="radio" name="category" value="fruits" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cat-fruits" class="ml-2 text-gray-700">Fruits</label>
                        </div>
                        <div class="flex items-center">
                            <input id="cat-vegetables" type="radio" name="category" value="vegetables" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cat-vegetables" class="ml-2 text-gray-700">Légumes</label>
                        </div>
                        <div class="flex items-center">
                            <input id="cat-cereals" type="radio" name="category" value="cereals" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cat-cereals" class="ml-2 text-gray-700">Céréales</label>
                        </div>
                        <div class="flex items-center">
                            <input id="cat-dairy" type="radio" name="category" value="dairy" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cat-dairy" class="ml-2 text-gray-700">Produits laitiers</label>
                        </div>
                        <div class="flex items-center">
                            <input id="cat-honey" type="radio" name="category" value="honey" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cat-honey" class="ml-2 text-gray-700">Miel et dérivés</label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="font-medium text-gray-700 mb-2">Prix</h3>
                    <div class="space-y-4">
                        <div>
                            <label for="min-price" class="block text-sm text-gray-600">Prix minimum (DH)</label>
                            <input type="number" id="min-price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="max-price" class="block text-sm text-gray-600">Prix maximum (DH)</label>
                            <input type="number" id="max-price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="font-medium text-gray-700 mb-2">Région</h3>
                    <select id="region" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                        <option value="">Toutes les régions</option>
                        <option value="casablanca">Casablanca-Settat</option>
                        <option value="rabat">Rabat-Salé-Kénitra</option>
                        <option value="marrakech">Marrakech-Safi</option>
                        <option value="fes">Fès-Meknès</option>
                        <option value="tanger">Tanger-Tétouan-Al Hoceïma</option>
                    </select>
                </div>
                
                <div class="mb-6">
                    <h3 class="font-medium text-gray-700 mb-2">Certification</h3>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <input id="cert-bio" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cert-bio" class="ml-2 text-gray-700">Agriculture Biologique</label>
                        </div>
                        <div class="flex items-center">
                            <input id="cert-local" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500">
                            <label for="cert-local" class="ml-2 text-gray-700">Produit Local</label>
                        </div>
                    </div>
                </div>
                
                <button class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 ease-in-out">
                    Appliquer les filtres
                </button>
            </div>
            
            &lt;!-- Liste des produits -->
            <div class="w-full md:w-3/4">
                <div class="flex justify-between items-center mb-6">
                    <div class="text-gray-600">Affichage de <span class="font-medium">24</span> produits</div>
                    <div class="flex items-center">
                        <label for="sort" class="mr-2 text-gray-600">Trier par:</label>
                        <select id="sort" class="rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                            <option value="popular">Popularité</option>
                            <option value="price-asc">Prix croissant</option>
                            <option value="price-desc">Prix décroissant</option>
                            <option value="newest">Plus récents</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    &lt;!-- Produit 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('products.show', 1) }}" class="block">
                            <img src="/placeholder.svg?height=200&width=300" alt="Oranges fraîches" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Oranges fraîches</h3>
                                        <p class="text-sm text-gray-500">Région de Souss</p>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Bio</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-2">Oranges juteuses et sucrées, cultivées sans pesticides</p>
                                <div class="mt-3 flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-700">25 DH/kg</span>
                                    <button class="bg-green-600 hover:bg-green-700 text-white text-sm py-1 px-3 rounded-md transition duration-300 ease-in-out">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    &lt;!-- Produit 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('products.show', 2) }}" class="block">
                            <img src="/placeholder.svg?height=200&width=300" alt="Huile d'olive extra vierge" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Huile d'olive extra vierge</h3>
                                        <p class="text-sm text-gray-500">Région de Fès-Meknès</p>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Bio</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-2">Huile d'olive pressée à froid, première qualité</p>
                                <div class="mt-3 flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-700">120 DH/L</span>
                                    <button class="bg-green-600 hover:bg-green-700 text-white text-sm py-1 px-3 rounded-md transition duration-300 ease-in-out">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    &lt;!-- Produit 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('products.show', 3) }}" class="block">
                            <img src="/placeholder.svg?height=200&width=300" alt="Pommes de terre" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Pommes de terre</h3>
                                        <p class="text-sm text-gray-500">Région du Moyen Atlas</p>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Local</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-2">Pommes de terre fraîches de saison</p>
                                <div class="mt-3 flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-700">8 DH/kg</span>
                                    <button class="bg-green-600 hover:bg-green-700 text-white text-sm py-1 px-3 rounded-md transition duration-300 ease-in-out">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    &lt;!-- Produit 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('products.show', 4) }}" class="block">
                            <img src="/placeholder.svg?height=200&width=300" alt="Miel d'eucalyptus" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Miel d'eucalyptus</h3>
                                        <p class="text-sm text-gray-500">Région de Tanger</p>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Bio</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-2">Miel pur et naturel, récolté à la main</p>
                                <div class="mt-3 flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-700">180 DH/kg</span>
                                    <button class="bg-green-600 hover:bg-green-700 text-white text-sm py-1 px-3 rounded-md transition duration-300 ease-in-out">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    &lt;!-- Produit 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('products.show', 5) }}" class="block">
                            <img src="/placeholder.svg?height=200&width=300" alt="Fromage de chèvre" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Fromage de chèvre</h3>
                                        <p class="text-sm text-gray-500">Région de Chefchaouen</p>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Local</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-2">Fromage artisanal de chèvre de montagne</p>
                                <div class="mt-3 flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-700">95 DH/pièce</span>
                                    <button class="bg-green-600 hover:bg-green-700 text-white text-sm py-1 px-3 rounded-md transition duration-300 ease-in-out">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    &lt;!-- Produit 6 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('products.show', 6) }}" class="block">
                            <img src="/placeholder.svg?height=200&width=300" alt="Blé dur" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Blé dur</h3>
                                        <p class="text-sm text-gray-500">Région de Marrakech</p>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Local</span>
                                </div>
                                <p class="text-gray-600 text-sm mt-2">Blé dur de qualité supérieure pour couscous</p>
                                <div class="mt-3 flex justify-between items-center">
                                    <span class="text-lg font-bold text-green-700">12 DH/kg</span>
                                    <button class="bg-green-600 hover:bg-green-700 text-white text-sm py-1 px-3 rounded-md transition duration-300 ease-in-out">
                                        Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                &lt;!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-gray-500 hover:bg-gray-50 rounded-l-md">Précédent</a>
                        <a href="#" class="py-2 px-4 bg-green-600 text-white font-medium border border-green-600">1</a>
                        <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">3</a>
                        <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-gray-500 hover:bg-gray-50 rounded-r-md">Suivant</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
