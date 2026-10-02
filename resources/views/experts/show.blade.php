@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('experts.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à la liste des experts
        </a>
    </div>

    <div class="bg-white rounded-3xl shadow-md overflow-hidden">
        <!-- En-tête du profil -->
        <div class="relative">
            @if($expert->type == 'agricole')
            <div class="h-48" style="background-image: url('{{ asset('images/agricole-banner.jpg') }}'); background-size: cover; background-position: center;"></div>
            @elseif($expert->type == 'veterinaire')
            <div class="h-48" style="background-image: url('{{ asset('images/veterinaire-banner.jpg') }}'); background-size: cover; background-position: center;"></div>
            @else
            <div class="h-48 bg-gradient-to-r from-green-500 to-green-700"></div>
            @endif
            <div class="absolute bottom-0 left-0 w-full transform translate-y-1/2 px-6 flex items-end">
                <div class="relative">
                    <img src="{{$expert->photo}}" alt="{{$expert->nom}} {{$expert->prenom}}" class="w-32 h-32 rounded-full border-4 border-white object-cover">
                    <div class="absolute bottom-0 right-0 bg-white rounded-full p-1 border-2 border-white">
                        <span class="flex h-5 w-5 rounded-full "></span>
                    </div>
                </div>
                <div class="ml-4 pb-4">
                    <h1 class="text-3xl font-bold text-white"></h1>
                    <div class="flex items-center mt-1">
                        <span class="bg-white px-3 py-1 rounded-full text-sm font-medium ">
                           {{$expert->prenom}} {{$expert->nom}}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu du profil -->
        <div class="mt-20 p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Colonne de gauche -->
                <div class="lg:col-span-2">

                    @if($expert->about != '' || $expert->about != 'non spécifié')
                    @else
                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">À propos</h2>
                        <p class="text-gray-600">{{$expert->about}}</p>
                    </div>
                    @endif


                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Adresse</h2>
                        <div class="flex flex-wrap gap-2">
                            {{$expert->adresse}}
                        </div>
                    </div>

                    
                </div>

                <!-- Colonne de droite -->
                @if($expert->type == 'agricole')
                    <div>
                        <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Réserver une consultation</h3>
                            <div class="mb-4">
                                @if($agricole->prix_deplacement == 0)
                                <p class="text-gray-700 font-medium text-lg">Gratuit</p>
                                @else
                                <p class="text-gray-700 font-medium text-lg">{{$agricole->prix_deplacement}} DH</p>
                                <p class="text-gray-500 text-sm">par consultation</p>
                                @endif
                            </div>
                            <form action="{{route('rendezVous.create')}}" method="get">
                                <input type="hidden" name="expert_id" value="{{$expert->id}}">
                                <button type="submit" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                    Prendre rendez-vous
                                </button>
                            </form>
                            <button class="block w-full mt-3 border border-green-600 text-green-600 hover:bg-green-50 text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                Contacter l'expert
                            </button>
                        </div>
                    </div>
                @elseif($expert->type == 'veterinaire')
                <div>
                        <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Réserver une consultation</h3>
                            <div class="mb-4">
                                @if($veterinaire->prix_deplacement == 0)
                                <p class="text-gray-700 font-medium text-lg">Gratuit</p>
                                @else
                                <p class="text-gray-700 font-medium text-lg">{{$veterinaire->prix_deplacement}} DH</p>
                                <p class="text-gray-500 text-sm">par consultation</p>
                                @endif
                            </div>
                            
                             <form action="{{route('rendezVous.create')}}" method="get">
                                <input type="hidden" name="expert_id" value="{{$expert->id}}">
                                <button type="submit" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                    Prendre rendez-vous
                                </button>
                            </form>
                            <button class="block w-full mt-3 border border-green-600 text-green-600 hover:bg-green-50 text-center font-medium py-3 px-4 rounded-md transition duration-300">
                                Contacter l'expert
                            </button>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="font-display text-2xl font-extrabold text-forest mb-2">Avis sur cet expert @if($expert->verifie)<span class="ml-2 text-xs px-2 py-1 rounded-full bg-sky-100 text-sky-700 align-middle"><i class="fas fa-badge-check mr-1"></i>Vérifié</span>@endif</h2>
        <div class="mb-6">@include('components.stars', ['note' => $avgNote ?? 0, 'count' => $nbReviews ?? 0])</div>
        @if(session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
            <p class="text-sm text-green-700">{{ session('success') }}</p>
        </div>
        @endif
        @if($errors->any())
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
            <ul class="list-disc pl-5 text-sm text-red-700">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
        </div>
        @endif
        @auth
        <form action="{{ route('experts.review.store') }}" method="POST" class="bg-sand rounded-3xl p-6 mb-8">
            @csrf
            <input type="hidden" name="expert_id" value="{{ $expert->id }}">
            <h3 class="font-display font-bold text-forest mb-3">{{ $myReview ? 'Modifier votre avis' : 'Noter cet expert' }}</h3>
            <div class="flex items-center gap-3 mb-3">
                <label for="note" class="text-sm font-medium text-gray-700">Note</label>
                <select id="note" name="note" class="px-4 py-2 border border-gray-300 input-eco" required>
                    @for($i = 5; $i >= 1; $i--)
                    <option value="{{ $i }}" {{ ($myReview->note ?? 5) == $i ? 'selected' : '' }}>{{ $i }} ★</option>
                    @endfor
                </select>
            </div>
            <textarea name="commentaire" rows="3" placeholder="Votre retour d'expérience (optionnel)" class="w-full px-4 py-2 border border-gray-300 input-eco">{{ old('commentaire', $myReview->commentaire ?? '') }}</textarea>
            <button type="submit" class="mt-3 px-6 py-2 bg-forest hover:bg-leaf text-white text-sm font-display font-bold rounded-full">Publier</button>
        </form>
        @else
        <p class="mb-8 text-sm text-gray-600"><a href="{{ route('login') }}" class="text-leaf font-semibold hover:underline">Connectez-vous</a> pour noter cet expert.</p>
        @endauth
        @if($reviews->isEmpty())
        <p class="text-gray-500">Aucun avis pour le moment.</p>
        @else
        <ul class="space-y-4">
            @foreach($reviews as $r)
            <li class="border border-gray-100 rounded-2xl p-5">
                <div class="flex items-center justify-between mb-2">
                    <p class="font-semibold text-gray-800">{{ $r->clientUser->prenom ?? '' }} {{ $r->clientUser->nom ?? '' }}</p>
                    @include('components.stars', ['note' => $r->note])
                </div>
                @if($r->commentaire)<p class="text-gray-600 text-sm">{{ $r->commentaire }}</p>@endif
                <p class="text-xs text-gray-400 mt-2">{{ $r->created_at ? $r->created_at->format('d/m/Y') : '' }}</p>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endsection
