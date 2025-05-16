@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ url()->previous() }}" class="inline-flex items-center text-green-600 hover:text-green-700">
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
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Prendre rendez-vous avec {{$utilisateur->prenom}} {{$utilisateur->nom}}</h1>
                
                <form action="{{route('rendezVous.payement')}}" method="POST">
                    @csrf
                    <input type="hidden" name="expert_id" value="{{$utilisateur->id}}">
                    <input type="hidden" name="client_id" value="{{Auth::user()->id}}">
                    
                    @if($utilisateur->type == 'agricole')
                    <input type="hidden" name="prix_deplacement" value="{{$agricole->prix_deplacement +25}}">
                    @else
                    <input type="hidden" name="prix_deplacement" value="{{$veterinaire->prix_deplacement +25}}">
                    @endif
                   

                    <!-- Date et heure -->
                    <div class="mb-6">
                        <label for="date" class="block text-gray-700 font-medium mb-2">Date et heure du rendez-vous</label>
                        <input type="datetime-local" id="date" name="date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" required>
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

                    <!-- Adresse -->
                    <div class="mb-6">
                        <label for="adresse" class="block text-gray-700 font-medium mb-2">Votre Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Ex: Av.96 Agadir Hay Asalam" value="{{Auth::user()->adresse}}">
                    </div>

                     <!-- Telephone -->
                    <div class="mb-6">
                        <label for="telephone" class="block text-gray-700 font-medium mb-2">Votre Numero du Télephone</label>
                        <input type="tel" id="telephone" name="telephone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="+212XXXXXXXXX" value="{{Auth::user()->telephone}}">
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
                    <img src="{{$utilisateur->photo}}" alt="{{$utilisateur->prenom}} {{$utilisateur->nom}}" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <h3 class="font-medium text-gray-800">{{$utilisateur->prenom}} {{$utilisateur->nom}}</h3>
                        <p class="text-gray-600">{{$utilisateur->type}}</p>
                    </div>
                </div>
                
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Type de consultation</span>
                        <span class="text-gray-800 font-medium" id="summary-type">Consultation Au Site</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Date et heure</span>
                        <span class="text-gray-800 font-medium" id="summary-datetime">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Prix de déplacement</span>
                        @if($utilisateur->type == 'agricole')
                            <span class="text-gray-800 font-medium">{{$agricole->prix_deplacement}} DH</span>
                        @else
                            <span class="text-gray-800 font-medium">{{$veterinaire->prix_deplacement}} DH</span>
                        @endif
                    </div>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Sous-total</span>
                        @if($utilisateur->type == 'agricole')
                            <span class="text-gray-800">{{$agricole->prix_deplacement}} DH</span>
                        @else
                            <span class="text-gray-800">{{$veterinaire->prix_deplacement}} DH</span>
                        @endif
                    </div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Frais de service</span>
                        <span class="text-gray-800">25 DH</span>
                    </div>
                    <div class="flex justify-between font-medium">
                        <span class="text-gray-700">Total</span>
                        @if($utilisateur->type == 'agricole')
                            <span class="text-gray-900">{{$agricole->prix_deplacement +25}} DH</span>
                        @else
                            <span class="text-gray-900">{{$veterinaire->prix_deplacement +25}} DH</span>
                        @endif
                    </div>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-800 mb-2">Moyens de paiement acceptés</h3>
                    <div class="flex space-x-3">
                        <img src="{{asset('images/Stripe-logo.png')}}" alt="Stripe" class="h-8">
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
        const summaryDatetime = document.getElementById('summary-datetime');
        
        
        // Mise à jour de la date et heure
        function updateDatetime() {
            if (dateInput.value) {
                // console.log(dateInput.value);
                
                const date = new Date(dateInput.value);
                // console.log(date);
                
                const formattedDate = date.toLocaleDateString('fr-FR', { day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric' });
                // console.log(formattedDate);

                summaryDatetime.textContent = `${formattedDate}`;
            } else {
                summaryDatetime.textContent = '-';
            }
        }
        
        dateInput.addEventListener('change', updateDatetime);
        timeSelect.addEventListener('change', updateDatetime);
    });
</script>
@endsection
