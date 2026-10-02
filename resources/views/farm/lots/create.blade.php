@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-10">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-primary-800 mb-8">Nouveau lot de récolte</h1>
        <div class="bg-white rounded-3xl shadow-md p-8">
            <form action="{{ route('farm.lots.store') }}" method="POST" class="space-y-6">
                @csrf
                @if($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                    <ul class="list-disc pl-5 text-sm text-red-700 space-y-1">
                        @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                    </ul>
                </div>
                @endif
                <div>
                    <label for="parcel_id" class="block text-sm font-medium text-gray-700 mb-1">Parcelle d'origine</label>
                    <select id="parcel_id" name="parcel_id" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500" required>
                        <option value="">— Choisir —</option>
                        @foreach($parcels as $p)
                        <option value="{{ $p->id }}" {{ old('parcel_id') == $p->id ? 'selected' : '' }}>{{ $p->nom }} ({{ $p->culture ?? '—' }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="produit" class="block text-sm font-medium text-gray-700 mb-1">Produit</label>
                        <input type="text" id="produit" name="produit" value="{{ old('produit') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500" required>
                    </div>
                    <div>
                        <label for="date_recolte" class="block text-sm font-medium text-gray-700 mb-1">Date de récolte</label>
                        <input type="date" id="date_recolte" name="date_recolte" value="{{ old('date_recolte', date('Y-m-d')) }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="quantite" class="block text-sm font-medium text-gray-700 mb-1">Quantité</label>
                        <input type="number" step="0.01" id="quantite" name="quantite" value="{{ old('quantite') }}" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500" required>
                    </div>
                    <div>
                        <label for="unite" class="block text-sm font-medium text-gray-700 mb-1">Unité</label>
                        <select id="unite" name="unite" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                            @foreach(['kg', 'T', 'caisse', 'sac', 'L', 'pièce'] as $u)
                            <option value="{{ $u }}" {{ old('unite', 'kg') == $u ? 'selected' : '' }}>{{ $u }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="calibrage" class="block text-sm font-medium text-gray-700 mb-1">Calibrage</label>
                        <input type="text" id="calibrage" name="calibrage" value="{{ old('calibrage') }}" placeholder="Ex : 40-60mm" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    <div>
                        <label for="destination" class="block text-sm font-medium text-gray-700 mb-1">Destination</label>
                        <select id="destination" name="destination" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                            <option value="local" {{ old('destination') == 'local' ? 'selected' : '' }}>Marché local</option>
                            <option value="export" {{ old('destination') == 'export' ? 'selected' : '' }}>Export</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="client_nom" class="block text-sm font-medium text-gray-700 mb-1">Client / Station de conditionnement</label>
                    <input type="text" id="client_nom" name="client_nom" value="{{ old('client_nom') }}" placeholder="Ex : Wazo Packaging" class="w-full px-4 py-2 border border-gray-300 input-eco focus:ring-primary-500 focus:border-primary-500">
                </div>
                <button type="submit" class="w-full bg-forest hover:bg-leaf text-white font-medium py-3 px-4 rounded-md">Créer le lot (code auto)</button>
            </form>
        </div>
    </div>
</div>
@endsection
