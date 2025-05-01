@extends('layouts.admin')

@section('title', 'Gestion des catégories - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4 text-2xl font-semibold text-gray-800">Gestion des catégories</h1>
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-folder mr-2"></i>
                <span>Catégories de produits</span>
            </div>
            <button type="button" class="bg-white text-primary-600 px-3 py-1 rounded-md text-sm font-medium hover:bg-gray-100" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <i class="fas fa-plus mr-1"></i> Ajouter une catégorie
            </button>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto" style="max-height: 500px; overflow-y: auto;">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($categories as $categorie)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$categorie->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$categorie->nom}}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{$categorie->description}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$categorie->created_at->format('d/m/Y')}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <form action="{{route('admin.categories.edit')}}" method="POST" class="inline-block">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$categorie->id}}">
                                        <button type="submit" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                                    
                                    <form action="{{route('admin.categories.delete')}}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$categorie->id}}">
                                        <button type="submit" class="text-red-600 hover:text-red-900" data-bs-toggle="modal">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
