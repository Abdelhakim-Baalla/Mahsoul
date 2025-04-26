@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('vet.consultations.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à mes consultations
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête -->
        <div class="bg-green-600 text-white p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Consultation #{{ $consultation->id }}</h1>
                    <p class="mt-1">{{ $consultation->subject }}</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-500 text-white">
                        Terminée
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
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Détails de la consultation</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Date</p>
                                <p class="text-gray-800 font-medium">{{ \Carbon\Carbon::parse($consultation->date)->format('d M Y') }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Durée</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->duration }} minutes</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type d'animal</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->animal_type }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Nom de l'animal</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->animal_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Description du problème</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $consultation->description }}</p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Diagnostic et traitement</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-medium text-gray-800 mb-2">Diagnostic</h3>
                            <p class="text-gray-700 mb-4">{{ $consultation->diagnosis }}</p>
                            
                            <h3 class="font-medium text-gray-800 mb-2">Traitement recommandé</h3>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                @foreach($consultation->treatment as $treatment)
                                <li>{{ $treatment }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    @if(count($consultation->prescriptions) > 0)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Prescriptions</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-4">
                                @foreach($consultation->prescriptions as $prescription)
                                <div class="border-l-4 border-green-500 pl-4">
                                    <h3 class="font-medium text-gray-800">{{ $prescription->name }}</h3>
                                    <p class="text-gray-600">{{ $prescription->dosage }}</p>
                                    <p class="text-gray-600">{{ $prescription->instructions }}</p>
                                </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('prescriptions.download', $consultation->id) }}" class="inline-flex items-center text-green-600 hover:text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Télécharger l'ordonnance
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if(count($consultation->documents) > 0)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Documents partagés</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach($consultation->documents as $document)
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    @if(in_array(pathinfo($document->file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                        <img src="{{ asset('storage/' . $document->file_path) }}" alt="Document" class="w-10 h-10 object-cover rounded mr-3">
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    @endif
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate">{{ $document->file_name }}</p>
                                        <p class="text-sm text-gray-500">{{ $document->file_size }}</p>
                                    </div>
                                    <a href="{{ asset('storage/' . $document->file_path) }}" download class="ml-2 text-green-600 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($consultation->follow_up_recommended)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Suivi recommandé</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ $consultation->follow_up_notes }}</p>
                            <p class="text-gray-600">Date recommandée: {{ \Carbon\Carbon::parse($consultation->follow_up_date)->format('d M Y') }}</p>
                        </div>
                    </div>
                    @endif

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Résumé de la consultation</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $consultation->summary }}</p>
                        </div>
                    </div>
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Client</h2>
                        <div class="flex items-center mb-4">
                            <img src="{{ $consultation->user->profile_image }}" alt="{{ $consultation->user->name }}" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $consultation->user->name }}</h3>
                                <p class="text-gray-600">{{ $consultation->user->email }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mt-6">
                            <a href="{{ route('vet.user.history', $consultation->user_id) }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Voir l'historique du client
                            </a>
                            <a href="{{ route('messages.show', $consultation->user_id) }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Envoyer un message
                            </a>
                            <a href="{{ route('vet.appointments.create', ['user_id' => $consultation->user_id]) }}" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Planifier un rendez-vous
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
