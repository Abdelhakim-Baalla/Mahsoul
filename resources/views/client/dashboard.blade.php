@extends('layouts.app')
@if(Auth::user()->type == 'client')
@section('title', 'Tableau de bord client - Mahsoul')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <div class="md:w-1/4">
                <div class="card-eco bg-white p-6 mb-6">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-forest/10 flex items-center justify-center">
                            <img src="{{ Auth::user()->photo ?? asset('images/default-avatar.jpg') }}" class="rounded-full" alt="{{ Auth::user()->prenom }} {{ Auth::user()->nom }}">
                        </div>
                        <div class="ml-4">
                            <h2 class="font-display font-bold text-forest">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
                            <p class="text-clay text-sm">Client</p>
                        </div>
                    </div>
                    
                    <nav class="space-y-1">
                        <a href="{{ route('client.dashboard') }}" class="flex items-center px-4 py-2.5 bg-forest/10 text-forest rounded-xl font-medium">Tableau de bord</a>
                        <a href="{{ route('client.consultations.index') }}" class="flex items-center px-4 py-2.5 text-clay hover:bg-forest/5 hover:text-forest rounded-xl">Mes consultations</a>
                        <a href="{{ route('client.orders.index') }}" class="flex items-center px-4 py-2.5 text-clay hover:bg-forest/5 hover:text-forest rounded-xl">Mes commandes</a>
                        <a href="{{ route('client.documents.index') }}" class="flex items-center px-4 py-2.5 text-clay hover:bg-forest/5 hover:text-forest rounded-xl">Mes documents</a>
                        <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2.5 text-clay hover:bg-forest/5 hover:text-forest rounded-xl">Mon profil</a>
                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="flex items-center w-full px-4 py-2.5 text-rose-600 hover:bg-rose-50 rounded-xl">Déconnexion</button>
                        </form>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="md:w-3/4">
                <!-- Welcome Card -->
                <div class="card-eco bg-white p-6 mb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="eco-eyebrow mb-2">Espace client</span>
                            <h1 class="font-display text-3xl font-extrabold text-forest">Bienvenue, {{ Auth::user()->prenom }} {{ Auth::user()->nom }} </h1>
                            <p class="text-clay mt-1">Voici un aperçu de votre activité sur Mahsoul</p>
                        </div>
                        <div class="hidden md:block">
                            <span class="text-sm text-earth-500">{{ date('d-m-Y H:m') }}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Orders Stats -->
                    <div class="card-eco bg-white p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-xl bg-sun/10 flex items-center justify-center">
                                <i class="fas fa-shopping-bag text-sun text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-clay">Commandes</p>
                                <p class="font-display font-bold text-2xl text-forest">{{ $countCommandes }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Consultations Stats -->
                    <div class="card-eco bg-white p-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-xl bg-leaf/10 flex items-center justify-center">
                                <i class="fas fa-stethoscope text-leaf text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-clay">Consultations</p>
                                <p class="font-display font-bold text-2xl text-forest">{{ $countRendezVous }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@elseif(Auth::user()->type == 'admin')
<script>
    window.location.href = "{{ route('admin.dashboard') }}";
</script>
@elseif(Auth::user()->type == 'agricole')
<script>
    window.location.href = "{{ route('agricole.dashboard') }}";
</script>
@elseif(Auth::user()->type == 'veterinaire')
<script>
    window.location.href = "{{ route('vet.dashboard') }}";
</script>
@endif