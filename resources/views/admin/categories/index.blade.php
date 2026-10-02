@extends('layouts.admin')

@section('title', 'Gestion des catégories - Mahsoul Admin')

@section('content')
<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="eco-eyebrow mb-2">Administration</span>
                <h1 class="font-display text-3xl font-extrabold text-forest">Gestion des catégories</h1>
                <p class="mt-2 text-clay">Organisez vos produits par catégories</p>
            </div>
            <a href="{{ route('admin.categories.add') }}" class="btn-sun shrink-0" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <i class="fas fa-plus mr-2"></i>Ajouter une catégorie
            </a>
        </div>

        <div class="card-eco bg-white overflow-hidden">
            <div class="p-5 border-b border-earth-200">
                <form action="{{ route('admin.categories.index') }}" method="GET" class="flex gap-4 flex-wrap">
                    <div class="flex-1 min-w-[200px]">
                        <label for="search" class="sr-only">Rechercher</label>
                        <div class="relative">
                            <input type="text" id="search" name="q" value="{{ request('q') }}" placeholder="Rechercher une catégorie..."
                                   class="w-full pl-10 pr-4 py-3 input-eco"
                               aria-label="Rechercher">
                            <svg class="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-earth-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <button type="submit" class="px-4 py-3 btn-eco text-sm">Filtrer</button>
                @if(request()->has('q'))
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 text-forest hover:text-forest-dark font-medium text-sm underline">Réinitialiser</a>
                @endif
            </form>
        </div>

        <div class="card-eco bg-white overflow-hidden">
            @if($categories->isEmpty())
            <div class="p-12 text-center">
                <i class="fas fa-folder-open text-forest/30 text-6xl mb-4"></i>
                <h3 class="font-display text-xl font-bold text-forest mb-2">Aucune catégorie</h3>
                <p class="text-clay">Aucune catégorie n'a été créée.</p>
                <a href="{{ route('admin.categories.add') }}" class="mt-4 inline-block btn-sun" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Créer la première catégorie</a>
            </div>
            @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-earth-200">
                    <thead class="thead-eco">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Nom</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold">Date</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-earth-200">
                        @foreach($categories as $categorie)
                        <tr class="hover:bg-sand/30">
                            <td class="px-6 py-4 font-mono text-sm text-forest">{{ $categorie->id }}</td>
                            <td class="px-6 py-4 font-semibold text-forest">{{ $categorie->nom }}</td>
                            <td class="px-6 py-4 text-sm text-clay">{{ $categorie->description ?? '—' }}</td>
                            <td class="px-6 py-4 text-sm text-earth-500">{{ $categorie->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <form action="{{ route('admin.categories.edit') }}" method="POST" class="inline-block">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $categorie->id }}">
                                        <button type="submit" class="px-3 py-1.5 bg-leaf/10 text-leaf text-sm font-medium rounded-full hover:bg-leaf/20 transition">Modifier</button>
                                    </form>
                                    <form action="{{ route('admin.categories.delete') }}" method="POST" onsubmit="return confirm('Supprimer cette catégorie ?')" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $categorie->id }}">
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
    </div>
</div>
@endsection