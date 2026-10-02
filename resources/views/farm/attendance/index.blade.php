@extends('farm.layout', ['navActive' => 'attendance'])

@section('farm_content')
<h2 class="text-xl font-bold text-gray-800 mb-2">Pointage du jour</h2>
<p class="text-gray-600 mb-6">{{ \Carbon\Carbon::parse($today)->format('d/m/Y') }} — cochez les présents</p>
<div class="bg-white rounded-3xl shadow-md overflow-hidden">
    <form action="{{ route('farm.attendance.store') }}" method="POST">
        @csrf
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Présent</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ouvrier</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Heures</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Prime (DH)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($workers as $i => $w)
                    @php $att = $w->attendances->first(); @endphp
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <input type="checkbox" name="present[{{ $w->id }}]" value="1" {{ (!$att || $att->present) ? 'checked' : '' }} class="h-5 w-5 text-primary-600 rounded">
                            <input type="hidden" name="rows[{{ $i }}][worker_id]" value="{{ $w->id }}">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-800">{{ $w->prenom }} {{ $w->nom }} <span class="text-xs text-gray-500">({{ $w->poste }})</span></td>
                        <td class="px-6 py-4"><input type="number" step="0.5" min="0" max="24" name="rows[{{ $i }}][heures]" value="{{ $att->heures ?? 8 }}" class="w-24 px-3 py-2 border border-gray-300 rounded-md" required></td>
                        <td class="px-6 py-4"><input type="number" step="0.01" min="0" name="rows[{{ $i }}][prime]" value="{{ $att->prime ?? 0 }}" class="w-28 px-3 py-2 border border-gray-300 rounded-md"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-6 border-t border-gray-200">
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Enregistrer le pointage</button>
        </div>
    </form>
</div>
@endsection
