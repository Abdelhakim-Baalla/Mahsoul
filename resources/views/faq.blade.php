@extends('layouts.app')

@section('title', 'FAQ - Mahsoul')

@section('content')
@include('components.page-hero', ['eyebrow' => 'Aide', 'title' => 'Questions fréquentes', 'subtitle' => 'Tout ce qu\'il faut savoir sur Mahsoul : consultations, marketplace, formation et Farm OS.'])

<section class="py-14 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-4">
            @foreach([
                ['Comment réserver une consultation avec un expert ?', 'Créez un compte, choisissez votre expert (vétérinaire ou ingénieur agricole) depuis la page Consultations, puis réservez votre créneau. Vous recevez un compte-rendu PDF après la séance.'],
                ['Comment acheter sur la marketplace ?', 'Parcourez le catalogue, ajoutez vos produits au panier puis réglez en ligne par carte bancaire via Stripe. Suivez votre commande depuis votre profil.'],
                ['Les experts sont-ils vérifiés ?', 'Oui. Les profils portant le badge bleu ont été contrôlés par notre équipe. Consultez aussi les notes et avis laissés par les agriculteurs.'],
                ['Qu\'est-ce que la traçabilité des lots ?', 'Chaque récolte reçoit un code unique (ex : MH-2026-0001) avec sa parcelle d\'origine, les intrants utilisés et sa destination. Un QR code imprimable permet de vérifier le lot en ligne — indispensable pour l\'export.'],
                ['Qu\'est-ce que le Farm OS ?', 'Votre tableau de bord d\'exploitation : ouvriers et pointage, paie mensuelle, tâches, stocks d\'intrants, caisse et factures. Accessible depuis le menu « Ma Ferme » pour les comptes agricoles.'],
                ['Quels moyens de paiement acceptez-vous ?', 'Carte bancaire marocaine et internationale via Stripe, avec 3D Secure. Le paiement est chiffré et sécurisé.'],
                ['Puis-je vendre mes propres produits ?', 'Créez un compte expert agricole, complétez votre profil et contactez-nous via la page Contact pour activer votre boutique vendeur.'],
                ['Comment réinitialiser mon mot de passe ?', 'Cliquez sur « Mot de passe oublié » sur la page de connexion et suivez les instructions envoyées par email.'],
            ] as [$q, $a])
            <details class="card-eco bg-sand/60 p-6 group">
                <summary class="font-display font-bold text-forest cursor-pointer list-none flex items-center justify-between gap-4">
                    {{ $q }}
                    <i class="fas fa-chevron-down text-leaf text-sm transition group-open:rotate-180"></i>
                </summary>
                <p class="mt-3 text-clay">{{ $a }}</p>
            </details>
            @endforeach
        </div>
        <div class="mt-10 text-center">
            <p class="text-clay mb-4">Vous ne trouvez pas votre réponse ?</p>
            <a href="{{ route('contact') }}" class="btn-eco">Contactez-nous</a>
        </div>
    </div>
</section>
@endsection