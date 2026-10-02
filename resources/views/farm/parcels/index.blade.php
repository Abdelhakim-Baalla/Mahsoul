@extends('farm.layout', ['navActive' => 'parcels'])

@section('farm_content')
<div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-bold text-gray-800">Parcelles</h2>
    <a href="{{ route('farm.parcels.create') }}" class="px-4 py-2 bg-forest text-white text-sm font-medium rounded-full hover:bg-leaf"><i class="fas fa-plus mr-2"></i>Ajouter</a>
</div>
<div class="bg-white rounded-3xl shadow-md overflow-hidden">
    @if($parcels->isEmpty())
    <p class="p-10 text-center text-gray-500">Aucune parcelle.</p>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        @foreach($parcels as $p)
        <div class="border border-gray-200 rounded-lg p-5 hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-gray-800">{{ $p->nom }}</h3>
                <span class="text-xs px-2 py-1 rounded-full {{ $p->statut === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">{{ $p->statut }}</span>
            </div>
            <p class="text-sm text-gray-600 mt-2">{{ $p->culture ?? '—' }} {{ $p->variete ?? '' }}</p>
            <p class="text-sm text-gray-600">Superficie : {{ $p->superficie ?? '—' }} ha</p>
            <p class="text-sm text-gray-600">Lots : {{ $p->lots_count }}</p>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('farm.parcels.edit', ['id' => $p->id]) }}" class="flex-1 text-center px-3 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-gray-200">Modifier</a>
                <form action="{{ route('farm.parcels.delete') }}" method="POST" onsubmit="return confirm('Supprimer cette parcelle ?')">
                    @csrf
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <button type="submit" class="px-3 py-2 bg-red-50 text-red-600 text-sm font-medium rounded-full hover:bg-red-100"><i class="fas fa-trash"></i></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
