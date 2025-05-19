@extends('layouts.farmer')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Mes consultations</h1>
        <p class="text-gray-600 mt-2">Gérez vos consultations avec les éleveurs</p>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <form action="{{ route('vet.consultations.index') }}" method="GET" class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Tous les statuts</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>En attente</option>
                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Terminées</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="animal_type" class="block text-sm font-medium text-gray-700 mb-1">Type d'animal</label>
                <select id="animal_type" name="animal_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Tous les types</option>
                    <option value="bovin" {{ request('animal_type') == 'bovin' ? 'selected' : '' }}>Bovin</option>
                    <option value="ovin" {{ request('animal_type') == 'ovin' ? 'selected' : '' }}>Ovin</option>
                    <option value="caprin" {{ request('animal_type') == 'caprin' ? 'selected' : '' }}>Caprin</option>
                    <option value="autre" {{ request('animal_type') == 'autre' ? 'selected' : '' }}>Autre</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="date_range" class="block text-sm font-medium text-gray-700 mb-1">Période</label>
                <select id="date_range" name="date_range" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Toutes les périodes</option>
                    <option value="today" {{ request('date_range') == 'today' ? 'selected' : '' }}>Aujourd'hui</option>
                    <option value="this_week" {{ request('date_range') == 'this_week' ? 'selected' : '' }}>Cette semaine</option>
                    <option value="this_month" {{ request('date_range') == 'this_month' ? 'selected' : '' }}>Ce mois</option>
                    <option value="last_month" {{ request('date_range') == 'last_month' ? 'selected' : '' }}>Mois dernier</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Recherche</label>
                <input type="text" id="search" name="search" value="{{ request('search') }}" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nom, sujet...">
            </div>
            <div class="flex items-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                    Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Onglets -->
    <div class="mb-6">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8">
                <a href="{{ route('vet.consultations.index', ['status' => 'pending']) }}" class="whitespace-nowrap py-4 px-1 border-b-2 {{ request('status') == 'pending' ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} font-medium">
                    En attente
                </a>
                <a href="{{ route('vet.consultations.index', ['status' => 'completed']) }}" class="whitespace-nowrap py-4 px-1 border-b-2 {{ request('status') == 'completed' || !request('status') ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} font-medium">
                    Terminées
                </a>
            </nav>
        </div>
    </div>

    <!-- Liste des consultations -->
    
        <div class="space-y-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <img src="" alt="username" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">UserName</h3>
                                <p class="text-gray-600">animal Type - animalName</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-700">date</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">duration</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="font-medium text-gray-800">Sujet</h4>
                                <p class="text-gray-600 mt-1">Description</p>
                                <div class="mt-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ">
                                       
                                    </span>
                                    <span class="inline-flex items-center ml-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        
                                    </span>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0">
                                    <a href="" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Répondre
                                    </a>
                                    <a href="" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Voir détails
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
        </div>
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="mt-4 text-lg font-medium text-gray-900">Aucune consultation trouvée</h3>
            <p class="mt-1 text-gray-500">Vous n'avez pas encore de consultations.</p>
        </div>
</div>
@endsection
