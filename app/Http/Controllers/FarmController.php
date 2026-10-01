<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\HarvestLot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:agricole,admin']);
    }

    private function currentFarm()
    {
        $farm = Farm::where('proprietaire', Auth::id())->latest()->first();

        if (!$farm && Auth::user()->type === 'admin') {
            $farm = Farm::latest()->first();
        }

        return $farm;
    }

    public function dashboard()
    {
        $farm = $this->currentFarm();

        if (!$farm) {
            return view('farm.setup');
        }

        $today = now()->format('Y-m-d');
        $monthStart = now()->startOfMonth()->format('Y-m-d');

        $workersActifs = $farm->workers()->where('actif', true)->count();
        $pointageToday = $farm->workers()
            ->where('actif', true)
            ->with(['attendances' => fn($q) => $q->where('date', $today)])
            ->get();
        $presentsToday = $pointageToday->filter(fn($w) => $w->attendances->first()?->present)->count();

        $tachesEnCours = $farm->tasks()->whereIn('statut', ['todo', 'doing'])->latest()->take(5)->get();
        $nbTachesEnCours = $farm->tasks()->whereIn('statut', ['todo', 'doing'])->count();

        $alertesStock = $farm->inputs()->whereColumn('quantite_stock', '<=', 'seuil_alerte')->get();

        $recettes = $farm->transactions()->where('type', 'recette')->where('date', '>=', $monthStart)->sum('montant');
        $depenses = $farm->transactions()->where('type', 'depense')->where('date', '>=', $monthStart)->sum('montant');

        $derniersLots = $farm->lots()->latest()->take(5)->get();
        $facturesImpayees = $farm->invoices()->whereIn('statut', ['brouillon', 'envoyee'])->latest()->take(5)->get();
        $transactions = $farm->transactions()->latest()->take(8)->get();
        $workers = $farm->workers()->where('actif', true)->with(['attendances' => fn($q) => $q->where('date', $today)])->take(8)->get();
        $inputs = $farm->inputs()->get();

        return view('farm.dashboard', compact(
            'farm', 'workersActifs', 'presentsToday', 'pointageToday',
            'tachesEnCours', 'nbTachesEnCours', 'alertesStock',
            'recettes', 'depenses', 'derniersLots', 'facturesImpayees',
            'transactions', 'workers', 'inputs'
        ));
    }

    public function storeFarm(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'region' => 'nullable|string|max:255',
            'superficie_totale' => 'nullable|numeric|min:0',
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:500',
        ]);

        $validated['proprietaire'] = Auth::id();
        Farm::create($validated);

        return redirect()->route('farm.dashboard')->with('success', 'Exploitation créée avec succès.');
    }

    public function lotsIndex()
    {
        $farm = $this->currentFarm();
        if (!$farm) {
            return redirect()->route('farm.dashboard');
        }

        $lots = $farm->lots()->with('parcel')->latest()->get();

        return view('farm.lots.index', compact('farm', 'lots'));
    }

    public function lotCreate()
    {
        $farm = $this->currentFarm();
        if (!$farm) {
            return redirect()->route('farm.dashboard');
        }

        $parcels = $farm->parcels()->get();

        return view('farm.lots.create', compact('farm', 'parcels'));
    }

    public function lotStore(Request $request)
    {
        $farm = $this->currentFarm();
        if (!$farm) {
            return redirect()->route('farm.dashboard');
        }

        $validated = $request->validate([
            'parcel_id' => 'required|integer|exists:parcels,id',
            'produit' => 'required|string|max:255',
            'quantite' => 'required|numeric|min:0.01',
            'unite' => 'required|string|max:20',
            'date_recolte' => 'required|date',
            'calibrage' => 'nullable|string|max:255',
            'destination' => 'required|string|in:local,export',
            'client_nom' => 'nullable|string|max:255',
        ]);

        $seq = ($farm->lots()->count() + 1);
        $validated['code'] = 'MH-' . now()->format('Y') . '-' . str_pad($seq, 4, '0', STR_PAD_LEFT);
        $validated['farm_id'] = $farm->id;
        $validated['statut'] = 'recolte';

        $lot = HarvestLot::create($validated);

        return redirect()->route('farm.lots.show', ['id' => $lot->id])->with('success', 'Lot ' . $lot->code . ' créé.');
    }

    public function lotShow(Request $request)
    {
        $farm = $this->currentFarm();
        if (!$farm) {
            return redirect()->route('farm.dashboard');
        }

        $validated = $request->validate([
            'id' => 'required|integer|exists:harvest_lots,id',
        ]);

        $lot = HarvestLot::with(['parcel', 'inputUsages.input'])->findOrFail($validated['id']);

        if ($lot->farm_id !== $farm->id && Auth::user()->type !== 'admin') {
            abort(403);
        }

        return view('farm.lots.show', compact('farm', 'lot'));
    }

    public function lotUpdateStatus(Request $request)
    {
        $farm = $this->currentFarm();
        if (!$farm) {
            return redirect()->route('farm.dashboard');
        }

        $validated = $request->validate([
            'id' => 'required|integer|exists:harvest_lots,id',
            'statut' => 'required|string|in:recolte,conditionne,expedie,livre',
        ]);

        $lot = HarvestLot::findOrFail($validated['id']);
        if ($lot->farm_id !== $farm->id && Auth::user()->type !== 'admin') {
            abort(403);
        }
        $lot->update(['statut' => $validated['statut']]);

        return redirect()->route('farm.lots.show', ['id' => $lot->id])->with('success', 'Statut du lot mis à jour.');
    }
}
