@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Mes rendez-vous</h1>
        <p class="text-gray-600 mt-2">Gérez vos rendez-vous avec les agriculteurs</p>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <form action="{{ route('agricole.appointments.index.filtreer') }}" method="GET" class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Tous les statuts</option>
                    <option value="approved">Accepter</option>
                    <option value="pending">En attente</option>
                    <option value="review-canceling">En Attente L'annulation</option>
                    <option value="approved-canceling">L'annulation Accepter</option>
                    <option value="cancel-canceling">L'annulation Refuser</option>
                    <option value="cancel">Refuser</option>
                </select>
            </div>
            <div class="flex items-end">
                <button type="submit" onclick="return validateFiltrageForm()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                    Filtrer
                </button>
            </div>
        </form>
    </div>


    <!-- Liste des rendez-vous -->
    <div class="space-y-4">
        @if(count($rendezVous) > 0)
            @foreach($rendezVous as $rendezVou)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex items-center mb-4 md:mb-0">
                        <img src="{{$rendezVou->client->photo}}" alt="{{$rendezVou->client->prenom}} {{$rendezVou->client->nom}}" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{$rendezVou->client->prenom}} {{$rendezVou->client->nom}}</h3>
                            <p class="text-gray-600">{{$rendezVou->client->telephone}}</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-700">{{$rendezVou->date_reserver}}</span>
                        </div>
                        <div class="flex items-center">
                            
                            <svg fill="none" class="h-5 w-5 text-gray-500 mr-1" viewBox="0 0 24 24" stroke="currentColor" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.657 5.304c-3.124-3.073-8.189-3.073-11.313 0-3.124 3.074-3.124 8.057 0 11.13l5.656 5.565 5.657-5.565c3.124-3.073 3.124-8.056 0-11.13zm-5.657 8.195c-.668 0-1.295-.26-1.768-.732-.975-.975-.975-2.561 0-3.536.472-.472 1.1-.732 1.768-.732s1.296.26 1.768.732c.975.975.975 2.562 0 3.536-.472.472-1.1.732-1.768.732z"/>
                            </svg>
                            <span class="text-gray-700">{{$rendezVou->adresse}}</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h4 class="font-medium text-gray-800">{{$rendezVou->sujet}}</h4>
                            <p class="text-gray-600 mt-1">{{ Str::limit(strip_tags($rendezVou->description), 10) }}</p>
                            <div class="mt-2">
                                @if($rendezVou->statut == 'approved')
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i> Apprové
                                </span>
                                @elseif($rendezVou->statut == 'pending')
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">
                                    <i class="fas fa-clock mr-1"></i> En attente
                                </span>
                                @elseif($rendezVou->statut == 'review-canceling')
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">
                                    <i class="fas fa-clock mr-1"></i> Annulation En attente
                                </span>
                                @elseif($rendezVou->statut == 'approved-canceling')
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i> Annulation Apprové
                                </span>
                                @elseif($rendezVou->statut == 'cancel-canceling')
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i> Annulation Rufusé / Consultaion Apprové
                                </span>
                                @elseif($rendezVou->statut == 'cancel')
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                    <i class="fas fa-cancel mr-1"></i> Rufusé
                                </span>
                                @endif
                              
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0 flex flex-wrap gap-2">
                            <form action="{{ route('agricole.appointments.show') }}" method="get">
                                <input type="hidden" name="id" value="{{$rendezVou->id}}">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Voir détails
                                </button> 
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
        @else
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <p>Aucun Rendez Vous A éte asigné</p>
        </div>
        @endif
    </div>
    
    <!-- Pagination -->
    <div class="mt-8">
         {{ $rendezVous->links('pagination::tailwind') }}
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/filrage-consultations-par-statut-validation.js') }}"></script>
@endsection
