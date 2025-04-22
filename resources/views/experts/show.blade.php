@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('experts.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Retour à la liste des experts
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <!-- En-tête du profil -->
        <div class="relative">
            <div class="h-48 bg-gradient-to-r from-green-500 to-green-700"></div>
            <div class="absolute bottom-0 left-0 w-full transform translate-y-1/2 px-6 flex items-end">
                <div class="relative">
                    <img src="{{ $expert->profile_image }}" alt="{{ $expert->name }}" class="w-32 h-32 rounded-full border-4 border-white object-cover">
                    <div class="absolute bottom-0 right-0 bg-white rounded-full p-1 border-2 border-white">
                        <span class="flex h-5 w-5 rounded-full {{ $expert->is_online ? 'bg-green-500' : 'bg-gray-300' }}"></span>
                    </div>
                </div>
                <div class="ml-4 pb-4">
                    <h1 class="text-3xl font-bold text-white">{{ $expert->name }}</h1>
                    <div class="flex items-center mt-1">
                        <span class="bg-white px-3 py-1 rounded-full text-sm font-medium {{ $expert->specialty == 'veterinaire' ? 'text-blue-600' : 'text-green-600' }}">
                            {{ $expert->specialty == 'veterinaire' ? 'Vétérinaire' : 'Expert agricole' }}
                        </span>
                        <div class="flex items-center ml-4">
                            <span class="text-yellow-400 mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </span>
                            <span class="text-white font-medium">{{ $expert->rating }}</span>
                            <span class="text-white text-sm ml-1">({{ $expert->reviews_count }} avis)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenu du profil -->
        <div class="mt-20 p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Colonne de gauche -->
                <div class="lg:col-span-2">
                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">À propos</h2>
                        <p class="text-gray-600">{{ $expert->bio }}</p>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Spécialisations</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach($expert->specializations as $specialization)
                            <span class="bg-gray-100 text-gray-700 px-3 py-1.5 rounded-full">{{ $specialization }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Expérience</h2>
                        <div class="space-y-4">
                            @foreach($expert->experiences as $experience)
                            <div class="border-l-4 border-green-500 pl-4">
                                <h3 class="text-lg font-medium text-gray-800">{{ $experience->position }}</h3>
                                <p class="text-gray-600">{{ $experience->company }}</p>
                                <p class="text-gray-500 text-sm">{{ $experience->start_date }} - {{ $experience->end_date ?? 'Présent' }}</p>
                                <p class="text-gray-600 mt-2">{{ $experience->description }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Formation</h2>
                        <div class="space-y-4">
                            @foreach($expert->education as $education)
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h3 class="text-lg font-medium text-gray-800">{{ $education->degree }}</h3>
                                <p class="text-gray-600">{{ $education->institution }}</p>
                                <p class="text-gray-500 text-sm">{{ $education->start_year }} - {{ $education->end_year }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Avis ({{ $expert->reviews_count }})</h2>
                        @if(count($expert->reviews) > 0)
                            <div class="space-y-6">
                                @foreach($expert->reviews as $review)
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="flex items-center">
                                            <img src="{{ $review->user->avatar }}" alt="{{ $review->user->name }}" class="w-10 h-10 rounded-full mr-3">
                                            <div>
                                                <h4 class="font-medium text-gray-800">{{ $review->user->name }}</h4>
                                                <p class="text-gray-500 text-sm">{{ $review->created_at->format('d M Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            @for($i = 1; $i <= 5; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="text-gray-600">{{ $review->comment }}</p>
                                </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-green-600 hover:text-green-700 font-medium">Voir tous les avis</a>
                            </div>
                        @else
                            <p class="text-gray-600">Aucun avis pour le moment.</p>
                        @endif
                    </div>
                </div>

                <!-- Colonne de droite -->
                <div>
                    <div class="bg-gray-50 rounded-lg p-6 sticky top-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Réserver une consultation</h3>
                        <div class="mb-4">
                            <p class="text-gray-700 font-medium text-lg">{{ $expert->price_per_consultation }} DH</p>
                            <p class="text-gray-500 text-sm">par consultation</p>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-medium text-gray-700 mb-2">Disponibilité</h4>
                            <div class="grid grid-cols-3 gap-2 mb-4">
                                @foreach(['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'] as $index => $day)
                                    <div class="text-center p-2 rounded {{ in_array($index, $expert->available_days) ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-400' }}">
                                        {{ $day }}
                                    </div>
                                @endforeach
                            </div>
                            <p class="text-gray-600 text-sm">
                                Horaires: {{ $expert->available_hours_start }} - {{ $expert->available_hours_end }}
                            </p>
                        </div>
                        <div class="mb-6">
                            <h4 class="font-medium text-gray-700 mb-2">Langues parlées</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($expert->languages as $language)
                                <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-sm">{{ $language }}</span>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ route('appointments.create', ['expert_id' => $expert->id]) }}" class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-3 px-4 rounded-md transition duration-300">
                            Prendre rendez-vous
                        </a>
                        <button class="block w-full mt-3 border border-green-600 text-green-600 hover:bg-green-50 text-center font-medium py-3 px-4 rounded-md transition duration-300">
                            Contacter l'expert
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
