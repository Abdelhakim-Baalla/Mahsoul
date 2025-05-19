@extends('layouts.farmer')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Mes consultations</h1>
        <p class="text-gray-600 mt-2">Gérez vos consultations avec les éleveurs</p>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
         <form action="{{ route('veterinaire.appointments.index.filtreer') }}" method="GET" class="flex flex-wrap gap-4">
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

    <!-- Liste des consultations -->
    
        <div class="space-y-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 ">
                @foreach($rendezVous as $rendezVou)
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <img src="{{$rendezVou->client->photo}}" alt="{{$rendezVou->client->nom}} {{$rendezVou->client->prenom}}" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">{{$rendezVou->client->prenom}} {{$rendezVou->client->nom}}</h3>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.832 2.688A4.056 4.056 0 0 0 8.02 1.5h-.04a4.056 4.056 0 0 0-4 4c-.013.75.198 1.487.606 2.117L7.734 14h.533l3.147-6.383c.409-.63.62-1.367.606-2.117a4.056 4.056 0 0 0-1.188-2.812zM7.925 2.5l.082.01.074-.01a3.075 3.075 0 0 1 2.941 3.037 2.74 2.74 0 0 1-.467 1.568l-.02.034-.017.035L8 12.279l-2.517-5.1-.017-.039-.02-.034a2.74 2.74 0 0 1-.467-1.568A3.074 3.074 0 0 1 7.924 2.5zm.612 2.169a1 1 0 1 0-1.112 1.663 1 1 0 0 0 1.112-1.663zM6.87 3.837a2 2 0 1 1 2.22 3.326 2 2 0 0 1-2.22-3.326z"/>
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
                               
                            </div>
                            <div class="mt-4 md:mt-0">
                                <form action="{{route('vet.consultations.show')}}" method="GET">
                                    <input type="hidden" name="id" value="{{$rendezVou->id}}">
                                    <button type="sumbit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Voir détails
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
            {{$rendezVous->links()}}
        </div>
        @if($rendezVous->isEmpty())
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="mt-4 text-lg font-medium text-gray-900">Aucune consultation trouvée</h3>
            <p class="mt-1 text-gray-500">Vous n'avez pas encore de consultations.</p>
        </div>
        @endif
</div>
@endsection
