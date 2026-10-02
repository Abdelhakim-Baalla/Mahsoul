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

        <!-- Fondateur : collage + timeline CV -->
        <section class="py-16 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <span class="eco-eyebrow mb-4">Notre fondateur</span>
                    <h2 class="font-display text-3xl md:text-4xl font-extrabold text-forest">Abdelhakim Baalla</h2>
                    <p class="text-clay mt-4 max-w-2xl mx-auto">Développeur Full-Stack, fondateur & CEO de Mahsoul — issu d'une famille d'agriculteurs, il met la technologie au service du terroir marocain.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <!-- Collage 3 photos -->
                    <div class="relative min-h-[480px]">
                        <div class="absolute top-0 left-0 w-[62%] rounded-[2rem] overflow-hidden shadow-xl rotate-[-2deg] hover:rotate-0 transition duration-500">
                            <img src="{{ asset('images/abdelhakim-baalla.jpg') }}" alt="Abdelhakim Baalla — portrait" class="w-full h-[430px] object-cover object-top" style="object-position: 50% 20%;">
                            <span class="absolute bottom-3 left-3 bg-sun text-forest text-xs font-bold px-3 py-1 rounded-full">Fondateur</span>
                        </div>
                        <div class="absolute top-6 right-0 w-[42%] rounded-[2rem] overflow-hidden shadow-xl rotate-[3deg] hover:rotate-0 transition duration-500 border-4 border-white">
                            <img src="{{ asset('images/abdelhakim-baalla-2.jpg') }}" alt="Abdelhakim Baalla — sur le terrain" class="w-full h-[200px] object-cover object-top" style="object-position: 50% 15%;">
                        </div>
                        <div class="absolute bottom-0 right-6 w-[46%] rounded-[2rem] overflow-hidden shadow-xl rotate-[-3deg] hover:rotate-0 transition duration-500 border-4 border-white">
                            <img src="{{ asset('images/abdelhakim-baalla-3.jpg') }}" alt="Abdelhakim Baalla — en consultation" class="w-full h-[210px] object-cover object-top" style="object-position: 50% 15%;">
                        </div>
                        <div class="absolute bottom-8 left-4 bg-forest text-white px-5 py-3 rounded-2xl shadow-xl">
                            <p class="font-display font-extrabold text-sun text-xl">50+ projets</p>
                            <p class="text-xs text-cream/70">Full-Stack • AgriTech</p>
                        </div>
                    </div>

                    <!-- Timeline issue du CV -->
                    <div>
                        <h3 class="font-display text-2xl font-bold text-forest mb-6">Parcours</h3>
                        <ol class="relative border-l-2 border-leaf/20 ml-3 space-y-8">
                            @foreach([
                                ['periode' => '2024 — Aujourd\'hui', 'titre' => 'Fondateur & CEO — Mahsoul', 'lieu' => 'Agadir, Maroc', 'desc' => 'Plateforme agricole : rendez-vous experts, marketplace, formation et Farm OS avec traçabilité.'],
                                ['periode' => '04/2026 — 07/2026', 'titre' => 'Développeur Full-Stack & Mobile — Larmo', 'lieu' => 'Casablanca', 'desc' => 'StoreezCOD : architecture backend scalable (Nest.js, Next.js, TypeScript, Docker, AWS).'],
                                ['periode' => '11/2025 — 04/2026', 'titre' => 'Projet LBaraka', 'lieu' => 'Maroc', 'desc' => 'App mobile d\'échange d\'équipements : NestJS, Next.js 15, React Native, Redis, Docker.'],
                                ['periode' => '05/2025 — 07/2025', 'titre' => 'Développeur Full-Stack — NJT-GROUP', 'lieu' => 'Marrakech', 'desc' => 'Gestion de tickets : création, suivi, files de priorité (PHP, Laravel, SQL, Tailwind).'],
                                ['periode' => '2024 — 2026', 'titre' => 'Formation Full-Stack — YouCode UM6P', 'lieu' => 'Youssoufia', 'desc' => 'Développement web & mobile, design, méthodes Agile/SCRUM.'],
                                ['periode' => '2023 — 2024', 'titre' => 'Bac Sciences Physiques', 'lieu' => 'Sidi-Bibi', 'desc' => 'Baccalauréat scientifique, institution privée Arij Almaarifa.'],
                            ] as $e)
                            <li class="ml-6 relative">
                                <span class="absolute -left-[33px] top-1 w-4 h-4 rounded-full bg-sun border-4 border-forest"></span>
                                <p class="text-xs font-bold tracking-widest uppercase text-leaf">{{ $e['periode'] }}</p>
                                <h4 class="font-display font-bold text-forest mt-1">{{ $e['titre'] }}</h4>
                                <p class="text-xs text-earth-500">{{ $e['lieu'] }}</p>
                                <p class="text-sm text-clay mt-1">{{ $e['desc'] }}</p>
                            </li>
                            @endforeach
                        </ol>
                        <div class="mt-8 flex flex-wrap gap-2">
                            @foreach(['PHP / Laravel', 'React / Next.js', 'Nest.js / Node.js', 'Docker / AWS', 'Google AI ✓', 'SQL HackerRank ✓'] as $skill)
                            <span class="px-3 py-1 bg-sand text-forest text-xs font-semibold rounded-full">{{ $skill }}</span>
                            @endforeach
                        </div>
                        <div class="mt-6 flex items-center gap-3">
                            <a href="https://github.com/Abdelhakim-Baalla" target="_blank" class="w-10 h-10 rounded-full bg-forest text-white flex items-center justify-center hover:bg-leaf transition" title="GitHub"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/abdelhakimbaalla/" target="_blank" class="w-10 h-10 rounded-full bg-forest text-white flex items-center justify-center hover:bg-leaf transition" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://baalla.tech" target="_blank" class="w-10 h-10 rounded-full bg-forest text-white flex items-center justify-center hover:bg-leaf transition" title="Portfolio"><i class="fas fa-globe"></i></a>
                            <a href="mailto:abdelhakimbaalla50@gmail.com" class="w-10 h-10 rounded-full bg-forest text-white flex items-center justify-center hover:bg-leaf transition" title="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
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