@extends('farm.layout', ['navActive' => 'inputs'])

@section('farm_content')
<h2 class="text-xl font-bold text-gray-800 mb-6">Nouvel intrant</h2>
<div class="bg-white rounded-lg shadow-md p-8 max-w-2xl">
    <form action="{{ route('farm.inputs.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
            <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Ex : Engrais NPK 15-15-15" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <select name="type" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    @foreach(['engrais' => 'Engrais', 'pesticide' => 'Pesticide', 'semence' => 'Semence', 'carburant' => 'Carburant', 'aliment' => 'Aliment bétail', 'autre' => 'Autre'] as $k => $label)
                    <option value="{{ $k }}" {{ old('type') == $k ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Unité</label>
                <select name="unite" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    @foreach(['kg', 'g', 'L', 'T', 'sac', 'bidon', 'pièce'] as $u)
                    <option value="{{ $u }}" {{ old('unite', 'kg') == $u ? 'selected' : '' }}>{{ $u }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Stock initial</label>
                <input type="number" step="0.01" name="quantite_stock" value="{{ old('quantite_stock', 0) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Seuil d'alerte</label>
                <input type="number" step="0.01" name="seuil_alerte" value="{{ old('seuil_alerte', 0) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Prix unitaire (DH)</label>
                <input type="number" step="0.01" name="prix_unitaire" value="{{ old('prix_unitaire', 0) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Ajouter au stock</button>
            <a href="{{ route('farm.inputs.index') }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-md hover:bg-gray-200">Annuler</a>
        </div>
    </form>
</div>
@endsection
