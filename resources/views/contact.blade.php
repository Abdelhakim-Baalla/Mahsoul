@extends('layouts.app')

@section('title', 'Contact - Mahsoul')

@section('content')
@include('components.page-hero', ['eyebrow' => 'Contact', 'title' => 'Parlons de votre exploitation', 'subtitle' => 'Une question, un partenariat, un problème technique ? Écrivez-nous.'])

<div class="min-h-screen bg-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
            <!-- Formulaire -->
            <div class="bg-white rounded-3xl shadow-xl border border-earth-200 p-8 order-2 lg:order-1">
                <h2 class="font-display text-3xl font-extrabold text-forest mb-8">Envoyez-nous un message</h2>

                @if(session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-xl">
                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                </div>
                @endif
                @if($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-xl">
                    <ul class="list-disc pl-5 text-sm text-red-700 space-y-1">
                        @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-forest mb-1.5">Prénom</label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="w-full px-4 py-3 input-eco" required>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-forest mb-1.5">Nom</label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="w-full px-4 py-3 input-eco">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-forest mb-1.5">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 input-eco" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-forest mb-1.5">Téléphone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 input-eco">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="subject" class="block text-sm font-medium text-forest mb-1.5">Sujet</label>
                        <select name="subject" class="w-full input-eco px-4 py-3 appearance-none bg-white">
                            <option value="">Sélectionnez un sujet</option>
                            <option value="consultation">Demande de consultation</option>
                            <option value="marketplace">Question sur la Marketplace</option>
                            <option value="formation">Question sur la Formation</option>
                            <option value="technical">Support technique</option>
                            <option value="partnership">Partenariat</option>
                            <option value="other">Autre demande</option>
                        </select>
                    </div>
                    <div class="col-span-1 sm:col-span-2">
                        <label for="message" class="block text-sm font-medium text-forest mb-1.5">Votre message</label>
                        <textarea name="message" rows="5" class="w-full px-4 py-3 input-eco" required>{{ old('message') }}</textarea>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="privacy" name="privacy" type="checkbox" class="h-4 w-4 text-forest focus:ring-forest border-earth-300 rounded" required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="privacy" class="text-clay">
                                J'accepte la <a href="{{ route('privacy') }}" class="text-leaf hover:underline font-medium">politique de confidentialité</a>.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn-eco w-full">Envoyer le message</button>
                </form>
            </div>

            <!-- Infos contact -->
            <div class="bg-forest rounded-3xl p-8 md:p-14 flex flex-col md:flex-row items-center justify-between gap-8 shadow-xl">
                <div>
                    <h2 class="font-display text-3xl md:text-4xl font-extrabold text-white">Prêt à faire grandir votre exploitation ?</h2>
                    <p class="text-cream/70 mt-3">Rejoignez Mahsoul et accédez aux experts, à la marketplace et au Farm OS.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 shrink-0">
                    <a href="{{ route('register') }}" class="btn-sun">S'inscrire gratuitement</a>
                    <a href="{{ route('experts.index') }}" class="btn-outline-eco !border-sun !text-sun hover:!bg-sun hover:!text-forest">Réserver une consultation</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection