@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Tableau de bord</h1>
        <p class="text-gray-600 mt-2">Bienvenue sur votre espace expert, Dr. Ahmed Benali</p>
    </div>

    <!-- Statistiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Rendez-vous à venir</p>
                    <p class="text-2xl font-bold text-gray-800">12</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Consultations ce mois</p>
                    <p class="text-2xl font-bold text-gray-800">28</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Taux de satisfaction</p>
                    <p class="text-2xl font-bold text-gray-800">94%</p>
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
                    <p class="text-gray-500 text-sm">Revenus ce mois</p>
                    <p class="text-2xl font-bold text-gray-800">4 250 DH</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Rendez-vous à venir -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-800">Rendez-vous à venir</h2>
                    <a href="{{ route('expert.appointments.index') }}" class="text-green-600 hover:text-green-700 text-sm font-medium">Voir tous</a>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <!-- Rendez-vous 1 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition duration-150">
                            <div class="flex justify-between items-start">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-green-100 text-green-600 rounded-full p-2 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">Consultation sur la santé des oliviers</h3>
                                        <p class="text-gray-600 text-sm">Mohammed Tazi</p>
                                        <div class="flex items-center mt-1">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                Vidéo
                                            </span>
                                            <span class="text-gray-500 text-sm ml-2">Aujourd'hui, 14:30</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('expert.appointments.show', 1) }}" class="text-green-600 hover:text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Rendez-vous 2 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition duration-150">
                            <div class="flex justify-between items-start">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-green-100 text-green-600 rounded-full p-2 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">Problème d'irrigation</h3>
                                        <p class="text-gray-600 text-sm">Fatima Alaoui</p>
                                        <div class="flex items-center mt-1">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                Message
                                            </span>
                                            <span class="text-gray-500 text-sm ml-2">Demain, 10:00</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('expert.appointments.show', 2) }}" class="text-green-600 hover:text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Rendez-vous 3 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition duration-150">
                            <div class="flex justify-between items-start">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-green-100 text-green-600 rounded-full p-2 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">Maladie des agrumes</h3>
                                        <p class="text-gray-600 text-sm">Karim Benjelloun</p>
                                        <div class="flex items-center mt-1">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                Vidéo
                                            </span>
                                            <span class="text-gray-500 text-sm ml-2">Après-demain, 16:15</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('expert.appointments.show', 3) }}" class="text-green-600 hover:text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Activité récente -->
        <div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">Activité récente</h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="bg-blue-100 text-blue-600 rounded-full p-1.5 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 text-sm">Consultation terminée avec <span class="font-medium">Hassan Ouazzani</span></p>
                                <p class="text-gray-500 text-xs mt-1">Il y a 2 heures</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="bg-yellow-100 text-yellow-600 rounded-full p-1.5 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 text-sm">Nouveau rendez-vous planifié avec <span class="font-medium">Fatima Alaoui</span></p>
                                <p class="text-gray-500 text-xs mt-1">Il y a 5 heures</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="bg-green-100 text-green-600 rounded-full p-1.5 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 text-sm">Paiement reçu de <span class="font-medium">Mohammed Tazi</span></p>
                                <p class="text-gray-500 text-xs mt-1">Il y a 1 jour</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="bg-purple-100 text-purple-600 rounded-full p-1.5 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 text-sm">Nouveau message de <span class="font-medium">Karim Benjelloun</span></p>
                                <p class="text-gray-500 text-xs mt-1">Il y a 2 jours</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="bg-red-100 text-red-600 rounded-full p-1.5 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 text-sm">Rendez-vous annulé par <span class="font-medium">Nadia Chaoui</span></p>
                                <p class="text-gray-500 text-xs mt-1">Il y a 3 jours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques et statistiques -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Consultations par mois</h2>
            </div>
            <div class="p-6">
                <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Graphique des consultations mensuelles</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Répartition des consultations</h2>
            </div>
            <div class="p-6">
                <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Graphique de répartition par type</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
