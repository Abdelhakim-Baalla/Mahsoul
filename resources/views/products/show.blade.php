@if (Auth::check())
@extends('layouts.app')

@section('title', 'Oranges fraîches - Mahsoul')

@section('content')
<div class="bg-gradient-to-b from-primary-50 to-white py-8">
    <div class="container mx-auto px-4">
        <nav class="flex mb-6 text-sm">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('welcome') }}" class="text-gray-600 hover:text-primary-700">
                        Accueil
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-primary-700">
                            Marketplace
                        </a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="text-gray-500">{{$product->nom}}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex items-center justify-center">
                    <div class="rounded-lg overflow-hidden h-full">
                        <img src="{{$product->image}}" alt="{{$product->nom}}" class="w-full h-full object-cover rounded-lg shadow-sm">
                    </div>
                </div>

                <div class="flex flex-col justify-center h-full">
                    <div class="flex-grow">
                        <div class="flex justify-between items-start">
                            <div class=" w-full">
                                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{$product->nom}}</h1>
                                <span class="bg-primary-100 text-primary-800 text-sm font-medium px-2.5 py-0.5 rounded inline-block mb-4">{{$product->categorie}}</span>
                            </div>
                        </div>

                        <div class="mt-4 p-4 bg-gray-50 rounded-lg ">
                            <div class="flex ">
                                <img src="{{ asset('images/logo-white.jpg') }}" alt="Vendeur" class="w-12 h-12 rounded-full mr-3">
                                <div>
                                    <h4 class="font-medium text-gray-800 text-lg">{{$product->vendeur}}</h4>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Région de Souss</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 flex items-center  text-sm">
                                <div class="flex items-center mr-4">
                                    <svg class="w-4 h-4 text-green-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Vérifié</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-green-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>100% de satisfaction</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            @if($product->en_stock == 1 && $product->quantite > 0)
                            <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-green-100 text-green-800">
                                <svg class="h-4 w-4 text-green-400 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                </svg>
                                En stock
                            </span>
                            @else
                            <span class="px-2.5 py-1 inline-flex text-xs leading-4 font-semibold rounded-full bg-red-100 text-red-800">
                                <svg class="h-4 w-4 text-red-400 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                </svg>
                                Rupture
                            </span>
                            @endif
                        </div>


                        <div class="mt-6 ">
                            <div class="text-3xl font-bold text-primary-700 mb-4">
                                {{$product->prix}} DH/{{strtoupper($product->unite_mesure)}}
                            </div>

                            <div class="mt-4">
                                <p class="text-gray-700">
                                    {{$product->description}}
                                </p>
                            </div>

                           

                            <div class="mt-8 flex justify-between items-center">
                                <div class="flex items-center ">

                                    @if($product->en_stock == 1 && $product->quantite > 0)
                                    <div class="flex flex-col sm:flex-row sm:space-x-2  space-y-2 sm:space-y-0">
                                        <form action="{{route('add.cart.save')}}" method="get" class="flex justify-between gap-24">
                                            @csrf
                                            <div class="relative flex items-center max-w-[8rem]">
                                                <button type="button" id="decrement-button" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-l-lg p-2 h-10 focus:ring-primary-500 focus:border-primary-500">
                                                    <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <input type="text" id="quantity-input" name="quantity" class="bg-gray-50 border-x-0 border-gray-300 h-10 text-center text-gray-900 text-sm focus:ring-primary-500 focus:border-primary-500 block w-full py-2.5" value="1" required>
                                                <button type="button" id="increment-button" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-r-lg p-2 h-10 focus:ring-primary-500 focus:border-primary-500">
                                                    <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                                <span class="ml-3 text-gray-500">{{strtoupper($product->unite_mesure)}}</span>
                                            </div>
                                            <input type="hidden" id="utilisateurId" name="utilisateurId" value="{{Auth::user()->id}}">
                                            <input type="hidden" id="produitId" name="produitId" value="{{$product->id}}">
                                            <button id="ajouterPanier" type="submit" class="flex-1 bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-6 rounded-md transition duration-150 ease-in-out flex items-center justify-center max-w-xs mx-auto sm:mx-0">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                                Ajouter au panier
                                            </button>
                                        </form>

                                    </div>
                                    @else
                                    <div class="flex flex-col sm:flex-row sm:space-x-2  space-y-2 sm:space-y-0">
                                        <button type="button" disabled class="flex-1 bg-gray-400 text-white font-medium py-3 px-6 rounded-md transition duration-150 ease-in-out flex items-center justify-center max-w-xs mx-auto sm:mx-0">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            Produit en rupture de stock
                                        </button>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-center space-x-6 border-t pt-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">Livraison en 24-48h</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">Garantie fraîcheur</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Quantity input functionality
    const quantityInput = document.getElementById('quantity-input');
    const incrementButton = document.getElementById('increment-button');
    const decrementButton = document.getElementById('decrement-button');

    incrementButton.addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        quantityInput.value = value + 1;
    });

    decrementButton.addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });

    // if (!sessionStorage.getItem("cart")) {
    //     sessionStorage.setItem("cart", JSON.stringify([]));
    // }

    // const ajouterPanier = document.getElementById('ajouterPanier');
    // const utilisateurId = document.getElementById('utilisateurId');
    // const produitId = document.getElementById('produitId');

    // var utilisateurIdValue = utilisateurId.value;
    // var produitIdValue = produitId.value;

    // var cartString = sessionStorage.getItem("cart");
    // var cart = JSON.parse(cartString);
    // var itemExist = 'non';
    // for (let index = 0; index < cart.length; index++) {
    //     // console.log(cart[index]['produitId']);
    //     if (cart[index]['produitId'] == produitIdValue) {
    //         itemExist = 'oui';
    //         ajouterPanier.disabled = true;
    //         ajouterPanier.textContent = "Element dans le panier";
    //         ajouterPanier.classList.remove('bg-primary-600', 'hover:bg-primary-700');
    //         ajouterPanier.classList.add('bg-gray-400', 'cursor-not-allowed');
    //     } else {
    //         itemExist = 'non';
    //     }
    // }


    // ajouterPanier.addEventListener('click', function() {

    //     var quantityValue = quantityInput.value;
    //     // console.log(itemExist);
    //     // die();
    //     if (itemExist == 'non') {
    //         cart.push({
    //             utilisateurId: utilisateurIdValue,
    //             produitId: produitIdValue,
    //             quantity: quantityValue
    //         });

    //         sessionStorage.setItem("cart", JSON.stringify(cart));
    //         ajouterPanier.disabled = true;
    //         ajouterPanier.textContent = "Element dans le panier";
    //         ajouterPanier.classList.remove('bg-primary-600', 'hover:bg-primary-700');
    //         ajouterPanier.classList.add('bg-gray-400', 'cursor-not-allowed');
    //     }


    // });
</script>
@endsection

@else
<script>
    window.location.href = "{{ route('login') }}";
</script>
@endif