@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('consultations.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à l'historique des consultations
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
                                <p class="text-sm text-gray-500">Type de consultation</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->type === 'video' ? 'Consultation vidéo' : 'Consultation par message' }}</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-500">Coût</p>
                                <p class="text-gray-800 font-medium">{{ $consultation->price }} DH</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Résumé de la consultation</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 whitespace-pre-line">{{ $consultation->summary }}</p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Diagnostic et recommandations</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-medium text-gray-800 mb-2">Diagnostic</h3>
                            <p class="text-gray-700 mb-4">{{ $consultation->diagnosis }}</p>
                            
                            <h3 class="font-medium text-gray-800 mb-2">Recommandations</h3>
                            <ul class="list-disc list-inside text-gray-700 space-y-1">
                                @foreach($consultation->recommendations as $recommendation)
                                <li>{{ $recommendation }}</li>
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

                    @if($consultation->has_follow_up)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Suivi recommandé</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-gray-700 mb-4">{{ $consultation->follow_up_notes }}</p>
                            <p class="text-gray-600">Date recommandée: {{ \Carbon\Carbon::parse($consultation->follow_up_date)->format('d M Y') }}</p>
                            
                            <div class="mt-4">
                                <a href="{{ route('appointments.create', ['expert_id' => $consultation->expert_id, 'follow_up' => true]) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Planifier un suivi
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if(!$consultation->has_review)
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Évaluer la consultation</h2>
                        <form action="{{ route('reviews.store') }}" method="POST" class="bg-gray-50 p-4 rounded-lg">
                            @csrf
                            <input type="hidden" name="consultation_id" value="{{ $consultation->id }}">
                            <input type="hidden" name="expert_id" value="{{ $consultation->expert_id }}">
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 font-medium mb-2">Note</label>
                                <div class="flex space-x-2">
                                    @for($i = 1; $i <= 5; $i++)
                                    <label class="cursor-pointer">
                                        <input type="radio" name="rating" value="{{ $i }}" class="sr-only peer" {{ $i === 5 ? 'checked' : '' }}>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300 peer-checked:text-yellow-400 hover:text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </label>
                                    @endfor
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="comment" class="block text-gray-700 font-medium mb-2">Commentaire</label>
                                <textarea id="comment" name="comment" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Partagez votre expérience avec cet expert..."></textarea>
                            </div>
                            
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                                Soumettre l'évaluation
                            </button>
                        </form>
                    </div>
                    @endif
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Expert</h2>
                        <div class="flex items-center mb-4">
                            <img src="{{ $consultation->expert->profile_image }}" alt="{{ $consultation->expert->name }}" class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="font-medium text-gray-800">{{ $consultation->expert->name }}</h3>
                                <p class="text-gray-600">{{ $consultation->expert->specialty == 'veterinaire' ? 'Vétérinaire' : 'Expert agricole' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex mr-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ $i <= $consultation->expert->rating ? 'text-yellow-400' : 'text-gray-300' }}" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-gray-600">({{ $consultation->expert->reviews_count }} avis)</span>
                        </div>
                        <p class="text-gray-600 mb-6">{{ $consultation->expert->short_bio }}</p>
                        
                        <div class="space-y-3">
                            <a href="{{ route('appointments.create', ['expert_id' => $consultation->expert_id]) }}" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Prendre un nouveau rendez-vous
                            </a>
                            <a href="{{ route('experts.show', $consultation->expert_id) }}" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center font-medium py-2 px-4 rounded-md transition duration-300">
                                Voir le profil de l'expert
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
