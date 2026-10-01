@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Modifier mon profil</h1>
            <p class="mt-2 text-lg text-gray-600">Mettez à jour vos informations personnelles</p>
        </div>
        @if ($errors->any())
        <div class="lg:col-span-2 mb-6">
            <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Il y a {{ $errors->count() }} erreur(s) dans votre formulaire</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                @include('profile.partials.sidebar', ['active' => 'profile'])
                        </div>

                        <!-- Main Content -->
                        <div class="lg:col-span-2">
                            <!-- Edit Profile Form -->

                            <div class="p-6 border-b border-gray-200">
                                <h3 class="text-xl font-bold text-gray-800">Modifier mes informations</h3>
                            </div>
                            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                                <div class="p-6">
                                    <form action="/admin/information/update" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                            
                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700 mb-1">About</label>
                                                <textarea id="about" name="about" rows="10" class="w-full px-2 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">{{ Auth::user()->admin->about ?? '' }}</textarea>
                                                
                                            </div>

                                            <div>
                                                <label for="domaines_expertise" class="block text-sm font-medium text-gray-700 mb-1">Domaine D'experience</label>
                                                <textarea id="domaines_expertise" name="domaines_expertise" rows="10" class="w-full px-2 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">{{ Auth::user()->admin->domaines_expertise ?? '' }}</textarea>
                                                
                                            </div>

                                        </div>
                                        <div class="mb-5">
                                            <label for="contact_urgence" class="block text-sm font-medium text-gray-700 mb-1">Contact Urgence</label>
                                            <input type="text" step="0.01" id="contact_urgence" name="contact_urgence"
                                                value="{{ Auth::user()->admin->contact_urgence ?? '' }}"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                        </div>

                                        @if(Auth::user()->admin)
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->admin->id }}">
                                        @endif

                                        <!-- Boutons -->
                                        <div class="flex justify-end space-x-4">
                                            <a href="/profile" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 font-medium">
                                                Annuler
                                            </a>
                                            <button type="submit" class="px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white rounded-md font-medium">
                                                Enregistrer les modifications
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            @endsection