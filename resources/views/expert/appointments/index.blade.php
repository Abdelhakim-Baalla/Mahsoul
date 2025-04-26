@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Mes rendez-vous</h1>
        <p class="text-gray-600 mt-2">Gérez vos rendez-vous avec les agriculteurs</p>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <form action="{{ route('expert.appointments.index') }}" method="GET" class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                <select id="status" name="status" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Tous les statuts</option>
                    <option value="upcoming">À venir</option>
                    <option value="completed">Terminés</option>
                    <option value="cancelled">Annulés</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="consultation_type" class="block text-sm font-medium text-gray-700 mb-1">Type de consultation</label>
                <select id="consultation_type" name="consultation_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Tous les types</option>
                    <option value="video">Vidéo</option>
                    <option value="message">Message</option>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
                <label for="date_range" class="block text-sm font-medium text-gray-700 mb-1">Période</label>
                <select id="date_range" name="date_range" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Toutes les périodes</option>
                    <option value="today">Aujourd'hui</option>
                    <option value="tomorrow">Demain</option>
                    <option value="this_week">Cette semaine</option>
                    <option value="next_week">Semaine prochaine</option>
                    <option value="this_month">Ce mois</option>
                </select>
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
                <a href="{{ route('expert.appointments.index', ['status' => 'upcoming']) }}" class="whitespace-nowrap py-4 px-1 border-b-2 border-green-500 text-green-600 font-medium">
                    À venir
                </a>
                <a href="{{ route('expert.appointments.index', ['status' => 'completed']) }}" class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium">
                    Terminés
                </a>
                <a href="{{ route('expert.appointments.index', ['status' => 'cancelled']) }}" class="whitespace-nowrap py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium">
                    Annulés
                </a>
            </nav>
        </div>
    </div>

    <!-- Liste des rendez-vous -->
    <div class="space-y-4">
        <!-- Rendez-vous 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex items-center mb-4 md:mb-0">
                        <img src="/images/users/user1.jpg" alt="Mohammed Tazi" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Mohammed Tazi</h3>
                            <p class="text-gray-600">Agriculteur - Oliveraie</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-700">Aujourd'hui</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-700">14:30</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h4 class="font-medium text-gray-800">Consultation sur la santé des oliviers</h4>
                            <p class="text-gray-600 mt-1">Le client signale des feuilles jaunissantes et une baisse de production</p>
                            <div class="mt-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Vidéo
                                </span>
                                <span class="inline-flex items-center ml-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    À venir
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0 flex flex-wrap gap-2">
                            <a href="{{ route('expert.appointments.show', 1) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Voir détails
                            </a>
                            <a href="" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Rejoindre
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Rendez-vous 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex items-center mb-4 md:mb-0">
                        <img src="/images/users/user2.jpg" alt="Fatima Alaoui" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Fatima Alaoui</h3>
                            <p class="text-gray-600">Agricultrice - Maraîchage</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-700">Demain</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-700">10:00</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h4 class="font-medium text-gray-800">Problème d'irrigation</h4>
                            <p class="text-gray-600 mt-1">Consultation sur l'optimisation du système d'irrigation pour économiser l'eau</p>
                            <div class="mt-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                    Message
                                </span>
                                <span class="inline-flex items-center ml-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    À venir
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="{{ route('expert.appointments.show', 2) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Voir détails
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Rendez-vous 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="flex items-center mb-4 md:mb-0">
                        <img src="/images/users/user3.jpg" alt="Karim Benjelloun" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Karim Benjelloun</h3>
                            <p class="text-gray-600">Agriculteur - Agrumes</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-700">Après-demain</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-700">16:15</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h4 class="font-medium text-gray-800">Maladie des agrumes</h4>
                            <p class="text-gray-600 mt-1">Suspicion de greening des agrumes, besoin d'un diagnostic</p>
                            <div class="mt-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Vidéo
                                </span>
                                <span class="inline-flex items-center ml-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    À venir
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="{{ route('expert.appointments.show', 3) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
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
        <nav class="flex items-center justify-between">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Précédent
                </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Suivant
                </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Affichage de <span class="font-medium">1</span> à <span class="font-medium">3</span> sur <span class="font-medium">12</span> résultats
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Précédent</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-green-50 border-green-500 text-green-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            1
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            2
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            3
                        </a>
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                        </span>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            4
                        </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Suivant</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection
