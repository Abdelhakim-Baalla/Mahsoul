@extends('farm.layout', ['navActive' => 'tasks'])

@section('farm_content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-bold text-gray-800">Tâches</h2>
    <a href="{{ route('farm.tasks.create') }}" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-md hover:bg-primary-700"><i class="fas fa-plus mr-2"></i>Nouvelle tâche</a>
</div>
<div class="bg-white rounded-3xl shadow-md overflow-hidden">
    @if($tasks->isEmpty())
    <p class="p-10 text-center text-gray-500">Aucune tâche.</p>
    @else
    <ul class="divide-y divide-gray-200">
        @foreach($tasks as $t)
        <li class="p-5 flex flex-col sm:flex-row sm:items-center gap-4">
            <div class="flex-1">
                <p class="font-semibold text-gray-800">{{ $t->titre }}</p>
                <p class="text-sm text-gray-600 mt-1">{{ $t->parcel->nom ?? '' }} @if($t->worker) — {{ $t->worker->prenom }} {{ $t->worker->nom }} @endif @if($t->date_prevue) — prévu le {{ $t->date_prevue->format('d/m/Y') }} @endif @if($t->priorite) <span class="ml-1 text-xs px-2 py-0.5 rounded-full bg-gray-100 text-gray-700">{{ $t->priorite }}</span> @endif</p>
            </div>
            <div class="flex items-center gap-2">
                <form action="{{ route('farm.tasks.status') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $t->id }}">
                    <select name="statut" onchange="this.form.submit()" class="text-sm px-3 py-2 border border-gray-300 rounded-md">
                        @foreach(['todo' => 'À faire', 'doing' => 'En cours', 'done' => 'Terminée'] as $k => $label)
                        <option value="{{ $k }}" {{ $t->statut == $k ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </form>
                <form action="{{ route('farm.tasks.delete') }}" method="POST" onsubmit="return confirm('Supprimer cette tâche ?')">
                    @csrf
                    <input type="hidden" name="id" value="{{ $t->id }}">
                    <button type="submit" class="px-3 py-2 text-red-600 hover:bg-red-50 rounded-md text-sm"><i class="fas fa-trash"></i></button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
