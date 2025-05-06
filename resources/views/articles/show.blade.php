@if (Auth::check())
@extends('layouts.app')

@section('title', 'Techniques d\'irrigation modernes pour économiser l\'eau')

@section('content')
<section class="py-12 diagonal-box bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-gray-600 mb-6">
            <a href="{{ url('formation') }}" class="hover:text-primary-600 hover:underline">Articles</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-900 font-medium">{{$article->titre}}</span>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Article -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- Main Image -->
                    <div class="relative h-80 w-full">
                        <img src="{{$article->photo}}" alt="{{$article->titre}}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>

                    <!-- Article Content -->
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{$article->titre}}</h1>

                        <!-- Metadata -->
                        <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-gray-600">
                            <div class="flex items-center">
                                <img src="{{$Utilisateuradmin->photo}}" alt="{{$Utilisateuradmin->prenom}} {{$Utilisateuradmin->nom}}" class="w-8 h-8 rounded-full mr-2">
                                <div class="flex gap-1">
                                    <p>Par</p>
                                    <p class="text-primary-600 hover:underline">{{$Utilisateuradmin->prenom}} {{$Utilisateuradmin->nom}}</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 012-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{$article->created_at->format('d/m/Y')}}</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">{{$article->categorie}}</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="prose max-w-none text-gray-700 break-words">
                            <div class="overflow-hidden text-ellipsis">{!! $article->contenu !!}</div>
                        </div>

                        <!-- Comments Section -->
                        <div class="mt-10 border-t pt-8">
                            <h3 class="text-xl font-semibold mb-6">Commentaires ({{ $commentaires->count() }})</h3>

                            <!-- Comment Form -->
                            <div class="mb-8 bg-gray-50 p-4 rounded-xl">
                                <h4 class="text-lg font-medium mb-4">Laisser un commentaire</h4>
                                <form action="{{route('articles.addComment')}}" method="get" class="space-y-4" onsubmit="return validateCommentForm()">
                                    @csrf
                                    <input type="hidden" name="utilisateur" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="article_id" value="{{$article->id}}">
                                    <div class="mb-4">
                                        <textarea rows="4" name="commentaire" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Votre commentaire..."></textarea>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit" class="px-6 py-2 bg-primary-600 text-white rounded-xl hover:bg-primary-700 transition font-medium">Publier</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Comments List -->
                            <div class="space-y-6">
                                @foreach($commentaires->take(5) as $commentaire)
                                <div class="bg-gray-20 p-4 rounded-xl group">
                                    <div class="flex items-start gap-4">
                                        <img src="{{$commentaire->utilisateur->photo}}" alt="{{$commentaire->utilisateur->nom}} {{$commentaire->utilisateur->prenom}}" class="w-10 h-10 rounded-full">
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between mb-1">
                                                <div class="flex items-center gap-2">
                                                    <h5 class="font-medium">{{$commentaire->utilisateur->nom}} {{$commentaire->utilisateur->prenom}}</h5>
                                                    @if($commentaire->utilisateur->type == 'admin' && $Utilisateuradmin->id == $commentaire->utilisateur->id)
                                                    <span class="text-xs text-green-500 bg-green-100 px-2 py-1 rounded-full">Auteur</span>
                                                    @elseif($commentaire->utilisateur->type == 'agricole')
                                                    <span class="text-xs text-blue-500 bg-blue-100 px-2 py-1 rounded-full">Agricole</span>
                                                    @elseif($commentaire->utilisateur->type == 'veterinaire')
                                                    <span class="text-xs text-yellow-500 bg-yellow-100 px-2 py-1 rounded-full">veterinaire</span>
                                                    @elseif($commentaire->utilisateur->type == 'client')
                                                    <span class="text-xs text-red-500 bg-red-100 px-2 py-1 rounded-full">Client</span>
                                                    @elseif($commentaire->utilisateur->type == 'admin')
                                                    <span class="text-xs text-purple-500 bg-purple-100 px-2 py-1 rounded-full">Admin</span>
                                                    @endif
                                                </div>
                                                <span class="text-sm text-gray-500">{{$commentaire->created_at->format('d-m-Y H:i')}}</span>
                                            </div>
                                            <p class="text-gray-700">{{$commentaire->contenu}}</p>
                                            @if($commentaire->utilisateur->id == Auth::user()->id || Auth::user()->type == 'admin')
                                            <div class="flex items-center gap-2 text-xs mt-2">
                                                <!-- Edit Comment -->
                                                <form action="{{route('articles.editComment')}}" method="get">
                                                    @csrf
                                                    <input type="hidden" name="commentaire_id" value="{{$commentaire->id}}">
                                                    <input type="hidden" name="contenu" value="{{$commentaire->contenu}}">
                                                    <input type="hidden" name="article_id" value="{{$article->id}}">
                                                    <button type="submit" class="text-blue-500 hover:underline">
                                                        Modifier
                                                    </button>
                                                </form>
                                                <!-- Delete Comment -->
                                                <form action="{{route('articles.deleteComment')}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="commentaire_id" value="{{$commentaire->id}}">
                                                    <button type="submit" class="text-red-500 hover:underline">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                @if($commentaires->count() > 5)
                                <div class="text-center">
                                    <button id="showAllCommentsBtn" class="px-6 py-2 bg-primary-600 text-white rounded-xl hover:bg-primary-700 transition font-medium">Afficher tous les commentaires</button>
                                </div>
                                @endif
                            </div>

                            <div id="allCommentsModal" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden">
                                <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl w-full">
                                    <div class="flex justify-between items-center mb-4">
                                        <h3 class="text-xl font-semibold">Tous les commentaires</h3>
                                        <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700">&times;</button>
                                    </div>
                                    <div class="space-y-6 max-h-96 overflow-y-auto">
                                        @foreach($commentaires as $commentaire)
                                        <div class="bg-gray-50 p-4 rounded-xl group">
                                            <div class="flex items-start gap-4">
                                                <img src="{{$commentaire->utilisateur->photo}}" alt="{{$commentaire->utilisateur->nom}} {{$commentaire->utilisateur->prenom}}" class="w-10 h-10 rounded-full">
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <div class="flex items-center gap-2">
                                                            <h5 class="font-medium">{{$commentaire->utilisateur->nom}} {{$commentaire->utilisateur->prenom}}</h5>
                                                            @if($commentaire->utilisateur->type == 'admin' && $Utilisateuradmin->id == $commentaire->utilisateur->id)
                                                            <span class="text-xs text-green-500 bg-green-100 px-2 py-1 rounded-full">Auteur</span>
                                                            @elseif($commentaire->utilisateur->type == 'agricole')
                                                            <span class="text-xs text-blue-500 bg-blue-100 px-2 py-1 rounded-full">Agricole</span>
                                                            @elseif($commentaire->utilisateur->type == 'veterinaire')
                                                            <span class="text-xs text-yellow-500 bg-yellow-100 px-2 py-1 rounded-full">veterinaire</span>
                                                            @elseif($commentaire->utilisateur->type == 'client')
                                                            <span class="text-xs text-red-500 bg-red-100 px-2 py-1 rounded-full">Client</span>
                                                            @elseif($commentaire->utilisateur->type == 'admin')
                                                            <span class="text-xs text-purple-500 bg-purple-100 px-2 py-1 rounded-full">Admin</span>
                                                            @endif
                                                        </div>
                                                        <span class="text-sm text-gray-500">{{$commentaire->created_at->format('d-m-Y H:i')}}</span>
                                                    </div>
                                                    <p class="text-gray-700">{{$commentaire->contenu}}</p>
                                                    @if($commentaire->utilisateur->id == Auth::user()->id)
                                                    <div class="flex items-center gap-2 text-xs mt-2">
                                                        <!-- Modifier le commentaire -->
                                                        <form action="{{route('articles.editComment')}}" method="get">
                                                            @csrf
                                                            <input type="hidden" name="commentaire_id" value="{{$commentaire->id}}">
                                                            <input type="hidden" name="contenu" value="{{$commentaire->contenu}}">
                                                            <button type="submit" class="text-blue-500 hover:underline">
                                                                Modifier
                                                            </button>
                                                        </form>
                                                        <!-- Supprimer le commentaire -->
                                                        <form action="{{route('articles.deleteComment')}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="commentaire_id" value="{{$commentaire->id}}">
                                                            <button type="submit" class="text-red-500 hover:underline">
                                                                Supprimer
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.getElementById('showAllCommentsBtn').addEventListener('click', function() {
                                    document.getElementById('allCommentsModal').classList.remove('hidden');
                                });

                                document.getElementById('closeModalBtn').addEventListener('click', function() {
                                    document.getElementById('allCommentsModal').classList.add('hidden');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-1/3 space-y-6">
                <!-- Auteur -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">À propos de l'auteur</h3>
                    <div class="flex items-center gap-4 mb-4">
                        <img src="{{$Utilisateuradmin->photo}}" alt="{{$Utilisateuradmin->nom}} {{$Utilisateuradmin->prenom}}" class="w-16 h-16 rounded-full">
                        <div>
                            <h4 class="font-medium">{{$Utilisateuradmin->prenom}} {{$Utilisateuradmin->nom}}</h4>
                            <p class="text-sm text-gray-600">{{$admin->domaines_expertise}}</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">{{$admin->about}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/comment-validation.js') }}"></script>
@endsection
@else
<script>
    window.location.href = "{{ url('login') }}";
</script>
@endif
