@extends('farm.layout', ['navActive' => 'workers'])

@section('farm_content')
<h2 class="text-xl font-bold text-gray-800 mb-6">{{ isset($worker) ? 'Modifier l’ouvrier' : 'Nouvel ouvrier' }}</h2>
<div class="bg-white rounded-3xl shadow-md p-8 max-w-2xl">
    <form action="{{ isset($worker) ? route('farm.workers.update') : route('farm.workers.store') }}" method="POST" class="space-y-5">
        @csrf
        @if(isset($worker))
        @method('PUT')
        <input type="hidden" name="id" value="{{ $worker->id }}">
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                <input type="text" name="prenom" value="{{ old('prenom', $worker->prenom ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                <input type="text" name="nom" value="{{ old('nom', $worker->nom ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                <input type="text" name="telephone" value="{{ old('telephone', $worker->telephone ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">CIN</label>
                <input type="text" name="cin" value="{{ old('cin', $worker->cin ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Poste</label>
                <select name="poste" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    @foreach(['ouvrier' => 'Ouvrier', 'ouvriere' => 'Ouvrière', 'chef_equipe' => "Chef d'équipe", 'chauffeur' => 'Chauffeur', 'magasinier' => 'Magasinier', 'technicien' => 'Technicien'] as $k => $label)
                    <option value="{{ $k }}" {{ old('poste', $worker->poste ?? 'ouvrier') == $k ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Salaire journalier (DH)</label>
                <input type="number" step="0.01" name="salaire_journalier" value="{{ old('salaire_journalier', $worker->salaire_journalier ?? 100) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date d'embauche</label>
                <input type="date" name="date_embauche" value="{{ old('date_embauche', isset($worker->date_embauche) && $worker->date_embauche ? $worker->date_embauche->format('Y-m-d') : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <div class="flex items-end pb-2">
                <label class="flex items-center text-sm text-gray-700">
                    <input type="checkbox" name="actif" value="1" {{ old('actif', $worker->actif ?? true) ? 'checked' : '' }} class="h-4 w-4 text-primary-600 rounded mr-2"> Ouvrier actif
                </label>
            </div>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">{{ isset($worker) ? 'Enregistrer' : 'Ajouter' }}</button>
            <a href="{{ route('farm.workers.index') }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-md hover:bg-gray-200">Annuler</a>
        </div>
    </form>
</div>
@endsection
