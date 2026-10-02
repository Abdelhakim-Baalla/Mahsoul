<?php

namespace Database\Seeders;

use App\Models\ExpertReview;
use App\Models\ProductReview;
use App\Models\Produit;
use App\Models\Utilisateur;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        // Badges "vérifié" pour les experts démo
        Utilisateur::whereIn('email', [
            'vet1@mahsoul.ma', 'vet2@mahsoul.ma', 'vet3@mahsoul.ma',
            'expert1@mahsoul.ma', 'expert2@mahsoul.ma', 'expert3@mahsoul.ma',
        ])->update(['verifie' => true]);

        $clients = Utilisateur::whereIn('email', ['client1@mahsoul.ma', 'client2@mahsoul.ma', 'client3@mahsoul.ma'])->get();
        if ($clients->isEmpty()) {
            return;
        }

        // Avis produits
        $productReviews = [
            ['produit' => 'Tomates rondes Bio', 'note' => 5, 'commentaire' => 'Tomates excellentes, très fraîches et bien calibrées.'],
            ['produit' => 'Tomates rondes Bio', 'note' => 4, 'commentaire' => 'Bonne qualité, livraison rapide.'],
            ['produit' => "Miel d'oranger 500g", 'note' => 5, 'commentaire' => 'Un miel parfumé exceptionnel, je recommande.'],
            ['produit' => "Huile d'olive extra vierge 1L", 'note' => 5, 'commentaire' => 'Huile fruitée de grande qualité.'],
            ['produit' => 'Safran de Taliouine 1g', 'note' => 4, 'commentaire' => 'Parfum intense, conforme à la description.'],
            ['produit' => 'Lait de vache frais', 'note' => 5, 'commentaire' => 'Lait frais du jour, mes enfants adorent.'],
            ['produit' => 'Pommes Golden', 'note' => 4, 'commentaire' => 'Croquantes et juteuses.'],
            ['produit' => 'Fromage de chèvre', 'note' => 5, 'commentaire' => 'Affinage parfait, goût artisanal authentique.'],
        ];
        foreach ($productReviews as $i => $row) {
            $produit = Produit::where('nom', $row['produit'])->first();
            if (!$produit) {
                continue;
            }
            ProductReview::updateOrCreate(
                ['produit' => $produit->id, 'utilisateur' => $clients[$i % $clients->count()]->id],
                ['note' => $row['note'], 'commentaire' => $row['commentaire']]
            );
        }

        // Avis experts
        $expertReviews = [
            ['expert' => 'vet1@mahsoul.ma', 'note' => 5, 'commentaire' => 'Diagnostic précis et ordonnance claire. Très professionnel.'],
            ['expert' => 'vet1@mahsoul.ma', 'note' => 4, 'commentaire' => 'Bon suivi du cheptel, je recommande.'],
            ['expert' => 'vet2@mahsoul.ma', 'note' => 5, 'commentaire' => 'Spécialiste aviculture au top.'],
            ['expert' => 'expert1@mahsoul.ma', 'note' => 5, 'commentaire' => 'Conseils irrigation qui ont doublé mon rendement.'],
            ['expert' => 'expert1@mahsoul.ma', 'note' => 4, 'commentaire' => 'Disponible et pédagogue.'],
            ['expert' => 'expert2@mahsoul.ma', 'note' => 5, 'commentaire' => 'Excellente expertise en arboriculture.'],
        ];
        foreach ($expertReviews as $i => $row) {
            $expert = Utilisateur::where('email', $row['expert'])->first();
            if (!$expert) {
                continue;
            }
            ExpertReview::updateOrCreate(
                ['expert' => $expert->id, 'client' => $clients[$i % $clients->count()]->id],
                ['note' => $row['note'], 'commentaire' => $row['commentaire']]
            );
        }
    }
}
