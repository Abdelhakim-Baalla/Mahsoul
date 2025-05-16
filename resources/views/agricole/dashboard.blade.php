@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Tableau de bord</h1>
        <p class="text-gray-600 mt-2">Bienvenue sur votre espace agricole, Dr. {{ auth()->user()->prenom }} {{ auth()->user()->nom }}</p>
    </div>

    <!-- Statistiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Rendez-vous à venir</p>
                    <p class="text-2xl font-bold text-gray-800">{{$countRendezVous}}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Revenus Total</p>
                    <p class="text-2xl font-bold text-gray-800">{{$revenu}} DH</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
        <!-- Rendez-vous à venir -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800">Rendez-vous à venir</h2>
                    <a href="{{ route('expert.appointments.index') }}" class="text-green-600 hover:text-green-700 text-sm font-medium">Voir tous</a>
                </div>
                <div class="p-6">
                    <div class="w-full">
                        @php $count = 0; @endphp
                         @foreach($rendezVous as $rendez)
                         @if($count < 3)
                            <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition duration-150">
                            <div class="flex justify-between items-start">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-green-100 text-green-600 rounded-full p-2 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">{{$rendez->sujet}}</h3>
                                        <p class="text-gray-600 text-sm">{{$rendez->client->prenom}} {{$rendez->client->nom}}</p>
                                        <div class="flex items-center mt-1">
                                            
                                            <span class="text-gray-500 text-sm ml-2">{{$rendez->date_reserver}}</span>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('expert.appointments.show') }}" method="get">
                                    <input type="hidden" name="id" value="{{$rendez->id}}">
                                    <button type="submit" class="text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </button>   
                                </form>
                                
                            </div>
                            </div>
                            @endif
                            @php $count++; @endphp
                        @endforeach
                                
                            @if(count($rendezVous) > 3)
                            <div class="text-center py-3 text-sm text-gray-500 border-t border-gray-100 mt-2">
                                + {{count($rendezVous) - 3}} autres Rendez-Vous
                            </div>
                            @endif

                       
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection
