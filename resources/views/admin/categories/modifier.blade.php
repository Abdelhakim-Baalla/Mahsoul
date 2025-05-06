@extends('layouts.admin')

@section('title', 'Modifier une catégorie - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4 text-2xl font-semibold text-gray-800">Gestion des catégories</h1>
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-edit mr-2"></i>
                <span>Modifier la catégorie</span>
            </div>
            <a href="{{ route('admin.categories.index') }}" class="bg-white text-primary-600 px-3 py-1 rounded-md text-sm font-medium hover:bg-gray-100">
                <i class="fas fa-arrow-left mr-1"></i> Retour
            </a>
        </div>
        
        <div class="p-6">
            <form action="{{route('admin.categories.edit.submit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div class="space-y-4">
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom de la catégorie</label>
                            <input type="text" id="nom" name="nom" value="{{$categorie->nom}}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                   placeholder="Entrez le nom de la catégorie">
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea id="description" name="description" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                      placeholder="Description de la catégorie">{{$categorie->description}}</textarea>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$categorie->id}}">
                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Annuler
                    </a>
                    <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Script pour générer automatiquement le slug à partir du nom
document.getElementById('nom').addEventListener('input', function() {
    const slugInput = document.getElementById('slug');
    if (slugInput.value === '') {
        const slug = this.value
            .toLowerCase()
            .replace(/[^\w\s-]/g, '') // Supprime les caractères spéciaux
            .replace(/[\s_-]+/g, '-') // Remplace espaces et _ par -
            .replace(/^-+|-+$/g, ''); // Supprime les - en début et fin
        slugInput.value = slug;
    }
});
</script>
@endsection