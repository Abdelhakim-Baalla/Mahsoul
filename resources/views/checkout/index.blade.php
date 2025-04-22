@extends('layouts.app')

@section('title', 'Finaliser votre commande - Mahsoul')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
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
                            <a href="/cart" class="text-gray-700 hover:text-primary-600">
                                Panier
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-primary-600 font-medium">Paiement</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Finaliser votre commande</h1>
                <p class="mt-2 text-lg text-gray-600">Complétez les informations ci-dessous pour passer votre commande</p>
            </div>
            
            <!-- Checkout Steps -->
            <div class="mb-8">
                <div class="flex items-center justify-center">
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Panier</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Informations</div>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300"></div>
                    <div class="flex items-center text-gray-500 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300 bg-white text-gray-500 flex items-center justify-center">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500">Paiement</div>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300"></div>
                    <div class="flex items-center text-gray-500 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300 bg-white text-gray-500 flex items-center justify-center">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-gray-500">Confirmation</div>
                    </div>
                </div>
            </div>
            
            <!-- Checkout Content -->
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Checkout Form -->
                <div class="lg:w-2/3">
                    <form action="/checkout/payment" method="POST">
                        <!-- Shipping Information -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-gray-800">Informations de livraison</h2>
                            </div>
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                        <input type="text" id="first_name" name="first_name" value="Mohammed" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                        <input type="text" id="last_name" name="last_name" value="Alami" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" id="email" name="email" value="mohammed.alami@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                        <input type="tel" id="phone" name="phone" value="+212 6XX XX XX XX" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                        <input type="text" id="address" name="address" value="123 Rue de l'Agriculture" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Ville</label>
                                        <input type="text" id="city" name="city" value="Ville" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                    <div>
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-1">Code postal</label>
                                        <input type="text" id="postal_code" name="postal_code" value="10000" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <div class="flex items-center">
                                        <input id="save_address" name="save_address" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded" checked>
                                        <label for="save_address" class="ml-2 block text-sm text-gray-700">
                                            Enregistrer cette adresse pour mes prochaines commandes
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Shipping Method -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-gray-800">Méthode de livraison</h2>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer" onclick="selectShippingMethod(this, 'standard')">
                                        <input type="radio" id="shipping_standard" name="shipping_method" value="standard" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300" checked>
                                        <label for="shipping_standard" class="ml-3 flex flex-1 justify-between cursor-pointer">
                                            <div>
                                                <span class="block text-sm font-medium text-gray-700">Livraison standard</span>
                                                <span class="block text-sm text-gray-500">Livraison en 3-5 jours ouvrables</span>
                                            </div>
                                            <span class="text-primary-700 font-medium">50 DH</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer" onclick="selectShippingMethod(this, 'express')">
                                        <input type="radio" id="shipping_express" name="shipping_method" value="express" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                        <label for="shipping_express" class="ml-3 flex flex-1 justify-between cursor-pointer">
                                            <div>
                                                <span class="block text-sm font-medium text-gray-700">Livraison express</span>
                                                <span class="block text-sm text-gray-500">Livraison en 1-2 jours ouvrables</span>
                                            </div>
                                            <span class="text-primary-700 font-medium">100 DH</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer" onclick="selectShippingMethod(this, 'pickup')">
                                        <input type="radio" id="shipping_pickup" name="shipping_method" value="pickup" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                        <label for="shipping_pickup" class="ml-3 flex flex-1 justify-between cursor-pointer">
                                            <div>
                                                <span class="block text-sm font-medium text-gray-700">Retrait en magasin</span>
                                                <span class="block text-sm text-gray-500">Disponible sous 24h</span>
                                            </div>
                                            <span class="text-primary-700 font-medium">Gratuit</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Payment Method -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-gray-800">Méthode de paiement</h2>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer" onclick="selectPaymentMethod(this, 'card')">
                                        <input type="radio" id="payment_card" name="payment_method" value="card" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300" checked>
                                        <label for="payment_card" class="ml-3 flex flex-1 justify-between cursor-pointer">
                                            <div>
                                                <span class="block text-sm font-medium text-gray-700">Carte bancaire</span>
                                                <span class="block text-sm text-gray-500">Visa, Mastercard, CMI</span>
                                            </div>
                                            <div class="flex space-x-2">
                                                <i class="fab fa-cc-visa text-blue-700 text-2xl"></i>
                                                <i class="fab fa-cc-mastercard text-red-600 text-2xl"></i>
                                            </div>
                                        </label>
                                    </div>
                                    
                                    <!-- Credit Card Form (conditionally shown) -->
                                    <div id="card-payment-form" class="mt-4 border border-gray-200 rounded-md p-4">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div class="md:col-span-2">
                                                <label for="card_number" class="block text-sm font-medium text-gray-700 mb-1">Numéro de carte</label>
                                                <div class="relative">
                                                    <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                        <i class="far fa-credit-card text-gray-400"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="card_name" class="block text-sm font-medium text-gray-700 mb-1">Nom sur la carte</label>
                                                <input type="text" id="card_name" name="card_name" placeholder="Mohammed Alami" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                            </div>
                                            <div class="flex space-x-4">
                                                <div class="w-1/2">
                                                    <label for="card_expiry" class="block text-sm font-medium text-gray-700 mb-1">Date d'expiration</label>
                                                    <input type="text" id="card_expiry" name="card_expiry" placeholder="MM/AA" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                                </div>
                                                <div class="w-1/2">
                                                    <label for="card_cvc" class="block text-sm font-medium text-gray-700 mb-1">CVC</label>
                                                    <input type="text" id="card_cvc" name="card_cvc" placeholder="123" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="save_card" name="save_card" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                                <label for="save_card" class="ml-2 block text-sm text-gray-700">
                                                    Enregistrer cette carte pour mes prochains achats
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer" onclick="selectPaymentMethod(this, 'paypal')">
                                        <input type="radio" id="payment_paypal" name="payment_method" value="paypal" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                        <label for="payment_paypal" class="ml-3 flex flex-1 justify-between cursor-pointer">
                                            <div>
                                                <span class="block text-sm font-medium text-gray-700">PayPal</span>
                                                <span class="block text-sm text-gray-500">Paiement sécurisé via PayPal</span>
                                            </div>
                                            <i class="fab fa-paypal text-blue-700 text-2xl"></i>
                                        </label>
                                    </div>
                                    
                                    <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer" onclick="selectPaymentMethod(this, 'cash')">
                                        <input type="radio" id="payment_cash" name="payment_method" value="cash" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                        <label for="payment_cash" class="ml-3 flex flex-1 justify-between cursor-pointer">
                                            <div>
                                                <span class="block text-sm font-medium text-gray-700">Paiement à la livraison</span>
                                                <span class="block text-sm text-gray-500">Payez en espèces à la réception</span>
                                            </div>
                                            <i class="fas fa-money-bill-wave text-green-600 text-2xl"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Order Notes -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-gray-800">Notes de commande (optionnel)</h2>
                            </div>
                            <div class="p-6">
                                <label for="order_notes" class="block text-sm font-medium text-gray-700 mb-1">Instructions spéciales pour la livraison</label>
                                <textarea id="order_notes" name="order_notes" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" placeholder="Informations supplémentaires pour la livraison ou le paiement..."></textarea>
                            </div>
                        </div>
                        
                        <!-- Terms and Conditions -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                            <div class="p-6">
                                <div class="flex items-start">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded mt-1" required>
                                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                                        J'ai lu et j'accepte les <a href="/terms" class="text-primary-600 hover:text-primary-700">conditions générales de vente</a> et la <a href="/privacy" class="text-primary-600 hover:text-primary-700">politique de confidentialité</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="flex justify-between items-center">
                            <a href="/cart" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Retour au panier
                            </a>
                            <button type="submit" class="bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-6 rounded-md transition duration-150 ease-in-out">
                                Procéder au paiement
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Order Summary -->
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden sticky top-6">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Récapitulatif de la commande</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4 mb-6">
                                <!-- Order Items -->
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Antibiotique Bovins Premium" class="w-16 h-16 object-cover rounded-md">
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-gray-800">Antibiotique Bovins Premium</h3>
                                                <p class="text-xs text-gray-500">Flacon 100ml x 1</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-800">350 DH</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Aliment Complet Bovins" class="w-16 h-16 object-cover rounded-md">
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-gray-800">Aliment Complet Bovins</h3>
                                                <p class="text-xs text-gray-500">Sac 25kg x 2</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-800">360 DH</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img src="/placeholder.svg?height=100&width=100" alt="Engrais Organique Premium" class="w-16 h-16 object-cover rounded-md">
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-gray-800">Engrais Organique Premium</h3>
                                                <p class="text-xs text-gray-500">Sac 20kg x 1</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-gray-800">220 DH</span>
                                    </div>
                                </div>
                                
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Sous-total</span>
                                        <span class="text-gray-800 font-medium">930 DH</span>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <span class="text-gray-600">Frais de livraison</span>
                                        <span class="text-gray-800 font-medium" id="shipping-cost">50 DH</span>
                                    </div>
                                    <div class="flex justify-between mt-2">
                                        <span class="text-gray-600">Taxes (20%)</span>
                                        <span class="text-gray-800 font-medium">186 DH</span>
                                    </div>
                                </div>
                                
                                <!-- Promo Code -->
                                <div class="pt-4">
                                    <label for="promo-code-checkout" class="block text-sm font-medium text-gray-700 mb-1">Code promo</label>
                                    <div class="flex">
                                        <input type="text" id="promo-code-checkout" name="promo-code-checkout" placeholder="Entrez votre code" class="flex-1 border-gray-300 rounded-l-md focus:ring-primary-500 focus:border-primary-500">
                                        <button type="button" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-r-md">
                                            Appliquer
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="border-t border-gray-200 pt-4 mt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-lg font-bold text-gray-800">Total</span>
                                        <span class="text-xl font-bold text-primary-700" id="order-total">1166 DH</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">TVA incluse</p>
                                </div>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-4">
                                <div class="flex items-center justify-center space-x-4">
                                    <div class="flex items-center">
                                        <i class="fas fa-lock text-gray-400 mr-2"></i>
                                        <span class="text-sm text-gray-600">Paiement sécurisé</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-shield-alt text-gray-400 mr-2"></i>
                                        <span class="text-sm text-gray-600">Données protégées</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Shipping method selection
        function selectShippingMethod(element, method) {
            // Update radio button
            document.getElementById('shipping_' + method).checked = true;
            
            // Update styling
            document.querySelectorAll('[name="shipping_method"]').forEach(radio => {
                const parent = radio.closest('.flex.items-center');
                if (radio.checked) {
                    parent.classList.add('border-primary-500', 'bg-primary-50');
                } else {
                    parent.classList.remove('border-primary-500', 'bg-primary-50');
                }
            });
            
            // Update shipping cost and total
            let shippingCost = '50 DH';
            if (method === 'express') {
                shippingCost = '100 DH';
            } else if (method === 'pickup') {
                shippingCost = 'Gratuit';
            }
            
            document.getElementById('shipping-cost').textContent = shippingCost;
            updateOrderTotal();
        }
        
        // Payment method selection
        function selectPaymentMethod(element, method) {
            // Update radio button
            document.getElementById('payment_' + method).checked = true;
            
            // Update styling
            document.querySelectorAll('[name="payment_method"]').forEach(radio => {
                const parent = radio.closest('.flex.items-center');
                if (radio.checked) {
                    parent.classList.add('border-primary-500', 'bg-primary-50');
                } else {
                    parent.classList.remove('border-primary-500', 'bg-primary-50');
                }
            });
            
            // Show/hide card payment form
            const cardForm = document.getElementById('card-payment-form');
            if (method === 'card') {
                cardForm.classList.remove('hidden');
            } else {
                cardForm.classList.add('hidden');
            }
        }
        
        // Update order total
        function updateOrderTotal() {
            // This would typically calculate the new total based on shipping method
            // For now, we'll just use placeholder values
            const shippingText = document.getElementById('shipping-cost').textContent;
            let total = 1166; // Base total
            
            if (shippingText === '100 DH') {
                total = 1216; // Add 50 DH more for express
            } else if (shippingText === 'Gratuit') {
                total = 1116; // Subtract 50 DH for pickup
            }
            
            document.getElementById('order-total').textContent = total + ' DH';
        }
        
        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Set initial state for shipping method
            selectShippingMethod(null, 'standard');
            
            // Set initial state for payment method
            selectPaymentMethod(null, 'card');
        });
    </script>
@endsection
