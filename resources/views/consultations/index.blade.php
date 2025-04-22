@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Historique des consultations</h1>
        <p class="text-gray-600 mt-2">Consultez l'historique de vos consultations avec nos experts</p>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <form action="{{ route('consultations.index') }}" method="GET" class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <label for="expert_type" class="block text-sm font-medium text-gray-700 mb-1">Type d'expert</label>
                <select id="expert_type" name="expert_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Tous les types</option>
                    <option value="veterinaire" {{ request('expert_type') == 'veterinaire' ? 'selected' : '' }}>Vétérinaire</option>
                    <option value="agricole" {{ request('expert_type') == 'agricole' ? 'selected' : '' }}>Expert agricole</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="date_range" class="block text-sm font-medium text-gray-700 mb-1">Période</label>
                <select id="date_range" name="date_range" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Toutes les périodes</option>
                    <option value="this_month" {{ request('date_range') == 'this_month' ? 'selected' : '' }}>Ce mois</option>
                    <option value="last_month" {{ request('date_range') == 'last_month' ? 'selected' : '' }}>Mois dernier</option>
                    <option value="last_3_months" {{ request('date_range') == 'last_3_months' ? 'selected' : '' }}>3 derniers mois</option>
                    <option value="last_6_months" {{ request('date_range') == 'last_6_months' ? 'selected' : '' }}>6 derniers mois</option>
                    <option value="this_year" {{ request('date_range') == 'this_year' ? 'selected' : '' }}>Cette année</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Recherche</label>
                <input type="text" id="search" name="search" value="{{ request('search') }}" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Sujet, expert...">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                    Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Liste des consultations -->
    @if(count($consultations) > 0)
        <div class="space-y-4">
            @foreach($consultations as $consultation)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <img src="{{ $consultation->expert->profile_image }}" alt="{{ $consultation->expert->name }}" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">{{ $consultation->expert->name }}</h3>
                                <p class="text-gray-600">{{ $consultation->expert->specialty == 'veterinaire' ? 'Vétérinaire' : 'Expert agricole' }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-700">{{ \Carbon\Carbon::parse($consultation->date)->format('d M Y') }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">{{ $consultation->duration }} min</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="font-medium text-gray-800">{{ $consultation->subject }}</h4>
                                <p class="text-gray-600 mt-1">{{ Str::limit($consultation->summary, 100) }}</p>
                                <div class="mt-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Terminée
                                    </span>
                                    <span class="inline-flex items-center ml-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{ $consultation->type === 'video' ? 'Consultation vidéo' : 'Consultation par message' }}
                                    </span>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <a href="{{ route('consultations.show', $consultation->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
            {{ $consultations->links() }}
        </div>
    @else
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="mt-4 text-lg font-medium text-gray-900">Aucune consultation trouvée</h3>
            <p class="mt-1 text-gray-500">Vous n'avez pas encore eu de consultation avec nos experts.</p>
            <div class="mt-6">
                <a href="{{ route('experts.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Trouver un expert
                </a>
            </div>
        </div>
    @endif
</div>
@endsection
