@extends('layouts.admin')

@section('title', 'Création de tag - Mahsoul Admin')

@section('content')
<div class="flex-1 p-6 md:p-8">
    <!-- Carte principale -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden max-w-4xl mx-auto">
        <!-- En-tête -->
        <div class="bg-primary-50 px-6 md:px-8 py-5 border-b border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="mb-3 md:mb-0">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-plus-circle text-primary-600 mr-3"></i>
                        Nouveau Tag
                    </h2>
                    <p class="text-gray-600 mt-1 text-sm md:text-base">Ajoutez un mot-clé à votre catalogue</p>
                </div>
            </div>
        </div>

        <!-- Contenu du formulaire -->
        <div class="p-6 md:p-8">
            <!-- Affichage des erreurs -->
            @if($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4 animate-fade-in">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-exclamation-circle text-red-500"></i>
                    </div>
                    <div class="ml-3 flex-1">
                        <h4 class="text-base font-medium text-red-800">
                            Impossible de créer le tag
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

            <form action="{{ route('admin.tags.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Champ de formulaire -->
                <div class="space-y-2">
                    <label for="nom" class="block text-base md:text-lg font-medium text-gray-700 flex items-center">
                        <i class="fas fa-tag text-primary-500 mr-2 text-lg"></i>
                        Nom du tag
                    </label>
                    
                    <div class="relative">
                        <input type="text" id="nom" name="nom" value="{{ old('nom') }}"
                            class="block w-full px-4 py-3 text-base md:text-lg border {{ $errors->has('nom') ? 'border-red-300 focus:ring-red-200' : 'border-gray-300 focus:ring-primary-200' }} rounded-lg focus:ring-2 focus:border-primary-500 transition"
                            placeholder="Ex: Agriculture durable">
                        
                        @if($errors->has('nom'))
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-exclamation-circle text-red-500"></i>
                        </div>
                        @endif
                    </div>
                    
                    <p class="text-sm text-gray-500 mt-1">
                            Le nom doit être unique
                    </p>
                </div>

                <!-- Boutons d'action -->
                <div class="flex flex-col-reverse sm:flex-row justify-end gap-3 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.tags.index') }}"
                        class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 text-center transition">
                        <i class="fas fa-arrow-left mr-2"></i> Annuler
                    </a>
                    <button type="submit"
                        onclick="return validateTagForm()"
                        class="px-6 py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition flex items-center justify-center">
                        <i class="fas fa-plus-circle mr-2"></i>
                        Créer le tag
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/tag-validation.js') }}"></script>
@endsection