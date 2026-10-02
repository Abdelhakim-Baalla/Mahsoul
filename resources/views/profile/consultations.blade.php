@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Mes consultations</h1>
            <p class="mt-2 text-lg text-gray-600">Historique de vos rendez-vous avec nos experts</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                @include('profile.partials.sidebar', ['active' => 'consultations'])
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white rounded-3xl shadow-md overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Historique des consultations</h2>
                    </div>
                    @if($rendezVous->isEmpty())
                    <div class="p-10 text-center">
                        <i class="fas fa-calendar-times text-gray-300 text-5xl mb-4"></i>
                        <p class="text-gray-600">Aucune consultation pour le moment.</p>
                        <a href="{{ route('experts.index') }}" class="mt-4 inline-block px-6 py-2 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Trouver un expert</a>
                    </div>
                    @else
                    <ul class="divide-y divide-gray-200">
                        @foreach($rendezVous as $rdv)
                        <li class="p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $rdv->sujet ?? 'Consultation' }}</p>
                                <p class="text-sm text-gray-600 mt-1">
                                    @if(Auth::user()->type === 'client')
                                    Expert : {{ $rdv->expertUser->prenom ?? '' }} {{ $rdv->expertUser->nom ?? '' }}
                                    @else
                                    Client : {{ $rdv->clientUser->prenom ?? '' }} {{ $rdv->clientUser->nom ?? '' }}
                                    @endif
                                    — {{ $rdv->date_reserver ?? '' }}
                                </p>
                                <p class="text-sm text-gray-500 mt-1">{{ \Illuminate\Support\Str::limit($rdv->description ?? '', 100) }}</p>
                            </div>
                            <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full
                                @if($rdv->statut === 'approved') bg-green-100 text-green-800
                                @elseif($rdv->statut === 'pending') bg-yellow-100 text-yellow-800
                                @elseif($rdv->statut === 'cancel') bg-red-100 text-red-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ $rdv->statut }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
