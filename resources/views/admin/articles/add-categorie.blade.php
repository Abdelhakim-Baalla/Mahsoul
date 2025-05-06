@extends('layouts.admin')

@section('title', 'Créer un article - Mahsoul Admin')

@section('content')
<!-- Catégories sous forme de radio buttons avec pagination -->
<div class="mb-6">
    <label class="block font-medium text-gray-700 mb-2">
        <i class="fas fa-tag text-primary-500 mr-2"></i>
        Catégorie
    </label>

    <!-- Gestion des erreurs -->
    @if($errors->any())
    <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded mb-4">
        <ul class="list-disc pl-5 text-red-700">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.articles.store.submit') }}" method="POST">
        @csrf
        <input type="hidden" name="titre" value="{{$validated['titre']}}">
        <input type="hidden" name="contenu" value="{{$validated['contenu']}}">
        <input type="hidden" name="photo"  value="{{$validated['photo']}}">
        <input type="hidden" name="statut" value="{{$validated['statut']}}">
        <input type="hidden" name="auteur_id" value="{{$validated['auteur_id']}}">
        <div class="max-h-[500px] overflow-y-auto border border-gray-300 rounded-lg bg-white p-2">
            @foreach($categories as $categorie)
            <div class="flex items-center mb-2 p-2 hover:bg-gray-100 rounded">
                <input type="radio" id="{{ $categorie->id }}" name="categorie_id" value="{{ $categorie->id }}" class="mr-2 accent-primary-600">
                <label for="{{ $categorie->id }}" class="block text-gray-800 cursor-pointer">
                    {{ $categorie->nom }}
                </label>
            </div>
            @endforeach
        </div>

        <div class="mt-2">
            
        </div>

        <div class="mt-4">
            <button type="submit" onclick="return validateCategorySelection()" class="px-4 py-2 bg-primary-600 text-white rounded hover:bg-primary-700">
                Enregistrer
            </button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/article-category-validation.js') }}"></script>
@endsection