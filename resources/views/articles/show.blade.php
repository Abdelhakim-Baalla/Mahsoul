@extends('layouts.app')

@section('title', 'Techniques d\'irrigation modernes pour économiser l\'eau')

@section('content')
<section class="py-12 diagonal-box bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Fil d'Ariane -->
        <div class="flex items-center gap-2 text-gray-600 mb-6">
            <a href="{{ url('articles') }}" class="hover:text-primary-600 hover:underline">Articles</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="{{ url('articles/tag/irrigation') }}" class="hover:text-primary-600 hover:underline">Irrigation</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-900 font-medium">Techniques d'irrigation modernes</span>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Article principal -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <!-- Image principale -->
                    <div class="relative h-80 w-full">
                        <img src="https://via.placeholder.com/1200x600" alt="Techniques d'irrigation modernes" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>
                    
                    <!-- Contenu de l'article -->
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-900 mb-4">Techniques d'irrigation modernes pour économiser l'eau</h1>
                        
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
                                <span>15 juin 2023</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>8 min de lecture</span>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <a href="{{ url('articles/tag/irrigation') }}" class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-100 transition">
                                Irrigation
                            </a>
                            <a href="{{ url('articles/tag/economie-eau') }}" class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition">
                                Économie d'eau
                            </a>
                            <a href="{{ url('articles/tag/techniques') }}" class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition">
                                Techniques agricoles
                            </a>
                        </div>

                        <!-- Contenu -->
                        <div class="prose max-w-none text-gray-700">
                            <p class="text-lg font-medium mb-4">L'eau est une ressource précieuse et de plus en plus rare dans de nombreuses régions agricoles. Adopter des techniques d'irrigation modernes peut permettre d'économiser jusqu'à 60% d'eau tout en améliorant les rendements.</p>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">Pourquoi économiser l'eau est crucial</h2>
                            <p>Dans un contexte de changement climatique et de raréfaction des ressources en eau, l'optimisation de l'irrigation est devenue une nécessité pour les agriculteurs. Non seulement cela permet de réduire les coûts, mais cela contribue également à la durabilité de l'exploitation à long terme.</p>
                            
                            <p>Les statistiques montrent que l'agriculture consomme environ 70% des ressources mondiales en eau douce. Réduire cette consommation est donc un enjeu majeur pour la sécurité alimentaire mondiale.</p>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">Les techniques d'irrigation goutte-à-goutte</h2>
                            <p>L'irrigation goutte-à-goutte est l'une des méthodes les plus efficaces pour économiser l'eau. Elle consiste à délivrer l'eau directement à la base des plantes, goutte par goutte, minimisant ainsi l'évaporation et le ruissellement.</p>
                            
                            <div class="my-6">
                                <img src="https://via.placeholder.com/800x400" alt="Système d'irrigation goutte-à-goutte" class="rounded-lg w-full">
                                <p class="text-sm text-gray-500 mt-2">Système d'irrigation goutte-à-goutte installé dans un champ de tomates</p>
                            </div>
                            
                            <p>Les avantages de cette technique incluent :</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Réduction de la consommation d'eau de 30 à 60%</li>
                                <li>Diminution des maladies foliaires</li>
                                <li>Réduction de la croissance des mauvaises herbes</li>
                                <li>Possibilité de fertigation (application d'engrais via le système d'irrigation)</li>
                            </ul>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">L'irrigation par aspersion contrôlée</h2>
                            <p>Les systèmes d'aspersion modernes utilisent des technologies avancées pour optimiser la distribution de l'eau. Les asperseurs à basse pression et les systèmes pivotants équipés de buses précises permettent de réduire considérablement le gaspillage d'eau.</p>
                            
                            <div class="my-6">
                                <img src="https://via.placeholder.com/800x400" alt="Système d'irrigation par aspersion" class="rounded-lg w-full">
                                <p class="text-sm text-gray-500 mt-2">Système d'irrigation par aspersion avec contrôle informatisé</p>
                            </div>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">L'irrigation intelligente basée sur les données</h2>
                            <p>Les technologies numériques révolutionnent l'irrigation en permettant une gestion basée sur les données réelles du terrain :</p>
                            
                            <ul class="list-disc pl-5 space-y-1">
                                <li><strong>Capteurs d'humidité du sol</strong> : Ils mesurent la teneur en eau du sol et déclenchent l'irrigation uniquement lorsque c'est nécessaire.</li>
                                <li><strong>Stations météorologiques</strong> : Elles fournissent des données sur les précipitations, l'évapotranspiration et d'autres facteurs climatiques pour ajuster les calendriers d'irrigation.</li>
                                <li><strong>Applications mobiles</strong> : Elles permettent de contrôler les systèmes d'irrigation à distance et de recevoir des alertes en temps réel.</li>
                            </ul>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">Étude de cas : Ferme El Baraka</h2>
                            <p>La ferme El Baraka, située dans la région de Marrakech, a adopté un système d'irrigation goutte-à-goutte combiné à des capteurs d'humidité du sol. En seulement un an, ils ont réduit leur consommation d'eau de 45% tout en augmentant leur rendement de 20%.</p>
                            
                            <blockquote class="border-l-4 border-primary-500 bg-gray-50 p-4 my-6 italic">
                                <p>"L'investissement initial a été amorti en moins de deux saisons grâce aux économies d'eau et à l'augmentation des rendements. C'est la meilleure décision que nous ayons prise pour notre exploitation."</p>
                                <cite class="not-italic font-medium mt-2 block">— Mohammed Kadiri, propriétaire de la ferme El Baraka</cite>
                            </blockquote>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">Comment démarrer avec l'irrigation moderne</h2>
                            <p>Si vous envisagez d'adopter des techniques d'irrigation modernes, voici quelques étapes à suivre :</p>
                            
                            <ol class="list-decimal pl-5 space-y-2">
                                <li><strong>Évaluation des besoins</strong> : Analysez votre terrain, vos cultures et vos ressources en eau actuelles.</li>
                                <li><strong>Consultation d'experts</strong> : Faites appel à des spécialistes en irrigation pour concevoir un système adapté à vos besoins spécifiques.</li>
                                <li><strong>Planification budgétaire</strong> : Prévoyez un budget réaliste incluant l'installation et la maintenance.</li>
                                <li><strong>Installation progressive</strong> : Commencez par une petite section de votre exploitation pour tester le système avant de l'étendre.</li>
                                <li><strong>Formation</strong> : Assurez-vous que vous et votre équipe êtes formés à l'utilisation et à l'entretien du système.</li>
                            </ol>
                            
                            <h2 class="text-xl font-semibold mt-6 mb-3 text-gray-900">Conclusion</h2>
                            <p>L'adoption de techniques d'irrigation modernes représente un investissement initial, mais les bénéfices à long terme sont considérables : économies d'eau, réduction des coûts, augmentation des rendements et contribution à la durabilité environnementale.</p>
                            
                            <p>N'hésitez pas à contacter nos experts en irrigation pour obtenir des conseils personnalisés adaptés à votre situation spécifique.</p>
                        </div>
                        
                        <!-- Partage sur les réseaux sociaux -->
                        <div class="mt-8 border-t pt-6">
                            <h3 class="text-lg font-semibold mb-3">Partagez cet article</h3>
                            <div class="flex gap-3">
                                <a href="#" class="p-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                    </svg>
                                </a>
                                <a href="#" class="p-2 rounded-lg bg-blue-400 text-white hover:bg-blue-500 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#" class="p-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                </a>
                                <a href="#" class="p-2 rounded-lg bg-blue-700 text-white hover:bg-blue-800 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                    </svg>
                                </a>
                            </div>
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
                
                <!-- Articles connexes -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Articles connexes</h3>
                    <div class="space-y-4">
                        <div class="flex gap-3 group">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="https://via.placeholder.com/100x100" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <div>
                                <h4 class="font-medium leading-tight"><a href="#" class="hover:text-primary-600">Récupération des eaux de pluie pour l'agriculture</a></h4>
                                <p class="text-sm text-gray-600 mt-1">Il y a 2 semaines</p>
                            </div>
                        </div>
                        <div class="flex gap-3 group">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="https://via.placeholder.com/100x100" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <div>
                                <h4 class="font-medium leading-tight"><a href="#" class="hover:text-primary-600">Sélection des cultures adaptées aux climats arides</a></h4>
                                <p class="text-sm text-gray-600 mt-1">Il y a 1 mois</p>
                            </div>
                        </div>
                        <div class="flex gap-3 group">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="https://via.placeholder.com/100x100" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <div>
                                <h4 class="font-medium leading-tight"><a href="#" class="hover:text-primary-600">Subventions pour systèmes d'irrigation modernes</a></h4>
                                <p class="text-sm text-gray-600 mt-1">Il y a 1 mois</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tags populaires -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Tags populaires</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ url('articles/tag/irrigation') }}" class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-100 transition">
                            Irrigation
                        </a>
                        <a href="{{ url('articles/tag/economie-eau') }}" class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition">
                            Économie d'eau
                        </a>
                        <a href="{{ url('articles/tag/techniques') }}" class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-medium hover:bg-green-100 transition">
                            Techniques
                        </a>
                        <a href="{{ url('articles/tag/elevage') }}" class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-100 transition">
                            Élevage
                        </a>
                        <a href="{{ url('articles/tag/maladies') }}" class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm font-medium hover:bg-red-100 transition">
                            Maladies
                        </a>
                        <a href="{{ url('articles/tag/semences') }}" class="px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-sm font-medium hover:bg-yellow-100 transition">
                            Semences
                        </a>
                    </div>
                </div>
                
                <!-- Newsletter -->
                <div class="bg-primary-50 rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Restez informé</h3>
                    <p class="text-gray-700 mb-4">Abonnez-vous à notre newsletter pour recevoir les derniers articles et conseils agricoles.</p>
                    <form>
                        <div class="mb-3">
                            <input type="email" placeholder="Votre adresse email" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <button type="submit" class="w-full py-3 bg-primary-600 text-white rounded-xl hover:bg-primary-700 transition font-medium">S'abonner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection