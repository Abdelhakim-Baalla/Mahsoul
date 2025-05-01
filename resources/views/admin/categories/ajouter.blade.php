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
            <form>
                <div class="mb-3">
                    <label for="categoryName" class="block text-sm font-medium text-gray-700">Nom de la catégorie</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryName" required>
                </div>
                <div class="mb-3">
                    <label for="categorySlug" class="block text-sm font-medium text-gray-700">Slug</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categorySlug">
                    <p class="mt-1 text-sm text-gray-500">Le slug sera généré automatiquement à partir du nom si laissé vide.</p>
                </div>
                <div class="mb-3">
                    <label for="categoryDescription" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryDescription" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="categoryImage" class="block text-sm font-medium text-gray-700">Image (optionnelle)</label>
                    <input type="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100" id="categoryImage">
                </div>
                <div class="mb-3 flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryActive" checked>
                    <label for="categoryActive" class="ml-2 block text-sm text-gray-900">Activer cette catégorie</label>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="ml-2 px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection