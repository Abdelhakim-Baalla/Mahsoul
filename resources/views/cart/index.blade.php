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
                            <h2 class="text-xl font-bold text-gray-800">Produits ({{ count($cartItems) }})</h2>
                            <a href="/cart/vider">
                                <button class="text-primary-600 hover:text-primary-700 font-medium text-sm flex items-center">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                    Vider le panier
                                </button>
                            </a>

                        </div>
                    </div>

                    <div class="divide-y divide-gray-200">
                        @foreach($cartItems as $demande)
                        <div class="p-6 flex flex-col sm:flex-row">
                            <div class="sm:w-24 sm:h-24 flex-shrink-0 mb-4 sm:mb-0">
                                <img src="{{$demande['product']->image}}" alt="{{$demande['product']->nom}}" class="w-full h-full object-cover rounded-md">
                            </div>
                            <div class="sm:ml-6 flex-1">
                                <div class="flex justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">
                                            <form action="{{ route('products.show') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$demande['product']->id}}">
                                                <button type="submit" class="hover:text-primary-600">
                                                    {{$demande['product']->nom}}
                                                </button>
                                            </form>

                                        </h3>

                                        @if($demande['product']->en_stock)
                                        <p class="mt-1 text-sm text-green-600 flex items-center">
                                            <i class="fas fa-check-circle mr-1"></i> En stock
                                        </p>
                                        @else
                                        <p class="mt-1 text-sm text-red-600 flex items-center">
                                            <i class="fas fa-times-circle mr-1"></i> En rupture de stock
                                        </p>
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        <p class="text-lg font-bold text-primary-700">
                                            {{ $demande['product']->prix * $demande['quantity'] }} DH
                                        </p>
                                        <p class="text-sm text-gray-500">{{$demande['product']->prix}} DH / unité</p>
                                    </div>
                                </div>
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center justify-between">
                                    <form action="" method="get" class="flex gap-5 ">
                                        @csrf
                                        <div class="flex items-center">
                                            <label for="quantity-1" class="sr-only">Quantité</label>
                                            <div class="flex items-center border border-gray-300 rounded-md">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-1', -1)">-</button>
                                                <input type="number" id="quantity-1" name="quantity-1" min="1" value="{{$demande['quantity']}}" class="w-12 text-center border-0 focus:ring-0">
                                                <button type="button" class="px-3 py-1 text-gray-600 hover:bg-gray-100" onclick="updateQuantity('quantity-1', 1)">+</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="idProduit" id="idProduit" value="{{$demande['product']->id}}">
                                        <button type="submit" class="text-green-600 hover:text-green-700 text-xs font-medium" id="supprimerProduitPanier">
                                            <i class="fas fa-pen-alt mr-1"></i>
                                            Modifier
                                        </button>
                                    </form>

                                    <div class="mt-4 sm:mt-0 flex space-x-3">
                                        <form action="{{route('cart.delete.product')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="idProduit" id="idProduit" value="{{$demande['product']->id}}">
                                            <button type="submit" class="text-red-600 hover:text-red-700 text-sm font-medium" id="supprimerProduitPanier">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                Supprimer
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="p-6 border-t border-gray-200">
                        <a href="/products" class="text-primary-600 hover:text-primary-700 font-medium flex items-center">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Continuer vos achats
                        </a>
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
                                <span class="text-gray-600">Sous-total ({{ count($cartItems) }} articles)</span>
                                <span class="text-gray-800 font-medium">{{ $total }} DH</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Frais de livraison</span>
                                <span class="text-gray-800 font-medium">0 DH</span>
                            </div>

                            <div class="border-t border-gray-200 pt-4 mt-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-gray-800">Total</span>
                                    <span class="text-xl font-bold text-primary-700">{{ $total }} DH</span>
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


    </div>
</div>

<script>
    function updateQuantity(inputId, change) {
        const input = document.getElementById(inputId);
        const currentValue = parseInt(input.value);
        const newValue = currentValue + change;

        if (newValue >= 1) {
            input.value = newValue;
            updateCartTotals();
        }
    }

    function updateCartTotals() {
        console.log('Cart updated');
    }
</script>
@endsection