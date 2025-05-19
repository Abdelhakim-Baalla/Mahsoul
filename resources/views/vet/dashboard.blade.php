@extends('layouts.app')
@if(Auth::user()->type == 'veterinaire')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Tableau de bord vétérinaire</h1>
        <p class="text-gray-600 mt-2">Bienvenue, Dr. {{ auth()->user()->name }}</p>
    </div>

    <!-- Statistiques -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Rendez-vous aujourd'hui</p>
                    <p class="text-2xl font-bold text-gray-800"></p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Consultations ce mois</p>
                    <p class="text-2xl font-bold text-gray-800"></p>
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
                    <p class="text-2xl font-bold text-gray-800">%</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Patients totaux</p>
                    <p class="text-2xl font-bold text-gray-800"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques par type d'animal -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Répartition par type d'animal</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <canvas id="animalTypeChart" height="200"></canvas>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-3 h-3 rounded-full bg-blue-500 mr-2"></div>
                        <span class="text-gray-700">Bovins</span>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 mt-2"></p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                        <span class="text-gray-700">Ovins</span>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 mt-2"></p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                        <span class="text-gray-700">Caprins</span>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 mt-2"></p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                        <span class="text-gray-700">Autres</span>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 mt-2"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Prochains rendez-vous -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 bg-green-600 text-white flex justify-between items-center">
                <h2 class="text-lg font-semibold">Prochains rendez-vous</h2>
                <a href="{{ route('vet.appointments.index') }}" class="text-sm hover:underline">Voir tous</a>
            </div>
            <div class="p-6">
                    <div class="space-y-4">
                        <div class="border-b border-gray-100 pb-4 last:border-b-0 last:pb-0">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <img src="" alt="{" class="w-10 h-10 rounded-full object-cover mr-3">
                                    <div>
                                        <h3 class="font-medium text-gray-800"></h3>
                                        <p class="text-sm text-gray-600"></p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-800"></p>
                                    <p class="text-sm text-gray-600"></p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="text-sm text-gray-600 truncate"></p>
                                <div class="mt-2 flex justify-between items-center">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium">
                                        
                                    </span>
                                    <a href="" class="text-sm text-green-600 hover:text-green-700">
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <p class="text-gray-500">Aucun rendez-vous à venir</p>
                    </div>
            </div>
        </div>

        <!-- Consultations récentes -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 bg-blue-600 text-white flex justify-between items-center">
                <h2 class="text-lg font-semibold">Consultations récentes</h2>
                <a href="" class="text-sm hover:underline">Voir toutes</a>
            </div>
            <div class="p-6">
                    <div class="space-y-4">
                        <div class="border-b border-gray-100 pb-4 last:border-b-0 last:pb-0">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <img src="" alt="" class="w-10 h-10 rounded-full object-cover mr-3">
                                    <div>
                                        <h3 class="font-medium text-gray-800"></h3>
                                        <p class="text-sm text-gray-600"></p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-800"></p>
                                    <p class="text-sm text-gray-600"> min</p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="text-sm text-gray-600 truncate"></p>
                                <div class="mt-2 flex justify-between items-center">
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
                    <div class="text-center py-4">
                        <p class="text-gray-500">Aucune consultation récente</p>
                    </div>
            </div>
        </div>
    </div>

    <!-- Consultations en attente de réponse -->
    <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 bg-yellow-600 text-white flex justify-between items-center">
            <h2 class="text-lg font-semibold">Consultations en attente de réponse</h2>
            <a href="" class="text-sm hover:underline">Voir toutes</a>
        </div>
        <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Animal</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sujet</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full object-cover" src="" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">namec</div>
                                            <div class="text-sm text-gray-500"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"></div>
                                    <div class="text-sm text-gray-500"></div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 truncate max-w-xs"></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"></div>
                                    <div class="text-sm text-gray-500"></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="" class="text-green-600 hover:text-green-900">Répondre</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center py-4">
                    <p class="text-gray-500">Aucune consultation en attente</p>
                </div>  
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
