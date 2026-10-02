@extends('layouts.vet')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <span class="eco-eyebrow mb-3">Espace vétérinaire</span>
            <h1 class="font-display text-3xl font-extrabold text-forest">Tableau de bord vétérinaire</h1>
            <p class="text-clay mt-2">Bienvenue, Dr. {{ auth()->user()->prenom }} {{ auth()->user()->nom }}</p>
        </div>

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-leaf/10 flex items-center justify-center">
                        <i class="fas fa-stethoscope text-leaf text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Total consultations</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $countRendezVous }} <span class="text-sm font-medium text-clay">Consultation</span></p>
                    </div>
                </div>
            </div>

            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-sun/10 flex items-center justify-center">
                        <i class="fas fa-euro-sign text-sun text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Total revenus</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ number_format($total, 0, ',', ' ') }} <span class="text-sm font-medium text-clay">DH</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Consultations récentes -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest">Consultations récentes</h2>
                    @if($countConsultationsRecent > 3)
                    <a href="{{ route('vet.consultations.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Voir tous</a>
                    @endif
                </div>
                <div class="p-6">
                    @if($consultationsRecent->isEmpty())
                    <div class="text-center py-10">
                        <i class="fas fa-stethoscope text-forest/30 text-5xl mb-3"></i>
                        <p class="text-clay">Aucune consultation récente</p>
                    </div>
                    @else
                    <ul class="divide-y divide-earth-200">
                        @foreach($consultationsRecent as $consultation)
                        <li class="py-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <p class="font-semibold text-forest">{{ $consultation->client->prenom }} {{ $consultation->client->nom }}</p>
                                <p class="text-sm text-clay mt-1">{{ Str::limit($consultation->sujet, 50) }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Terminée</span>
                                <a href="{{ route('vet.consultations.show', ['id' => $consultation->id]) }}" class="text-leaf hover:text-forest text-sm font-medium">Voir</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Consultations annulées -->
        <div class="card-eco bg-white overflow-hidden">
            <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                <h2 class="font-display text-xl font-bold text-forest">Consultations annulées</h2>
                @if($countConsultationsAnnules > 3)
                <a href="{{ route('vet.consultations.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Voir tous</a>
                @endif
            </div>
            <div class="p-6">
                @if($consultationsAnnules->isEmpty())
                <div class="text-center py-10">
                    <i class="fas fa-ban text-forest/30 text-5xl mb-3"></i>
                    <p class="text-clay">Aucune consultation annulée</p>
                </div>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($consultationsAnnules as $consultation)
                    <li class="py-4">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <p class="font-semibold text-forest">{{ $consultation->client->prenom }} {{ $consultation->client->nom }}</p>
                                <p class="text-sm text-clay mt-1">{{ Str::limit($consultation->sujet, 50) }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Annulée</span>
                                <a href="{{ route('vet.consultations.show', ['id' => $consultation->id]) }}" class="text-leaf hover:text-forest text-sm font-medium">Voir</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection