@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                            <span class="text-primary-600 font-medium">Panier</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Votre panier</h1>
                <p class="mt-2 text-lg text-gray-600">Vérifiez et modifiez les articles de votre panier</p>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h2 class="text-xl font-bold text-gray-800">Articles (3)</h2>
                                <button class="text-primary-600 hover:text-primary-700 font-medium text-sm flex items-center">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                    Vider le panier
                                </button>
                            </div>
                        </div>
                        
                        <div class="divide-y divide-gray-200">
                            <div class="p-6 flex flex-col sm:flex-row">
                                <div class="sm:w-24 sm:h-24 flex-shrink-0 mb-4 sm:mb-0">
                                    <img src="/images/product-1.jpg" alt="Antibiotique Bovins Premium" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="sm:ml-6 flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800">
                                                <a href="/products/1" class="hover:text-primary-600">Antibiotique Bovins Premium</a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Flacon 100ml</p>
                                            <p class="mt-1 text-sm text-green-600 flex items-center">
                                                <i class="fas fa-check-circle mr-1"></i>
                                                En stock
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-lg font-bold text-primary-700">350 DH</p>
                                            <p class="text-sm text-gray-500">350 DH / unité</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between">
                                        <div class="flex items-center">
                                            <label for="quantity-1" class="sr-only">Quantité</label>
                                            <div class="flex items-center border border-gray-300 rounded-md">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-1', -1)">-</button>
                                                <input type="number" id="quantity-1" name="quantity-1" min="1" value="1" class="w-12 text-center border-0 focus:ring-0">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-1', 1)">+</button>
                                            </div>
                                            <div class="ml-4">
                                                <span class="text-sm text-orange-600">
                                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                                    Ordonnance requise
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mt-4 sm:mt-0 flex space-x-3">
                                            <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                                <i class="far fa-heart mr-1"></i>
                                                Sauvegarder
                                            </button>
                                            <button class="text-red-600 hover:text-red-700 text-sm font-medium">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col sm:flex-row">
                                <div class="sm:w-24 sm:h-24 flex-shrink-0 mb-4 sm:mb-0">
                                    <img src="/images/product-2.jpg" alt="Aliment Complet Bovins" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="sm:ml-6 flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800">
                                                <a href="/products/2" class="hover:text-primary-600">Aliment Complet Bovins</a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Sac 25kg</p>
                                            <p class="mt-1 text-sm text-green-600 flex items-center">
                                                <i class="fas fa-check-circle mr-1"></i>
                                                En stock
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-lg font-bold text-primary-700">360 DH</p>
                                            <p class="text-sm text-gray-500">180 DH / unité</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between">
                                        <div class="flex items-center">
                                            <label for="quantity-2" class="sr-only">Quantité</label>
                                            <div class="flex items-center border border-gray-300 rounded-md">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-2', -1)">-</button>
                                                <input type="number" id="quantity-2" name="quantity-2" min="1" value="2" class="w-12 text-center border-0 focus:ring-0">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-2', 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="mt-4 sm:mt-0 flex space-x-3">
                                            <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                                <i class="far fa-heart mr-1"></i>
                                                Sauvegarder
                                            </button>
                                            <button class="text-red-600 hover:text-red-700 text-sm font-medium">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col sm:flex-row">
                                <div class="sm:w-24 sm:h-24 flex-shrink-0 mb-4 sm:mb-0">
                                    <img src="/images/product-6.jpg" alt="Engrais Organique Premium" class="w-full h-full object-cover rounded-md">
                                </div>
                                <div class="sm:ml-6 flex-1">
                                    <div class="flex justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800">
                                                <a href="/products/6" class="hover:text-primary-600">Engrais Organique Premium</a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Sac 20kg</p>
                                            <p class="mt-1 text-sm text-green-600 flex items-center">
                                                <i class="fas fa-check-circle mr-1"></i>
                                                En stock
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-lg font-bold text-primary-700">220 DH</p>
                                            <p class="text-sm text-gray-500">220 DH / unité</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between">
                                        <div class="flex items-center">
                                            <label for="quantity-3" class="sr-only">Quantité</label>
                                            <div class="flex items-center border border-gray-300 rounded-md">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-3', -1)">-</button>
                                                <input type="number" id="quantity-3" name="quantity-3" min="1" value="1" class="w-12 text-center border-0 focus:ring-0">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-3', 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="mt-4 sm:mt-0 flex space-x-3">
                                            <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                                <i class="far fa-heart mr-1"></i>
                                                Sauvegarder
                                            </button>
                                            <button class="text-red-600 hover:text-red-700 text-sm font-medium">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6 border-t border-gray-200">
                            <a href="/products" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Continuer vos achats
                            </a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Ordonnances requises</h2>
                        </div>
                        <div class="p-6">
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-yellow-700">
                                            Certains produits dans votre panier nécessitent une ordonnance vétérinaire valide.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <p class="text-gray-700 mb-2">Produits nécessitant une ordonnance :</p>
                                <ul class="list-disc pl-5 text-gray-700">
                                    <li>Antibiotique Bovins Premium</li>
                                </ul>
                            </div>
                            
                            <div class="relative bg-primary-100 hover:bg-primary-200 text-primary-700 py-2 px-4 rounded-md font-medium cursor-pointer transition duration-150 ease-in-out inline-block">
                                <span class="flex items-center">
                                    <i class="fas fa-upload mr-2"></i>
                                    Télécharger l'ordonnance
                                </span>
                                <input type="file" id="prescription-upload" name="prescription-upload" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.jpg,.jpeg,.png">
                            </div>
                            <p class="mt-2 text-xs text-gray-500">Formats acceptés : PDF, JPG, PNG. Taille maximale : 5 MB</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden sticky top-6">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Récapitulatif de la commande</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Sous-total (4 articles)</span>
                                    <span class="text-gray-800 font-medium">930 DH</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Frais de livraison</span>
                                    <span class="text-gray-800 font-medium">50 DH</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Taxes (20%)</span>
                                    <span class="text-gray-800 font-medium">186 DH</span>
                                </div>
                                
                                <div class="pt-4">
                                    <label for="promo-code" class="block text-sm font-medium text-gray-700 mb-1">Code promo</label>
                                    <div class="flex">
                                        <input type="text" id="promo-code" name="promo-code" placeholder="Entrez votre code" class="flex-1 border-gray-300 rounded-l-md focus:ring-primary-500 focus:border-primary-500">
                                        <button type="button" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-r-md">
                                            Appliquer
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="border-t border-gray-200 pt-4 mt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-lg font-bold text-gray-800">Total</span>
                                        <span class="text-xl font-bold text-primary-700">1166 DH</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">TVA incluse</p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <a href="/checkout" class="block w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out text-center">
                                    Procéder au paiement
                                </a>
                            </div>
                            
                            <div class="mt-6 flex items-center justify-center space-x-4">
                                <div class="flex items-center">
                                    <i class="fas fa-lock text-gray-400 mr-2"></i>
                                    <span class="text-sm text-gray-600">Paiement sécurisé</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-truck text-gray-400 mr-2"></i>
                                    <span class="text-sm text-gray-600">Livraison rapide</span>
                                </div>
                            </div>
                            
                            <div class="mt-4 flex justify-center">
                                <img src="/images/payment-methods.png" alt="Méthodes de paiement" class="h-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Récemment consultés</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                        <a href="/products/3">
                            <div class="relative">
                                <img src="/images/product-3.jpg" alt="Système d'irrigation goutte-à-goutte" class="w-full h-48 object-cover">
                                <span class="absolute top-2 right-2 bg-primary-500 text-white text-xs font-bold px-2 py-1 rounded">Nouveau</span>
                            </div>
                        </a>
                        <div class="p-4">
                            <span class="text-xs text-gray-500">Équipements</span>
                            <a href="/products/3">
                                <h3 class="text-lg font-semibold text-gray-800 mt-1 hover:text-primary-600">Système d'irrigation goutte-à-goutte</h3>
                            </a>
                            <div class="flex items-center mt-2">
                                <div class="flex text-secondary-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">5.0</span>
                            </div>
                            <div class="mt-3 flex justify-between items-center">
                                <span class="text-primary-700 font-bold">1200 DH</span>
                                <span class="text-sm text-gray-500">Kit complet</span>
                            </div>
                            <button class="mt-4 w-full bg-primary-600 hover:bg-primary-700 text-white py-2 rounded-md flex items-center justify-center">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                        <a href="/products/4">
                            <div class="relative">
                                <img src="/images/product-4.jpg" alt="Huile d'Argan Pure Bio" class="w-full h-48 object-cover">
                            </div>
                        </a>
                        <div class="p-4">
                            <span class="text-xs text-gray-500">Produits naturels</span>
                            <a href="/products/4">
                                <h3 class="text-lg font-semibold text-gray-800 mt-1 hover:text-primary-600">Huile d'Argan Pure Bio</h3>
                            </a>
                            <div class="flex items-center mt-2">
                                <div class="flex text-secondary-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">4.7</span>
                            </div>
                            <div class="mt-3 flex justify-between items-center">
                                <span class="text-primary-700 font-bold">120 DH</span>
                                <span class="text-sm text-gray-500">Bouteille 250ml</span>
                            </div>
                            <button class="mt-4 w-full bg-primary-600 hover:bg-primary-700 text-white py-2 rounded-md flex items-center justify-center">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                        <a href="/products/5">
                            <div class="relative">
                                <img src="/images/product-5.jpg" alt="Semences de Blé Certifiées" class="w-full h-48 object-cover">
                            </div>
                        </a>
                        <div class="p-4">
                            <span class="text-xs text-gray-500">Semences</span>
                            <a href="/products/5">
                                <h3 class="text-lg font-semibold text-gray-800 mt-1 hover:text-primary-600">Semences de Blé Certifiées</h3>
                            </a>
                            <div class="flex items-center mt-2">
                                <div class="flex text-secondary-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">4.2</span>
                            </div>
                            <div class="mt-3 flex justify-between items-center">
                                <span class="text-primary-700 font-bold">450 DH</span>
                                <span class="text-sm text-gray-500">Sac 10kg</span>
                            </div>
                            <button class="mt-4 w-full bg-primary-600 hover:bg-primary-700 text-white py-2 rounded-md flex items-center justify-center">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                        <a href="/products/7">
                            <div class="relative">
                                <img src="/images/related-product-1.jpg" alt="Antibiotique Ovins Premium" class="w-full h-48 object-cover">
                            </div>
                        </a>
                        <div class="p-4">
                            <span class="text-xs text-gray-500">Médicaments</span>
                            <a href="/products/7">
                                <h3 class="text-lg font-semibold text-gray-800 mt-1 hover:text-primary-600">Antibiotique Ovins Premium</h3>
                            </a>
                            <div class="flex items-center mt-2">
                                <div class="flex text-secondary-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-600">4.0</span>
                            </div>
                            <div class="mt-3 flex justify-between items-center">
                                <span class="text-primary-700 font-bold">280 DH</span>
                                <span class="text-sm text-gray-500">Flacon 50ml</span>
                            </div>
                            <button class="mt-4 w-full bg-primary-600 hover:bg-primary-700 text-white py-2 rounded-md flex items-center justify-center">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Quantity update functionality
        function updateQuantity(inputId, change) {
            const input = document.getElementById(inputId);
            const currentValue = parseInt(input.value);
            const newValue = currentValue + change;
            
            if (newValue >= 1) {
                input.value = newValue;
                updateCartTotals();
            }
        }
        
        // Update cart totals (placeholder function)
        function updateCartTotals() {
            // This would typically make an AJAX call to update the cart on the server
            // and then update the UI with the new totals
            console.log('Cart updated');
        }
        
        // Prescription upload handling
        document.addEventListener('DOMContentLoaded', function() {
            const prescriptionUpload = document.getElementById('prescription-upload');
            if (prescriptionUpload) {
                prescriptionUpload.addEventListener('change', function(e) {
                    if (e.target.files.length > 0) {
                        const fileName = e.target.files[0].name;
                        alert(`Fichier "${fileName}" téléchargé avec succès. Il sera examiné par notre équipe.`);
                    }
                });
            }
        });
    </script>
@endsection
