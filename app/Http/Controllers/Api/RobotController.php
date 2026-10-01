<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FarmTask;
use App\Models\HarvestLot;
use Illuminate\Http\Request;

class RobotController extends Controller
{
    /**
     * GET /api/robot/missions?farm_id=&statut=
     * Open transport / field missions for the autonomous fleet.
     */
    public function missions(Request $request)
    {
        $validated = $request->validate([
            'farm_id' => 'nullable|integer|exists:farms,id',
            'statut' => 'nullable|string|in:todo,doing,done',
        ]);

        $query = FarmTask::with(['parcel:id,farm_id,nom,culture', 'worker:id,nom,prenom'])
            ->when(isset($validated['farm_id']), fn($q) => $q->where('farm_id', $validated['farm_id']))
            ->when(isset($validated['statut']), fn($q) => $q->where('statut', $validated['statut']), fn($q) => $q->whereIn('statut', ['todo', 'doing']))
            ->orderBy('date_prevue');

        return response()->json([
            'count' => $query->count(),
            'missions' => $query->get()->map(fn($t) => [
                'id' => $t->id,
                'farm_id' => $t->farm_id,
                'titre' => $t->titre,
                'description' => $t->description,
                'statut' => $t->statut,
                'priorite' => $t->priorite,
                'date_prevue' => $t->date_prevue,
                'parcelle' => $t->parcel ? ['id' => $t->parcel->id, 'nom' => $t->parcel->nom, 'culture' => $t->parcel->culture] : null,
                'assigne_a' => $t->worker ? ($t->worker->prenom . ' ' . $t->worker->nom) : null,
            ]),
        ]);
    }

    /**
     * POST /api/robot/missions/complete {task_id, note?}
     * The robot (or supervisor) reports a finished mission.
     */
    public function complete(Request $request)
    {
        $validated = $request->validate([
            'task_id' => 'required|integer|exists:farm_tasks,id',
            'note' => 'nullable|string|max:500',
        ]);

        $task = FarmTask::findOrFail($validated['task_id']);
        $task->update([
            'statut' => 'done',
            'date_realisee' => now()->format('Y-m-d'),
            'description' => trim(($task->description ? $task->description . "\n" : '') . '[robot] ' . ($validated['note'] ?? 'mission accomplie')),
        ]);

        return response()->json(['ok' => true, 'task_id' => $task->id, 'statut' => $task->statut]);
    }

    /**
     * GET /api/robot/lots?statut=&farm_id=
     * Lots awaiting transport / conditioning (what the carts must move).
     */
    public function lots(Request $request)
    {
        $validated = $request->validate([
            'farm_id' => 'nullable|integer|exists:farms,id',
            'statut' => 'nullable|string|in:recolte,conditionne,expedie,livre',
        ]);

        $query = HarvestLot::with('parcel:id,nom')
            ->when(isset($validated['farm_id']), fn($q) => $q->where('farm_id', $validated['farm_id']))
            ->when(isset($validated['statut']), fn($q) => $q->where('statut', $validated['statut']))
            ->orderBy('date_recolte');

        return response()->json([
            'count' => $query->count(),
            'lots' => $query->get()->map(fn($l) => [
                'id' => $l->id,
                'code' => $l->code,
                'produit' => $l->produit,
                'quantite' => $l->quantite,
                'unite' => $l->unite,
                'statut' => $l->statut,
                'destination' => $l->destination,
                'parcelle' => $l->parcel ? $l->parcel->nom : null,
            ]),
        ]);
    }

    /**
     * POST /api/robot/lots/status {lot_id, statut}
     * The robot reports pickup / delivery of a lot.
     */
    public function lotStatus(Request $request)
    {
        $validated = $request->validate([
            'lot_id' => 'required|integer|exists:harvest_lots,id',
            'statut' => 'required|string|in:recolte,conditionne,expedie,livre',
        ]);

        $lot = HarvestLot::findOrFail($validated['lot_id']);
        $lot->update(['statut' => $validated['statut']]);

        return response()->json(['ok' => true, 'lot_id' => $lot->id, 'code' => $lot->code, 'statut' => $lot->statut]);
    }
}
