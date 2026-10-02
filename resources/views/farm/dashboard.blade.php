@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="eco-eyebrow mb-3">Farm OS — pilotage d'exploitation</span>
                <h1 class="font-display text-3xl font-extrabold text-forest"><i class="fas fa-tractor mr-2"></i>{{ $farm->nom }}</h1>
                <p class="mt-2 text-gray-600">{{ $farm->region ?? '' }} @if($farm->superficie_totale) — {{ $farm->superficie_totale }} ha @endif</p>
            </div>
            <a href="{{ route('farm.lots.create') }}" class="inline-block px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">
                <i class="fas fa-plus mr-2"></i>Nouveau lot de récolte
            </a>
        </div>

        @if(session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
            <p class="text-sm text-green-700">{{ session('success') }}</p>
        </div>
        @endif
        @if(session('info'))
        <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-md">
            <p class="text-sm text-blue-700">{{ session('info') }}</p>
        </div>
        @endif

        @include('farm.partials.nav', ['active' => 'dashboard'])

        <!-- KPI cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center"><i class="fas fa-users text-blue-600 text-xl"></i></div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-800">{{ $presentsToday }}/{{ $workersActifs }}</p>
                        <p class="text-sm text-gray-600">Ouvriers présents aujourd'hui</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center"><i class="fas fa-tasks text-yellow-600 text-xl"></i></div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-800">{{ $nbTachesEnCours }}</p>
                        <p class="text-sm text-gray-600">Tâches en cours</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 {{ $alertesStock->count() ? 'bg-red-100' : 'bg-green-100' }} rounded-full flex items-center justify-center"><i class="fas fa-boxes text-xl {{ $alertesStock->count() ? 'text-red-600' : 'text-green-600' }}"></i></div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-800">{{ $alertesStock->count() }}</p>
                        <p class="text-sm text-gray-600">Stocks en alerte</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 {{ ($recettes - $depenses) >= 0 ? 'bg-green-100' : 'bg-red-100' }} rounded-full flex items-center justify-center"><i class="fas fa-wallet text-xl {{ ($recettes - $depenses) >= 0 ? 'text-green-600' : 'text-red-600' }}"></i></div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-800">{{ number_format($recettes - $depenses, 0, ',', ' ') }} DH</p>
                        <p class="text-sm text-gray-600">Solde caisse (mois)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Lots récents / traçabilité -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                    <h2 class="text-xl font-bold text-gray-800"><i class="fas fa-barcode mr-2 text-primary-600"></i>Derniers lots (traçabilité)</h2>
                    <a href="{{ route('farm.lots.index') }}" class="text-primary-600 hover:text-primary-700 text-sm font-medium">Tous les lots →</a>
                </div>
                @if($derniersLots->isEmpty())
                <p class="p-6 text-gray-500">Aucun lot enregistré.</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach($derniersLots as $lot)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-mono font-bold text-primary-700">{{ $lot->code }}</p>
                            <p class="text-sm text-gray-600">{{ $lot->produit }} — {{ $lot->quantite }} {{ $lot->unite }} ({{ $lot->destination }})</p>
                        </div>
                        <a href="{{ route('farm.lots.show', ['id' => $lot->id]) }}" class="text-sm text-primary-600 hover:underline">Fiche</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Tâches en cours -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between"><h2 class="text-xl font-bold text-gray-800"><i class="fas fa-clipboard-list mr-2 text-primary-600"></i>Tâches en cours</h2><a href="{{ route('farm.tasks.index') }}" class="text-primary-600 text-sm font-medium">Gérer →</a></div>
                </div>
                @if($tachesEnCours->isEmpty())
                <p class="p-6 text-gray-500">Aucune tâche en cours.</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach($tachesEnCours as $tache)
                    <li class="p-4">
                        <div class="flex items-center justify-between">
                            <p class="font-semibold text-gray-800">{{ $tache->titre }}</p>
                            <span class="text-xs px-2 py-1 rounded-full {{ $tache->statut === 'doing' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">{{ $tache->statut }}</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">{{ $tache->parcel->nom ?? '' }} @if($tache->worker) — {{ $tache->worker->prenom }} {{ $tache->worker->nom }} @endif @if($tache->date_prevue) — prévu le {{ $tache->date_prevue->format('d/m/Y') }} @endif</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Stocks -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between"><h2 class="text-xl font-bold text-gray-800"><i class="fas fa-warehouse mr-2 text-primary-600"></i>Stocks intrants</h2><a href="{{ route('farm.inputs.index') }}" class="text-primary-600 text-sm font-medium">Gérer →</a></div>
                </div>
                @if($inputs->isEmpty())
                <p class="p-6 text-gray-500">Aucun intrant en stock.</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach($inputs as $input)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $input->nom }} <span class="text-xs text-gray-500">({{ $input->type }})</span></p>
                            <p class="text-sm text-gray-600">{{ $input->quantite_stock }} {{ $input->unite }}</p>
                        </div>
                        @if($input->quantite_stock <= $input->seuil_alerte)
                        <span class="text-xs px-2 py-1 rounded-full bg-red-100 text-red-800">Stock bas</span>
                        @else
                        <span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-800">OK</span>
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Caisse -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between"><h2 class="text-xl font-bold text-gray-800"><i class="fas fa-cash-register mr-2 text-primary-600"></i>Caisse récente</h2><a href="{{ route('farm.caisse.index') }}" class="text-primary-600 text-sm font-medium">Gérer →</a></div>
                </div>
                @if($transactions->isEmpty())
                <p class="p-6 text-gray-500">Aucune transaction.</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach($transactions as $tx)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $tx->description ?? $tx->categorie }}</p>
                            <p class="text-xs text-gray-500">{{ $tx->date ? $tx->date->format('d/m/Y') : '' }} — {{ $tx->categorie }}</p>
                        </div>
                        <p class="font-bold {{ $tx->type === 'recette' ? 'text-green-600' : 'text-red-600' }}">{{ $tx->type === 'recette' ? '+' : '−' }}{{ number_format($tx->montant, 0, ',', ' ') }} DH</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <!-- Ouvriers + factures -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between"><h2 class="text-xl font-bold text-gray-800"><i class="fas fa-hard-hat mr-2 text-primary-600"></i>Ouvriers actifs</h2><div class="flex gap-3"><a href="{{ route('farm.attendance.index') }}" class="text-primary-600 text-sm font-medium">Pointer →</a><a href="{{ route('farm.workers.index') }}" class="text-primary-600 text-sm font-medium">Gérer →</a></div></div>
                </div>
                <ul class="divide-y divide-gray-200">
                    @foreach($workers as $w)
                    <li class="p-4 flex items-center justify-between">
                        <p class="font-semibold text-gray-800">{{ $w->prenom }} {{ $w->nom }} <span class="text-xs text-gray-500">— {{ $w->poste }} ({{ $w->salaire_journalier }} DH/j)</span></p>
                        @php $att = $w->attendances->first(); @endphp
                        @if($att && $att->present)
                        <span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-800">Présent</span>
                        @elseif($att)
                        <span class="text-xs px-2 py-1 rounded-full bg-red-100 text-red-800">Absent</span>
                        @else
                        <span class="text-xs px-2 py-1 rounded-full bg-gray-100 text-gray-800">Non pointé</span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between"><h2 class="text-xl font-bold text-gray-800"><i class="fas fa-file-invoice mr-2 text-primary-600"></i>Factures en attente</h2><a href="{{ route('farm.invoices.index') }}" class="text-primary-600 text-sm font-medium">Gérer →</a></div>
                </div>
                @if($facturesImpayees->isEmpty())
                <p class="p-6 text-gray-500">Aucune facture en attente.</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach($facturesImpayees as $f)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $f->numero }} — {{ $f->client_nom }}</p>
                            <p class="text-xs text-gray-500">Échéance : {{ $f->date_echeance ? $f->date_echeance->format('d/m/Y') : '—' }}</p>
                        </div>
                        <p class="font-bold text-gray-800">{{ number_format($f->montant_ttc, 0, ',', ' ') }} DH</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
