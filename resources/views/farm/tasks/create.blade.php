@extends('farm.layout', ['navActive' => 'tasks'])

@section('farm_content')
<h2 class="text-xl font-bold text-gray-800 mb-6">Nouvelle tâche</h2>
<div class="bg-white rounded-lg shadow-md p-8 max-w-2xl">
    <form action="{{ route('farm.tasks.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
            <input type="text" name="titre" value="{{ old('titre') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">{{ old('description') }}</textarea>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Parcelle</label>
                <select name="parcel_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    <option value="">— Aucune —</option>
                    @foreach($parcels as $p)
                    <option value="{{ $p->id }}" {{ old('parcel_id') == $p->id ? 'selected' : '' }}>{{ $p->nom }} ({{ $p->culture ?? '—' }})</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ouvrier assigné</label>
                <select name="worker_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    <option value="">— Aucun —</option>
                    @foreach($workers as $w)
                    <option value="{{ $w->id }}" {{ old('worker_id') == $w->id ? 'selected' : '' }}>{{ $w->prenom }} {{ $w->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date prévue</label>
                <input type="date" name="date_prevue" value="{{ old('date_prevue', date('Y-m-d')) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Priorité</label>
                <select name="priorite" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    @foreach(['basse' => 'Basse', 'normale' => 'Normale', 'haute' => 'Haute', 'urgente' => 'Urgente'] as $k => $label)
                    <option value="{{ $k }}" {{ old('priorite', 'normale') == $k ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Créer la tâche</button>
            <a href="{{ route('farm.tasks.index') }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-md hover:bg-gray-200">Annuler</a>
        </div>
    </form>
</div>
@endsection
