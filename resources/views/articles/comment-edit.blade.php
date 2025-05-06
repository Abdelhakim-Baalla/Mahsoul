@extends('layouts.app')

@section('title', 'Modifier un commentaire')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-8">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Modifier le commentaire</h1>

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-700">Article : {{ $validated['article']->titre }}</h2>
            <p class="text-sm text-gray-600 mb-4">Publié le : {{ $validated['article']->created_at->format('d/m/Y') }}</p>
            @if($validated['article']->photo)
            <div class="mb-4">
                <img src="{{ $validated['article']->photo }}" alt="Photo de l'article" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
            @endif
            <p class="text-gray-700">{{ $validated['article']->description }}</p>
        </div>

        @if($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-lg shadow-md mb-6">
            <ul class="list-disc pl-5 text-red-700">
                @foreach ($errors->all() as $error)
                <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('articles.editComment.submit') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <input type="hidden" name="commentaire_id" value="{{ $validated['commentaire_id'] }}">
            <input type="hidden" name="article_id" value="{{ $validated['article']->id }}">
            <div>
                <label for="contenu" class="block text-sm font-medium text-gray-700 mb-2">Contenu du commentaire</label>
                <textarea id="contenu" name="contenu" rows="4" class="mt-1 block w-full border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-primary-500 focus:border-primary-500 shadow-sm" required>{{ $validated['contenu'] }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ url()->previous() }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 bg-gray-100 hover:bg-gray-200 transition duration-200">Annuler</a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-lg shadow hover:bg-primary-700 transition duration-200">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection