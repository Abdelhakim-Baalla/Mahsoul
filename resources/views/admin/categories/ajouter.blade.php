@extends('layouts.admin')

@section('title', 'Gestion des catégories - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4 text-2xl font-semibold text-gray-800">Ajouter une catégorie</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-folder-plus mr-2"></i>
                <span>Nouvelle catégorie</span>
            </div>
        </div>
        <div class="p-4">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="categoryName" class="block text-sm font-medium text-gray-700">Nom de la catégorie</label>
                    <input type="text" name="nom" class="mt-1 block w-full rounded-md border border-gray-400 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryName" required>
                </div>
                <div class="mb-3">
                    <label for="categoryDescription" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" class="mt-1 block w-full rounded-md border border-gray-400 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryDescription" rows="3"></textarea>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Annuler</a>
                    <button type="submit" onclick="return validateCategoryForm()" class="ml-2 px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/categorie-validation.js') }}"></script>
@endsection