@extends('layouts.admin')

@section('title', 'Gestion des articles - Mahsoul Admin')

@section('content')
<div class="flex-1 p-2">
    <!-- Message de succès -->
    @if(session('success'))
    <div class="mb-6 bg-green-50 border-l-4 border-green-500 rounded-lg p-4">
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

    <!-- En-tête -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 flex items-center">
                <i class="fas fa-newspaper text-primary-600 mr-3"></i>
                Gestion des Articles
            </h1>
            <p class="text-gray-600 mt-2">Gérez le contenu publié sur votre plateforme</p>
        </div>
        <a href="{{ route('admin.articles.create') }}"
            class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            <i class="fas fa-plus mr-2"></i>
            Nouvel Article
        </a>
    </div>


    <!-- Tableau des articles -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Titre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Auteur
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Catégorie
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Statut
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date de création
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Dernière modification
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @if($articles == null || $articles->isEmpty())
                    <tr>
                        <td colspan="7" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                            Aucun article trouvé.
                        </td>
                    </tr>
                    @else
                    @foreach($articles as $article)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <!-- Colonne Titre -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-16 bg-gray-200 rounded overflow-hidden">
                                    @if($article->photo)
                                    <img class="h-full w-full object-cover" src="{{$article->photo}}" alt="{{ $article->titre }}">
                                    @else
                                    <div class="h-full w-full bg-gray-300 flex items-center justify-center">
                                        <i class="fas fa-image text-gray-400"></i>
                                    </div>
                                    @endif
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900 line-clamp-1">
                                        {{ Str::limit(strip_tags($article->titre), 15) }}
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        {{ Str::limit(strip_tags($article->contenu), 10) }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <!-- Colonne Auteur -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 overflow-hidden">
                                    <img class="h-full w-full object-cover" src="{{$article->auteur->photo}}" alt="{{$article->auteur->nom}} {{$article->auteur->prenom}}" title="{{$Utilisateuradmin->nom}} {{$Utilisateuradmin->prenom}}">

                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">
                                        <!-- auteur nom et prenom -->
                                        <p>
                                        {{$article->auteur->nom}} {{$article->auteur->prenom}}
                                        </p>

                                    </div>
                                    <div class="text-xs text-gray-500">
                                    {{$article->auteur->type}}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <!-- Colonne Catégorie -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-primary-100 text-primary-800">

                                <i class="fas fa-folder-open mr-1"></i> {{ $article->categorie }}

                            </span>
                        </td>

                        <!-- Colonne Statut -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if(strtolower($article->statut) === 'publié')
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Publié
                            </span>
                            @elseif(strtolower($article->statut) === 'brouillon')
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                <i class="fas fa-edit mr-1"></i> Brouillon
                            </span>
                            @else
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">
                                <i class="fas fa-clock mr-1"></i> En attente
                            </span>
                            @endif
                        </td>

                        <!-- Colonne Date de création -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $article->created_at->format('d/m/Y H:i') }}
                        </td>

                        <!-- Colonne Dernière modification -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $article->updated_at->format('d/m/Y H:i') }}
                        </td>

                        <!-- Colonne Actions -->
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex justify-end space-x-2">
                            @if(strtolower($article->statut) === 'publié')
                            <form action="{{ route('articles.show') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $article->id }}">
                                 <button type="submit"
                                    class="text-blue-600 hover:text-blue-900 p-1 rounded-full hover:bg-blue-50"
                                    title="Voir l'article {{ $article->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </form>
                            @endif
                               <form action="{{ route('admin.articles.edit') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $article->id }}">
                                 <button type="submit"
                                    class="text-gray-600 hover:text-gray-900 p-1 rounded-full hover:bg-gray-50"
                                    title="Modifier">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                               </form>
                               
                                <form action="{{ route('admin.articles.supprimer') }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $article->id }}">
                                    <button type="submit"
                                        class="text-red-600 hover:text-red-900 p-1 rounded-full hover:bg-red-50"
                                        title="Supprimer"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $articles->links('pagination::tailwind') }}
        </div>
    </div>
</div>
@endsection