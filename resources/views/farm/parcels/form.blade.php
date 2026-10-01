@extends('farm.layout', ['navActive' => 'parcels'])

@section('farm_content')
<h2 class="text-xl font-bold text-gray-800 mb-6">{{ isset($parcel) ? 'Modifier la parcelle' : 'Nouvelle parcelle' }}</h2>
<div class="bg-white rounded-lg shadow-md p-8 max-w-2xl">
    <form action="{{ isset($parcel) ? route('farm.parcels.update') : route('farm.parcels.store') }}" method="POST" class="space-y-5">
        @csrf
        @if(isset($parcel))
        @method('PUT')
        <input type="hidden" name="id" value="{{ $parcel->id }}">
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                <input type="text" name="nom" value="{{ old('nom', $parcel->nom ?? '') }}" placeholder="Ex : Parcelle P4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Superficie (ha)</label>
                <input type="number" step="0.01" name="superficie" value="{{ old('superficie', $parcel->superficie ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Culture</label>
                <input type="text" name="culture" value="{{ old('culture', $parcel->culture ?? '') }}" placeholder="Ex : Tomate" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Variété</label>
                <input type="text" name="variete" value="{{ old('variete', $parcel->variete ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date de semis</label>
                <input type="date" name="date_semis" value="{{ old('date_semis', isset($parcel->date_semis) && $parcel->date_semis ? $parcel->date_semis->format('Y-m-d') : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                <select name="statut" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    @foreach(['active' => 'Active', 'jachere' => 'Jachère', 'preparation' => 'En préparation'] as $k => $label)
                    <option value="{{ $k }}" {{ old('statut', $parcel->statut ?? 'active') == $k ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">{{ isset($parcel) ? 'Enregistrer' : 'Ajouter' }}</button>
            <a href="{{ route('farm.parcels.index') }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-md hover:bg-gray-200">Annuler</a>
        </div>
    </form>
</div>
@endsection
