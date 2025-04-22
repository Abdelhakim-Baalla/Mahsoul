@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Nos experts</h1>
        <p class="text-gray-600 mt-2">Consultez nos experts vétérinaires et agricoles pour obtenir des conseils professionnels</p>
    </div>

    <!-- Filtres -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-6">
        <h2 class="text-xl font-semibold mb-4">Filtrer les experts</h2>
        <form action="{{ route('experts.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="specialty" class="block text-sm font-medium text-gray-700 mb-1">Spécialité</label>
                <select id="specialty" name="specialty" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Toutes les spécialités</option>
                    <option value="veterinaire" {{ request('specialty') == 'veterinaire' ? 'selected' : '' }}>Vétérinaire</option>
                    <option value="agricole" {{ request('specialty') == 'agricole' ? 'selected' : '' }}>Expert agricole</option>
                </select>
            </div>
            <div>
                <label for="availability" class="block text-sm font-medium text-gray-700 mb-1">Disponibilité</label>
                <select id="availability" name="availability" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Toutes les disponibilités</option>
                    <option value="today" {{ request('availability') == 'today' ? 'selected' : '' }}>Aujourd'hui</option>
                    <option value="this_week" {{ request('availability') == 'this_week' ? 'selected' : '' }}>Cette semaine</option>
                    <option value="next_week" {{ request('availability') == 'next_week' ? 'selected' : '' }}>Semaine prochaine</option>
                </select>
            </div>
            <div>
                <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">Évaluation minimale</label>
                <select id="rating" name="rating" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Toutes les évaluations</option>
                    <option value="4" {{ request('rating') == '4' ? 'selected' : '' }}>4 étoiles et plus</option>
                    <option value="3" {{ request('rating') == '3' ? 'selected' : '' }}>3 étoiles et plus</option>
                    <option value="2" {{ request('rating') == '2' ? 'selected' : '' }}>2 étoiles et plus</option>
                </select>
            </div>
            <div class="md:col-span-3 flex justify-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                    Appliquer les filtres
                </button>
            </div>
        </form>
    </div>

    <!-- Liste des experts -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($experts as $expert)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="relative">
                <img src="{{ $expert->profile_image }}" alt="{{ $expert->name }}" class="w-full h-48 object-cover">
                <div class="absolute top-2 right-2 bg-white px-2 py-1 rounded-full text-sm font-medium {{ $expert->specialty == 'veterinaire' ? 'text-blue-600' : 'text-green-600' }}">
                    {{ $expert->specialty == 'veterinaire' ? 'Vétérinaire' : 'Expert agricole' }}
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $expert->name }}</h3>
                    <div class="flex items-center">
                        <span class="text-yellow-500 mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </span>
                        <span class="text-gray-700 font-medium">{{ $expert->rating }}</span>
                        <span class="text-gray-500 text-sm ml-1">({{ $expert->reviews_count }})</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-3">{{ $expert->short_bio }}</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach($expert->specializations as $specialization)
                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-full">{{ $specialization }}</span>
                    @endforeach
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-medium">{{ $expert->price_per_consultation }} DH / consultation</span>
                    <a href="{{ route('experts.show', $expert->id) }}" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1.5 px-3 rounded-md transition duration-300">
                        Voir profil
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $experts->links() }}
    </div>
</div>
@endsection
