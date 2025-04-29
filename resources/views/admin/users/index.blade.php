@extends('layouts.admin')

@section('title', 'Gestion des utilisateurs - Mahsoul')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-900">Gestion des utilisateurs</h1>
            
        </div>

        <!-- Filtres et recherche -->
        <div class="mt-6 bg-white shadow rounded-lg p-4">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0">
                <div class="w-full md:w-1/3">
                    <label for="search" class="sr-only">Rechercher</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Rechercher un utilisateur" type="search">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4">
                    <div>
                        <label for="role" class="sr-only">Rôle</label>
                        <select id="role" name="role" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                            <option value="">Tous les rôles</option>
                            <option value="admin">Administrateur</option>
                            <option value="expert">Expert</option>
                            <option value="farmer">Agriculteur</option>
                            <option value="customer">Client</option>
                        </select>
                    </div>
                    <div>
                        <label for="status" class="sr-only">Statut</label>
                        <select id="status" name="status" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                            <option value="">Tous les statuts</option>
                            <option value="active">Actif</option>
                            <option value="inactive">Inactif</option>
                            <option value="pending">En attente</option>
                        </select>
                    </div>
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Liste des utilisateurs -->
        <div class="mt-6 bg-white shadow overflow-hidden rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Utilisateur
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rôle
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($utilisateurs as $utilisateur)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{$utilisateur->photo}}" alt="{{$utilisateur->prenom}} {{$utilisateur->nom}}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{$utilisateur->prenom}} {{$utilisateur->nom}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            ID: #{{$utilisateur->id}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$utilisateur->email}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($utilisateur->type == 'admin')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 items-center">
                                        <i class="fas fa-user-shield mr-1"></i> Administrateur
                                    </span>
                                @elseif($utilisateur->type == 'agricole')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 items-center">
                                        <i class="fas fa-tractor mr-1"></i> Agricole
                                    </span>
                                @elseif($utilisateur->type == 'veterinaire')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 items-center">
                                        <i class="fas fa-stethoscope mr-1"></i> Vétérinaire
                                    </span>
                                @elseif($utilisateur->type == 'client')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800 items-center">
                                        <i class="fas fa-user mr-1"></i> Client
                                    </span>
                                @endif

                            </td>
                           
                            <td class="px-6 py-4 text-right text-sm font-medium flex gap-2 items-center">
                                <form action="{{ route('admin.users.show') }}" method="GET">
                                    <input type="hidden" name="id" value="{{ $utilisateur->id }}">
                                    <button type="submit" class="text-green-600 hover:text-green-900 mr-3">Détails</button>
                                </form>
                                <form action="{{ route('admin.users.edit') }}" method="GET">
                                    <input type="hidden" name="id" value="{{ $utilisateur->id }}">
                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900 mr-3">Modifier</button>
                                </form>
                                <form action="{{ route('admin.users.delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $utilisateur->id }}">
                                    <button type="submit" class="text-red-600 hover:text-red-900">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{ $utilisateurs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
