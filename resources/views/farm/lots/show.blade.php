@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('farm.lots.index') }}" class="text-primary-600 hover:underline text-sm">← Tous les lots</a>
        <div class="mt-4 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-8 border-b border-gray-200 bg-gradient-to-r from-primary-600 to-primary-700 text-white">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <p class="text-sm uppercase tracking-wide opacity-80">Passeport traçabilité</p>
                        <h1 class="text-3xl font-mono font-bold">{{ $lot->code }}</h1>
                        <p class="mt-2">{{ $lot->produit }} — {{ $lot->quantite }} {{ $lot->unite }}</p>
                    </div>
                    <button onclick="window.print()" class="px-5 py-2 bg-white text-primary-700 font-medium rounded-md hover:bg-primary-50">
                        <i class="fas fa-print mr-2"></i>Imprimer
                    </button>
                </div>
                @if(!empty($qrDataUri))
                <div class="mt-5 flex items-center gap-4 bg-white/10 rounded-lg p-3">
                    <img src="{{ $qrDataUri }}" alt="QR {{ $lot->code }}" class="w-24 h-24 bg-white rounded">
                    <p class="text-sm opacity-90">Scannez pour vérifier ce lot en ligne.<br><span class="font-mono">{{ $lot->code }}</span></p>
                </div>
                @endif
            </div>
            <div class="p-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-xs text-gray-500 uppercase">Exploitation</p>
                    <p class="font-semibold text-gray-800">{{ $farm->nom }} ({{ $farm->region ?? '—' }})</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase">Parcelle d'origine</p>
                    <p class="font-semibold text-gray-800">{{ $lot->parcel->nom ?? '—' }} @if($lot->parcel && $lot->parcel->culture) — {{ $lot->parcel->culture }} {{ $lot->parcel->variete ?? '' }} @endif</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase">Date de récolte</p>
                    <p class="font-semibold text-gray-800">{{ $lot->date_recolte ? $lot->date_recolte->format('d/m/Y') : '—' }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase">Calibrage</p>
                    <p class="font-semibold text-gray-800">{{ $lot->calibrage ?? '—' }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase">Destination</p>
                    <p class="font-semibold text-gray-800">{{ $lot->destination }}@if($lot->client_nom) — {{ $lot->client_nom }}@endif</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase">Statut actuel</p>
                    <form action="{{ route('farm.lots.status') }}" method="POST" class="flex gap-2 mt-1">
                        @csrf
                        <input type="hidden" name="id" value="{{ $lot->id }}">
                        <select name="statut" class="px-3 py-2 border border-gray-300 rounded-md text-sm">
                            @foreach(['recolte' => 'Récolté', 'conditionne' => 'Conditionné', 'expedie' => 'Expédié', 'livre' => 'Livré'] as $k => $label)
                            <option value="{{ $k }}" {{ $lot->statut == $k ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">OK</button>
                    </form>
                </div>
            </div>
            <div class="p-8 border-t border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-flask mr-2 text-primary-600"></i>Intrants utilisés (traçabilité phytosanitaire)</h2>
                @if($lot->inputUsages->isEmpty())
                <p class="text-gray-500 text-sm">Aucun intrant rattaché à ce lot.</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach($lot->inputUsages as $u)
                    <li class="py-3 flex items-center justify-between">
                        <p class="text-sm text-gray-800"><strong>{{ $u->input->nom ?? '—' }}</strong> <span class="text-gray-500">({{ $u->input->type ?? '' }})</span></p>
                        <p class="text-sm text-gray-600">{{ $u->quantite }} {{ $u->input->unite ?? '' }} — {{ $u->date ? $u->date->format('d/m/Y') : '' }}</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            @if(session('success'))
            <div class="m-8 mt-0 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
                <p class="text-sm text-green-700">{{ session('success') }}</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
