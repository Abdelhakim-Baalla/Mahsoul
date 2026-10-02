@extends('farm.layout', ['navActive' => 'workers'])

@section('farm_content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-bold text-gray-800">Ouvriers ({{ $workers->count() }})</h2>
    <a href="{{ route('farm.workers.create') }}" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700"><i class="fas fa-plus mr-2"></i>Ajouter</a>
</div>
<div class="bg-white rounded-3xl shadow-md overflow-hidden">
    @if($workers->isEmpty())
    <p class="p-10 text-center text-gray-500">Aucun ouvrier enregistré.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Poste</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Téléphone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Salaire/j</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($workers as $w)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $w->prenom }} {{ $w->nom }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $w->poste }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $w->telephone ?? '—' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800">{{ $w->salaire_journalier }} DH</td>
                    <td class="px-6 py-4">@if($w->actif)<span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-800">Actif</span>@else<span class="text-xs px-2 py-1 rounded-full bg-gray-100 text-gray-800">Inactif</span>@endif</td>
                    <td class="px-6 py-4"><a href="{{ route('farm.workers.edit', ['id' => $w->id]) }}" class="text-primary-600 hover:underline text-sm font-medium">Modifier</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
