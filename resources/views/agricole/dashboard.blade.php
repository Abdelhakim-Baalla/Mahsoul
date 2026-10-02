@extends('layouts.expert')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <span class="eco-eyebrow mb-3">Espace expert agricole</span>
            <h1 class="font-display text-3xl font-extrabold text-forest">Tableau de bord</h1>
            <p class="text-clay mt-2">Bienvenue sur votre espace agricole, Dr. {{ auth()->user()->prenom }} {{ auth()->user()->nom }}</p>
        </div>

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-leaf/10 flex items-center justify-center">
                        <i class="fas fa-calendar-check text-leaf text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Rendez-vous à venir</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $countRendezVous }}</p>
                    </div>
                </div>
            </div>

            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-sun/10 flex items-center justify-center">
                        <i class="fas fa-euro-sign text-sun text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Revenus Total</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ number_format($revenu, 0, ',', ' ') }} DH</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-eco bg-white overflow-hidden">
            <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                <h2 class="font-display text-xl font-bold text-forest">Rendez-vous à venir</h2>
                <a href="{{ route('agricole.appointments.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Voir tous <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            <div class="p-6">
                @if($rendezVous->isEmpty())
                <div class="text-center py-10">
                    <i class="fas fa-calendar-times text-forest/30 text-5xl mb-3"></i>
                    <p class="text-clay">Aucun rendez-vous à venir</p>
                    <a href="{{ route('agricole.appointments.index') }}" class="mt-4 inline-block btn-sun">Voir tous les rendez-vous</a>
                </div>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($rendezVous->take(3) as $rendez)
                    <li class="py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div>
                            <h3 class="font-semibold text-forest">{{ $rendez->sujet }}</h3>
                            <p class="text-sm text-clay mt-1">{{ $rendez->client->prenom }} {{ $rendez->client->nom }}</p>
                            <p class="text-sm text-earth-500 mt-1">{{ $rendez->date_reserver }}</p>
                        </div>
                        <a href="{{ route('agricole.appointments.show', ['id' => $rendez->id]) }}" class="btn-eco text-sm shrink-0">Voir</a>
                    </li>
                    @endforeach
                </ul>
                @if(count($rendezVous) > 3)
                <div class="text-center py-4 border-t border-earth-200">
                    <a href="{{ route('agricole.appointments.index') }}" class="text-leaf hover:text-forest font-medium">+ {{ count($rendezVous) - 3 }} autres rendez-vous</a>
                </div>
                @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection