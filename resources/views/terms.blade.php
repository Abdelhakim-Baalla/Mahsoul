@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-primary-700 text-white py-16">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <img src="/images/pattern-leaves.png" alt="" class="absolute w-full h-full object-cover">
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Conditions d'utilisation</h1>
                <p class="mt-4 text-xl text-gray-200 max-w-3xl mx-auto">
                    Les règles qui régissent l'utilisation de la plateforme Mahsoul.
                </p>
            </div>
        </div>
        
        <!-- Wave separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" class="w-full h-auto">
                <path fill="#ffffff" fill-opacity="1" d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z"></path>
            </svg>
        </div>
    </section>
    
    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-600">
                    Dernière mise à jour : 1er mai 2023
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">1. Acceptation des conditions</h2>
                <p class="text-gray-700">
                    En accédant à la plateforme Mahsoul (ci-après "la Plateforme"), que ce soit via notre site web ou notre application mobile, vous acceptez d'être lié par les présentes conditions d'utilisation, toutes les lois et réglementations applicables, et vous acceptez que vous êtes responsable du respect des lois locales applicables. Si vous n'acceptez pas ces conditions, vous n'êtes pas autorisé à utiliser ou à accéder à cette Plateforme.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">2. Description du service</h2>
                <p class="text-gray-700">
                    Mahsoul est une plateforme en ligne qui offre trois services principaux :
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Des consultations en ligne avec des experts agricoles et vétérinaires</li>
                    <li>Une marketplace de produits agricoles (médicaments, aliments pour animaux, équipements, etc.)</li>
                    <li>Un module de formation en ligne via des blogs et articles spécialisés</li>
                </ul>
                <p class="text-gray-700">
                    Ces services sont destinés à aider les agriculteurs et les professionnels du secteur agricole à améliorer leurs pratiques, à accéder à des produits de qualité et à bénéficier de conseils d'experts.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">3. Compte utilisateur</h2>
                <h3 class="text-xl font-semibold text-primary-700 mt-6">3.1 Création de compte</h3>
                <p class="text-gray-700">
                    Pour accéder à certaines fonctionnalités de la Plateforme, vous devez créer un compte. Lors de la création de votre compte, vous devez fournir des informations exactes, complètes et à jour. Vous êtes responsable de la confidentialité de votre compte et de votre mot de passe, ainsi que de toutes les activités qui se déroulent sous votre compte.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">3.2 Types de comptes</h3>
                <p class="text-gray-700">
                    La Plateforme propose différents types de comptes en fonction de votre rôle :
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Client : pour les agriculteurs et autres utilisateurs qui souhaitent accéder aux services de la Plateforme</li>
                    <li>Expert agricole : pour les professionnels qui offrent des consultations dans le domaine agricole</li>
                    <li>Vétérinaire : pour les professionnels qui offrent des consultations vétérinaires</li>
                    <li>Administrateur : pour les membres de l'équipe Mahsoul qui gèrent la Plateforme</li>
                </ul>
                <p class="text-gray-700">
                    Chaque type de compte a des droits et des responsabilités spécifiques sur la Plateforme.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">3.3 Vérification des experts</h3>
                <p class="text-gray-700">
                    Les experts agricoles et vétérinaires doivent fournir des preuves de leurs qualifications professionnelles pour être approuvés sur la Plateforme. Mahsoul se réserve le droit de vérifier ces informations et de refuser ou de suspendre l'accès à tout moment si les informations fournies sont inexactes ou incomplètes.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">4. Consultations en ligne</h2>
                <h3 class="text-xl font-semibold text-primary-700 mt-6">4.1 Prise de rendez-vous</h3>
                <p class="text-gray-700">
                    Les clients peuvent prendre rendez-vous avec des experts agricoles ou vétérinaires via la Plateforme. Les rendez-vous sont soumis à la disponibilité des experts et peuvent être annulés ou modifiés selon les conditions spécifiées dans la section 4.3.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">4.2 Déroulement des consultations</h3>
                <p class="text-gray-700">
                    Les consultations se déroulent en ligne via la Plateforme. Les clients peuvent décrire leur problème, poser des questions et partager des documents (photos, vidéos, etc.) avec l'expert. L'expert fournira des conseils et des recommandations basés sur les informations fournies.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">4.3 Annulation et modification</h3>
                <p class="text-gray-700">
                    Les clients peuvent annuler ou modifier un rendez-vous jusqu'à 24 heures avant l'heure prévue sans frais. Toute annulation effectuée moins de 24 heures avant le rendez-vous peut entraîner des frais d'annulation. Les experts peuvent également annuler ou modifier un rendez-vous, auquel cas le client sera notifié et pourra reprogrammer sans frais supplémentaires.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">4.4 Limites des consultations</h3>
                <p class="text-gray-700">
                    Les consultations fournies via la Plateforme sont destinées à offrir des conseils généraux et ne remplacent pas un examen physique ou une visite sur place lorsque cela est nécessaire. Les experts feront de leur mieux pour fournir des conseils précis et utiles, mais ne peuvent pas garantir des résultats spécifiques. En cas d'urgence ou de situation grave, veuillez consulter un professionnel en personne.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">5. Marketplace</h2>
                <h3 class="text-xl font-semibold text-primary-700 mt-6">5.1 Produits</h3>
                <p class="text-gray-700">
                    La Plateforme propose une variété de produits agricoles, notamment des médicaments vétérinaires, des aliments pour animaux, des équipements agricoles et d'autres produits liés à l'agriculture. Tous les produits sont décrits avec précision, mais les images et descriptions sont fournies à titre indicatif uniquement.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">5.2 Commandes et paiements</h3>
                <p class="text-gray-700">
                    Les clients peuvent commander des produits via la Plateforme en les ajoutant à leur panier et en procédant au paiement. Les prix sont indiqués en dirhams marocains (MAD) et incluent toutes les taxes applicables, sauf indication contraire. Les frais de livraison sont calculés séparément et indiqués avant la finalisation de la commande.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">5.3 Livraison</h3>
                <p class="text-gray-700">
                    Les délais de livraison varient en fonction de la localisation du client et de la disponibilité des produits. Les délais estimés sont indiqués lors de la commande. Mahsoul n'est pas responsable des retards de livraison dus à des circonstances indépendantes de sa volonté.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">5.4 Retours et remboursements</h3>
                <p class="text-gray-700">
                    Les clients peuvent retourner un produit dans les 14 jours suivant la réception s'il est défectueux, endommagé ou ne correspond pas à la description. Les produits doivent être retournés dans leur emballage d'origine et en bon état. Les remboursements seront effectués via le même mode de paiement utilisé pour l'achat.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">6. Formation en ligne</h2>
                <h3 class="text-xl font-semibold text-primary-700 mt-6">6.1 Contenu éducatif</h3>
                <p class="text-gray-700">
                    La Plateforme propose des articles, blogs et autres contenus éducatifs sur divers sujets liés à l'agriculture. Ce contenu est fourni à titre informatif uniquement et ne constitue pas un conseil professionnel ou juridique.
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">6.2 Commentaires et interactions</h3>
                <p class="text-gray-700">
                    Les utilisateurs peuvent commenter les articles et interagir avec d'autres utilisateurs. Tous les commentaires doivent respecter les règles de conduite spécifiées dans la section 7.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">7. Règles de conduite</h2>
                <p class="text-gray-700">
                    En utilisant la Plateforme, vous acceptez de ne pas :
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Utiliser la Plateforme d'une manière qui pourrait endommager, désactiver, surcharger ou compromettre les serveurs ou les réseaux de Mahsoul</li>
                    <li>Utiliser la Plateforme pour des activités illégales ou non autorisées</li>
                    <li>Publier du contenu diffamatoire, obscène, offensant, menaçant ou harcelant</li>
                    <li>Usurper l'identité d'une autre personne ou entité</li>
                    <li>Collecter ou stocker des données personnelles d'autres utilisateurs sans leur consentement</li>
                    <li>Utiliser des robots, spiders ou autres moyens automatisés pour accéder à la Plateforme sans autorisation</li>
                    <li>Interférer avec ou perturber l'intégrité ou les performances de la Plateforme</li>
                </ul>
                <p class="text-gray-700">
                    Mahsoul se réserve le droit de suspendre ou de résilier votre accès à la Plateforme si vous enfreignez ces règles de conduite.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">8. Propriété intellectuelle</h2>
                <p class="text-gray-700">
                    Tout le contenu présent sur la Plateforme, y compris mais sans s'y limiter, les textes, graphiques, logos, icônes, images, clips audio, téléchargements numériques et compilations de données, est la propriété de Mahsoul ou de ses fournisseurs de contenu et est protégé par les lois marocaines et internationales sur la propriété intellectuelle.
                </p>
                <p class="text-gray-700">
                    Vous ne pouvez pas reproduire, distribuer, modifier, afficher publiquement, exécuter publiquement, republier, télécharger, stocker ou transmettre tout matériel de notre Plateforme, sauf si cela est expressément autorisé par Mahsoul.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">9. Limitation de responsabilité</h2>
                <p class="text-gray-700">
                    Dans toute la mesure permise par la loi applicable, Mahsoul ne sera pas responsable des dommages indirects, accessoires, spéciaux, consécutifs ou punitifs, ou de toute perte de profits ou de revenus, que ces dommages soient prévisibles ou non, et même si Mahsoul a été informé de la possibilité de tels dommages.
                </p>
                <p class="text-gray-700">
                    La responsabilité totale de Mahsoul pour toute réclamation découlant de ou liée à l'utilisation de la Plateforme ne dépassera pas le montant payé par vous à Mahsoul au cours des six mois précédant la réclamation.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">10. Indemnisation</h2>
                <p class="text-gray-700">
                    Vous acceptez d'indemniser, de défendre et de dégager de toute responsabilité Mahsoul, ses dirigeants, administrateurs, employés, agents et affiliés contre toutes réclamations, responsabilités, dommages, pertes et dépenses, y compris, sans limitation, les frais juridiques et comptables raisonnables, découlant de ou liés à votre violation de ces Conditions d'utilisation ou de votre utilisation de la Plateforme.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">11. Modifications des conditions</h2>
                <p class="text-gray-700">
                    Mahsoul se réserve le droit de modifier ces Conditions d'utilisation à tout moment. Les modifications entreront en vigueur dès leur publication sur la Plateforme. Votre utilisation continue de la Plateforme après la publication des modifications constitue votre acceptation de ces modifications.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">12. Résiliation</h2>
                <p class="text-gray-700">
                    Mahsoul peut, à sa seule discrétion, suspendre ou résilier votre accès à la Plateforme pour toute raison, y compris, sans limitation, la violation de ces Conditions d'utilisation. Vous pouvez également résilier votre compte à tout moment en nous contactant.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">13. Loi applicable et juridiction</h2>
                <p class="text-gray-700">
                    Ces Conditions d'utilisation sont régies par les lois du Maroc. Tout litige découlant de ou lié à ces Conditions d'utilisation sera soumis à la juridiction exclusive des tribunaux de Rabat, Maroc.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">14. Contact</h2>
                <p class="text-gray-700">
                    Si vous avez des questions concernant ces Conditions d'utilisation, veuillez nous contacter à :
                </p>
                <p class="text-gray-700">
                    Email : legal@mahsoul.ma<br>
                    Adresse : 123 Rue de l'Agriculture, 10000 Ville, Maroc<br>
                    Téléphone : +212 5XX XX XX XX
                </p>
            </div>
        </div>
    </section>
@endsection
