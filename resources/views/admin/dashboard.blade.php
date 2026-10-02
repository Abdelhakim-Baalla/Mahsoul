@extends('layouts.admin')

@section('title', 'Tableau de bord administrateur - Mahsoul')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <span class="eco-eyebrow mb-3">Administration</span>
            <h1 class="font-display text-3xl font-extrabold text-forest">Tableau de bord administrateur</h1>
        </div>

        <!-- Cartes de statistiques -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <!-- Utilisateurs -->
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-leaf/10 flex items-center justify-center">
                        <i class="fas fa-users text-leaf text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Total Utilisateurs</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $statistiques['utilisateurs'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Produits -->
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-sun/10 flex items-center justify-center">
                        <i class="fas fa-box text-sun text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Total Produits</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $statistiques['produits'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Commandes -->
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-forest/10 flex items-center justify-center">
                        <i class="fas fa-shopping-bag text-forest text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Commandes</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $statistiques['commandes'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Consultations -->
            <div class="card-eco bg-white p-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-xl bg-leaf/10 flex items-center justify-center">
                        <i class="fas fa-stethoscope text-leaf text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-clay">Consultations</p>
                        <p class="font-display font-bold text-2xl text-forest">{{ $statistiques['consultations'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Utilisateurs récents -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200 flex items-center justify-between">
                    <h2 class="font-display text-xl font-bold text-forest">Utilisateurs récents</h2>
                    <a href="{{ route('admin.users.index') }}" class="text-sm font-medium text-leaf hover:text-forest">Voir tout <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-earth-200">
                        <thead class="thead-eco">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold">Utilisateur</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold">Email</th>
                                <th class="px-6 py-3 text-right text-xs font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-earth-100">
                            @foreach($statistiques['allUtilisateurs'] as $utilisateur)
                            <tr class="hover:bg-sand/30">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="{{ $utilisateur->photo ?? asset('images/default-avatar.jpg') }}" alt="{{ $utilisateur->nom }}" class="w-10 h-10 rounded-full object-cover">
                                        <div class="ml-3">
                                            <div class="font-semibold text-forest">{{ $utilisateur->prenom }} {{ $utilisateur->nom }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($utilisateur->type == 'admin')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-forest/10 text-forest"><i class="fas fa-user-shield mr-1"></i>Admin</span>
                                    @elseif($utilisateur->type == 'agricole')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-leaf/10 text-leaf"><i class="fas fa-tractor mr-1"></i>Agricole</span>
                                    @elseif($utilisateur->type == 'veterinaire')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-sky-100 text-sky-700"><i class="fas fa-stethoscope mr-1"></i>Vétérinaire</span>
                                    @elseif($utilisateur->type == 'client')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-sun/20 text-sun-700"><i class="fas fa-user mr-1"></i>Client</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-clay">{{ $utilisateur->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('admin.users.show', $utilisateur->id) }}" class="text-leaf hover:text-forest font-medium">Voir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Actions rapides -->
            <div class="card-eco bg-white overflow-hidden">
                <div class="p-6 border-b border-earth-200">
                    <h2 class="font-display text-xl font-bold text-forest">Actions rapides</h2>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 p-6">
                    <a href="{{ route('admin.users.create') }}" class="card-eco bg-cream p-5 text-center hover:shadow-lg transition">
                        <i class="fas fa-user-plus text-2xl text-leaf mb-2"></i>
                        <p class="font-semibold text-forest">Nouvel utilisateur</p>
                    </a>
                    <a href="{{ route('admin.products.create') }}" class="card-eco bg-cream p-5 text-center hover:shadow-lg transition">
                        <i class="fas fa-plus-circle text-2xl text-sun mb-2"></i>
                        <p class="font-semibold text-forest">Nouveau produit</p>
                    </a>
                    <a href="{{ route('admin.categories.create') }}" class="card-eco bg-cream p-5 text-center hover:shadow-lg transition">
                        <i class="fas fa-tags text-2xl text-leaf mb-2"></i>
                        <p class="font-semibold text-forest">Nouvelle catégorie</p>
                    </a>
                    <a href="{{ route('admin.articles.create') }}" class="card-eco bg-cream p-5 text-center hover:shadow-lg transition">
                        <i class="fas fa-pen-nib text-2xl text-sky-500 mb-2"></i>
                        <p class="font-semibold text-forest">Nouvel article</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection