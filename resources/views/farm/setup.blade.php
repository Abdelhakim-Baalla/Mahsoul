@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-md overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <i class="fas fa-tractor text-primary-600 text-4xl"></i>
                    <h1 class="mt-4 text-2xl font-bold text-gray-800">Créer mon exploitation</h1>
                    <p class="mt-2 text-gray-600">Première étape pour piloter votre ferme avec Mahsoul Farm OS</p>
                </div>
                <form action="{{ route('farm.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom de l'exploitation</label>
                        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500" required>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700 mb-1">Région</label>
                            <input type="text" id="region" name="region" value="{{ old('region') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div>
                            <label for="superficie_totale" class="block text-sm font-medium text-gray-700 mb-1">Superficie totale (ha)</label>
                            <input type="number" step="0.01" id="superficie_totale" name="superficie_totale" value="{{ old('superficie_totale') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                        </div>
                    </div>
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" value="{{ old('telephone') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    <div>
                        <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                        <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    @if($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                        <ul class="list-disc pl-5 text-sm text-red-700 space-y-1">
                            @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                        </ul>
                    </div>
                    @endif
                    <button type="submit" class="w-full bg-forest hover:bg-leaf text-white font-medium py-3 px-4 rounded-md">Créer l'exploitation</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
