@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('agricole.appointments.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à mes rendez-vous
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête -->
        <div class="bg-green-600 text-white p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Rendez-vous #AP12345</h1>
                    <p class="mt-1">Consultation sur la santé des oliviers</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-500 text-white">
                        À venir
                    </span>
                </div>
            </div>
        </div>

        <!-- Informations principales -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Colonne de gauche -->
                <div class="md:col-span-2">
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Détails du rendez-vous</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Date et heure</p>
                                <p class="text-gray-800 font-medium">15 Juin 2023 à 14:30</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">Consultation vidéo</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Créé le</p>
                                <p class="text-gray-800 font-medium">10 Juin 2023 09:15</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Durée prévue</p>
                                <p class="text-gray-800 font-medium">30 minutes</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Description</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">
                                Bonjour, j'ai remarqué que mes oliviers présentent des feuilles jaunies et des branches qui semblent se dessécher. Je cultive ces oliviers depuis 5 ans et c'est la première fois que je rencontre ce problème. J'aimerais avoir votre avis sur les causes possibles et les solutions à envisager. J'ai joint quelques photos des arbres affectés.
                            </p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Documents joints</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">olivier_1.jpg</p>
                                        <p class="text-sm text-gray-500">2.4 MB</p>
                                    </div>
                                    <a href="#" class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">olivier_2.jpg</p>
                                        <p class="text-sm text-gray-500">1.8 MB</p>
                                    </div>
                                    <a href="#" class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">olivier_3.jpg</p>
                                        <p class="text-sm text-gray-500">2.1 MB</p>
                                    </div>
                                    <a href="#" class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Notes personnelles</h2>
                        <form class="bg-gray-50 p-4 rounded-lg">
                            <div class="mb-4">
                                <label for="notes" class="block text-gray-700 font-medium mb-2">Vos notes (visibles uniquement par vous)</label>
                                <textarea id="notes" name="notes" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Ajoutez vos notes préparatoires ici...">D'après les photos, il pourrait s'agir d'une attaque de mouche de l'olivier ou d'un problème d'irrigation. À vérifier pendant la consultation.</textarea>
                            </div>
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                                Enregistrer les notes
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Client</h2>
                        <div class="flex items-center mb-4">
                            <img src="/placeholder.svg?height=64&width=64" alt="Photo de profil" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">Ahmed Benali</h3>
                                <p class="text-gray-600">Agriculteur - Meknès</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <p class="text-gray-600 mb-2">
                                <span class="font-medium">Email:</span> ahmed.benali@example.com
                            </p>
                            <p class="text-gray-600 mb-2">
                                <span class="font-medium">Téléphone:</span> +212 6XX XX XX XX
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Client depuis:</span> Mars 2022
                            </p>
                        </div>
                        
                        <div class="space-y-3">
                            <a href="" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Voir l'historique du client
                            </a>
                            
                            <a href="" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Démarrer la consultation
                            </a>
                            
                            <button type="button" class="block w-full border border-red-600 text-red-600 hover:bg-red-50 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Reprogrammer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
