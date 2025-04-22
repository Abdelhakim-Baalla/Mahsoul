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
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Politique de confidentialité</h1>
                <p class="mt-4 text-xl text-gray-200 max-w-3xl mx-auto">
                    Comment nous protégeons vos données et respectons votre vie privée.
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
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Introduction</h2>
                <p class="text-gray-700">
                    Chez Mahsoul, nous accordons une grande importance à la protection de vos données personnelles. Cette politique de confidentialité explique comment nous collectons, utilisons, partageons et protégeons vos informations lorsque vous utilisez notre plateforme, que ce soit via notre site web, notre application mobile ou lors de vos interactions avec nos services.
                </p>
                <p class="text-gray-700">
                    En utilisant nos services, vous acceptez les pratiques décrites dans cette politique de confidentialité. Nous vous encourageons à la lire attentivement pour comprendre comment vos données sont traitées.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Informations que nous collectons</h2>
                <p class="text-gray-700">
                    Nous collectons différents types d'informations pour fournir et améliorer nos services :
                </p>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">Informations que vous nous fournissez</h3>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Informations de compte : nom, prénom, adresse email, numéro de téléphone, adresse postale, mot de passe.</li>
                    <li>Informations de profil : photo de profil, informations sur votre exploitation agricole, préférences.</li>
                    <li>Contenu généré par l'utilisateur : messages, commentaires, évaluations, questions posées aux experts.</li>
                    <li>Informations de paiement : coordonnées bancaires, historique des transactions (nous ne stockons pas les informations complètes de votre carte de crédit).</li>
                    <li>Communications : lorsque vous nous contactez, nous pouvons conserver un enregistrement de cette communication.</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-primary-700 mt-6">Informations collectées automatiquement</h3>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Informations sur l'appareil : type d'appareil, système d'exploitation, identifiants uniques de l'appareil.</li>
                    <li>Informations de connexion : adresse IP, date et heure d'accès, pages visitées, temps passé sur la plateforme.</li>
                    <li>Informations de localisation : avec votre consentement, nous pouvons collecter des informations précises sur votre localisation pour vous fournir des services adaptés à votre région.</li>
                    <li>Cookies et technologies similaires : nous utilisons des cookies et d'autres technologies pour améliorer votre expérience, comprendre comment vous utilisez nos services et personnaliser notre contenu.</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Comment nous utilisons vos informations</h2>
                <p class="text-gray-700">
                    Nous utilisons les informations collectées pour :
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Fournir, maintenir et améliorer nos services.</li>
                    <li>Traiter vos transactions et livrer les produits commandés.</li>
                    <li>Vous connecter avec des experts agricoles et vétérinaires.</li>
                    <li>Personnaliser votre expérience et vous proposer du contenu et des produits adaptés à vos besoins.</li>
                    <li>Communiquer avec vous concernant votre compte, vos commandes, vos rendez-vous ou pour répondre à vos questions.</li>
                    <li>Vous envoyer des informations sur nos services, des mises à jour ou des offres promotionnelles (vous pouvez vous désabonner à tout moment).</li>
                    <li>Détecter, prévenir et résoudre les problèmes techniques ou de sécurité.</li>
                    <li>Respecter nos obligations légales et réglementaires.</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Partage de vos informations</h2>
                <p class="text-gray-700">
                    Nous ne vendons pas vos données personnelles à des tiers. Nous pouvons partager vos informations dans les circonstances suivantes :
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li><strong>Avec les experts :</strong> Lorsque vous prenez rendez-vous avec un vétérinaire ou un expert agricole, nous partageons les informations nécessaires pour faciliter la consultation.</li>
                    <li><strong>Avec les prestataires de services :</strong> Nous travaillons avec des prestataires de services tiers qui nous aident à exploiter notre plateforme (traitement des paiements, livraison, hébergement, etc.).</li>
                    <li><strong>Pour des raisons légales :</strong> Nous pouvons divulguer vos informations si nous estimons de bonne foi que cette divulgation est nécessaire pour se conformer à la loi, protéger nos droits ou assurer votre sécurité.</li>
                    <li><strong>Avec votre consentement :</strong> Nous pouvons partager vos informations avec des tiers lorsque vous nous donnez votre consentement explicite.</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Sécurité des données</h2>
                <p class="text-gray-700">
                    La sécurité de vos données est importante pour nous. Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos informations contre tout accès non autorisé, altération, divulgation ou destruction. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est totalement sécurisée, et nous ne pouvons garantir une sécurité absolue.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Conservation des données</h2>
                <p class="text-gray-700">
                    Nous conservons vos données personnelles aussi longtemps que nécessaire pour fournir nos services et respecter nos obligations légales. Lorsque vous supprimez votre compte, nous supprimons ou anonymisons vos informations, sauf si nous devons les conserver pour des raisons légales ou légitimes.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Vos droits</h2>
                <p class="text-gray-700">
                    Selon votre lieu de résidence, vous pouvez avoir certains droits concernant vos données personnelles :
                </p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>Droit d'accès : vous pouvez demander une copie des données personnelles que nous détenons à votre sujet.</li>
                    <li>Droit de rectification : vous pouvez demander la correction de données inexactes ou incomplètes.</li>
                    <li>Droit à l'effacement : vous pouvez demander la suppression de vos données personnelles dans certaines circonstances.</li>
                    <li>Droit à la limitation du traitement : vous pouvez demander la limitation du traitement de vos données dans certaines circonstances.</li>
                    <li>Droit à la portabilité des données : vous pouvez demander le transfert de vos données à un autre service dans un format structuré.</li>
                    <li>Droit d'opposition : vous pouvez vous opposer au traitement de vos données à des fins de marketing direct ou pour des raisons liées à votre situation particulière.</li>
                </ul>
                <p class="text-gray-700">
                    Pour exercer ces droits, veuillez nous contacter à l'adresse privacy@mahsoul.ma. Nous répondrons à votre demande dans les délais prévus par la loi applicable.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Cookies et technologies similaires</h2>
                <p class="text-gray-700">
                    Nous utilisons des cookies et des technologies similaires pour améliorer votre expérience sur notre plateforme. Vous pouvez gérer vos préférences en matière de cookies via les paramètres de votre navigateur. Pour plus d'informations sur notre utilisation des cookies, veuillez consulter notre politique en matière de cookies.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Transferts internationaux de données</h2>
                <p class="text-gray-700">
                    Vos informations peuvent être transférées et traitées dans des pays autres que celui où vous résidez. Ces pays peuvent avoir des lois différentes en matière de protection des données. Lorsque nous transférons vos données en dehors de votre pays de résidence, nous prenons des mesures appropriées pour assurer la protection de vos informations conformément à cette politique de confidentialité et aux lois applicables.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Modifications de cette politique</h2>
                <p class="text-gray-700">
                    Nous pouvons mettre à jour cette politique de confidentialité de temps à autre pour refléter les changements dans nos pratiques ou pour d'autres raisons opérationnelles, légales ou réglementaires. Nous vous encourageons à consulter régulièrement cette page pour rester informé des changements. En cas de modifications importantes, nous vous en informerons par email ou par une notification sur notre plateforme.
                </p>
                
                <h2 class="text-2xl font-bold text-primary-800 mt-8">Contact</h2>
                <p class="text-gray-700">
                    Si vous avez des questions ou des préoccupations concernant cette politique de confidentialité ou le traitement de vos données personnelles, veuillez nous contacter à :
                </p>
                <p class="text-gray-700">
                    Email : privacy@mahsoul.ma<br>
                    Adresse : 123 Rue de l'Agriculture, 10000 Ville, Maroc<br>
                    Téléphone : +212 5XX XX XX XX
                </p>
            </div>
        </div>
    </section>
@endsection
