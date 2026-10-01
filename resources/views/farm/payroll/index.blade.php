@extends('farm.layout', ['navActive' => 'payroll'])

@section('farm_content')
<div class="flex flex-col sm:flex-row sm:items-center gap-4 mb-6">
    <h2 class="text-xl font-bold text-gray-800">Paie mensuelle</h2>
    <form action="{{ route('farm.payroll.index') }}" method="GET" class="flex gap-2">
        <input type="month" name="mois" value="{{ $mois }}" class="px-4 py-2 border border-gray-300 rounded-md">
        <button type="submit" class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-200">Afficher</button>
    </form>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ouvrier</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Salaire/j</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Jours présents</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Primes</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Brut (DH)</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($rows as $r)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $r['worker']->prenom }} {{ $r['worker']->nom }}</td>
                    <td class="px-6 py-4 text-sm text-right">{{ $r['worker']->salaire_journalier }}</td>
                    <td class="px-6 py-4 text-sm text-right">{{ $r['jours'] }}</td>
                    <td class="px-6 py-4 text-sm text-right">{{ number_format($r['primes'], 0, ',', ' ') }}</td>
                    <td class="px-6 py-4 text-sm text-right font-bold">{{ number_format($r['brut'], 0, ',', ' ') }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gray-50">
                <tr>
                    <td colspan="4" class="px-6 py-4 text-right font-bold text-gray-800">Total {{ $mois }}</td>
                    <td class="px-6 py-4 text-right font-bold text-primary-700 text-lg">{{ number_format($total, 0, ',', ' ') }} DH</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<form action="{{ route('farm.payroll.book') }}" method="POST" onsubmit="return confirm('Comptabiliser la paie de {{ $mois }} en caisse ?')">
    @csrf
    <input type="hidden" name="mois" value="{{ $mois }}">
    <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700"><i class="fas fa-cash-register mr-2"></i>Comptabiliser en caisse (réf. PAIE-{{ $mois }})</button>
</form>
@endsection
