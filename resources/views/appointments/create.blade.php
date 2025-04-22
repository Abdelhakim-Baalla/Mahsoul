@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('experts.show', $expert->id) }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour au profil de l'expert
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Formulaire de rendez-vous -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Prendre rendez-vous avec {{ $expert->name }}</h1>
                
                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="expert_id" value="{{ $expert->id }}">
                    
                    <!-- Type de consultation -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-medium mb-2">Type de consultation</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <label class="relative flex items-center p-4 border rounded-lg cursor-pointer hover:border-green-500 transition-colors">
                                <input type="radio" name="consultation_type" value="video" class="h-5 w-5 text-green-600 focus:ring-green-500" checked>
                                <div class="ml-3">
                                    <span class="block text-gray-800 font-medium">Consultation vidéo</span>
                                    <span class="block text-gray-500 text-sm">Consultation en ligne par vidéo</span>
                                </div>
                            </label>
                            <label class="relative flex items-center p-4 border rounded-lg cursor-pointer hover:border-green-500 transition-colors">
                                <input type="radio" name="consultation_type" value="message" class="h-5 w-5 text-green-600 focus:ring-green-500">
                                <div class="ml-3">
                                    <span class="block text-gray-800 font-medium">Consultation par message</span>
                                    <span class="block text-gray-500 text-sm">Échangez par messages écrits</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Date et heure -->
                    <div class="mb-6">
                        <label for="appointment_date" class="block text-gray-700 font-medium mb-2">Date et heure du rendez-vous</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="date" class="block text-gray-600 text-sm mb-1">Date</label>
                                <input type="date" id="date" name="date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>
                            <div>
                                <label for="time" class="block text-gray-600 text-sm mb-1">Heure</label>
                                <select id="time" name="time" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                    <option value="">Sélectionner une heure</option>
                                    @foreach($availableSlots as $slot)
                                        <option value="{{ $slot }}">{{ $slot }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sujet -->
                    <div class="mb-6">
                        <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet de la consultation</label>
                        <input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Ex: Problème de santé de mon bétail" required>
                    </div>
                    
                    <!-- Description -->
                    <div class="mb-6">
                        <label for="description" class="block text-gray-700 font-medium mb-2">Description détaillée</label>
                        <textarea id="description" name="description" rows="5" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Décrivez votre problème ou question en détail..." required></textarea>
                    </div>
                    
                    <!-- Upload de documents -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-medium mb-2">Documents ou photos (optionnel)</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-green-500 transition-colors">
                            <input type="file" id="documents" name="documents[]" multiple class="hidden" accept="image/*,.pdf,.doc,.docx">
                            <label for="documents" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="mt-2 text-gray-600">Glissez-déposez des fichiers ici ou cliquez pour parcourir</p>
                                <p class="mt-1 text-gray-500 text-sm">Formats acceptés: JPG, PNG, PDF, DOC (Max 5 Mo)</p>
                            </label>
                        </div>
                        <div id="file-list" class="mt-3 space-y-2"></div>
                    </div>
                    
                    <!-- Conditions -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="terms" class="h-5 w-5 text-green-600 focus:ring-green-500" required>
                            <span class="ml-2 text-gray-700">J'accepte les <a href="#" class="text-green-600 hover:underline">conditions d'utilisation</a> et la <a href="#" class="text-green-600 hover:underline">politique de confidentialité</a></span>
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-md transition duration-300">
                        Confirmer le rendez-vous
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Résumé -->
        <div>
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Résumé</h2>
                
                <div class="flex items-center mb-4 pb-4 border-b border-gray-200">
                    <img src="{{ $expert->profile_image }}" alt="{{ $expert->name }}" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <h3 class="font-medium text-gray-800">{{ $expert->name }}</h3>
                        <p class="text-gray-600">{{ $expert->specialty == 'veterinaire' ? 'Vétérinaire' : 'Expert agricole' }}</p>
                    </div>
                </div>
                
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Type de consultation</span>
                        <span class="text-gray-800 font-medium" id="summary-type">Consultation vidéo</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Date et heure</span>
                        <span class="text-gray-800 font-medium" id="summary-datetime">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Prix</span>
                        <span class="text-gray-800 font-medium">{{ $expert->price_per_consultation }} DH</span>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Sous-total</span>
                        <span class="text-gray-800">{{ $expert->price_per_consultation }} DH</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Frais de service</span>
                        <span class="text-gray-800">{{ $serviceFee }} DH</span>
                    </div>
                    <div class="flex justify-between font-medium">
                        <span class="text-gray-700">Total</span>
                        <span class="text-gray-900">{{ $expert->price_per_consultation + $serviceFee }} DH</span>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-800 mb-2">Moyens de paiement acceptés</h3>
                    <div class="flex space-x-3">
                        <img src="/images/payment/visa.svg" alt="Visa" class="h-8">
                        <img src="/images/payment/mastercard.svg" alt="Mastercard" class="h-8">
                        <img src="/images/payment/paypal.svg" alt="PayPal" class="h-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Mise à jour du résumé en temps réel
    document.addEventListener('DOMContentLoaded', function() {
        const typeRadios = document.querySelectorAll('input[name="consultation_type"]');
        const dateInput = document.getElementById('date');
        const timeSelect = document.getElementById('time');
        const summaryType = document.getElementById('summary-type');
        const summaryDatetime = document.getElementById('summary-datetime');
        const fileInput = document.getElementById('documents');
        const fileList = document.getElementById('file-list');
        
        // Mise à jour du type de consultation
        typeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                summaryType.textContent = this.value === 'video' ? 'Consultation vidéo' : 'Consultation par message';
            });
        });
        
        // Mise à jour de la date et heure
        function updateDatetime() {
            if (dateInput.value && timeSelect.value) {
                const date = new Date(dateInput.value);
                const formattedDate = date.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric' });
                summaryDatetime.textContent = `${formattedDate} à ${timeSelect.value}`;
            } else {
                summaryDatetime.textContent = '-';
            }
        }
        
        dateInput.addEventListener('change', updateDatetime);
        timeSelect.addEventListener('change', updateDatetime);
        
        // Gestion des fichiers
        fileInput.addEventListener('change', function() {
            fileList.innerHTML = '';
            
            for (const file of this.files) {
                const fileItem = document.createElement('div');
                fileItem.className = 'flex items-center justify-between bg-gray-50 p-2 rounded';
                
                const fileInfo = document.createElement('div');
                fileInfo.className = 'flex items-center';
                
                const fileIcon = document.createElement('svg');
                fileIcon.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
                fileIcon.setAttribute('class', 'h-5 w-5 text-gray-500 mr-2');
                fileIcon.setAttribute('fill', 'none');
                fileIcon.setAttribute('viewBox', '0 0 24 24');
                fileIcon.setAttribute('stroke', 'currentColor');
                fileIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />';
                
                const fileName = document.createElement('span');
                fileName.className = 'text-gray-700 text-sm truncate';
                fileName.textContent = file.name;
                
                fileInfo.appendChild(fileIcon);
                fileInfo.appendChild(fileName);
                
                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'text-red-500 hover:text-red-700';
                removeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
                
                fileItem.appendChild(fileInfo);
                fileItem.appendChild(removeButton);
                fileList.appendChild(fileItem);
            }
        });
    });
</script>
@endsection
