@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="font-display text-3xl font-extrabold text-forest"><i class="fas fa-barcode mr-2"></i>Lots de récolte — {{ $farm->nom }}</h1>
                <p class="mt-2 text-gray-600">Traçabilité complète : parcelle → intrants → récolte → destination</p>
            </div>
            <a href="{{ route('farm.lots.create') }}" class="inline-block px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                <i class="fas fa-plus mr-2"></i>Nouveau lot
            </a>
            <a href="{{ route('farm.lots.export') }}" class="inline-block px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-md hover:bg-gray-200 ml-2">
                <i class="fas fa-download mr-2"></i>CSV
            </a>
        </div>
        @if(session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
            <p class="text-sm text-green-700">{{ session('success') }}</p>
        </div>
        @endif
        <div class="bg-white rounded-3xl shadow-md overflow-hidden">
            @if($lots->isEmpty())
            <p class="p-10 text-center text-gray-500">Aucun lot enregistré.</p>
            @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Code lot</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Produit</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Parcelle</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Quantité</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($lots as $lot)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-mono font-bold text-primary-700">{{ $lot->code }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $lot->produit }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $lot->parcel->nom ?? '—' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $lot->quantite }} {{ $lot->unite }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $lot->destination }}@if($lot->client_nom) ({{ $lot->client_nom }})@endif</td>
                            <td class="px-6 py-4"><span class="text-xs px-2 py-1 rounded-full bg-primary-50 text-primary-700">{{ $lot->statut }}</span></td>
                            <td class="px-6 py-4"><a href="{{ route('farm.lots.show', ['id' => $lot->id]) }}" class="text-primary-600 hover:underline text-sm font-medium">Fiche passeport</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
