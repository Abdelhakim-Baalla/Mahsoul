@extends('layouts.app')

@section('title', 'Tableau de bord client - Mahsoul')

@section('content')
<div class="bg-primary-50 min-h-screen py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center">
                            <img src="{{Auth::user()->photo}}" class="rounded-full" alt="{{Auth::user()->prenom}} {{Auth::user()->nom}}">
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-gray-800">{{Auth::user()->prenom}} {{Auth::user()->nom}}</h2>
                            <p class="text-gray-600">Client</p>
                        </div>
                    </div>
                    
                    <nav class="space-y-2">
                        <a href="/client" class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-primary-50 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Tableau de bord
                        </a>
                        <a href="/client/consultations" class="flex items-center px-4 py-2 text-primary-700 bg-primary-50 rounded-md font-medium">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Mes consultations
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-primary-50 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            Mes commandes
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-primary-50 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Mes documents
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-primary-50 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Mon profil
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-primary-50 hover:text-primary-700">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Paramètres
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-red-600 rounded-md hover:bg-red-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Déconnexion
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="md:w-3/4">
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-6">
                    <!-- Orders Stats -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-800">Mes Consultations</h2>
                            <div class="p-2 bg-primary-100 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Sujet
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Expert
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Statut
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date de Réservation
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Adresse
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Total Payée
                                            </th>
                                            @foreach($rendezVous as $rendezVou)
                                            @if($rendezVou->statut == 'pending')
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions
                                            </th>
                                            @endif
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @if($rendezVous == null || $rendezVous->isEmpty())
                                            <tr>
                                                <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                                    Aucun Consultation trouvé.
                                                </td>
                                            </tr>
                                        @else
                                            @foreach($rendezVous as $rendezVou)
                                            <tr class="hover:bg-gray-50 transition duration-150">
                                            <!-- Colonne Titre -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900 line-clamp-1">
                                                            {{ Str::limit(strip_tags($rendezVou->sujet), 10) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        
                                            <!-- Colonne description -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 line-clamp-1">
                                                    {{ Str::limit(strip_tags($rendezVou->description), 10) }}
                                                </div>
                                            </td>

                                            <!-- Colonne Expert -->
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 overflow-hidden">
                                                        <img class="h-full w-full object-cover" src="{{$rendezVou->expert->photo}}" alt="{{$rendezVou->expert->nom}} {{$rendezVou->expert->prenom}}" title="{{$rendezVou->expert->prenom}} {{$rendezVou->expert->nom}}">
                                                    
                                                    </div>
                                                    <div class="ml-3">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            <!-- auteur nom et prenom -->
                                                            <p>
                                                               {{$rendezVou->expert->prenom}} {{$rendezVou->expert->nom}}
                                                            </p>
                                                        
                                                        </div>
                                                        <div class="text-xs text-gray-500">
                                                            {{$rendezVou->expert->type}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        
                                            <!-- Colonne Statut -->
                                            <td class="px-6 py-4 whitespace-nowrap">
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
                                            </td>
                                        
                                            <!-- Colonne Date de reservation -->
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$rendezVou->date_reserver}}
                                            </td>
                                        
                                            <!-- Colonne Adress -->
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                 {{ Str::limit(strip_tags($rendezVou->adresse), 10) }}
                                            </td>

                                            <!-- Colonne Total Payée -->
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{$rendezVou->total}} DH
                                            </td>
                                        
                                            <!-- Colonne Actions -->
                                            @if($rendezVou->statut == 'pending')
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                 <form action="{{ route('client.consultation.annuler') }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id" value="{{$rendezVou->id}}">
                                                        <button type="submit"
                                                            class="text-red-600 hover:text-red-900 p-1 rounded-full hover:bg-red-50"
                                                            title="Annuler"
                                                            onclick="return confirm('Êtes-vous sûr de vouloir annuler cet Consultation ?')">
                                                            <i class="fas fa-cancel"></i>
                                                        </button>
                                                 </form>
                                                </div>
                                            </td>
                                            @endif
                                           </tr>
                                          @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
