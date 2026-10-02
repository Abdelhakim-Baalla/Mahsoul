@extends('layouts.app')

@section('content')
    {{-- HERO style Ecoland --}}
    <section class="relative overflow-hidden bg-sand">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-sun/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-leaf/10 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 z-10">
                    <span class="eco-eyebrow mb-6">Agriculture naturelle & durable</span>
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-black leading-[1.05] text-forest mb-6">
                        Nous produisons du <span class="text-leaf">naturel</span>, pour une vie saine
                    </h1>
                    <p class="text-lg text-clay mb-8 max-w-lg">
                        Consultations d'experts, marketplace de produits du terroir et Farm OS avec traçabilité complète — du champ jusqu'à l'export.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('experts.index') }}" class="btn-eco">
                            Réserver une consultation <i class="fas fa-arrow-right text-sm"></i>
                        </a>
                        <a href="{{ route('products.index') }}" class="btn-outline-eco">
                            Voir la marketplace
                        </a>
                    </div>
                    <div class="mt-10 flex items-center gap-8">
                        <div>
                            <p class="font-display text-3xl font-extrabold text-forest">12+</p>
                            <p class="text-sm text-clay">Produits du terroir</p>
                        </div>
                        <div class="w-px h-12 bg-forest/15"></div>
                        <div>
                            <p class="font-display text-3xl font-extrabold text-forest">6</p>
                            <p class="text-sm text-clay">Experts vérifiés</p>
                        </div>
                        <div class="w-px h-12 bg-forest/15"></div>
                        <div>
                            <p class="font-display text-3xl font-extrabold text-forest">100%</p>
                            <p class="text-sm text-clay">Lots tracés</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="relative z-10 overflow-hidden rounded-[2rem] shadow-2xl">
                        <img class="w-full h-[420px] object-cover" src="{{ asset('images/farm.jpg') }}" alt="Exploitation agricole marocaine">
                    </div>
                    <div class="absolute -bottom-5 -left-5 bg-white px-5 py-4 rounded-2xl shadow-xl z-20 flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-leaf/10 flex items-center justify-center">
                            <i class="fas fa-leaf text-leaf text-xl"></i>
                        </div>
                        <div>
                            <p class="font-display font-extrabold text-forest">100% Bio</p>
                            <p class="text-xs text-clay">Production vérifiée</p>
                        </div>
                    </div>
                    <div class="absolute -top-5 -right-3 bg-forest text-white px-5 py-3 rounded-2xl shadow-xl z-20">
                        <p class="font-display font-extrabold text-sun text-xl">4.8/5</p>
                        <p class="text-xs text-cream/70">Avis agriculteurs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Marquee --}}
    <div class="bg-forest text-sun py-4 marquee-eco">
        <span>✦ Bio &nbsp;&nbsp; ✦ Marketplace &nbsp;&nbsp; ✦ Experts vérifiés &nbsp;&nbsp; ✦ Traçabilité &nbsp;&nbsp; ✦ Farm OS &nbsp;&nbsp; ✦ Export &nbsp;&nbsp; ✦ Bio &nbsp;&nbsp; ✦ Marketplace &nbsp;&nbsp; ✦ Experts vérifiés &nbsp;&nbsp; ✦ Traçabilité &nbsp;&nbsp; ✦ Farm OS &nbsp;&nbsp; ✦ Export &nbsp;&nbsp;</span>
    </div>

    {{-- SERVICES --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center mb-14">
                <span class="eco-eyebrow mb-4">Nos services</span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">Tout pour votre exploitation, au même endroit</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card-eco bg-sand p-8">
                    <div class="w-14 h-14 rounded-2xl bg-leaf flex items-center justify-center mb-5"><i class="fas fa-stethoscope text-white text-xl"></i></div>
                    <h3 class="font-display text-xl font-bold text-forest mb-2">Consultations d'experts</h3>
                    <p class="text-clay text-sm mb-5">Vétérinaires et ingénieurs agricoles disponibles en ligne, avec documents partagés.</p>
                    <a href="{{ route('experts.index') }}" class="font-display font-bold text-leaf text-sm">Réserver <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
                <div class="card-eco bg-sand p-8">
                    <div class="w-14 h-14 rounded-2xl bg-forest flex items-center justify-center mb-5"><i class="fas fa-shopping-basket text-sun text-xl"></i></div>
                    <h3 class="font-display text-xl font-bold text-forest mb-2">Marketplace</h3>
                    <p class="text-clay text-sm mb-5">Produits du terroir, paiement sécurisé et livraison suivie.</p>
                    <a href="{{ route('products.index') }}" class="font-display font-bold text-leaf text-sm">Acheter <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
                <div class="card-eco bg-sand p-8">
                    <div class="w-14 h-14 rounded-2xl bg-sun flex items-center justify-center mb-5"><i class="fas fa-graduation-cap text-forest text-xl"></i></div>
                    <h3 class="font-display text-xl font-bold text-forest mb-2">Formation</h3>
                    <p class="text-clay text-sm mb-5">Guides pratiques : irrigation, bio, élevage, commercialisation.</p>
                    <a href="{{ route('articles.index') }}" class="font-display font-bold text-leaf text-sm">Apprendre <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
                <div class="card-eco bg-forest p-8">
                    <div class="w-14 h-14 rounded-2xl bg-sun flex items-center justify-center mb-5"><i class="fas fa-barcode text-forest text-xl"></i></div>
                    <h3 class="font-display text-xl font-bold text-white mb-2">Farm OS & traçabilité</h3>
                    <p class="text-cream/70 text-sm mb-5">Ouvriers, stocks, caisse et passeports lots avec QR code pour l'export.</p>
                    <a href="{{ route('farm.dashboard') }}" class="font-display font-bold text-sun text-sm">Piloter ma ferme <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- STEPS --}}
    <section class="py-20 bg-cream/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center mb-14">
                <span class="eco-eyebrow mb-4">Comment ça marche</span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">De votre champ à la vente, en 4 étapes</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @foreach([
                    ['01', 'Créez votre compte', 'Client, vétérinaire ou expert agricole en 2 minutes.'],
                    ['02', 'Réservez un expert', 'Choisissez le spécialiste adapté à votre besoin.'],
                    ['03', 'Recevez conseils & documents', 'Compte-rendu PDF et ordonnances partagés.'],
                    ['04', 'Commandez & tracez', 'Marketplace livrée, lots suivis par QR code.'],
                ] as [$n, $t, $d])
                <div class="card-eco bg-white p-7 relative">
                    <span class="font-display text-5xl font-black text-sun/60 absolute top-4 right-6">{{ $n }}</span>
                    <h3 class="font-display text-lg font-bold text-forest mb-2 mt-6">{{ $t }}</h3>
                    <p class="text-clay text-sm">{{ $d }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center mb-14">
                <span class="eco-eyebrow mb-4">Ils nous font confiance</span>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">4.8/5 d'après nos agriculteurs</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="card-eco bg-sand p-8">
                    <div class="text-sun mb-3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="text-forest italic mb-5">« Le vétérinaire a diagnostiqué mon cheptel en visio le jour même. Service sérieux, documents clairs. »</p>
                    <p class="font-display font-bold text-forest">Omar B. <span class="font-normal text-clay text-sm">— Éleveur, Meknès</span></p>
                </div>
                <div class="card-eco bg-sand p-8">
                    <div class="text-sun mb-3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                    <p class="text-forest italic mb-5">« La traçabilité par lot a convaincu mon client export. Le QR code sur les cartons fait très professionnel. »</p>
                    <p class="font-display font-bold text-forest">Yasmine E. <span class="font-normal text-clay text-sm">— Maraîchère, Souss</span></p>
                </div>
            </div>
        </div>
    </section>

    @guest
    <section class="bg-forest py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <h2 class="font-display text-3xl md:text-4xl font-extrabold text-white">Prêt à faire grandir votre exploitation ?</h2>
                <p class="text-cream/70 mt-3">Rejoignez Mahsoul et accédez aux experts, à la marketplace et au Farm OS.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 shrink-0">
                <a href="{{ route('register') }}" class="btn-sun">S'inscrire gratuitement</a>
                <a href="{{ route('experts.index') }}" class="btn-outline-eco !border-sun !text-sun hover:!bg-sun hover:!text-forest">Réserver une consultation</a>
            </div>
        </div>
    </section>
    @endguest
@endsection
