@extends('farm.layout', ['navActive' => 'invoices'])

@section('farm_content')
<a href="{{ route('farm.invoices.index') }}" class="text-primary-600 hover:underline text-sm">← Toutes les factures</a>
<div class="mt-4 bg-white rounded-3xl shadow-md overflow-hidden max-w-3xl">
    <div class="p-8 border-b border-gray-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <p class="text-sm text-gray-500 uppercase">Facture</p>
            <h2 class="text-3xl font-mono font-bold text-primary-700">{{ $invoice->numero }}</h2>
            <p class="mt-1 text-gray-600">Client : <strong>{{ $invoice->client_nom }}</strong></p>
            <p class="text-sm text-gray-500">Échéance : {{ $invoice->date_echeance ? $invoice->date_echeance->format('d/m/Y') : '—' }}</p>
        </div>
        <button onclick="window.print()" class="px-5 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700"><i class="fas fa-print mr-2"></i>Imprimer</button>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Qté</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">P.U.</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Total</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($invoice->items as $item)
            <tr>
                <td class="px-6 py-4 text-sm text-gray-800">{{ $item->description }}</td>
                <td class="px-6 py-4 text-sm text-right">{{ $item->quantite }}</td>
                <td class="px-6 py-4 text-sm text-right">{{ number_format($item->prix_unitaire, 2, ',', ' ') }} DH</td>
                <td class="px-6 py-4 text-sm text-right font-semibold">{{ number_format($item->quantite * $item->prix_unitaire, 2, ',', ' ') }} DH</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-6 bg-gray-50 flex justify-end">
        <div class="text-right space-y-1">
            <p class="text-sm text-gray-600">HT : {{ number_format($invoice->montant_ht, 2, ',', ' ') }} DH</p>
            <p class="text-sm text-gray-600">TVA ({{ $invoice->tva }}%) : {{ number_format($invoice->montant_ttc - $invoice->montant_ht, 2, ',', ' ') }} DH</p>
            <p class="text-xl font-bold text-gray-800">TTC : {{ number_format($invoice->montant_ttc, 2, ',', ' ') }} DH</p>
        </div>
    </div>
    <div class="p-6 border-t border-gray-200">
        <form action="{{ route('farm.invoices.status') }}" method="POST" class="flex items-center gap-3">
            @csrf
            <input type="hidden" name="id" value="{{ $invoice->id }}">
            <label class="text-sm font-medium text-gray-700">Statut :</label>
            <select name="statut" class="px-3 py-2 border border-gray-300 rounded-md text-sm">
                @foreach(['brouillon' => 'Brouillon', 'envoyee' => 'Envoyée', 'payee' => 'Payée', 'annulee' => 'Annulée'] as $k => $label)
                <option value="{{ $k }}" {{ $invoice->statut == $k ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
            <button type="submit" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700">OK</button>
        </form>
    </div>
</div>
@endsection
