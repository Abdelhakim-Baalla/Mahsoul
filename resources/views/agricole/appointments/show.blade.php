@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('agricole.appointments.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à mes rendez-vous
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête -->
        <div class="bg-green-600 text-white p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Rendez-vous #{{$rendezVous->id}}</h1>
                    <p class="mt-1">{{$rendezVous->sujet}}</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-500 text-white">
                       {{$rendezVous->statut}}
                    </span>
                </div>
            </div>
        </div>

        <!-- Informations principales -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Colonne de gauche -->
                <div class="md:col-span-2">
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Détails du rendez-vous</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Date et heure</p>
                                <p class="text-gray-800 font-medium">{{$rendezVous->date_reserver}}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">Consultation à place</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Créé le</p>
                                <p class="text-gray-800 font-medium">{{$rendezVous->created_at->format('d M Y')}}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Adresse</p>
                                <p class="text-gray-800 font-medium">{{$rendezVous->adresse}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Description</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">
                                {{$rendezVous->description}}
                            </p>
                        </div>
                    </div>

                   

                    {{-- <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Documents joints</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">olivier_1.jpg</p>
                                        <p class="text-sm text-gray-500">2.4 MB</p>
                                    </div>
                                    <a href="#" class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">olivier_2.jpg</p>
                                        <p class="text-sm text-gray-500">1.8 MB</p>
                                    </div>
                                    <a href="#" class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">olivier_3.jpg</p>
                                        <p class="text-sm text-gray-500">2.1 MB</p>
                                    </div>
                                    <a href="#" class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Client</h2>
                        <div class="flex items-center mb-4">
                            <img src="{{$rendezVous->client->photo}}" alt="Photo de profil de {{$rendezVous->client->prenom}} {{$rendezVous->client->nom}}" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">{{$rendezVous->client->prenom}} {{$rendezVous->client->nom}}</h3>
                                @if($rendezVous->client->about != 'non spécifié')
                                <p class="text-gray-600">{{$rendezVous->client->about}}</p>
                                @else
                                @endif
                            </div>
                        </div>
                        <div class="mb-6">
                            <p class="text-gray-600 mb-2">
                                <span class="font-medium">Email:</span> {{$rendezVous->client->email}}
                            </p>
                            <p class="text-gray-600 mb-2">
                                <span class="font-medium">Téléphone:</span> {{$rendezVous->client->telephone}}
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Client depuis:</span> {{$rendezVous->client->created_at}}
                            </p>
                        </div>
                        
                        <div class="space-y-3">
                            @if($rendezVous->statut == 'approved')
                                    <button type="button" class="px-8 py-3 w-full text-white bg-blue-300 rounded focus:outline-none" disabled>
                                        Deja Confirmé
                                    </button>
                            @elseif($rendezVous->statut == 'pending')
                                <form action="{{route('rendezVous.accepter')}}" method="get">
                                    <input type="hidden" name="id" value="{{$rendezVous->id}}">
                                    <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Accepter le rendez Vous
                                    </button>
                                </form>

                                 <form action="{{route('rendezVous.refuse')}}" method="get">
                                    <input type="hidden" name="id" value="{{$rendezVous->id}}">
                                    <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Réfusé le rendez Vous
                                    </button>
                                </form>
                            @elseif($rendezVous->statut == 'review-canceling')
                                <form action="" method="get">
                                    <input type="hidden" name="id" value="{{$rendezVous->id}}">
                                    <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Accepter l'annulation'
                                    </button>
                                </form>

                                 <form action="" method="get">
                                    <input type="hidden" name="id" value="{{$rendezVous->id}}">
                                    <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Réfusé l'annulation
                                    </button>
                                </form>

                            @elseif($rendezVous->statut == 'approved-canceling')
                                <button type="button" class="px-8 py-3 w-full text-white bg-red-300 rounded focus:outline-none" disabled>
                                    Annulé
                                </button>
                            
                            @elseif($rendezVous->statut == 'cancel-canceling')
                                <form action="{{route('rendezVous.accepter')}}" method="get">
                                    <input type="hidden" name="id" value="{{$rendezVous->id}}">
                                    <button type="submit" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Accepter le rendez Vous
                                    </button>
                                </form>

                                 <form action="{{route('rendezVous.refuse')}}" method="get">
                                    <input type="hidden" name="id" value="{{$rendezVous->id}}">
                                    <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                      Réfusé le rendez Vous
                                    </button>
                                </form>
                            
                            @elseif($rendezVous->statut == 'cancel')
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
