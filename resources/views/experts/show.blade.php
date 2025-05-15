@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('experts.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à la liste des experts
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête du profil -->
        <div class="relative">
            @if($expert->type == 'agricole')
            <div class="h-48" style="background-image: url('{{ asset('images/agricole-banner.jpg') }}'); background-size: cover; background-position: center;"></div>
            @else
            <div class="h-48 bg-gradient-to-r from-green-500 to-green-700"></div>
            @endif
            <div class="absolute bottom-0 left-0 w-full transform translate-y-1/2 px-6 flex items-end">
                <div class="relative">
                    <img src="{{$expert->photo}}" alt="{{$expert->nom}} {{$expert->prenom}}" class="w-32 h-32 rounded-full border-4 border-white object-cover">
                    <div class="absolute bottom-0 right-0 bg-white rounded-full p-1 border-2 border-white">
                        <span class="flex h-5 w-5 rounded-full "></span>
                    </div>
                </div>
                <div class="ml-4 pb-4">
                    <h1 class="text-3xl font-bold text-white"></h1>
                    <div class="flex items-center mt-1">
                        <span class="bg-white px-3 py-1 rounded-full text-sm font-medium ">
                           {{$expert->prenom}} {{$expert->nom}}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu du profil -->
        <div class="mt-20 p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Colonne de gauche -->
                <div class="lg:col-span-2">

                    @if($expert->about != '' || $expert->about != 'non spécifié')
                    @else
                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">À propos</h2>
                        <p class="text-gray-600">{{$expert->about}}</p>
                    </div>
                    @endif


                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Adresse</h2>
                        <div class="flex flex-wrap gap-2">
                            {{$expert->adresse}}
                        </div>
                    </div>

                    
                </div>

                <!-- Colonne de droite -->
                @if($expert->type == 'agricole')
                    <div>
                        <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Réserver une consultation</h3>
                            <div class="mb-4">
                                @if($agricole->prix_deplacement == 0)
                                <p class="text-gray-700 font-medium text-lg">Gratuit</p>
                                @else
                                <p class="text-gray-700 font-medium text-lg">{{$agricole->prix_deplacement}} DH</p>
                                <p class="text-gray-500 text-sm">par consultation</p>
                                @endif
                            </div>
                            
                            <a href="" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                Prendre rendez-vous
                            </a>
                            <button class="block w-full mt-3 border border-green-600 text-green-600 hover:bg-green-50 text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                Contacter l'expert
                            </button>
                        </div>
                    </div>
                @elseif($expert->type == 'veterinare')
                <div>
                        <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Réserver une consultation</h3>
                            <div class="mb-4">
                                @if($veterinaire->prix_deplacement == 0)
                                <p class="text-gray-700 font-medium text-lg">Gratuit</p>
                                @else
                                <p class="text-gray-700 font-medium text-lg">{{$veterinaire->prix_deplacement}} DH</p>
                                <p class="text-gray-500 text-sm">par consultation</p>
                                @endif
                            </div>
                            
                            <a href="" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                Prendre rendez-vous
                            </a>
                            <button class="block w-full mt-3 border border-green-600 text-green-600 hover:bg-green-50 text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                Contacter l'expert
                            </button>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
