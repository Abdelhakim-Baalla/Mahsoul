@extends('layouts.app')

@section('title', 'Techniques d\'irrigation modernes pour économiser l\'eau')

@section('content')
<section class="py-12 diagonal-box bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Fil d'Ariane -->
        <div class="flex items-center gap-2 text-gray-600 mb-6">
            <a href="{{ url('formation') }}" class="hover:text-primary-600 hover:underline">Articles</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-900 font-medium">{{$article->titre}}</span>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Article principal -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- Image principale -->
                    <div class="relative h-80 w-full">
                        <img src="{{$article->photo}}" alt="{{$article->titre}}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>
                    
                    <!-- Contenu de l'article -->
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{$article->titre}}</h1>
                        
                        <!-- Métadonnées -->
                        <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-gray-600">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/40x40" alt="Ahmed Benali" class="w-8 h-8 rounded-full mr-2">
                                <span>Par <a href="#" class="text-primary-600 hover:underline">Ahmed Benali</a></span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 012-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{$article->created_at->format('d/m/Y')}}</span>
                            </div>
                            <!-- Affichage de la catégorie -->
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                                <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">{{$article->categorie}}</span>
                            </div>
                        </div>

                        <!-- Contenu -->
                        <div class="prose max-w-none text-gray-700">
                            {!! $article->contenu !!}
                        </div>
                        
                        <!-- Section commentaires -->
                        <div class="mt-10 border-t pt-8">
                            <h3 class="text-xl font-semibold mb-6">Commentaires (8)</h3>
                            
                            <!-- Formulaire de commentaire -->
                            <div class="mb-8 bg-gray-50 p-4 rounded-xl">
                                <h4 class="text-lg font-medium mb-4">Laisser un commentaire</h4>
                                <form>
                                    <div class="mb-4">
                                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent" placeholder="Votre commentaire..."></textarea>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit" class="px-6 py-2 bg-primary-600 text-white rounded-xl hover:bg-primary-700 transition font-medium">Publier</button>
                                    </div>
                                </form>
                            </div>
                            
                            <!-- Liste des commentaires -->
                            <div class="space-y-6">
                                <!-- Commentaire 1 -->
                                <div class="bg-gray-50 p-4 rounded-xl">
                                    <div class="flex items-start gap-4">
                                        <img src="https://via.placeholder.com/40x40" alt="Utilisateur" class="w-10 h-10 rounded-full">
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1">
                                                <h5 class="font-medium">Karim Alaoui</h5>
                                                <span class="text-sm text-gray-500">Il y a 2 jours</span>
                                            </div>
                                            <p class="text-gray-700">J'ai installé un système goutte-à-goutte l'année dernière et je confirme les économies d'eau. Par contre, j'ai eu quelques problèmes avec le colmatage des goutteurs. Avez-vous des conseils pour l'entretien ?</p>
                                            <div class="mt-3 flex items-center gap-4">
                                                <button class="text-sm text-gray-600 hover:text-primary-600 flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                    12
                                                </button>
                                                <button class="text-sm text-gray-600 hover:text-primary-600">Répondre</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Réponse au commentaire -->
                                    <div class="ml-12 mt-4 pl-4 border-l-2 border-gray-200">
                                        <div class="flex items-start gap-4">
                                            <img src="https://via.placeholder.com/40x40" alt="Auteur" class="w-8 h-8 rounded-full">
                                            <div>
                                                <div class="flex items-center gap-2 mb-1">
                                                    <h5 class="font-medium">Ahmed Benali</h5>
                                                    <span class="bg-primary-100 text-primary-800 text-xs px-2 py-0.5 rounded">Auteur</span>
                                                    <span class="text-sm text-gray-500">Il y a 1 jour</span>
                                                </div>
                                                <p class="text-gray-700">Bonjour Karim, pour éviter le colmatage, je recommande un nettoyage régulier avec une solution d'acide citrique dilué. Vous pouvez aussi installer un filtre à disques en amont du système. N'hésitez pas à me contacter pour plus de détails.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Commentaire 2 -->
                                <div class="bg-gray-50 p-4 rounded-xl">
                                    <div class="flex items-start gap-4">
                                        <img src="https://via.placeholder.com/40x40" alt="Utilisateur" class="w-10 h-10 rounded-full">
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1">
                                                <h5 class="font-medium">Fatima Zahra</h5>
                                                <span class="text-sm text-gray-500">Il y a 3 jours</span>
                                            </div>
                                            <p class="text-gray-700">Article très instructif ! J'aimerais savoir si ces systèmes sont adaptés aux petites exploitations de moins d'un hectare ? Le coût n'est-il pas prohibitif pour les petits agriculteurs ?</p>
                                            <div class="mt-3 flex items-center gap-4">
                                                <button class="text-sm text-gray-600 hover:text-primary-600 flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                    8
                                                </button>
                                                <button class="text-sm text-gray-600 hover:text-primary-600">Répondre</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Voir plus de commentaires -->
                                <button class="w-full py-3 text-center text-primary-600 hover:text-primary-800 font-medium border border-gray-200 rounded-xl hover:bg-gray-50 transition">
                                    Voir plus de commentaires
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:w-1/3 space-y-6">
                <!-- Auteur -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">À propos de l'auteur</h3>
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://via.placeholder.com/80x80" alt="Ahmed Benali" class="w-16 h-16 rounded-full">
                        <div>
                            <h4 class="font-medium">Ahmed Benali</h4>
                            <p class="text-sm text-gray-600">Expert en irrigation et techniques agricoles</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Ingénieur agronome avec plus de 15 ans d'expérience dans le développement de systèmes d'irrigation durables pour les exploitations agricoles au Maroc.</p>
                    <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">Voir tous ses articles</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection