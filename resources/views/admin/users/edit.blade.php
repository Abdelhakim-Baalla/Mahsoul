@extends('layouts.admin')

@section('title', 'Modifier utilisateur - Mahsoul')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <a href="{{ URL::previous() }}" class="text-green-600 hover:text-green-900 mr-2">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h1 class="text-2xl font-semibold text-gray-900">Modifier l'utilisateur</h1>
            
        </div>
       

        <div class="mt-6 bg-white shadow overflow-hidden rounded-lg">
        @foreach ($errors->all() as $error)
            <div class="text-red-600 text-sm font-medium px-4 sm:p-6">
            <p>{{ $error }}</p>
            </div>
        @endforeach
            <form action="{{route('admin.users.edit.submit')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$utilisateur->id}}">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="prenom" class="block text-sm font-medium text-gray-700">
                                Prénom
                            </label>
                            <div class="mt-1">
                                <input type="text" name="prenom" id="prenom" value="{{$utilisateur->prenom}}" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="nom" class="block text-sm font-medium text-gray-700">
                                Nom
                            </label>
                            <div class="mt-1">
                                <input type="text" name="nom" id="nom" value="{{$utilisateur->nom}}" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" value="{{$utilisateur->email}}" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="telephone" class="block text-sm font-medium text-gray-700">
                                Téléphone
                            </label>
                            <div class="mt-1">
                                <input type="text" name="telephone" id="telephone" value="{{$utilisateur->telephone}}" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="type" class="block text-sm font-medium text-gray-700">
                                Rôle
                            </label>
                            <div class="mt-1">
                                <select id="type" name="type" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="admin" {{$utilisateur->type == 'admin' ? 'selected' : ''}}>Administrateur</option>
                                    <option value="agricole" {{$utilisateur->type == 'agricole' ? 'selected' : ''}}>Agricole</option>
                                    <option value="veterinaire" {{$utilisateur->type == 'veterinaire' ? 'selected' : ''}}>Veterinaire</option>
                                    <option value="client" {{$utilisateur->type == 'client' ? 'selected' : ''}}>client</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="adresse" class="block text-sm font-medium text-gray-700">
                                Adresse
                            </label>
                            <div class="mt-1">
                                <input type="text" name="adresse" id="adresse" value="{{$utilisateur->adresse}}" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <!-- <div class="sm:col-span-3">
                            <label for="city" class="block text-sm font-medium text-gray-700">
                                Ville
                            </label>
                            <div class="mt-1">
                                <input type="text" name="city" id="city" value="Casablanca" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="region" class="block text-sm font-medium text-gray-700">
                                Région
                            </label>
                            <div class="mt-1">
                                <select id="region" name="region" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="casablanca" selected>Casablanca-Settat</option>
                                    <option value="rabat">Rabat-Salé-Kénitra</option>
                                    <option value="marrakech">Marrakech-Safi</option>
                                    <option value="fes">Fès-Meknès</option>
                                    <option value="tanger">Tanger-Tétouan-Al Hoceïma</option>
                                </select>
                            </div>
                        </div> -->

                        <!-- <div class="sm:col-span-6">
                            <label for="bio" class="block text-sm font-medium text-gray-700">
                                Bio
                            </label>
                            <div class="mt-1">
                                <textarea id="bio" name="bio" rows="4" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">Agriculteur spécialisé dans la culture d'agrumes et d'olives dans la région de Souss. Pratique l'agriculture biologique depuis plus de 10 ans.</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brève description de l'utilisateur.
                            </p>
                        </div> -->

                        <div class="sm:col-span-6">
                            <label for="avatar" class="block text-sm font-medium text-gray-700">
                                Photo de profil
                            </label>
                            <div class="mt-1 flex items-center gap-4">
                                <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <img src="{{$utilisateur->photo}}" alt="Avatar actuel">
                                </span>
                                <input type="text" name="photo" id="photo" value="{{$utilisateur->photo}}" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <a href="{{ URL::previous() }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-3">
                        Annuler
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
