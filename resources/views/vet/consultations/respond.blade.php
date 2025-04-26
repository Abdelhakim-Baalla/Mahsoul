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
        <div class="bg-yellow-600 text-white p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Répondre à la consultation #{{ $consultation->id }}</h1>
                    <p class="mt-1">{{ $consultation->subject }}</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-500 text-white">
                        En attente
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
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Détails de la demande</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Date de la demande</p>
                                <p class="text-gray-800 font-medium">{{ \Carbon\Carbon::parse($consultation->created_at)->format('d M Y H:i') }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->type === 'video' ? 'Consultation vidéo' : 'Consultation par message' }}</p>
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

                    @if(count($consultation->documents) > 0)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Documents joints</h2>
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

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Historique médical</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            @if($consultation->medical_history)
                                <p class="text-gray-700 whitespace-pre-line">{{ $consultation->medical_history }}</p>
                            @else
                                <p class="text-gray-500">Aucun historique médical disponible.</p>
                            @endif
                        </div>
                    </div>

                    <form action="{{ route('vet.consultations.storeResponse', $consultation->id) }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Votre réponse</h2>
                            
                            <div class="mb-6">
                                <label for="diagnosis" class="block text-sm font-medium text-gray-700 mb-1">Diagnostic</label>
                                <textarea id="diagnosis" name="diagnosis" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                            </div>
                            
                            <div class="mb-6">
                                <label for="treatment" class="block text-sm font-medium text-gray-700 mb-1">Traitement recommandé</label>
                                <textarea id="treatment" name="treatment" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                                <p class="text-sm text-gray-500 mt-1">Séparez chaque élément du traitement par une nouvelle ligne.</p>
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Prescriptions</label>
                                <div id="prescriptions-container" class="space-y-4">
                                    <div class="prescription-item bg-white p-4 rounded-md border border-gray-200">
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div>
                                                <label for="prescriptions[0][name]" class="block text-sm font-medium text-gray-700 mb-1">Médicament</label>
                                                <input type="text" id="prescriptions[0][name]" name="prescriptions[0][name]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                            </div>
                                            <div>
                                                <label for="prescriptions[0][dosage]" class="block text-sm font-medium text-gray-700 mb-1">Dosage</label>
                                                <input type="text" id="prescriptions[0][dosage]" name="prescriptions[0][dosage]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                            </div>
                                            <div>
                                                <label for="prescriptions[0][instructions]" class="block text-sm font-medium text-gray-700 mb-1">Instructions</label>
                                                <input type="text" id="prescriptions[0][instructions]" name="prescriptions[0][instructions]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-prescription" class="mt-2 inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Ajouter une prescription
                                </button>
                            </div>
                            
                            <div class="mb-6">
                                <label for="summary" class="block text-sm font-medium text-gray-700 mb-1">Résumé de la consultation</label>
                                <textarea id="summary" name="summary" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
                            </div>
                            
                            <div class="mb-6">
                                <div class="flex items-center">
                                    <input type="checkbox" id="follow_up_recommended" name="follow_up_recommended" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <label for="follow_up_recommended" class="ml-2 block text-sm text-gray-700">Recommander un suivi</label>
                                </div>
                                
                                <div id="follow-up-details" class="mt-4 hidden">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="follow_up_date" class="block text-sm font-medium text-gray-700 mb-1">Date recommandée</label>
                                            <input type="date" id="follow_up_date" name="follow_up_date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                        </div>
                                        <div>
                                            <label for="follow_up_notes" class="block text-sm font-medium text-gray-700 mb-1">Notes pour le suivi</label>
                                            <textarea id="follow_up_notes" name="follow_up_notes" rows="2" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Durée de la consultation (minutes)</label>
                                <input type="number" id="duration" name="duration" min="5" max="120" step="5" value="30" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>
                            
                            <div class="flex justify-end">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Soumettre la réponse
                                </button>
                            </div>
                        </div>
                    </form>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addPrescriptionBtn = document.getElementById('add-prescription');
        const prescriptionsContainer = document.getElementById('prescriptions-container');
        let prescriptionCount = 1;

        addPrescriptionBtn.addEventListener('click', function() {
            const newPrescription = document.createElement('div');
            newPrescription.className = 'prescription-item bg-white p-4 rounded-md border border-gray-200';
            newPrescription.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="prescriptions[${prescriptionCount}][name]" class="block text-sm font-medium text-gray-700 mb-1">Médicament</label>
                        <input type="text" id="prescriptions[${prescriptionCount}][name]" name="prescriptions[${prescriptionCount}][name]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="prescriptions[${prescriptionCount}][dosage]" class="block text-sm font-medium text-gray-700 mb-1">Dosage</label>
                        <input type="text" id="prescriptions[${prescriptionCount}][dosage]" name="prescriptions[${prescriptionCount}][dosage]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="prescriptions[${prescriptionCount}][instructions]" class="block text-sm font-medium text-gray-700 mb-1">Instructions</label>
                        <input type="text" id="prescriptions[${prescriptionCount}][instructions]" name="prescriptions[${prescriptionCount}][instructions]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>
                <button type="button" class="remove-prescription mt-2 inline-flex items-center px-2 py-1 border border-gray-300 text-xs font-medium rounded-md text-red-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Supprimer
                </button>
            `;
            prescriptionsContainer.appendChild(newPrescription);
            prescriptionCount++;

            // Add event listener to the remove button
            const removeBtn = newPrescription.querySelector('.remove-prescription');
            removeBtn.addEventListener('click', function() {
                prescriptionsContainer.removeChild(newPrescription);
            });
        });

        // Toggle follow-up details
        const followUpCheckbox = document.getElementById('follow_up_recommended');
        const followUpDetails = document.getElementById('follow-up-details');

        followUpCheckbox.addEventListener('change', function() {
            if (this.checked) {
                followUpDetails.classList.remove('hidden');
            } else {
                followUpDetails.classList.add('hidden');
            }
        });
    });
</script>
@endpush
@endsection
