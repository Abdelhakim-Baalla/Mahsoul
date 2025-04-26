@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('vet.appointments.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
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
                    <h1 class="text-2xl font-bold">Rendez-vous #{{ $appointment->id }}</h1>
                    <p class="mt-1">{{ $appointment->subject }}</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ 
                        $appointment->status === 'upcoming' ? 'bg-blue-500 text-white' : 
                        ($appointment->status === 'completed' ? 'bg-green-500 text-white' : 'bg-red-500 text-white') 
                    }}">
                        {{ 
                            $appointment->status === 'upcoming' ? 'À venir' : 
                            ($appointment->status === 'completed' ? 'Terminé' : 'Annulé') 
                        }}
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
                                <p class="text-gray-800 font-medium">{{ \Carbon\Carbon::parse($appointment->date)->format('d M Y') }} à {{ $appointment->time }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">{{ $appointment->consultation_type === 'video' ? 'Consultation vidéo' : 'Consultation par message' }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type d'animal</p>
                                <p class="text-gray-800 font-medium">{{ $appointment->animal_type }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Nom de l'animal</p>
                                <p class="text-gray-800 font-medium">{{ $appointment->animal_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Description</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $appointment->description }}</p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Historique médical</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            @if($appointment->medical_history)
                                <p class="text-gray-700 whitespace-pre-line">{{ $appointment->medical_history }}</p>
                            @else
                                <p class="text-gray-500">Aucun historique médical disponible.</p>
                            @endif
                        </div>
                    </div>

                    @if(count($appointment->documents) > 0)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Documents joints</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach($appointment->documents as $document)
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

                    @if($appointment->status === 'upcoming')
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Notes préliminaires</h2>
                        <form action="{{ route('vet.appointments.update', $appointment->id) }}" method="POST" class="bg-gray-50 p-4 rounded-lg">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="preliminary_notes" class="block text-gray-700 font-medium mb-2">Notes</label>
                                <textarea id="preliminary_notes" name="preliminary_notes" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">{{ $appointment->preliminary_notes }}</textarea>
                            </div>
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                                Enregistrer les notes
                            </button>
                        </form>
                    </div>
                    @endif

                    @if($appointment->status === 'completed')
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Résumé de la consultation</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $appointment->consultation->summary ?? 'Aucun résumé disponible.' }}</p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Diagnostic et traitement</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-medium text-gray-800 mb-2">Diagnostic</h3>
                            <p class="text-gray-700 mb-4">{{ $appointment->consultation->diagnosis ?? 'Aucun diagnostic disponible.' }}</p>
                            
                            <h3 class="font-medium text-gray-800 mb-2">Traitement recommandé</h3>
                            @if(isset($appointment->consultation->treatment) && !empty($appointment->consultation->treatment))
                                <ul class="list-disc list-inside text-gray-700 space-y-1">
                                    @foreach($appointment->consultation->treatment as $treatment)
                                    <li>{{ $treatment }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-500">Aucun traitement recommandé.</p>
                            @endif
                        </div>
                    </div>

                    @if(isset($appointment->consultation->prescriptions) && count($appointment->consultation->prescriptions) > 0)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Prescriptions</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="space-y-4">
                                @foreach($appointment->consultation->prescriptions as $prescription)
                                <div class="border-l-4 border-green-500 pl-4">
                                    <h3 class="font-medium text-gray-800">{{ $prescription->name }}</h3>
                                    <p class="text-gray-600">{{ $prescription->dosage }}</p>
                                    <p class="text-gray-600">{{ $prescription->instructions }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Client</h2>
                        <div class="flex items-center mb-4">
                            <img src="{{ $appointment->user->profile_image }}" alt="{{ $appointment->user->name }}" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $appointment->user->name }}</h3>
                                <p class="text-gray-600">{{ $appointment->user->email }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mt-6">
                            @if($appointment->status === 'upcoming')
                                @if($appointment->consultation_type === 'video' && \Carbon\Carbon::parse($appointment->date . ' ' . $appointment->time)->subMinutes(5)->isPast())
                                    <a href="{{ route('video.join', $appointment->id) }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                        Rejoindre la consultation
                                    </a>
                                @endif
                                <button type="button" class="block w-full border border-red-600 text-red-600 hover:bg-red-50 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                    Annuler le rendez-vous
                                </button>
                                @if($appointment->status === 'upcoming' && \Carbon\Carbon::parse($appointment->date . ' ' . $appointment->time)->isPast())
                                <form action="{{ route('vet.consultations.create', $appointment->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                        Marquer comme terminé
                                    </button>
                                </form>
                                @endif
                            @endif
                            <a href="{{ route('vet.user.history', $appointment->user_id) }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Voir l'historique du client
                            </a>
                            <a href="{{ route('messages.show', $appointment->user_id) }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Envoyer un message
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
