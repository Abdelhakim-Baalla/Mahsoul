@extends('layouts.admin')

@section('title', 'Créer un article - Mahsoul Admin')

@section('content')
<div class="flex-1 p-6">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden max-w-6xl mx-auto">
        <!-- En-tête -->
        <div class="bg-primary-50 px-6 py-5 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-plus-circle text-primary-600 mr-3"></i>
                        Nouvel Article
                    </h2>
                    <p class="text-gray-600 mt-1">Remplissez les champs pour créer un nouvel article</p>
                </div>
                @if($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4 animate-fade-in">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-circle text-red-500"></i>
                    </div>
                    <div class="ml-3 flex-1">
                        <h4 class="text-base font-medium text-red-800">
                            Impossible de créer l'article
                        </h4>
                        <div class="mt-1 text-sm text-red-700">
                            @if($errors->has('nom'))
                                <p class="flex items-start">
                                    <span class="mr-2">•</span>
                                    <span>{{ str_replace('nom', 'Le nom', $errors->first('nom')) }}</span>
                                </p>
                            @else
                                <p>Veuillez vérifier les informations saisies</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endif
            </div>
        </div>

        <div class="p-6">
            <form action="{{route('admin.articles.store')}}" method="POST">
                @csrf
                
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div class="space-y-6">
                        <!-- Titre -->
                        <div>
                            <label for="titre" class="block text-lg font-medium text-gray-700 mb-2">
                                <i class="fas fa-heading text-primary-500 mr-2"></i>
                                Titre de l'article
                            </label>
                            <input type="text" id="titre" name="titre"
                                class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Titre">
                        </div>

                        
                        <div>
                            <label for="contenu" class="block text-lg font-medium text-gray-700 mb-2">
                                <i class="fas fa-file-alt text-primary-500 mr-2"></i>
                                Contenu 
                            </label>
                            <textarea id="contenu" name="contenu" rows="5"
                                class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Contenu détaillé de l'article"></textarea>
                        </div>
                        <!-- tags -->
                        <!-- <div>
                            <label class="block text-lg font-medium text-gray-700 mb-2">
                                <i class="fas fa-tags text-primary-500 mr-2"></i>
                                Tags
                            </label>
                            <select id="tags" name="tags[]" multiple class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                                <option value="1" selected>Irrigation</option>
                                <option value="2" selected>Économie d'eau</option>
                                <option value="3">Agriculture durable</option>
                                <option value="4">Technologies</option>
                            </select>
                        </div> -->
                    </div>

                    <!-- Colonne droite -->
                    <div class="space-y-6">
                        <!-- Image -->
                        <div>
                            <label class="block text-lg font-medium text-gray-700 mb-2" for="photo">
                                <i class="fas fa-image text-primary-500 mr-2"></i>
                                Image principale
                            </label>
                                
                                <input type="text" name="photo" id="photo" class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"  placeholder="https://example.com/image.jpg">
                            
                        </div>

                        <!-- Catégorie -->
                        <div>
                            <label for="categorie" class="block text-lg font-medium text-gray-700 mb-2">
                                <i class="fas fa-tag text-primary-500 mr-2"></i>
                                Catégorie *
                            </label>
                            <select id="categorie" name="categorie" class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" required>
                                <option value="">Sélectionnez une catégorie</option>
                                <option value="Techniques agricoles" selected>Techniques agricoles</option>
                                <option value="Irrigation">Irrigation</option>
                                <option value="Protection des cultures">Protection des cultures</option>
                                <option value="Élevage">Élevage</option>
                            </select>
                        </div>


                        <!-- Statut -->
                        <div>
                            <label for="statut" class="block text-lg font-medium text-gray-700 mb-2">
                                <i class="fas fa-toggle-on text-primary-500 mr-2"></i>
                                Statut *
                            </label>
                            <select id="statut" name="statut" class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" required>
                                <option value="brouillon">Brouillon</option>
                                <option value="en_attente">En attente</option>
                                <option value="publié" selected>Publié</option>
                            </select>
                        </div>

                       
                    </div>
                </div>

                <!-- Boutons -->
                <div class="flex justify-end space-x-4 pt-8 border-t border-gray-200 mt-8">
                    <a href="{{ route('admin.articles.index') }}" 
                       class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50">
                       <i class="fas fa-times mr-2"></i> Annuler
                    </a>
                    <button type="submit" 
                            class="px-6 py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 flex items-center">
                        <i class="fas fa-save mr-2"></i>
                        Enregistrer l'article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection