<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Agricole;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Commentaire;
use App\Models\OrderItem;
use App\Models\Produit;
use App\Models\RendezVous;
use App\Models\Tag;
use App\Models\Utilisateur;
use App\Models\Veterinaire;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoDataSeeder extends Seeder
{
    /**
     * Seed demo content: categories, tags, users, products,
     * articles, comments, appointments and orders.
     *
     * @return void
     */
    public function run()
    {
        $categories = $this->seedCategories();
        $this->seedTags();
        $clients = $this->seedClients();
        $experts = $this->seedExperts();
        $this->seedProduits($categories);
        $articles = $this->seedArticles($categories);
        $this->seedCommentaires($articles, $clients);
        $this->seedRendezVous($clients, $experts);
        $this->seedCommandes($clients);
    }

    private function img(string $file): string
    {
        return '/images/seeds/products/' . $file;
    }

    private function avatar(string $file): string
    {
        return '/images/seeds/avatars/' . $file;
    }

    private function articleImg(string $file): string
    {
        return '/images/seeds/articles/' . $file;
    }

    private function makeUser(array $data): Utilisateur
    {
        return Utilisateur::firstOrCreate(
            ['email' => $data['email']],
            [
                'nom' => $data['nom'],
                'prenom' => $data['prenom'],
                'password' => Hash::make('password123'),
                'telephone' => $data['telephone'] ?? '0600000000',
                'adresse' => $data['adresse'] ?? 'Maroc',
                'type' => $data['type'],
                'photo' => $data['avatar'] ?? '/images/default-avatar.jpg',
                'about' => $data['about'] ?? 'Utilisateur Mahsoul',
            ]
        );
    }

    private function seedCategories(): array
    {
        $list = [
            ['nom' => 'Légumes frais', 'description' => 'Légumes de saison cultivés localement'],
            ['nom' => 'Fruits de saison', 'description' => 'Fruits frais du terroir marocain'],
            ['nom' => 'Céréales & Graines', 'description' => 'Blé, orge, couscous et dérivés'],
            ['nom' => 'Produits laitiers', 'description' => 'Lait, fromages et produits fermiers'],
            ['nom' => 'Épices & Herbes', 'description' => 'Safran, curcuma et herbes aromatiques'],
            ['nom' => 'Miel & Huiles', 'description' => 'Miel naturel et huiles pressées à froid'],
        ];

        $out = [];
        foreach ($list as $row) {
            $out[$row['nom']] = Categorie::firstOrCreate(['nom' => $row['nom']], $row);
        }

        return $out;
    }

    private function seedTags(): void
    {
        foreach (['Bio', 'Local', 'Nouveau', 'Promotion', 'Premium', 'Artisanal'] as $nom) {
            Tag::firstOrCreate(['nom' => $nom]);
        }
    }

    private function seedClients(): array
    {
        $rows = [
            [
                'nom' => 'El Fassi', 'prenom' => 'Yasmine', 'email' => 'client1@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/cliente1.jpg',
                'telephone' => '0611111111', 'adresse' => 'Rabat', 'type' => 'client',
                'profile' => ['type_exploitation' => 'Maraîchage', 'nombre_animaux' => '0', 'superficie_terres' => '2 ha'],
            ],
            [
                'nom' => 'Benali', 'prenom' => 'Omar', 'email' => 'client2@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/client2.jpg',
                'telephone' => '0622222222', 'adresse' => 'Meknès', 'type' => 'client',
                'profile' => ['type_exploitation' => 'Élevage bovin', 'nombre_animaux' => '25', 'superficie_terres' => '10 ha'],
            ],
            [
                'nom' => 'Mansouri', 'prenom' => 'Sara', 'email' => 'client3@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/cliente3.jpg',
                'telephone' => '0633333333', 'adresse' => 'Agadir', 'type' => 'client',
                'profile' => ['type_exploitation' => 'Arboriculture', 'nombre_animaux' => '5', 'superficie_terres' => '4 ha'],
            ],
        ];

        $users = [];
        foreach ($rows as $row) {
            $user = $this->makeUser($row);
            Client::firstOrCreate(['compte' => $user->id], $row['profile'] + ['compte' => $user->id]);
            $users[] = $user;
        }

        return $users;
    }

    private function seedExperts(): array
    {
        $vets = [
            [
                'nom' => 'Tazi', 'prenom' => 'Hassan', 'email' => 'vet1@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/vet1.jpg',
                'telephone' => '0644444444', 'adresse' => 'Casablanca', 'type' => 'veterinaire',
                'profile' => ['specialite' => 'Bovins', 'diplome' => 'Doctorat vétérinaire', 'annee_experience' => '12 ans', 'prix_deplacement' => 250],
            ],
            [
                'nom' => 'Berrada', 'prenom' => 'Nadia', 'email' => 'vet2@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/vet2.jpg',
                'telephone' => '0655555555', 'adresse' => 'Fès', 'type' => 'veterinaire',
                'profile' => ['specialite' => 'Aviculture', 'diplome' => 'Doctorat vétérinaire', 'annee_experience' => '8 ans', 'prix_deplacement' => 180],
            ],
            [
                'nom' => 'Alaoui', 'prenom' => 'Mehdi', 'email' => 'vet3@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/vet3.jpg',
                'telephone' => '0666666666', 'adresse' => 'Marrakech', 'type' => 'veterinaire',
                'profile' => ['specialite' => 'Équins', 'diplome' => 'Doctorat vétérinaire', 'annee_experience' => '15 ans', 'prix_deplacement' => 300],
            ],
        ];

        $agros = [
            [
                'nom' => 'Idrissi', 'prenom' => 'Karim', 'email' => 'expert1@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/expert1.jpg',
                'telephone' => '0677777777', 'adresse' => 'Souss', 'type' => 'agricole',
                'profile' => ['ferme' => 'Ferme Idrissi', 'produit' => 'Maraîchage', 'superficie_terrain' => '15 ha', 'region' => 'Souss-Massa', 'prix_deplacement' => 200],
            ],
            [
                'nom' => 'Ouazzani', 'prenom' => 'Fatima Zahra', 'email' => 'expert2@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/experte2.jpg',
                'telephone' => '0688888888', 'adresse' => 'Meknès', 'type' => 'agricole',
                'profile' => ['ferme' => 'Domaine Ouazzani', 'produit' => 'Arboriculture', 'superficie_terrain' => '30 ha', 'region' => 'Fès-Meknès', 'prix_deplacement' => 220],
            ],
            [
                'nom' => 'El Amrani', 'prenom' => 'Rachid', 'email' => 'expert3@mahsoul.ma',
                'avatar' => '/images/seeds/avatars/expert3.jpg',
                'telephone' => '0699999999', 'adresse' => 'Settat', 'type' => 'agricole',
                'profile' => ['ferme' => 'Ferme El Amrani', 'produit' => 'Grandes cultures', 'superficie_terrain' => '50 ha', 'region' => 'Casablanca-Settat', 'prix_deplacement' => 150],
            ],
        ];

        $vetUsers = [];
        foreach ($vets as $row) {
            $user = $this->makeUser($row);
            Veterinaire::firstOrCreate(['compte' => $user->id], $row['profile'] + ['compte' => $user->id]);
            $vetUsers[] = $user;
        }

        $agroUsers = [];
        foreach ($agros as $row) {
            $user = $this->makeUser($row);
            Agricole::firstOrCreate(['compte' => $user->id], $row['profile'] + ['compte' => $user->id]);
            $agroUsers[] = $user;
        }

        return ['veterinaires' => $vetUsers, 'agricoles' => $agroUsers];
    }

    private function seedProduits(array $categories): void
    {
        $rows = [
            ['nom' => 'Tomates rondes Bio', 'img' => 'tomates.jpg', 'description' => 'Tomates fraîches cultivées sans pesticides.', 'prix' => 8.5, 'quantite' => 500, 'unite_mesure' => 'kg', 'cat' => 'Légumes frais', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Pommes de terre', 'img' => 'pommes-de-terre.jpg', 'description' => 'Pommes de terre de qualité, idéales pour tous les plats.', 'prix' => 6, 'quantite' => 800, 'unite_mesure' => 'kg', 'cat' => 'Légumes frais', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Pommes Golden', 'img' => 'pommes.jpg', 'description' => 'Pommes Golden croquantes du Moyen Atlas.', 'prix' => 12, 'quantite' => 300, 'unite_mesure' => 'kg', 'cat' => 'Fruits de saison', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Oranges Navel', 'img' => 'oranges.jpg', 'description' => 'Oranges juteuses de la région du Souss.', 'prix' => 9, 'quantite' => 400, 'unite_mesure' => 'kg', 'cat' => 'Fruits de saison', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Blé tendre', 'img' => 'ble.jpg', 'description' => 'Blé tendre de qualité meunière, sac de 50 kg.', 'prix' => 4.2, 'quantite' => 2000, 'unite_mesure' => 'kg', 'cat' => 'Céréales & Graines', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Couscous artisanal', 'img' => 'couscous.jpg', 'description' => 'Couscous roulé à la main, céréales complètes.', 'prix' => 18, 'quantite' => 150, 'unite_mesure' => 'kg', 'cat' => 'Céréales & Graines', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Lait de vache frais', 'img' => 'lait.jpg', 'description' => 'Lait frais pasteurisé de la ferme.', 'prix' => 9, 'quantite' => 200, 'unite_mesure' => 'L', 'cat' => 'Produits laitiers', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Fromage de chèvre', 'img' => 'fromage.jpg', 'description' => 'Fromage de chèvre affiné, fabrication artisanale.', 'prix' => 85, 'quantite' => 40, 'unite_mesure' => 'pièce', 'cat' => 'Produits laitiers', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Safran de Taliouine 1g', 'img' => 'safran.jpg', 'description' => 'Safran pur de Taliouine, qualité supérieure.', 'prix' => 30, 'quantite' => 100, 'unite_mesure' => 'g', 'cat' => 'Épices & Herbes', 'vendeur' => 'Mahsoul Store'],
            ['nom' => 'Curcuma moulu 250g', 'img' => 'curcuma.jpg', 'description' => 'Curcuma en poudre, riche en curcumine.', 'prix' => 25, 'quantite' => 120, 'unite_mesure' => 'g', 'cat' => 'Épices & Herbes', 'vendeur' => 'Mahsoul Store'],
            ['nom' => "Miel d'oranger 500g", 'img' => 'miel.jpg', 'description' => "Miel naturel d'oranger, récolte de printemps.", 'prix' => 120, 'quantite' => 60, 'unite_mesure' => 'pièce', 'cat' => 'Miel & Huiles', 'vendeur' => 'Mahsoul Store'],
            ['nom' => "Huile d'olive extra vierge 1L", 'img' => 'huile-olive.jpg', 'description' => 'Huile d’olive de première pression à froid.', 'prix' => 95, 'quantite' => 90, 'unite_mesure' => 'L', 'cat' => 'Miel & Huiles', 'vendeur' => 'Mahsoul Store'],
        ];

        foreach ($rows as $row) {
            Produit::firstOrCreate(
                ['nom' => $row['nom']],
                [
                    'description' => $row['description'],
                    'prix' => $row['prix'],
                    'quantite' => $row['quantite'],
                    'unite_mesure' => $row['unite_mesure'],
                    'categorie' => $categories[$row['cat']]->id,
                    'image' => $this->img($row['img']),
                    'en_stock' => true,
                    'vendeur' => $row['vendeur'],
                ]
            );
        }
    }

    private function seedArticles(array $categories): array
    {
        $admin = Admin::first();
        if (!$admin) {
            return [];
        }

        $firstCat = reset($categories);

        $rows = [
            ['titre' => 'Guide de l’irrigation goutte-à-goutte', 'img' => 'irrigation.jpg', 'categorie' => 'Irrigation', 'statut' => 'publié', 'contenu' => "L’irrigation goutte-à-goutte permet d’économiser jusqu’à 60% d’eau tout en augmentant les rendements. Dans ce guide, nous présentons le matériel nécessaire, le dimensionnement des lignes et la maintenance des filtres.\n\nUn bon paillage complète le système en limitant l’évaporation. Pensez à vérifier l’uniformité des débits chaque début de saison."],
            ['titre' => 'Passer au Bio : les 5 premières étapes', 'img' => 'bio.jpg', 'categorie' => 'Agriculture Bio', 'statut' => 'publié', 'contenu' => "La conversion en agriculture biologique demande de la méthode : analyse du sol, rotation des cultures, fertilisation organique, lutte intégrée et traçabilité.\n\nLa certification prend généralement 2 à 3 ans. Commencez par une parcelle pilote pour tester vos itinéraires techniques."],
            ['titre' => 'Santé des bovins : calendrier vaccinal', 'img' => 'bovins.jpg', 'categorie' => 'Élevage', 'statut' => 'publié', 'contenu' => "Un calendrier vaccinal rigoureux protège votre cheptel contre les principales maladies : fièvre aphteuse, brucellose et clavelée.\n\nTenez un carnet sanitaire par animal et planifiez les rappels avec votre vétérinaire."],
            ['titre' => 'Lutter contre la mouche de l’olivier', 'img' => 'oliveraie.jpg', 'categorie' => 'Phytosanitaire', 'statut' => 'publié', 'contenu' => "La mouche de l’olivier (Bactrocera oleae) cause d’importants dégâts. Le piégeage massif et la récolte précoce limitent les pertes.\n\nLes traitements doivent respecter les délais avant récolte pour préserver la qualité de l’huile."],
            ['titre' => 'Le safran de Taliouine : culture rentable ?', 'img' => 'safran.jpg', 'categorie' => 'Cultures à haute valeur', 'statut' => 'publié', 'contenu' => "Le safran se cultive sur de petites surfaces avec une forte valeur ajoutée. Les bulbes se plantent en été pour une floraison d’automne.\n\nLe tri et le séchage des stigmates demandent de la main-d’œuvre, mais la rentabilité à l’hectare est parmi les meilleures."],
            ['titre' => 'Gérer la sécheresse : variétés résistantes', 'img' => 'secheresse.jpg', 'categorie' => 'Climat', 'statut' => 'publié', 'contenu' => "Face au stress hydrique, choisissez des variétés précoces et tolérantes à la sécheresse. Le semis direct préserve l’humidité du sol.\n\nAssociez cultures et couverts végétaux pour limiter l’érosion."],
            ['titre' => 'Vendre en ligne ses produits fermiers', 'img' => 'marche.jpg', 'categorie' => 'Commercialisation', 'statut' => 'publié', 'contenu' => "La vente directe en ligne augmente vos marges : belles photos, descriptions précises et avis clients font la différence.\n\nLa marketplace Mahsoul vous permet de toucher des clients dans tout le Maroc avec un paiement sécurisé."],
            ['titre' => 'Compostage à la ferme : mode d’emploi', 'img' => 'compost.jpg', 'categorie' => 'Fertilisation', 'statut' => 'publié', 'contenu' => "Le compost valorise fumiers et résidus de culture en un amendement riche. Alternez couches brunes et vertes, aérez tous les 15 jours.\n\nUn compost mûr sent bon la forêt et améliore durablement la structure du sol."],
            ['titre' => 'Brouillon : serre connectée (en préparation)', 'img' => 'serre.jpg', 'categorie' => 'Innovation', 'statut' => 'Brouillon', 'contenu' => 'Article en cours de rédaction sur les capteurs connectés en serre.'],
            ['titre' => 'Brouillon : coopératives féminines (en préparation)', 'img' => 'marche.jpg', 'categorie' => 'Coopératives', 'statut' => 'Brouillon', 'contenu' => 'Article en cours de rédaction sur les coopératives féminines rurales.'],
        ];

        $articles = [];
        foreach ($rows as $row) {
            $articles[] = Article::firstOrCreate(
                ['titre' => $row['titre']],
                [
                    'contenu' => $row['contenu'],
                    'photo' => $this->articleImg($row['img']),
                    'auteur' => $admin->id,
                    'categorie' => $row['categorie'],
                    'categorie_id' => $firstCat->id,
                    'statut' => $row['statut'],
                ]
            );
        }

        return $articles;
    }

    private function seedCommentaires(array $articles, array $clients): void
    {
        if (empty($articles) || empty($clients)) {
            return;
        }

        $texts = [
            'Très bon article, merci pour ces conseils pratiques !',
            'J’ai appliqué cette méthode sur ma parcelle, résultats visibles en un mois.',
            'Est-ce que ces conseils s’appliquent aussi dans la région du Souss ?',
            'Article clair et bien documenté, je recommande.',
        ];

        foreach (array_slice($articles, 0, 4) as $i => $article) {
            Commentaire::firstOrCreate(
                ['article' => $article->id, 'utilisateur' => $clients[$i % count($clients)]->id, 'contenu' => $texts[$i % count($texts)]],
            );
        }
    }

    private function seedRendezVous(array $clients, array $experts): void
    {
        if (count($clients) < 2 || empty($experts['veterinaires']) || empty($experts['agricoles'])) {
            return;
        }

        $rows = [
            [
                'client' => $clients[0]->id,
                'expert' => $experts['veterinaires'][0]->id,
                'statut' => 'approved',
                'description' => 'Contrôle sanitaire annuel du cheptel bovin.',
                'date_reserver' => now()->addDays(3)->format('Y-m-d H:i:s'),
                'sujet' => 'Visite sanitaire bovins',
                'adresse' => 'Ferme, Meknès',
                'telephone' => '0622222222',
                'total' => '250',
            ],
            [
                'client' => $clients[1]->id,
                'expert' => $experts['agricoles'][0]->id,
                'statut' => 'pending',
                'description' => 'Conseil pour l’installation d’un système goutte-à-goutte.',
                'date_reserver' => now()->addDays(7)->format('Y-m-d H:i:s'),
                'sujet' => 'Projet irrigation',
                'adresse' => 'Agadir',
                'telephone' => '0633333333',
                'total' => '200',
            ],
        ];

        foreach ($rows as $row) {
            RendezVous::firstOrCreate(
                ['sujet' => $row['sujet'], 'client' => $row['client']],
                $row
            );
        }
    }

    private function seedCommandes(array $clients): void
    {
        $produits = Produit::take(4)->get();
        if (empty($clients) || $produits->count() < 2) {
            return;
        }

        $commande = Commande::firstOrCreate(
            ['reference_paiement' => 'DEMO-0001'],
            [
                'client' => $clients[0]->id,
                'date_commande' => now()->format('Y-m-d'),
                'total' => $produits[0]->prix * 2 + $produits[1]->prix * 1,
                'statut' => 'paid',
                'methode_paiement' => 'stripe',
                'reference_paiement' => 'DEMO-0001',
                'adresse_livraison' => 'Rabat',
                'frais_livraison' => 20,
            ]
        );

        foreach ([$produits[0], $produits[1]] as $i => $produit) {
            OrderItem::firstOrCreate(
                ['commande' => $commande->id, 'produit' => $produit->id],
                ['quantite' => $i + 1, 'prix_unitaire' => $produit->prix]
            );
        }
    }
}
