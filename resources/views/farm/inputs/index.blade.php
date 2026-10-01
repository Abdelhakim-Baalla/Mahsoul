@extends('farm.layout', ['navActive' => 'inputs'])

@section('farm_content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-bold text-gray-800">Stocks intrants</h2>
    <a href="{{ route('farm.inputs.create') }}" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700"><i class="fas fa-plus mr-2"></i>Ajouter un intrant</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Intrant</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Prix unit.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">État</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($inputs as $input)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $input->nom }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $input->type }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $input->quantite_stock }} {{ $input->unite }} <span class="text-gray-400">(seuil {{ $input->seuil_alerte }})</span></td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $input->prix_unitaire }} DH</td>
                    <td class="px-6 py-4">@if($input->quantite_stock <= $input->seuil_alerte)<span class="text-xs px-2 py-1 rounded-full bg-red-100 text-red-800">Stock bas</span>@else<span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-800">OK</span>@endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Enregistrer une utilisation</h3>
        <form action="{{ route('farm.inputs.use') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Intrant</label>
                <select name="input_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                    <option value="">— Choisir —</option>
                    @foreach($inputs as $input)
                    <option value="{{ $input->id }}">{{ $input->nom }} ({{ $input->quantite_stock }} {{ $input->unite }})</option>
                    @endforeach
                </select>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Quantité</label>
                    <input type="number" step="0.01" name="quantite" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" name="date" value="{{ date('Y-m-d') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Parcelle</label>
                    <select name="parcel_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                        <option value="">— Aucune —</option>
                        @foreach($parcels as $p)
                        <option value="{{ $p->id }}">{{ $p->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lot (traçabilité)</label>
                    <select name="lot_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                        <option value="">— Aucun —</option>
                        @foreach($lots as $l)
                        <option value="{{ $l->id }}">{{ $l->code }} — {{ $l->produit }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Note</label>
                <input type="text" name="note" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Enregistrer (décrémente le stock)</button>
        </form>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 border-b border-gray-200"><h3 class="text-lg font-bold text-gray-800">Dernières utilisations</h3></div>
        <ul class="divide-y divide-gray-200">
            @forelse($usages as $u)
            <li class="p-4 text-sm">
                <p class="font-semibold text-gray-800">{{ $u->input->nom ?? '—' }} — {{ $u->quantite }} {{ $u->input->unite ?? '' }}</p>
                <p class="text-gray-500">{{ $u->date ? $u->date->format('d/m/Y') : '' }} @if($u->parcel) — {{ $u->parcel->nom }} @endif @if($u->lot) — lot {{ $u->lot->code }} @endif</p>
            </li>
            @empty
            <li class="p-6 text-gray-500 text-sm">Aucune utilisation enregistrée.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
