@extends('layouts.admin')

@section('title', 'Gestion des tags - Mahsoul Admin')

@section('content')
<div class="flex-1 p-8">
    @if(session('success'))
    <div class="mb-3 bg-green-50 border border-green-200 rounded-lg p-4">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <i class="fas fa-check-circle text-green-500"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    </div>
    @endif
    <div class="flex justify-between items-center mb-2">
        <div>
            <h1 class="text-3xl font-bold text-gray-800 flex items-center">
                <i class="fas fa-hashtag text-primary-600 mr-3"></i>
                Gestion des Tags
            </h1>
        </div>
        <a href="{{ route('admin.tags.create') }}"
            class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-lg shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            <i class="fas fa-plus-circle mr-2"></i>
            Nouveau Tag
        </a>
    </div>

    <!-- Carte principale -->
    <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
        <!-- En-tête de tableau -->
        <div class="bg-primary-50 px-6 py-4 border-b border-gray-200">
            <div class="flex items-center">
                <i class="fas fa-list-ul text-primary-600 mr-3"></i>
                <span class="text-lg font-medium text-gray-700">Liste des Tags existants</span>
            </div>
        </div>

        <!-- Tableau -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if($tags == null || $tags->isEmpty())
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            Aucun tag trouvé.
                        </td>
                    </tr>
                    @else
                    @foreach($tags as $tag)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $tag->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <div class="flex items-center">
                                <i class="fas fa-tag text-primary-500 mr-2"></i>
                                {{ $tag->nom }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-4">

                                <form action="{{route('admin.tags.update')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $tag->id }}">
                                    <input type="hidden" name="nom" value="{{ $tag->nom }}">
                                    <button type="submit" class="text-primary-600 hover:text-primary-900" title="Modifier">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                </form>

                                <form action="{{route('admin.tags.delete')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $tag->id }}">
                                    <button type="submit" class="text-red-600 hover:text-red-900" title="Supprimer">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>


                                <!-- Bouton Voir -->
                                <a href="/admin/articles?tag={{ urlencode($tag->nom) }}" class="text-gray-600 hover:text-gray-900" title="Voir les articles">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            {{ $tags->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection