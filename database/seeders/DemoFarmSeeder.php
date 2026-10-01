<?php

namespace Database\Seeders;

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
use App\Models\Utilisateur;
use App\Models\Worker;
use Illuminate\Database\Seeder;

class DemoFarmSeeder extends Seeder
{
    public function run()
    {
        $owner = Utilisateur::where('email', 'expert1@mahsoul.ma')->first();
        if (!$owner) {
            return;
        }

        $farm = Farm::firstOrCreate(
            ['nom' => 'Ferme Idrissi', 'proprietaire' => $owner->id],
            [
                'region' => 'Souss-Massa',
                'superficie_totale' => 29,
                'telephone' => '0677777777',
                'adresse' => 'Route de Biougra, Souss',
            ]
        );

        $parcels = [];
        foreach ([
            ['nom' => 'Parcelle P1', 'superficie' => 5, 'culture' => 'Tomate', 'variete' => 'Roma', 'date_semis' => now()->subMonths(3)->format('Y-m-d')],
            ['nom' => 'Parcelle P2', 'superficie' => 8, 'culture' => 'Agrumes', 'variete' => 'Navel', 'date_semis' => now()->subYears(4)->format('Y-m-d')],
            ['nom' => 'Parcelle P3', 'superficie' => 6, 'culture' => 'Olivier', 'variete' => 'Picholine', 'date_semis' => now()->subYears(6)->format('Y-m-d')],
        ] as $row) {
            $parcels[$row['nom']] = Parcel::firstOrCreate(
                ['farm_id' => $farm->id, 'nom' => $row['nom']],
                $row + ['farm_id' => $farm->id]
            );
        }

        $workers = [];
        foreach ([
            ['nom' => 'Chraibi', 'prenom' => 'Youssef', 'poste' => 'chef_equipe', 'salaire_journalier' => 150],
            ['nom' => 'Bouzid', 'prenom' => 'Fatna', 'poste' => 'ouvriere', 'salaire_journalier' => 100],
            ['nom' => 'El Fassi', 'prenom' => 'Driss', 'poste' => 'ouvrier', 'salaire_journalier' => 100],
            ['nom' => 'Ait Lahcen', 'prenom' => 'Khadija', 'poste' => 'ouvriere', 'salaire_journalier' => 100],
            ['nom' => 'Moussaoui', 'prenom' => 'Rachid', 'poste' => 'chauffeur', 'salaire_journalier' => 130],
            ['nom' => 'Bennani', 'prenom' => 'Salma', 'poste' => 'magasiniere', 'salaire_journalier' => 120],
        ] as $i => $row) {
            $workers[] = Worker::firstOrCreate(
                ['farm_id' => $farm->id, 'nom' => $row['nom'], 'prenom' => $row['prenom']],
                $row + [
                    'farm_id' => $farm->id,
                    'telephone' => '06000000' . (10 + $i),
                    'date_embauche' => now()->subYear()->format('Y-m-d'),
                    'actif' => true,
                ]
            );
        }

        foreach ($workers as $i => $w) {
            Attendance::firstOrCreate(
                ['worker_id' => $w->id, 'date' => now()->format('Y-m-d')],
                ['present' => $i < 5, 'heures' => 8, 'prime' => $i === 0 ? 50 : 0]
            );
        }

        foreach ([
            ['titre' => 'Irrigation P1', 'parcel' => 'Parcelle P1', 'worker' => 0, 'statut' => 'doing', 'priorite' => 'haute', 'date_prevue' => now()->format('Y-m-d')],
            ['titre' => 'Traitement bio oliviers', 'parcel' => 'Parcelle P3', 'worker' => 2, 'statut' => 'todo', 'priorite' => 'haute', 'date_prevue' => now()->addDay()->format('Y-m-d')],
            ['titre' => 'Récolte tomates', 'parcel' => 'Parcelle P1', 'worker' => 1, 'statut' => 'todo', 'priorite' => 'normale', 'date_prevue' => now()->addDays(2)->format('Y-m-d')],
            ['titre' => 'Livraison caisses Wazo', 'parcel' => null, 'worker' => 4, 'statut' => 'done', 'priorite' => 'normale', 'date_prevue' => now()->subDay()->format('Y-m-d'), 'date_realisee' => now()->subDay()->format('Y-m-d')],
        ] as $row) {
            FarmTask::firstOrCreate(
                ['farm_id' => $farm->id, 'titre' => $row['titre']],
                [
                    'farm_id' => $farm->id,
                    'parcel_id' => $row['parcel'] ? $parcels[$row['parcel']]->id : null,
                    'worker_id' => $workers[$row['worker']]->id,
                    'description' => $row['titre'],
                    'date_prevue' => $row['date_prevue'],
                    'date_realisee' => $row['date_realisee'] ?? null,
                    'statut' => $row['statut'],
                    'priorite' => $row['priorite'],
                ]
            );
        }

        $inputs = [];
        foreach ([
            ['nom' => 'Engrais NPK 15-15-15', 'type' => 'engrais', 'unite' => 'kg', 'quantite_stock' => 500, 'seuil_alerte' => 100, 'prix_unitaire' => 6],
            ['nom' => 'Pesticide bio (neem)', 'type' => 'pesticide', 'unite' => 'L', 'quantite_stock' => 3, 'seuil_alerte' => 5, 'prix_unitaire' => 180],
            ['nom' => 'Semences tomate Roma', 'type' => 'semence', 'unite' => 'kg', 'quantite_stock' => 10, 'seuil_alerte' => 2, 'prix_unitaire' => 450],
            ['nom' => 'Gasoil', 'type' => 'carburant', 'unite' => 'L', 'quantite_stock' => 200, 'seuil_alerte' => 50, 'prix_unitaire' => 12],
        ] as $row) {
            $inputs[$row['nom']] = FarmInput::firstOrCreate(
                ['farm_id' => $farm->id, 'nom' => $row['nom']],
                $row + ['farm_id' => $farm->id]
            );
        }

        $lots = [];
        $year = now()->format('Y');
        foreach ([
            ['code' => "MH-$year-0001", 'parcel' => 'Parcelle P1', 'produit' => 'Tomates Roma', 'quantite' => 1200, 'unite' => 'kg', 'calibrage' => '40-60mm', 'destination' => 'export', 'client_nom' => 'Wazo Packaging', 'statut' => 'expedie'],
            ['code' => "MH-$year-0002", 'parcel' => 'Parcelle P1', 'produit' => 'Tomates Roma', 'quantite' => 800, 'unite' => 'kg', 'calibrage' => '40-60mm', 'destination' => 'local', 'client_nom' => 'Souk Agadir', 'statut' => 'livre'],
            ['code' => "MH-$year-0003", 'parcel' => 'Parcelle P2', 'produit' => 'Oranges Navel', 'quantite' => 2500, 'unite' => 'kg', 'calibrage' => '70-80mm', 'destination' => 'export', 'client_nom' => 'Wazo Packaging', 'statut' => 'conditionne'],
            ['code' => "MH-$year-0004", 'parcel' => 'Parcelle P3', 'produit' => 'Olives Picholine', 'quantite' => 600, 'unite' => 'kg', 'calibrage' => null, 'destination' => 'local', 'client_nom' => null, 'statut' => 'recolte'],
        ] as $i => $row) {
            $lots[] = HarvestLot::firstOrCreate(
                ['code' => $row['code']],
                [
                    'farm_id' => $farm->id,
                    'parcel_id' => $parcels[$row['parcel']]->id,
                    'produit' => $row['produit'],
                    'quantite' => $row['quantite'],
                    'unite' => $row['unite'],
                    'date_recolte' => now()->subDays(10 - $i * 2)->format('Y-m-d'),
                    'calibrage' => $row['calibrage'],
                    'destination' => $row['destination'],
                    'client_nom' => $row['client_nom'],
                    'statut' => $row['statut'],
                ]
            );
        }

        InputUsage::firstOrCreate(
            ['input_id' => $inputs['Engrais NPK 15-15-15']->id, 'lot_id' => $lots[0]->id, 'date' => now()->subDays(20)->format('Y-m-d')],
            ['parcel_id' => $parcels['Parcelle P1']->id, 'quantite' => 60, 'note' => 'Fertilisation pré-récolte']
        );
        InputUsage::firstOrCreate(
            ['input_id' => $inputs['Pesticide bio (neem)']->id, 'lot_id' => $lots[2]->id, 'date' => now()->subDays(15)->format('Y-m-d')],
            ['parcel_id' => $parcels['Parcelle P3']->id, 'quantite' => 2, 'note' => 'Traitement mouche de l’olivier']
        );

        foreach ([
            ['type' => 'recette', 'categorie' => 'vente', 'montant' => 15000, 'description' => 'Vente lot MH tomates — Souk Agadir', 'reference' => 'TX-001'],
            ['type' => 'depense', 'categorie' => 'carburant', 'montant' => 1200, 'description' => 'Gasoil tracteur', 'reference' => 'TX-002'],
            ['type' => 'depense', 'categorie' => 'salaires', 'montant' => 3500, 'description' => 'Paie hebdo ouvriers', 'reference' => 'TX-003'],
            ['type' => 'depense', 'categorie' => 'intrants', 'montant' => 800, 'description' => 'Achat plants', 'reference' => 'TX-004'],
        ] as $row) {
            Transaction::firstOrCreate(
                ['farm_id' => $farm->id, 'reference' => $row['reference']],
                $row + ['farm_id' => $farm->id, 'date' => now()->format('Y-m-d')]
            );
        }

        $inv1 = Invoice::firstOrCreate(
            ['numero' => 'FAC-2026-001'],
            [
                'farm_id' => $farm->id, 'client_nom' => 'Wazo Packaging',
                'montant_ht' => 12500, 'tva' => 0, 'montant_ttc' => 12500,
                'statut' => 'envoyee', 'date_echeance' => now()->addDays(30)->format('Y-m-d'),
            ]
        );
        InvoiceItem::firstOrCreate(
            ['invoice_id' => $inv1->id, 'description' => 'Tomates Roma — lot MH export (1200 kg)'],
            ['quantite' => 1200, 'prix_unitaire' => 10.42]
        );
        $inv2 = Invoice::firstOrCreate(
            ['numero' => 'FAC-2026-002'],
            [
                'farm_id' => $farm->id, 'client_nom' => 'Souk Agadir',
                'montant_ht' => 8300, 'tva' => 0, 'montant_ttc' => 8300,
                'statut' => 'payee', 'date_echeance' => now()->subDays(5)->format('Y-m-d'),
            ]
        );
        InvoiceItem::firstOrCreate(
            ['invoice_id' => $inv2->id, 'description' => 'Tomates Roma — marché local (800 kg)'],
            ['quantite' => 800, 'prix_unitaire' => 10.38]
        );
    }
}
