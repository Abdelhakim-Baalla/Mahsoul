@extends('farm.layout', ['navActive' => 'caisse'])

@section('farm_content')
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow-md p-6"><p class="text-sm text-gray-600">Recettes totales</p><p class="text-2xl font-bold text-green-600">+{{ number_format($recettes, 0, ',', ' ') }} DH</p></div>
    <div class="bg-white rounded-lg shadow-md p-6"><p class="text-sm text-gray-600">Dépenses totales</p><p class="text-2xl font-bold text-red-600">−{{ number_format($depenses, 0, ',', ' ') }} DH</p></div>
    <div class="bg-white rounded-lg shadow-md p-6 flex items-center justify-between">
        <div><p class="text-sm text-gray-600">Solde</p><p class="text-2xl font-bold {{ ($recettes - $depenses) >= 0 ? 'text-green-600' : 'text-red-600' }}">{{ number_format($recettes - $depenses, 0, ',', ' ') }} DH</p></div>
        <a href="{{ route('farm.caisse.export') }}" class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-200"><i class="fas fa-download mr-2"></i>CSV</a>
    </div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Nouvelle transaction</h3>
        <form action="{{ route('farm.caisse.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <select name="type" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    <option value="recette">Recette (+)</option>
                    <option value="depense">Dépense (−)</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                <select name="categorie" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                    @foreach(['vente' => 'Vente', 'salaires' => 'Salaires', 'intrants' => 'Intrants', 'carburant' => 'Carburant', 'equipement' => 'Équipement', 'prestation' => 'Prestation', 'transport' => 'Transport', 'autre' => 'Autre'] as $k => $label)
                    <option value="{{ $k }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Montant (DH)</label>
                    <input type="number" step="0.01" name="montant" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" name="date" value="{{ date('Y-m-d') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <input type="text" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <button type="submit" class="w-full px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Enregistrer</button>
        </form>
    </div>
    <div class="lg:col-span-2 bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 border-b border-gray-200"><h3 class="text-lg font-bold text-gray-800">Historique</h3></div>
        @if($transactions->isEmpty())
        <p class="p-6 text-gray-500">Aucune transaction.</p>
        @else
        <ul class="divide-y divide-gray-200">
            @foreach($transactions as $tx)
            <li class="p-4 flex items-center justify-between">
                <div>
                    <p class="font-semibold text-gray-800">{{ $tx->description ?? $tx->categorie }}</p>
                    <p class="text-xs text-gray-500">{{ $tx->date ? $tx->date->format('d/m/Y') : '' }} — {{ $tx->categorie }}</p>
                </div>
                <div class="flex items-center gap-3">
                    <p class="font-bold {{ $tx->type === 'recette' ? 'text-green-600' : 'text-red-600' }}">{{ $tx->type === 'recette' ? '+' : '−' }}{{ number_format($tx->montant, 0, ',', ' ') }} DH</p>
                    <form action="{{ route('farm.caisse.delete') }}" method="POST" onsubmit="return confirm('Supprimer ?')">
                        @csrf
                        <input type="hidden" name="id" value="{{ $tx->id }}">
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endsection
