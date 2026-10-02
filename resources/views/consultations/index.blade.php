@extends('layouts.app')

@section('title', 'Consultations - Mahsoul')

@section('content')
@include('components.page-hero', ['eyebrow' => 'Consultations', 'title' => 'Nos experts à votre écoute', 'subtitle' => 'Vétérinaires et ingénieurs agricoles vérifiés, disponibles en ligne.'])

<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Filtres simples -->
        <div class="card-eco p-5 mb-8">
            <form action="{{ route('experts.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="specialty" class="block text-sm font-medium text-forest mb-1">Spécialité</label>
                    <select id="specialty" name="specialty" onchange="this.form.submit()" class="w-full input-eco">
                        <option value="">Toutes les spécialités</option>
                        <option value="veterinaire" {{ request('specialty') == 'veterinaire' ? 'selected' : '' }}>Vétérinaire</option>
                        <option value="agricole" {{ request('specialty') == 'agricole' ? 'selected' : '' }}>Expert agricole</option>
                    </select>
                </div>
                <div>
                    <label for="availability" class="block text-sm font-medium text-forest mb-1">Disponibilité</label>
                    <select id="availability" name="availability" onchange="this.form.submit()" class="w-full input-eco">
                        <option value="">Toutes</option>
                        <option value="today" {{ request('availability') == 'today' ? 'selected' : '' }}>Aujourd'hui</option>
                        <option value="this_week" {{ request('availability') == 'this_week' ? 'selected' : '' }}>Cette semaine</option>
                        <option value="next_week" {{ request('availability') == 'next_week' ? 'selected' : '' }}>Semaine prochaine</option>
                    </select>
                </div>
                <div>
                    <label for="rating" class="block text-sm font-medium text-forest mb-1">Note min.</label>
                    <select id="rating" name="rating" onchange="this.form.submit()" class="w-full input-eco">
                        <option value="">Toutes</option>
                        <option value="4" {{ request('rating') == '4' ? 'selected' : '' }}>4★+</option>
                        <option value="3" {{ request('rating') == '3' ? 'selected' : '' }}>3★+</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="btn-eco w-full">Filtrer</button>
                </div>
            </form>
        </div>

        <!-- Experts Agricoles -->
        <div class="mb-10">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-display text-2xl font-extrabold text-forest">Experts Agricoles</h2>
            </div>
            @if($agricoles->isEmpty())
            <div class="card-eco bg-cream/50 p-12 text-center">
                <i class="fas fa-tractor text-forest/30 text-6xl mb-4"></i>
                <p class="text-clay">Aucun expert agricole disponible.</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($agricoles as $agricole)
                <article class="card-eco overflow-hidden">
                    <div class="relative h-48">
                        <img src="{{ $agricole->compte->photo ?? '/images/farm.jpg' }}" alt="{{ $agricole->compte->prenom }} {{ $agricole->compte->nom }}" class="w-full h-full object-cover">
                        <div class="absolute top-2 right-2">
                            @if($agricole->compte->verifie)
                            <span class="badge-verified">Vérifié</span>
                            @endif
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-lg font-semibold text-forest">{{ $agricole->compte->prenom }} {{ $agricole->compte->nom }}
                                @if($agricole->compte->verifie)<i class="fas fa-badge-check text-sky-500 ml-1" title="Expert vérifié"></i>@endif
                            </h3>
                        </div>
                        <p class="text-sm text-clay mb-3">{{ $agricole->produit ?? '' }} · {{ $agricole->region ?? '' }}</p>
                        <div class="flex items-center gap-2 mb-4">
                            @include('components.stars', ['note' => $agricole->compte->avg_note ?? 0, 'count' => $agricole->compte->nb_reviews ?? 0])
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('experts.show', ['expert_id' => $agricole->compte->id]) }}" class="btn-eco flex-1 text-center text-sm">Voir profil</a>
                            <a href="{{ route('rendezVous.create', ['expert_id' => $agricole->compte->id]) }}" class="btn-outline-eco flex-1 text-center text-sm">Rendez-vous</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Vétérinaires -->
        <div>
            <h2 class="font-display text-2xl font-extrabold text-forest mb-6">Vétérinaires</h2>
            @if($veterinaires->isEmpty())
            <div class="card-eco bg-cream/50 p-12 text-center">
                <i class="fas fa-stethoscope text-forest/30 text-6xl mb-4"></i>
                <p class="text-clay">Aucun vétérinaire disponible.</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($veterinaires as $veterinaire)
                <article class="card-eco overflow-hidden">
                    <div class="relative h-48">
                        <img src="{{ $veterinaire->compte->photo ?? '/images/farm.jpg' }}" alt="{{ $veterinaire->compte->prenom }} {{ $veterinaire->compte->nom }}" class="w-full h-full object-cover">
                        <div class="absolute top-2 right-2">
                            @if($veterinaire->compte->verifie)
                            <span class="badge-verified">Vérifié</span>
                            @endif
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-lg font-semibold text-forest">{{ $veterinaire->compte->prenom }} {{ $veterinaire->compte->nom }}
                                @if($veterinaire->compte->verifie)<i class="fas fa-badge-check text-sky-500 ml-1" title="Expert vérifié"></i>@endif
                            </h3>
                        </div>
                        <p class="text-sm text-clay mb-3">{{ $veterinaire->specialite ?? '' }} · {{ $veterinaire->compte->adresse ?? '' }}</p>
                        <div class="flex items-center gap-2 mb-4">
                            @include('components.stars', ['note' => $veterinaire->compte->avg_note ?? 0, 'count' => $veterinaire->compte->nb_reviews ?? 0])
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('experts.show', ['expert_id' => $veterinaire->compte->id]) }}" class="btn-eco flex-1 text-center text-sm">Voir profil</a>
                            <a href="{{ route('rendezVous.create', ['expert_id' => $veterinaire->compte->id]) }}" class="btn-outline-eco flex-1 text-center text-sm">Rendez-vous</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
@endsection