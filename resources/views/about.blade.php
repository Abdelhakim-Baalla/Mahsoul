@extends('layouts.app')

@section('title', 'À propos - Mahsoul')

@section('content')
@include('components.page-hero', ['eyebrow' => 'À propos', 'title' => 'La technologie au service des agriculteurs', 'subtitle' => 'Depuis 2024, Mahsoul digitalise le secteur agricole marocain.'])

<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Notre histoire -->
        <section class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="eco-eyebrow mb-4">Notre histoire</span>
                    <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest mb-6">Digitaliser l'agriculture pour la rendre plus juste</h2>
                    <div class="space-y-4 text-clay text-lg">
                        <p>Fondée en 2024, Mahsoul est née d'une vision simple mais puissante : révolutionner le secteur agricole en mettant la technologie au service des agriculteurs. Notre fondateur, issu d'une famille d'agriculteurs, a constaté les défis quotidiens auxquels font face les exploitants agricoles.</p>
                        <p>Face aux difficultés d'accès aux conseils d'experts, aux produits de qualité et aux connaissances techniques, nous avons créé une plateforme complète qui répond à tous ces besoins en un seul endroit.</                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/farm.jpg') }}" alt="L'équipe Mahsoul" class="rounded-3xl shadow-xl w-full">
                    <div class="absolute -bottom-6 -right-6 bg-sun rounded-2xl p-6 shadow-xl">
                        <p class="text-white font-bold text-xl">Depuis 2024</p>
                        <p class="text-white/90">Au service des agriculteurs</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <span class="eco-eyebrow mb-4">Notre raison d'être</span>
                    <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">Notre mission et notre vision</h2>
                    <p class="mt-4 text-lg text-clay max-w-2xl mx-auto">Guidés par des valeurs fortes, nous travaillons chaque jour pour transformer le secteur agricole.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Mission -->
                    <div class="card-eco bg-cream p-8">
                        <div class="w-14 h-14 rounded-2xl bg-leaf/10 flex items-center justify-center mb-6">
                            <i class="fas fa-bullseye text-leaf text-2xl"></i>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-forest mb-4">Notre mission</h3>
                        <p class="text-clay">Connecter les agriculteurs aux meilleurs experts, produits et connaissances pour une agriculture plus rentable, durable et résiliente.</                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="card-eco bg-cream p-8">
                        <div class="w-14 h-14 rounded-2xl bg-sun/10 flex items-center justify-center mb-6">
                            <i class="fas fa-eye text-sun text-2xl"></i>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-forest mb-4">Notre vision</h3>
                        <p class="text-clay">Devenir la plateforme de référence de l'agriculture digitale au Maroc et en Afrique, où chaque agriculteur trouve l'expertise et les ressources dont il a besoin.</                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Valeurs -->
        <section class="py-16 bg-sand/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <span class="eco-eyebrow mb-4">Nos valeurs</span>
                    <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">Ce qui guide nos actions</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach([
                        ['icone' => 'fa-handshake', 'titre' => 'Confiance', 'desc' => 'Transparence totale sur les prix, les experts et les produits.'],
                        ['icone' => 'fa-leaf', 'titre' => 'Durabilité', 'desc' => 'Pratiques respectueuses de l\'environnement et des sols.'],
                        ['icone' => 'fa-lightbulb', 'titre' => 'Innovation', 'desc' => 'Technologie au service de l\'agriculteur, pas l\'inverse.'],
                        ['icone' => 'fa-users', 'titre' => 'Proximité', 'desc' => 'Écoute terrain, solutions adaptées à chaque terroir.'],
                    ] as $v)
                    <div class="card-eco bg-cream p-8 text-center hover:shadow-xl transition-shadow">
                        <div class="w-14 h-14 rounded-2xl bg-forest/10 flex items-center justify-center mx-auto mb-4">
                            <i class="fas {{ $v['icone'] }} text-forest text-2xl"></i>
                        </div>
                        <h3 class="font-display text-xl font-bold text-forest mb-2">{{ $v['titre'] }}</h3>
                        <p class="text-clay">{{ $v['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Équipe -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <span class="eco-eyebrow mb-4">Notre fondateur</span>
                    <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">Abdelhakim Baalla</h2>
                    <p class="text-clay mt-4 max-w-2xl mx-auto">Fondateur & CEO de Mahsoul, développeur Full-Stack passionné par l'AgriTech, issu d'une famille d'agriculteurs marocains.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    @foreach([
                        ['photo' => 'abdelhakim-baalla.jpg', 'alt' => 'Abdelhakim Baalla - Portrait', 'description' => 'Portrait officiel du fondateur'],
                        ['photo' => 'abdelhakim-baalla-2.jpg', 'alt' => 'Abdelhakim Baalla - Sur le terrain', 'description' => 'Sur le terrain avec les agriculteurs'],
                        ['photo' => 'abdelhakim-baalla-3.jpg', 'alt' => 'Abdelhakim Baalla - En consultation', 'description' => 'En consultation avec des experts agricoles'],
                    ] as $p)
                    <div class="card-eco bg-cream overflow-hidden relative group">
                        <div class="aspect-square overflow-hidden">
                            <img src="{{ asset('images/' . $p['photo']) }}" alt="{{ $p['alt'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6">
                            <h3 class="font-display font-bold text-forest mb-2">Abdelhakim Baalla</h3>
                            <p class="text-clay text-sm">{{ $p['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        @guest
        <section class="bg-white py-16">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-forest rounded-[2.5rem] px-8 py-14 md:p-14 flex flex-col md:flex-row items-center justify-between gap-8 shadow-xl">
                    <div>
                        <h2 class="font-display text-3xl md:text-4xl font-extrabold text-white">Prêt à faire grandir votre exploitation ?</h2>
                        <p class="text-cream/70 mt-3">Rejoignez Mahsoul et accédez aux experts, à la marketplace et au Farm OS.</                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 shrink-0">
                        <a href="{{ route('register') }}" class="btn-sun">S'inscrire gratuitement</a>
                        <a href="{{ route('experts.index') }}" class="btn-outline-eco !border-sun !text-sun hover:!bg-sun hover:!text-forest">Réserver une consultation</a>
                    </div>
                </div>
            </div>
        </section>
        @endguest
    </div>
</div>
@endsection