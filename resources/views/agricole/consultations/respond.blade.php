@extends('layouts.expert')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('expert.consultations.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour aux consultations
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête -->
        <div class="bg-green-600 text-white p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Répondre à la consultation #CS67890</h1>
                    <p class="mt-1">Maladie sur mes tomates</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-500 text-white">
                        En attente de réponse
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
                                <p class="text-gray-800 font-medium">10 Juin 2023 à 09:15</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">Consultation par message</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Problème signalé</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">
                                Bonjour, j'ai remarqué des taches noires sur les feuilles de mes plants de tomates. Les taches commencent par le bas des plants et semblent remonter progressivement. Certaines feuilles jaunissent et tombent. J'ai commencé à cultiver ces tomates il y a environ 2 mois et c'est ma première expérience en maraîchage. J'ai joint quelques photos des plants affectés. Merci de votre aide.
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
                                        <p class="text-sm font-medium text-gray-900 truncate">tomate_1.jpg</p>
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
                                        <p class="text-sm font-medium text-gray-900 truncate">tomate_2.jpg</p>
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

                    <form action="{{ route('expert.consultations.respond', $consultation->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Votre diagnostic</h2>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="mb-4">
                                    <label for="diagnosis" class="block text-gray-700 font-medium mb-2">Diagnostic</label>
                                    <textarea id="diagnosis" name="diagnosis" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Décrivez votre diagnostic ici..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Recommandations</h2>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="mb-4">
                                    <label for="recommendations" class="block text-gray-700 font-medium mb-2">Recommandations</label>
                                    <textarea id="recommendations" name="recommendations" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Listez vos recommandations ici..."></textarea>
                                    <p class="text-sm text-gray-500 mt-1">Séparez chaque recommandation par une nouvelle ligne</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Prescriptions</h2>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div id="prescriptions-container">
                                    <div class="prescription-item border-b border-gray-200 pb-4 mb-4">
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div>
                                                <label for="prescription_name_1" class="block text-gray-700 font-medium mb-2">Nom du produit</label>
                                                <input type="text" id="prescription_name_1" name="prescription_name[]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                            </div>
                                            <div>
                                                <label for="prescription_dosage_1" class="block text-gray-700 font-medium mb-2">Dosage</label>
                                                <input type="text" id="prescription_dosage_1" name="prescription_dosage[]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                            </div>
                                            <div>
                                                <label for="prescription_instructions_1" class="block text-gray-700 font-medium mb-2">Instructions</label>
                                                <input type="text" id="prescription_instructions_1" name="prescription_instructions[]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-prescription" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                    Ajouter une prescription
                                </button>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Documents à partager</h2>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="mb-4">
                                    <label for="documents" class="block text-gray-700 font-medium mb-2">Joindre des documents</label>
                                    <input type="file" id="documents" name="documents[]" multiple class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <p class="text-sm text-gray-500 mt-1">Formats acceptés: PDF, JPG, PNG. Taille max: 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-4">Suivi recommandé</h2>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="mb-4">
                                    <div class="flex items-center mb-2">
                                        <input type="checkbox" id="has_follow_up" name="has_follow_up" value="1" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                        <label for="has_follow_up" class="ml-2 block text-gray-700 font-medium">Recommander un suivi</label>
                                    </div>
                                </div>
                                <div id="follow-up-details" class="hidden">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="follow_up_date" class="block text-gray-700 font-medium mb-2">Date recommandée</label>
                                            <input type="date" id="follow_up_date" name="follow_up_date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                        </div>
                                        <div>
                                            <label for="follow_up_type" class="block text-gray-700 font-medium mb-2">Type de suivi</label>
                                            <select id="follow_up_type" name="follow_up_type" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                                                <option value="video">Consultation vidéo</option>
                                                <option value="message">Consultation par message</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <label for="follow_up_notes" class="block text-gray-700 font-medium mb-2">Notes pour le suivi</label>
                                        <textarea id="follow_up_notes" name="follow_up_notes" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Précisez pourquoi un suivi est nécessaire..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <button type="button" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Enregistrer comme brouillon
                            </button>
                            <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Envoyer la réponse
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Client</h2>
                        <div class="flex items-center mb-4">
                            <img src="/placeholder.svg?height=64&width=64" alt="Photo de profil" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">Fatima Zahra</h3>
                                <p class="text-gray-600">Agricultrice - Marrakech</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <p class="text-gray-600 mb-2">
                                <span class="font-medium">Email:</span> fatima.zahra@example.com
                            </p>
                            <p class="text-gray-600 mb-2">
                                <span class="font-medium">Téléphone:</span> +212 6XX XX XX XX
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Cliente depuis:</span> Avril 2023
                            </p>
                        </div>
                        
                        <div class="space-y-3">
                            <a href="{{ route('expert.consultations.history', ['client_id' => 456]) }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Voir l'historique du client
                            </a>
                            <a href="{{ route('messages.show', ['conversation' => 789]) }}" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Envoyer un message
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de l'ajout de prescriptions
        const addPrescriptionBtn = document.getElementById('add-prescription');
        const prescriptionsContainer = document.getElementById('prescriptions-container');
        let prescriptionCount = 1;
        
        addPrescriptionBtn.addEventListener('click', function() {
            prescriptionCount++;
            const newPrescription = document.createElement('div');
            newPrescription.className = 'prescription-item border-b border-gray-200 pb-4 mb-4';
            newPrescription.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="prescription_name_${prescriptionCount}" class="block text-gray-700 font-medium mb-2">Nom du produit</label>
                        <input type="text" id="prescription_name_${prescriptionCount}" name="prescription_name[]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="prescription_dosage_${prescriptionCount}" class="block text-gray-700 font-medium mb-2">Dosage</label>
                        <input type="text" id="prescription_dosage_${prescriptionCount}" name="prescription_dosage[]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div>
                        <label for="prescription_instructions_${prescriptionCount}" class="block text-gray-700 font-medium mb-2">Instructions</label>
                        <input type="text" id="prescription_instructions_${prescriptionCount}" name="prescription_instructions[]" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>
                <button type="button" class="remove-prescription mt-2 text-red-600 hover:text-red-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    Supprimer
                </button>
            `;
            prescriptionsContainer.appendChild(newPrescription);
            
            // Ajouter l'événement de suppression
            const removeBtn = newPrescription.querySelector('.remove-prescription');
            removeBtn.addEventListener('click', function() {
                prescriptionsContainer.removeChild(newPrescription);
            });
        });
        
        // Gestion de l'affichage des détails de suivi
        const hasFollowUpCheckbox = document.getElementById('has_follow_up');
        const followUpDetails = document.getElementById('follow-up-details');
        
        hasFollowUpCheckbox.addEventListener('change', function() {
            if (this.checked) {
                followUpDetails.classList.remove('hidden');
            } else {
                followUpDetails.classList.add('hidden');
            }
        });
    });
</script>
@endsection
