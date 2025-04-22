@extends('layouts.admin')

@section('title', 'Modifier utilisateur - Mahsoul')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <a href="{{ route('admin.users.show', 1) }}" class="text-green-600 hover:text-green-900 mr-2">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h1 class="text-2xl font-semibold text-gray-900">Modifier l'utilisateur</h1>
        </div>

        <div class="mt-6 bg-white shadow overflow-hidden rounded-lg">
            <form action="#" method="POST">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">
                                Prénom
                            </label>
                            <div class="mt-1">
                                <input type="text" name="first_name" id="first_name" value="Ahmed" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">
                                Nom
                            </label>
                            <div class="mt-1">
                                <input type="text" name="last_name" id="last_name" value="Benali" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" value="ahmed.benali@example.com" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="phone" class="block text-sm font-medium text-gray-700">
                                Téléphone
                            </label>
                            <div class="mt-1">
                                <input type="text" name="phone" id="phone" value="+212 6 12 34 56 78" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="role" class="block text-sm font-medium text-gray-700">
                                Rôle
                            </label>
                            <div class="mt-1">
                                <select id="role" name="role" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="admin">Administrateur</option>
                                    <option value="expert">Expert</option>
                                    <option value="farmer" selected>Agriculteur</option>
                                    <option value="customer">Client</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="status" class="block text-sm font-medium text-gray-700">
                                Statut
                            </label>
                            <div class="mt-1">
                                <select id="status" name="status" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="active" selected>Actif</option>
                                    <option value="inactive">Inactif</option>
                                    <option value="pending">En attente</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="address" class="block text-sm font-medium text-gray-700">
                                Adresse
                            </label>
                            <div class="mt-1">
                                <input type="text" name="address" id="address" value="123 Rue des Oliviers, Quartier El Fida, Casablanca, Maroc" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
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
                        </div>

                        <div class="sm:col-span-6">
                            <label for="bio" class="block text-sm font-medium text-gray-700">
                                Bio
                            </label>
                            <div class="mt-1">
                                <textarea id="bio" name="bio" rows="4" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">Agriculteur spécialisé dans la culture d'agrumes et d'olives dans la région de Souss. Pratique l'agriculture biologique depuis plus de 10 ans.</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Brève description de l'utilisateur.
                            </p>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="avatar" class="block text-sm font-medium text-gray-700">
                                Photo de profil
                            </label>
                            <div class="mt-1 flex items-center">
                                <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <img src="/placeholder.svg?height=48&width=48" alt="Avatar actuel">
                                </span>
                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Changer
                                </button>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Nouveau mot de passe
                            </label>
                            <div class="mt-1">
                                <input type="password" name="password" id="password" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Laissez vide pour conserver le mot de passe actuel.
                            </p>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                Confirmer le nouveau mot de passe
                            </label>
                            <div class="mt-1">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mr-3">
                        Annuler
                    </button>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
