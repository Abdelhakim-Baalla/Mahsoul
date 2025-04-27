@extends('layouts.admin')

@section('title', 'Gestion des articles - Mahsoul Admin')

@section('content')
<div class="flex-1 p-6">
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

    <!-- Filtres et outils -->
    <div class="bg-white rounded-lg shadow-sm p-4 mb-6 border border-gray-200">
        <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
            <!-- Filtre par catégorie -->
            <div class="w-full md:w-1/4">
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                <select id="category" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-500 focus:ring-opacity-50">
                    <option value="">Toutes catégories</option>

                    <!-- <option value=""></option> -->
                </select>
            </div>

            <!-- Filtre par statut -->
            <div class="w-full md:w-1/4">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                <select id="status" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-500 focus:ring-opacity-50">
                    <option value="">Tous statuts</option>
                    <option value="published">Publié</option>
                    <option value="draft">Brouillon</option>
                    <option value="pending">En attente</option>
                </select>
            </div>

            <!-- Recherche -->
            <div class="w-full md:w-1/3">
                <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Recherche</label>
                <div class="relative rounded-md shadow-sm">
                    <input type="text" id="search" class="block w-full pr-10 rounded-md border-gray-300 focus:border-primary-500 focus:ring focus:ring-primary-500 focus:ring-opacity-50" placeholder="Titre, auteur...">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
            </div>

            <!-- Boutons d'action -->
            <div class="w-full md:w-1/6 flex items-end space-x-2">
                <button type="button" class="w-full inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <i class="fas fa-filter mr-2"></i> Filtrer
                </button>
            </div>
        </div>
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
                                    <img class="h-full w-full object-cover" src="{{$Utilisateuradmin->photo}}" alt="{{$Utilisateuradmin->nom}} {{$Utilisateuradmin->prenom}}" title="{{$Utilisateuradmin->nom}} {{$Utilisateuradmin->prenom}}">
                                      
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">
                                        <!-- auteur nom et prenom -->
                                         <p>
                                             {{$Utilisateuradmin->nom}} {{$Utilisateuradmin->prenom}}
                                         </p>

                                    </div>
                                    <div class="text-xs text-gray-500">
                                    {{$Utilisateuradmin->type}} 
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
                            @if($article->statut === 'publié')
                            <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Publié
                            </span>
                            @elseif($article->statut === 'brouillon')
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
                                <a href="{{ route('articles.show', $article->slug) }}" target="_blank"
                                    class="text-blue-600 hover:text-blue-900 p-1 rounded-full hover:bg-blue-50"
                                    title="Voir l'article">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.articles.edit', $article->id) }}"
                                    class="text-gray-600 hover:text-gray-900 p-1 rounded-full hover:bg-gray-50"
                                    title="Modifier">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
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