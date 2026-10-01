<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Farm;
use App\Models\FarmInput;
use App\Models\FarmTask;
use App\Models\HarvestLot;
use App\Models\InputUsage;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Parcel;
use App\Models\Transaction;
use App\Models\Worker;
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

        $qrDataUri = null;
        try {
            $qr = \Endroid\QrCode\QrCode::create(route('farm.lots.show', ['id' => $lot->id]));
            $qrDataUri = (new \Endroid\QrCode\Writer\PngWriter())->write($qr)->getDataUri();
        } catch (\Throwable $e) {
            $qrDataUri = null;
        }

        return view('farm.lots.show', compact('farm', 'lot', 'qrDataUri'));
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

    private function farmOrDashboard()
    {
        $farm = $this->currentFarm();
        if (!$farm) {
            return [null, redirect()->route('farm.dashboard')];
        }
        return [$farm, null];
    }

    private function owns($record, $farm): bool
    {
        return $record && ($record->farm_id === $farm->id || Auth::user()->type === 'admin');
    }

    // ---------- OUVRIERS ----------
    public function workersIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $workers = $farm->workers()->latest()->get();
        return view('farm.workers.index', compact('farm', 'workers'));
    }

    public function workerCreate()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        return view('farm.workers.create', compact('farm'));
    }

    public function workerStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'cin' => 'nullable|string|max:50',
            'poste' => 'required|string|in:ouvrier,ouvriere,chef_equipe,chauffeur,magasinier,technicien',
            'salaire_journalier' => 'required|numeric|min:0',
            'date_embauche' => 'nullable|date',
        ]);
        $validated['farm_id'] = $farm->id;
        $validated['actif'] = $request->boolean('actif', true);
        Worker::create($validated);
        return redirect()->route('farm.workers.index')->with('success', 'Ouvrier ajouté.');
    }

    public function workerEdit(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $worker = Worker::findOrFail($request->validate(['id' => 'required|integer|exists:workers,id'])['id']);
        if (!$this->owns($worker, $farm)) abort(403);
        return view('farm.workers.edit', compact('farm', 'worker'));
    }

    public function workerUpdate(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'id' => 'required|integer|exists:workers,id',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'cin' => 'nullable|string|max:50',
            'poste' => 'required|string|in:ouvrier,ouvriere,chef_equipe,chauffeur,magasinier,technicien',
            'salaire_journalier' => 'required|numeric|min:0',
            'date_embauche' => 'nullable|date',
        ]);
        $worker = Worker::findOrFail($validated['id']);
        if (!$this->owns($worker, $farm)) abort(403);
        unset($validated['id']);
        $validated['actif'] = $request->boolean('actif');
        $worker->update($validated);
        return redirect()->route('farm.workers.index')->with('success', 'Ouvrier mis à jour.');
    }

    // ---------- POINTAGE ----------

    public function attendanceIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $today = now()->format('Y-m-d');
        $workers = $farm->workers()->where('actif', true)->with(['attendances' => fn($q) => $q->where('date', $today)])->get();
        return view('farm.attendance.index', compact('farm', 'workers', 'today'));
    }

    public function attendanceStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'rows' => 'required|array',
            'rows.*.worker_id' => 'required|integer|exists:workers,id',
            'rows.*.heures' => 'required|numeric|min:0|max:24',
            'rows.*.prime' => 'nullable|numeric|min:0',
        ]);
        $today = now()->format('Y-m-d');
        foreach ($validated['rows'] as $row) {
            $worker = Worker::find($row['worker_id']);
            if (!$worker || $worker->farm_id !== $farm->id) continue;
            Attendance::updateOrCreate(
                ['worker_id' => $worker->id, 'date' => $today],
                [
                    'present' => $request->has('present.' . $worker->id),
                    'heures' => $row['heures'],
                    'prime' => $row['prime'] ?? 0,
                ]
            );
        }
        $count = Attendance::where('date', $today)->where('present', true)
            ->whereIn('worker_id', $farm->workers()->pluck('id'))->count();
        return redirect()->route('farm.dashboard')->with('success', "Pointage enregistré : $count présents aujourd'hui.");
    }

    // ---------- TÂCHES ----------

    public function tasksIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $tasks = $farm->tasks()->with(['parcel', 'worker'])->latest()->get();
        return view('farm.tasks.index', compact('farm', 'tasks'));
    }

    public function taskCreate()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $parcels = $farm->parcels()->get();
        $workers = $farm->workers()->where('actif', true)->get();
        return view('farm.tasks.create', compact('farm', 'parcels', 'workers'));
    }

    public function taskStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parcel_id' => 'nullable|integer|exists:parcels,id',
            'worker_id' => 'nullable|integer|exists:workers,id',
            'date_prevue' => 'nullable|date',
            'priorite' => 'required|string|in:basse,normale,haute,urgente',
        ]);
        $validated['farm_id'] = $farm->id;
        $validated['statut'] = 'todo';
        FarmTask::create($validated);
        return redirect()->route('farm.tasks.index')->with('success', 'Tâche créée.');
    }

    public function taskStatus(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'id' => 'required|integer|exists:farm_tasks,id',
            'statut' => 'required|string|in:todo,doing,done',
        ]);
        $task = FarmTask::findOrFail($validated['id']);
        if (!$this->owns($task, $farm)) abort(403);
        $task->update([
            'statut' => $validated['statut'],
            'date_realisee' => $validated['statut'] === 'done' ? now()->format('Y-m-d') : null,
        ]);
        return redirect()->route('farm.tasks.index')->with('success', 'Tâche mise à jour.');
    }

    public function taskDelete(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $task = FarmTask::findOrFail($request->validate(['id' => 'required|integer|exists:farm_tasks,id'])['id']);
        if (!$this->owns($task, $farm)) abort(403);
        $task->delete();
        return redirect()->route('farm.tasks.index')->with('success', 'Tâche supprimée.');
    }

    // ---------- STOCKS / INTRANTS ----------

    public function inputsIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $inputs = $farm->inputs()->get();
        $usages = InputUsage::whereIn('input_id', $farm->inputs()->pluck('id'))
            ->with(['input', 'parcel', 'lot'])->latest()->take(15)->get();
        $parcels = $farm->parcels()->get();
        $lots = $farm->lots()->latest()->take(20)->get();
        return view('farm.inputs.index', compact('farm', 'inputs', 'usages', 'parcels', 'lots'));
    }

    public function inputCreate()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        return view('farm.inputs.create', compact('farm'));
    }

    public function inputStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|in:engrais,pesticide,semence,carburant,aliment,autre',
            'unite' => 'required|string|max:20',
            'quantite_stock' => 'required|numeric|min:0',
            'seuil_alerte' => 'required|numeric|min:0',
            'prix_unitaire' => 'required|numeric|min:0',
        ]);
        $validated['farm_id'] = $farm->id;
        FarmInput::create($validated);
        return redirect()->route('farm.inputs.index')->with('success', 'Intrant ajouté au stock.');
    }

    public function usageStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'input_id' => 'required|integer|exists:farm_inputs,id',
            'parcel_id' => 'nullable|integer|exists:parcels,id',
            'lot_id' => 'nullable|integer|exists:harvest_lots,id',
            'quantite' => 'required|numeric|min:0.01',
            'date' => 'required|date',
            'note' => 'nullable|string|max:500',
        ]);
        $input = FarmInput::findOrFail($validated['input_id']);
        if (!$this->owns($input, $farm)) abort(403);
        if ($validated['quantite'] > $input->quantite_stock) {
            return back()->withErrors(['quantite' => 'Stock insuffisant (' . $input->quantite_stock . ' ' . $input->unite . ' disponibles).'])->withInput();
        }
        $input->decrement('quantite_stock', $validated['quantite']);
        InputUsage::create($validated);
        return redirect()->route('farm.inputs.index')->with('success', 'Utilisation enregistrée (traçabilité + stock déduit).');
    }

    // ---------- CAISSE ----------

    public function transactionsIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $transactions = $farm->transactions()->latest()->get();
        $recettes = $farm->transactions()->where('type', 'recette')->sum('montant');
        $depenses = $farm->transactions()->where('type', 'depense')->sum('montant');
        return view('farm.caisse.index', compact('farm', 'transactions', 'recettes', 'depenses'));
    }

    public function transactionStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'type' => 'required|string|in:recette,depense',
            'categorie' => 'required|string|in:vente,salaires,intrants,carburant,equipement,prestation,transport,autre',
            'montant' => 'required|numeric|min:0.01',
            'date' => 'required|date',
            'description' => 'nullable|string|max:500',
        ]);
        $validated['farm_id'] = $farm->id;
        Transaction::create($validated);
        return redirect()->route('farm.caisse.index')->with('success', 'Transaction enregistrée.');
    }

    public function transactionDelete(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $tx = Transaction::findOrFail($request->validate(['id' => 'required|integer|exists:transactions,id'])['id']);
        if (!$this->owns($tx, $farm)) abort(403);
        $tx->delete();
        return redirect()->route('farm.caisse.index')->with('success', 'Transaction supprimée.');
    }

    // ---------- FACTURES ----------

    public function invoicesIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $invoices = $farm->invoices()->latest()->get();
        return view('farm.invoices.index', compact('farm', 'invoices'));
    }

    public function invoiceCreate()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        return view('farm.invoices.create', compact('farm'));
    }

    public function invoiceStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'client_nom' => 'required|string|max:255',
            'date_echeance' => 'nullable|date',
            'tva' => 'nullable|numeric|min:0|max:100',
            'items' => 'required|array|min:1',
            'items.*.description' => 'required|string|max:500',
            'items.*.quantite' => 'required|numeric|min:0.01',
            'items.*.prix_unitaire' => 'required|numeric|min:0',
        ]);
        $ht = 0;
        foreach ($validated['items'] as $item) {
            $ht += $item['quantite'] * $item['prix_unitaire'];
        }
        $tva = $validated['tva'] ?? 0;
        $seq = $farm->invoices()->count() + 1;
        $invoice = Invoice::create([
            'farm_id' => $farm->id,
            'numero' => 'FAC-' . now()->format('Y') . '-' . str_pad($seq, 3, '0', STR_PAD_LEFT),
            'client_nom' => $validated['client_nom'],
            'montant_ht' => round($ht, 2),
            'tva' => $tva,
            'montant_ttc' => round($ht * (1 + $tva / 100), 2),
            'statut' => 'brouillon',
            'date_echeance' => $validated['date_echeance'] ?? null,
        ]);
        foreach ($validated['items'] as $item) {
            InvoiceItem::create([
                'invoice_id' => $invoice->id,
                'description' => $item['description'],
                'quantite' => $item['quantite'],
                'prix_unitaire' => $item['prix_unitaire'],
            ]);
        }
        return redirect()->route('farm.invoices.show', ['id' => $invoice->id])->with('success', 'Facture ' . $invoice->numero . ' créée.');
    }

    public function invoiceShow(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $invoice = Invoice::with('items')->findOrFail($request->validate(['id' => 'required|integer|exists:invoices,id'])['id']);
        if (!$this->owns($invoice, $farm)) abort(403);
        return view('farm.invoices.show', compact('farm', 'invoice'));
    }

    public function invoiceStatus(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'id' => 'required|integer|exists:invoices,id',
            'statut' => 'required|string|in:brouillon,envoyee,payee,annulee',
        ]);
        $invoice = Invoice::findOrFail($validated['id']);
        if (!$this->owns($invoice, $farm)) abort(403);
        $invoice->update(['statut' => $validated['statut']]);
        return redirect()->route('farm.invoices.show', ['id' => $invoice->id])->with('success', 'Statut facture mis à jour.');
    }

    // ---------- PARCELLES ----------

    public function parcelsIndex()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $parcels = $farm->parcels()->withCount('lots')->get();
        return view('farm.parcels.index', compact('farm', 'parcels'));
    }

    public function parcelCreate()
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        return view('farm.parcels.create', compact('farm'));
    }

    public function parcelStore(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'superficie' => 'nullable|numeric|min:0',
            'culture' => 'nullable|string|max:255',
            'variete' => 'nullable|string|max:255',
            'date_semis' => 'nullable|date',
            'statut' => 'required|string|in:active,jachere,preparation',
        ]);
        $validated['farm_id'] = $farm->id;
        Parcel::create($validated);
        return redirect()->route('farm.parcels.index')->with('success', 'Parcelle ajoutée.');
    }

    public function parcelEdit(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $parcel = Parcel::findOrFail($request->validate(['id' => 'required|integer|exists:parcels,id'])['id']);
        if (!$this->owns($parcel, $farm)) abort(403);
        return view('farm.parcels.edit', compact('farm', 'parcel'));
    }

    public function parcelUpdate(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $validated = $request->validate([
            'id' => 'required|integer|exists:parcels,id',
            'nom' => 'required|string|max:255',
            'superficie' => 'nullable|numeric|min:0',
            'culture' => 'nullable|string|max:255',
            'variete' => 'nullable|string|max:255',
            'date_semis' => 'nullable|date',
            'statut' => 'required|string|in:active,jachere,preparation',
        ]);
        $parcel = Parcel::findOrFail($validated['id']);
        if (!$this->owns($parcel, $farm)) abort(403);
        unset($validated['id']);
        $parcel->update($validated);
        return redirect()->route('farm.parcels.index')->with('success', 'Parcelle mise à jour.');
    }

    public function parcelDelete(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $parcel = Parcel::findOrFail($request->validate(['id' => 'required|integer|exists:parcels,id'])['id']);
        if (!$this->owns($parcel, $farm)) abort(403);
        if ($parcel->lots()->count() > 0) {
            return back()->withErrors(['parcel' => 'Impossible : des lots de récolte sont rattachés à cette parcelle (traçabilité).']);
        }
        $parcel->tasks()->update(['parcel_id' => null]);
        $parcel->delete();
        return redirect()->route('farm.parcels.index')->with('success', 'Parcelle supprimée.');
    }

    // ---------- PAIE MENSUELLE ----------

    public function payrollIndex(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $mois = $request->input('mois', now()->format('Y-m'));
        if (!preg_match('/^\d{4}-\d{2}$/', $mois)) {
            $mois = now()->format('Y-m');
        }
        $workers = $farm->workers()->where('actif', true)->get();
        $rows = [];
        $total = 0;
        foreach ($workers as $w) {
            $atts = Attendance::where('worker_id', $w->id)->where('date', 'like', $mois . '%')->get();
            $jours = $atts->where('present', true)->count();
            $primes = $atts->sum('prime');
            $brut = $jours * $w->salaire_journalier + $primes;
            $total += $brut;
            $rows[] = ['worker' => $w, 'jours' => $jours, 'primes' => $primes, 'brut' => $brut];
        }
        return view('farm.payroll.index', compact('farm', 'rows', 'total', 'mois'));
    }

    public function payrollBook(Request $request)
    {
        [$farm, $redir] = $this->farmOrDashboard();
        if ($redir) return $redir;
        $mois = $request->validate(['mois' => 'required|regex:/^\d{4}-\d{2}$/'])['mois'];
        $workers = $farm->workers()->where('actif', true)->get();
        $total = 0;
        foreach ($workers as $w) {
            $atts = Attendance::where('worker_id', $w->id)->where('date', 'like', $mois . '%')->get();
            $total += $atts->where('present', true)->count() * $w->salaire_journalier + $atts->sum('prime');
        }
        if ($total <= 0) {
            return back()->withErrors(['paie' => 'Paie nulle pour ce mois (aucune présence pointée).']);
        }
        Transaction::firstOrCreate(
            ['farm_id' => $farm->id, 'reference' => 'PAIE-' . $mois],
            [
                'type' => 'depense', 'categorie' => 'salaires', 'montant' => round($total, 2),
                'date' => $mois . '-28', 'description' => 'Paie mensuelle ' . $mois, 'reference' => 'PAIE-' . $mois,
            ]
        );
        return redirect()->route('farm.caisse.index')->with('success', "Paie $mois (" . number_format($total, 0, ',', ' ') . ' DH) enregistrée en caisse.');
    }
}
