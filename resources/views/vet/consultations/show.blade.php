@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('vet.consultations.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à mes consultations
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête -->
        <div class="text-white p-6" style="background-image: url('{{ asset('images/veterinaire-banner.jpg') }}'); background-size: cover; background-position: center;">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Consultation #{{ $consultation->id }}</h1>
                    <p class="mt-1">{{ $consultation->sujet }}</p>
                </div>
                <div class="mt-4 md:mt-0">
                    @if($consultation->statut == "approved" || $consultation->statut == "cancel-canceling")
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-500 text-white">
                        Terminée
                    </span>
                    @elseif($consultation->statut == "cancel" || $consultation->statut == "approved-canceling")
                     <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-500 text-white">
                        Annulées
                    </span>
                    @elseif($consultation->statut == "pending")
                     <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-500 text-white">
                        En attente
                    </span>
                    @elseif($consultation->statut == "review-canceling")
                     <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-300 text-red-500">
                        En attente L'annulation
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Informations principales -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Colonne de gauche -->
                <div class="md:col-span-2">
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Détails de la consultation</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Date</p>
                                <p class="text-gray-800 font-medium">{{ \Carbon\Carbon::parse($consultation->date_reserver)->format('d M Y H:i') }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Prix</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->total }} DH</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">Consultation à place</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Adresse</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->adresse }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Telephone</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Description du problème</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $consultation->description }}</p>
                        </div>
                    </div>

                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Client</h2>
                        <div class="flex items-center mb-4">
                            <img src="{{ $consultation->client->photo }}" alt="{{ $consultation->client->nom }} {{ $consultation->client->prenom }}" title="{{ $consultation->client->prenom }} {{ $consultation->client->nom }}" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $consultation->client->prenom }} {{ $consultation->client->nom }}</h3>
                                <p class="text-gray-600">{{ $consultation->client->email }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mt-6">
                            @if($consultation->statut == 'approved')
                                    <button type="button" class="px-8 py-3 w-full text-white bg-blue-300 rounded focus:outline-none" disabled>
                                        Deja Confirmé
                                    </button>
                            @elseif($consultation->statut == 'pending')
                                <form action="{{route('vet.rendezVous.accepter')}}" method="get">
                                    <input type="hidden" name="id" value="{{$consultation->id}}">
                                    <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Accepter le rendez Vous
                                    </button>
                                </form>

                                 <form action="{{route('vet.rendezVous.refuse')}}" method="get">
                                    <input type="hidden" name="id" value="{{$consultation->id}}">
                                    <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Réfusé le rendez Vous
                                    </button>
                                </form>
                            @elseif($consultation->statut == 'review-canceling')
                                <form action="{{route('vet.rendezVous.accepter.annulation')}}" method="get">
                                    <input type="hidden" name="id" value="{{$consultation->id}}">
                                    <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Accepter l'annulation
                                    </button>
                                </form>

                                 <form action="{{route('vet.rendezVous.refuser.annulation')}}" method="get">
                                    <input type="hidden" name="id" value="{{$consultation->id}}">
                                    <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Réfusé l'annulation
                                    </button>
                                </form>

                            @elseif($consultation->statut == 'approved-canceling')
                                <button type="button" class="px-8 py-3 w-full text-white bg-red-300 rounded focus:outline-none" disabled>
                                    Annulé
                                </button>
                            
                            @elseif($consultation->statut == 'cancel-canceling')
                                <button type="button" class="px-8 py-3 w-full text-white bg-blue-300 rounded focus:outline-none" disabled>
                                    Deja Confirmé
                                </button>
                            
                            @elseif($consultation->statut == 'cancel')
                               <button type="button" class="px-8 py-3 w-full text-white bg-red-300 rounded focus:outline-none" disabled>
                                    Annulé
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
