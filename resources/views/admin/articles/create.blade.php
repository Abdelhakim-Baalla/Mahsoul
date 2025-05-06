@extends('layouts.admin')

@section('title', 'Créer un article - Mahsoul Admin')

@section('content')
<div class="flex-1 flex flex-col overflow-hidden">
    <!-- Conteneur principal avec défilement -->
    <div class="flex-1 overflow-y-auto p-6">
        <div class="max-w-7xl mx-auto">
            <!-- En-tête -->
            <div class="mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 flex items-center">
                            <svg class="w-6 h-6 text-primary-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Nouvel Article
                        </h1>
                        <p class="mt-1 text-gray-600">Remplissez les champs pour créer un nouvel article</p>
                    </div>
                    
                    @if($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Erreur dans le formulaire</h3>
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
                    @endif
                </div>
            </div>

            <!-- Formulaire -->
            <form action="{{route('admin.articles.store')}}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="auteur_id" value="{{ auth()->user()->id }}">
                <!-- Section Informations -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">
                            Informations de l'article
                        </h2>
                    </div>
                    <div class="px-6 py-4 space-y-4">
                        <div>
                            <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
                            <input type="text" id="titre" name="titre"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                required>
                        </div>
                        
                        <div>
                            <label for="photo" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="text" id="photo" name="photo"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                placeholder="URL de l'image">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="statut">Statut</label>
                            <div class="mt-1 grid grid-cols-3 gap-2">
                                <label class="flex items-center p-2 border rounded-md cursor-pointer hover:bg-gray-50">
                                    <input type="radio" name="statut" value="brouillon" class="h-4 w-4 text-primary-600">
                                    <span class="ml-2">Brouillon</span>
                                </label>
                                <label class="flex items-center p-2 border rounded-md cursor-pointer hover:bg-gray-50">
                                    <input type="radio" name="statut" value="en attente" class="h-4 w-4 text-primary-600">
                                    <span class="ml-2">En attente</span>
                                </label>
                                <label class="flex items-center p-2 border rounded-md cursor-pointer bg-gray-50">
                                    <input type="radio" name="statut" value="publié" checked class="h-4 w-4 text-primary-600">
                                    <span class="ml-2">Publié</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Contenu -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-medium text-gray-900">
                            Contenu de l'article
                        </h2>
                    </div>
                    <div class="px-6 py-4">
                        <textarea id="contenu" name="contenu" rows="20" class="block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500 min-h-[400px]" placeholder="Écrivez votre contenu ici..."></textarea>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-end space-x-3 pt-4">
                    <a href="{{ route('admin.articles.index') }}" class="px-4 py-2 border rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Annuler
                    </a>
                    <button type="submit" onclick="return validateArticleForm()" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700">
                        Suivant
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/article-validation.js') }}"></script>
@endsection