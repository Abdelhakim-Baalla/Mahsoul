@extends('farm.layout', ['navActive' => 'invoices'])

@section('farm_content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-bold text-gray-800">Factures</h2>
    <a href="{{ route('farm.invoices.create') }}" class="px-4 py-2 bg-forest text-white text-sm font-medium rounded-full hover:bg-leaf"><i class="fas fa-plus mr-2"></i>Nouvelle facture</a>
</div>
<div class="bg-white rounded-3xl shadow-md overflow-hidden">
    @if($invoices->isEmpty())
    <p class="p-10 text-center text-gray-500">Aucune facture.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="thead-eco">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">N°</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Montant TTC</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Échéance</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($invoices as $inv)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-mono font-bold text-primary-700">{{ $inv->numero }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $inv->client_nom }}</td>
                    <td class="px-6 py-4 text-sm font-bold text-gray-800">{{ number_format($inv->montant_ttc, 2, ',', ' ') }} DH</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $inv->date_echeance ? $inv->date_echeance->format('d/m/Y') : '—' }}</td>
                    <td class="px-6 py-4"><span class="text-xs px-2 py-1 rounded-full {{ $inv->statut === 'payee' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">{{ $inv->statut }}</span></td>
                    <td class="px-6 py-4"><a href="{{ route('farm.invoices.show', ['id' => $inv->id]) }}" class="text-primary-600 hover:underline text-sm font-medium">Voir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
