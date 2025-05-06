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
                    @csrf
                    <!-- Shipping Information -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Informations de livraison</h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                                    <input type="text" id="prenom" name="prenom" value="{{Auth::user()->prenom}}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                <div>
                                    <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                    <input type="text" id="nom" name="nom" value="{{Auth::user()->nom}}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                <div>
                                    <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                                    <input type="tel" id="telephone" name="telephone" value="{{Auth::user()->telephone}}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                                    <input type="text" id="adresse" name="adresse" value="{{Auth::user()->adresse}}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-gray-800">Méthode de livraison</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">

                                <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer">
                                    <input type="radio" id="shipping_pickup" name="shipping_method" value="pickup" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300" checked>
                                    <label for="shipping_pickup" class="ml-3 flex flex-1 justify-between cursor-pointer items-center">
                                        <div>
                                            <span class="block text-sm font-medium text-gray-700">Laivraison Gratuit</span>
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
                                <div class="flex items-center border border-gray-200 rounded-md p-4 hover:border-primary-500 cursor-pointer">
                                    <input type="radio" id="payment_stripe" name="payment_method" value="stripe" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300" checked>
                                    <label for="payment_stripe" class="ml-3 flex flex-1 justify-between cursor-pointer items-center">
                                        <div>
                                            <span class="block text-sm font-medium text-gray-700">Paiement sécurisé</span>
                                            <span class="block text-sm text-gray-500">Paiement par carte via Stripe</span>
                                        </div>
                                        <img
                                            src="{{ asset('images/stripe-logo.png') }}"
                                            alt="Stripe"
                                            class="h-8 w-auto"
                                            style="filter: brightness(0) saturate(100%) invert(26%) sepia(89%) saturate(2599%) hue-rotate(215deg) brightness(97%) contrast(91%)">
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
                        <input type="hidden" name="total" value="{{$total}}">
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
                                @php $count = 0; @endphp
                                @foreach($cartItems as $demande)
                                @if($count < 3)
                                    <div class="flex justify-between items-center mb-4 last:mb-0">
                                    <div class="flex items-center flex-1 min-w-0">
                                        <img src="{{$demande['product']->image}}" alt="{{$demande['product']->nom}}"
                                            class="w-16 h-16 object-cover rounded-md flex-shrink-0">
                                        <div class="ml-3 min-w-0">
                                            <h3 class="text-sm font-medium text-gray-800 truncate">{{$demande['product']->nom}}</h3>
                                            <p class="text-xs text-gray-500">{{$demande['quantity']}} x {{$demande['product']->unite_mesure}}</p>
                                            <small class="text-xs text-gray-400 block mt-1">{{$demande['product']->prix}} DH / unité</small>
                                        </div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-800 ml-4 whitespace-nowrap">
                                        {{$demande['quantity'] * $demande['product']->prix}} DH
                                    </span>
                            </div>
                            @endif
                            @php $count++; @endphp
                            @endforeach

                            @if(count($cartItems) > 3)
                            <div class="text-center py-3 text-sm text-gray-500 border-t border-gray-100 mt-2">
                                + {{count($cartItems) - 3}} autres articles
                            </div>
                            @endif
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Sous-total</span>
                                <span class="text-gray-800 font-medium">{{$total}} DH</span>
                            </div>
                            <div class="flex justify-between mt-2">
                                <span class="text-gray-600">Frais de livraison</span>
                                <span class="text-gray-800 font-medium" id="shipping-cost">0 DH</span>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4 mt-4">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-800">Total</span>
                                <span class="text-xl font-bold text-primary-700" id="order-total">{{$total}} DH</span>
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


@endsection