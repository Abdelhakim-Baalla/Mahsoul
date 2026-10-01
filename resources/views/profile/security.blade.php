@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Sécurité</h1>
            <p class="mt-2 text-lg text-gray-600">Protégez votre compte avec un mot de passe fort</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                @include('profile.partials.sidebar', ['active' => 'security'])
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Changer le mot de passe</h2>
                    </div>
                    <form action="{{ route('profile.security.update') }}" method="POST" class="p-6 space-y-6">
                        @csrf
                        @method('PUT')
                        @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
                            <p class="text-sm text-green-700">{{ session('success') }}</p>
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                            <ul class="list-disc pl-5 text-sm text-red-700 space-y-1">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div>
                            <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe actuel</label>
                            <input type="password" id="current_password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                            <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                            <p class="mt-1 text-xs text-gray-500">Minimum 8 caractères</p>
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le nouveau mot de passe</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                        </div>
                        <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
