@extends('layouts.admin')

@section('title', 'Gestion des commentaires')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-2xl font-semibold text-gray-800">Gestion des commentaires</h1>
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/admin" class="text-gray-700 hover:text-primary-600">
                    <i class="fas fa-home mr-1"></i> Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                    <span class="text-gray-500">Commentaires</span>
                </div>
            </li>
        </ol>
    </nav>
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-comments mr-2"></i>
                <span>Liste des commentaires</span>
            </div>
            <div>
                <select class="bg-white text-gray-700 text-sm rounded-md border-0 focus:ring-2 focus:ring-primary-500" id="filter-status">
                    <option value="all">Tous les statuts</option>
                    <option value="approved">Approuvés</option>
                    <option value="pending">En attente</option>
                    <option value="spam">Spam</option>
                </select>
            </div>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Commentaire</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Article</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider flex items-center justify-center space-x-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($comments as $comment)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="{{$comment->utilisateur->photo}}" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{$comment->utilisateur->nom}} {{$comment->utilisateur->prenom}}</div>
                                        <div class="text-sm text-gray-500">{{$comment->utilisateur->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">{{$comment->contenu}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a class="text-primary-600 hover:text-primary-900 text-sm">{{$comment->article->titre}}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$comment->created_at->format('d-m-Y')}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center justify-center space-x-4">
                                <div class="flex space-x-2">
                                    <form action="{{route('admin.comments.delete')}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="commentaire_id" value="{{$comment->id}}">
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');" title="Supprimer">
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
            
            <div class=" mt-6 mx-6">
                {{ $comments->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Code pour filtrer les commentaires par statut
        const filterStatus = document.getElementById('filter-status');
        if (filterStatus) {
            filterStatus.addEventListener('change', function() {
                // Implémenter la logique de filtrage ici
                console.log('Filtrer par:', this.value);
            });
        }
    });
</script>
@endsection
