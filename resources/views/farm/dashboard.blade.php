@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="eco-eyebrow mb-3">Farm OS — pilotage d'exploitation</span>
                <h1 class="font-display text-3xl font-extrabold text-forest"><i class="fas fa-tractor mr-2"></i>{{ $farm->nom }}</h1>
                <p class="mt-2 text-clay">{{ $farm->region ?? '' }} @if($farm->superficie_totale) — {{ $farm->superficie_totale }} ha @endif</p>
            </div>
            <a href="{{ route('farm.lots.create') }}" class="btn-sun shrink-0">
                <i class="fas fa-plus mr-2"></i>Nouveau lot de récolte
            </a>
        </div>

        @if(session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-xl">
            <p class="text-sm text-green-700">{{ session('success') }}</p>
        </div>
        @endif
        @if(session('info'))
        <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-xl">
            <p class="text-sm text-blue-700">{{ session('info') }}</p>
        </div>
        @endif

        @include('farm.partials.nav', ['active' => 'dashboard'])

        <!-- KPI cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-leaf/10 flex items-center justify-center">
                        <i class="fas fa-users text-leaf text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Ouvriers présents</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $presentsToday }}/{{ $workersActifs }}</p>
                    </div>
                </div>
            </div>
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-sun/10 flex items-center justify-center">
                        <i class="fas fa-tasks text-sun text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Tâches en cours</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $nbTachesEnCours }}</p>
                    </div>
                </div>
            </div>
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl {{ $alertesStock->count() ? 'bg-rose-50' : 'bg-leaf/10' }} flex items-center justify-center">
                        <i class="fas fa-boxes text-xl {{ $alertesStock->count() ? 'text-rose-600' : 'text-leaf' }}"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Stocks en alerte</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $alertesStock->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl {{ ($recettes - $depenses) >= 0 ? 'bg-leaf/10' : 'bg-rose-50' }} flex items-center justify-center">
                        <i class="fas fa-wallet text-xl {{ ($recettes - $depenses) >= 0 ? 'text-leaf' : 'text-rose-600' }}"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Solde caisse (mois)</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ number_format($recettes - $depenses, 0, ',', ' ') }} DH</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Lots récents / traçabilité -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest"><i class="fas fa-barcode mr-2 text-leaf"></i>Derniers lots (traçabilité)</h2>
                    <a href="{{ route('farm.lots.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Tous les lots →</a>
                </div>
                @if($derniersLots->isEmpty())
                <p class="p-6 text-center text-clay">Aucun lot enregistré.</p>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($derniersLots as $lot)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-mono font-bold text-forest">{{ $lot->code }}</p>
                            <p class="text-sm text-clay">{{ $lot->produit }} — {{ $lot->quantite }} {{ $lot->unite }} ({{ $lot->destination }})</p>
                        </div>
                        <a href="{{ route('farm.lots.show', ['id' => $lot->id]) }}" class="text-leaf hover:text-forest text-sm font-medium">Fiche</a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Tâches en cours -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest"><i class="fas fa-clipboard-list mr-2 text-leaf"></i>Tâches en cours</h2>
                    <a href="{{ route('farm.tasks.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Gérer →</a>
                </div>
                @if($tachesEnCours->isEmpty())
                <p class="p-6 text-center text-clay">Aucune tâche en cours.</p>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($tachesEnCours as $tache)
                    <li class="p-4">
                        <div class="flex items-center justify-between">
                            <p class="font-semibold text-forest">{{ $tache->titre }}</p>
                            <span class="text-xs px-2 py-1 rounded-full {{ $tache->statut === 'doing' ? 'bg-leaf/10 text-leaf' : 'bg-earth-100 text-earth-600' }}">{{ $tache->statut }}</span>
                        </div>
                        <p class="text-sm text-clay mt-1">{{ $tache->parcel->nom ?? '' }} @if($tache->worker) — {{ $tache->worker->prenom }} {{ $tache->worker->nom }} @endif @if($tache->date_prevue) — prévu le {{ $tache->date_prevue->format('d/m/Y') }} @endif</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Stocks -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest"><i class="fas fa-warehouse mr-2 text-leaf"></i>Stocks intrants</h2>
                    <a href="{{ route('farm.inputs.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Gérer →</a>
                </div>
                @if($inputs->isEmpty())
                <p class="p-6 text-center text-clay">Aucun intrant en stock.</p>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($inputs as $input)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-forest">{{ $input->nom }} <span class="text-xs text-clay">({{ $input->type }})</span></p>
                            <p class="text-sm text-clay">{{ $input->quantite_stock }} {{ $input->unite }} <span class="text-xs text-earth-500">(seuil {{ $input->seuil_alerte }})</span></p>
                        </div>
                        @if($input->quantite_stock <= $input->seuil_alerte)
                        <span class="text-xs px-2 py-1 rounded-full bg-rose-100 text-rose-800">Stock bas</span>
                        @else
                        <span class="text-xs px-2 py-1 rounded-full bg-leaf/10 text-leaf">OK</span>
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Caisse -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest"><i class="fas fa-cash-register mr-2 text-sun"></i>Caisse récente</h2>
                    <a href="{{ route('farm.caisse.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Gérer →</a>
                </div>
                @if($transactions->isEmpty())
                <p class="p-6 text-center text-clay">Aucune transaction.</p>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($transactions as $tx)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-forest">{{ $tx->description ?? $tx->categorie }}</p>
                            <p class="text-xs text-clay">{{ $tx->date ? $tx->date->format('d/m/Y') : '' }} — {{ $tx->categorie }}</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <p class="font-bold {{ $tx->type === 'recette' ? 'text-leaf' : 'text-rose-600' }}">{{ $tx->type === 'recette' ? '+' : '−' }}{{ number_format($tx->montant, 0, ',', ' ') }} DH</p>
                            <form action="{{ route('farm.caisse.delete', $tx->id) }}" method="POST" onsubmit="return confirm('Supprimer ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 text-rose-600 hover:bg-rose-50 rounded-full text-sm">Supprimer</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <!-- Ouvriers + factures -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest"><i class="fas fa-hard-hat mr-2 text-leaf"></i>Ouvriers actifs</h2>
                    <div class="flex gap-3">
                        <a href="{{ route('farm.attendance.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Pointer →</a>
                        <a href="{{ route('farm.workers.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Gérer →</a>
                    </div>
                </div>
                <ul class="divide-y divide-earth-200">
                    @foreach($workers as $w)
                    <li class="p-4 flex items-center justify-between">
                        <p class="font-semibold text-forest">{{ $w->prenom }} {{ $w->nom }} <span class="text-xs text-clay">— {{ $w->poste }} ({{ $w->salaire_journalier }} DH/j)</span></p>
                        @php $att = $w->attendances->first(); @endphp
                        @if($att && $att->present)
                        <span class="text-xs px-2 py-1 rounded-full bg-leaf/10 text-leaf">Présent</span>
                        @elseif($att)
                        <span class="text-xs px-2 py-1 rounded-full bg-rose-100 text-rose-800">Absent</span>
                        @else
                        <span class="text-xs px-2 py-1 rounded-full bg-earth-100 text-earth-600">Non pointé</span>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest"><i class="fas fa-file-invoice mr-2 text-sun"></i>Factures en attente</h2>
                    <a href="{{ route('farm.invoices.index') }}" class="text-leaf hover:text-forest text-sm font-medium">Gérer →</a>
                </div>
                @if($facturesImpayees->isEmpty())
                <p class="p-6 text-center text-clay">Aucune facture en attente.</p>
                @else
                <ul class="divide-y divide-earth-200">
                    @foreach($facturesImpayees as $f)
                    <li class="p-4 flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-forest">{{ $f->numero }} — {{ $f->client_nom }}</p>
                            <p class="text-xs text-clay">Échéance : {{ $f->date_echeance ? $f->date_echeance->format('d/m/Y') : '—' }}</p>
                        </div>
                        <p class="font-bold text-forest">{{ number_format($f->montant_ttc, 0, ',', ' ') }} DH</p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection