@extends('layouts.farmer')
@if(Auth::user()->type == 'veterinaire')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Tableau de bord vétérinaire</h1>
        <p class="text-gray-600 mt-2">Bienvenue, Dr. {{ auth()->user()->prenom }} {{ auth()->user()->nom }}</p>
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
                <div class="w-full flex justify-between items-center">
                    <p class="text-gray-500 text-sm">Total des consultations</p>
                    <p class="text-2xl font-bold text-gray-800">{{$countRendezVous}} <small class="text-sm font-medium text-gray-500">Consultation</small></p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="w-full flex justify-between items-center">
                    <p class="text-gray-500 text-sm">Total des Revenus</p>
                    <p class="text-2xl font-bold text-gray-800">{{$total}} <small class="text-sm font-medium text-gray-500">DH</small></p>
                </div>
            </div>
        </div>
        
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Consultations récentes -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 bg-green-600 text-white flex justify-between items-center">
                <h2 class="text-lg font-semibold">Consultations récentes ({{$countConsultationsRecent}})</h2>
                 @if($countConsultationsRecent > 3)
                <a href="{{ route('vet.appointments.index') }}" class="text-sm hover:underline">Voir tous</a>
                @endif
            </div>
            <div class="p-6">
                @foreach($consultationsRecent as $consultation)
                    <div class="space-y-4">
                        <div class="border-b border-gray-100 pb-4 last:border-b-0 last:pb-0">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <img src="{{$consultation->client->photo}}" alt="{{$consultation->client->prenom}} {{$consultation->client->nom}}" title="{{$consultation->client->prenom}} {{$consultation->client->nom}}" class="w-10 h-10 rounded-full object-cover mr-3">
                                    <div>
                                        <h3 class="font-medium text-gray-800">{{$consultation->client->prenom}} {{$consultation->client->nom}}</h3>
                                        <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($consultation->sujet), 10) }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-800">{{$consultation->total}} DH</p>
                                    <p class="text-sm text-gray-600">{{$consultation->adresse}}</p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="mt-2 flex justify-between items-center mb-3">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Terminée
                                    </span>
                                    <a href="" class="text-sm text-green-600 hover:text-green-700">
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @if($consultationsRecent->isEmpty())
                    <div class="text-center py-4">
                        <p class="text-gray-500">Aucun Consultations récente</p>
                    </div>
                    @endif
            </div>
        </div>

        <!-- Consultations annulés -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 bg-red-600 text-white flex justify-between items-center">
                <h2 class="text-lg font-semibold">Consultations annulés ({{$countConsultationsAnnules}})</h2>
                @if($countConsultationsAnnules > 3)
                <a href="" class="text-sm hover:underline">Voir toutes</a>
                @endif
            </div>
            <div class="p-6">
                @foreach($consultationsAnnules as $consultation)
                    <div class="space-y-4">
                        <div class="border-b border-gray-100 pb-4 last:border-b-0 last:pb-0">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <img src="{{$consultation->client->photo}}" alt="{{$consultation->client->prenom}} {{$consultation->client->nom}}" class="w-10 h-10 rounded-full object-cover mr-3">
                                    <div>
                                        <h3 class="font-medium text-gray-800">{{$consultation->client->prenom}} {{$consultation->client->nom}}</h3>
                                        <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($consultation->sujet), 10) }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-800">{{$consultation->total}} DH</p>
                                    <p class="text-sm text-gray-600">{{$consultation->adresse}} </p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="text-sm text-gray-600 truncate"></p>
                                <div class="mt-2 flex justify-between items-center">
                                    <a href="" class="text-sm text-green-600 hover:text-green-700">
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @if($consultationsAnnules->isEmpty())
                    <div class="text-center py-4">
                        <p class="text-gray-500">Aucune consultation annulé</p>
                    </div>
                    @endif
            </div>
        </div>
    </div>

    <!-- Consultations en attente de réponse -->
    <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 bg-yellow-600 text-white flex justify-between items-center">
            <h2 class="text-lg font-semibold">Consultations en attente de réponse ({{$countConsultationsEnAttente}})</h2>
             @if($countConsultationsEnAttente > 3)
            <a href="" class="text-sm hover:underline">Voir toutes</a>
            @endif
        </div>
        <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sujet</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Télephone</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($consultationsEnAttente as $consultation)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{$consultation->client->photo}}" alt="{{$consultation->client->prenom}} {{$consultation->client->nom}}" title="{{$consultation->client->prenom}} {{$consultation->client->nom}}">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{$consultation->client->prenom}} {{$consultation->client->nom}}</div>
                                            <div class="text-sm text-gray-500">{{$consultation->adresse}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 truncate max-w-xs">{{ Str::limit(strip_tags($consultation->sujet), 15) }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 truncate max-w-xs">{{ Str::limit(strip_tags($consultation->description), 10) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{   $consultation->date_reserver}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                        {{$consultation->telephone}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="" class="text-green-600 hover:text-green-900">Répondre</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($consultationsEnAttente->isEmpty())
                <div class="text-center py-4">
                    <p class="text-gray-500">Aucune consultation en attente</p>
                </div>  
                @endif
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('animalTypeChart').getContext('2d');
        const animalTypeChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Bovins', 'Ovins', 'Caprins', 'Autres'],
                datasets: [{
                    data: [
                       
                    ],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    borderColor: [
                        'rgba(59, 130, 246, 1)',
                        'rgba(16, 185, 129, 1)',
                        'rgba(245, 158, 11, 1)',
                        'rgba(239, 68, 68, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '70%'
            }
        });
    });
</script>
@endpush
@endsection

@elseif(Auth::user()->type == 'admin')
<script>
    window.location.href = "{{ route('admin.dashboard') }}";
</script>
@elseif(Auth::user()->type == 'agricole')
<script>
    window.location.href = "{{ route('agricole.dashboard') }}";
</script>
@elseif(Auth::user()->type == 'client')
<script>
    window.location.href = "{{ route('client.dashboard') }}";
</script>
@endif
