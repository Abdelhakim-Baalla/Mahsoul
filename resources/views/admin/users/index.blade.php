@extends('layouts.admin')

@section('title', 'Gestion des utilisateurs - Mahsoul Admin')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="eco-eyebrow mb-2">Administration</span>
                <h1 class="font-display text-3xl font-extrabold text-forest">Gestion des utilisateurs</h1>
                <p class="mt-2 text-clay">Gérez les comptes utilisateurs de la plateforme</p>
            </div>
        </div>

        <!-- Filtres et recherche -->
        <div class="card-eco bg-white p-5 mb-8">
            <form action="{{ route('admin.users.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <label for="search" class="sr-only">Rechercher</label>
                    <div class="relative">
                        <input type="text" id="search" name="q" value="{{ request('q') }}" placeholder="Rechercher un utilisateur..."
                               class="w-full pl-10 pr-4 py-3 input-eco" aria-label="Rechercher un utilisateur">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-earth-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-forest mb-1">Type</label>
                    <select name="type" onchange="this.form.submit()" class="w-full input-eco px-4 py-2">
                        <option value="">Tous les types</option>
                        <option value="admin" {{ request('type') == 'admin' ? 'selected' : '' }}>Administrateur</option>
                        <option value="agricole" {{ request('type') == 'agricole' ? 'selected' : '' }}>Expert agricole</option>
                        <option value="veterinaire" {{ request('type') == 'veterinaire' ? 'selected' : '' }}>Vétérinaire</option>
                        <option value="client" {{ request('type') == 'client' ? 'selected' : '' }}>Client</option>
                    </select>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium text-forest mb-1">Statut</label>
                    <select name="status" onchange="this.form.submit()" class="w-full input-eco px-4 py-2">
                        <option value="">Tous les statuts</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="px-4 py-2 btn-eco text-sm">Filtrer</button>
                    @if(!empty(array_filter(request()->only(['q', 'type', 'status']))))
                    <a href="{{ route('admin.users.index') }}" class="text-sm text-forest hover:underline ml-4">Réinitialiser</a>
                    @endif
                </div>
            </form>
        </div>

        <!-- Liste des utilisateurs -->
        <div class="card-eco bg-white overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-earth-200">
                    <thead class="thead-eco">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Utilisateur</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Rôle</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-earth-200">
                        @foreach($utilisateurs as $utilisateur)
                        <tr class="hover:bg-sand/30">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="{{ $utilisateur->photo ?? asset('images/default-avatar.jpg') }}" alt="{{ $utilisateur->prenom }} {{ $utilisateur->nom }}" class="w-10 h-10 rounded-full object-cover mr-3">
                                    <div>
                                        <p class="font-semibold text-forest">{{ $utilisateur->prenom }} {{ $utilisateur->nom }}</p>
                                        <p class="text-xs text-earth-500">ID: #{{ $utilisateur->id }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-clay">{{ $utilisateur->email }}</td>
                            <td class="px-6 py-4">
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
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.users.show', $utilisateur->id) }}" class="px-3 py-1.5 bg-forest/10 text-forest text-sm font-medium rounded-full hover:bg-forest/20 transition">Voir</a>
                                    <a href="{{ route('admin.users.edit', $utilisateur->id) }}" class="px-3 py-1.5 bg-leaf/10 text-leaf text-sm font-medium rounded-full hover:bg-leaf/20 transition">Modifier</a>
                                    <form action="{{ route('admin.users.delete', $utilisateur->id) }}" method="POST" onsubmit="return confirm('Supprimer cet utilisateur ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-rose-50 text-rose-600 text-sm font-medium rounded-full hover:bg-rose-100 transition">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

        {{ $utilisateurs->links('pagination::tailwind') }}
    </div>
</div>
@endsection