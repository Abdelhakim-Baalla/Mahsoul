@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Nos Experts</h1>
        <p class="text-gray-600 mt-2">Consultez Nos Experts et Prenez un Rendez-vous</p>
    </div>

    <!-- Liste des consultations -->
        <div class="space-y-4 grid grid-cols-2 gap-5">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <h1 class="text-3xl font-bold text-gray-800 px-5 pt-8">Les Experts Agricoles</h1>
                @foreach($agricoles as $agricole)
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <img src="{{$agricole->compte->photo}}" alt="{{$agricole->compte->nom}} {{$agricole->compte->prenom}}" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">{{$agricole->compte->prenom}} {{$agricole->compte->nom}}</h3>
                                <p class="text-gray-600">{{$agricole->compte->email}}</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="flex items-center mb-2">

                                @if($agricole->region == 'non spécifiée' || $agricole->region == '')

                                @else
                                    <svg width="15px" height="15px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.832 2.688A4.056 4.056 0 0 0 8.02 1.5h-.04a4.056 4.056 0 0 0-4 4c-.013.75.198 1.487.606 2.117L7.734 14h.533l3.147-6.383c.409-.63.62-1.367.606-2.117a4.056 4.056 0 0 0-1.188-2.812zM7.925 2.5l.082.01.074-.01a3.075 3.075 0 0 1 2.941 3.037 2.74 2.74 0 0 1-.467 1.568l-.02.034-.017.035L8 12.279l-2.517-5.1-.017-.039-.02-.034a2.74 2.74 0 0 1-.467-1.568A3.074 3.074 0 0 1 7.924 2.5zm.612 2.169a1 1 0 1 0-1.112 1.663 1 1 0 0 0 1.112-1.663zM6.87 3.837a2 2 0 1 1 2.22 3.326 2 2 0 0 1-2.22-3.326z"/>
                                    </svg> 
                                    <span class="text-gray-700">
                                         {{$agricole->region}}
                                    </span>
                                @endif
                            </div>
                            <div class="flex items-center">
                                
                                @if($agricole->produit == 'non spécifiée' || $agricole->produit == '')

                                @else
                                    <span class="text-gray-700">{{$agricole->produit}}</span>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="font-medium text-gray-800"></h4>
                                <p class="text-gray-600 mt-1"></p>
                                <div class="mt-2">

                                    @if($agricole->ferme == 'non spécifié' || $agricole->ferme == '')

                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                         {{$agricole->ferme}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <form action="{{ route('experts.show') }}" method="get">
                                    <input type="hidden" name="expert_id" value="{{$agricole->compte->id}}">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Voir détails
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>




            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <h1 class="text-3xl font-bold text-gray-800 px-5 pt-8">les Veterinaire</h1>
                @foreach($veterinaires as $veterinaire)
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center mb-4 md:mb-0">
                            <img src="{{$veterinaire->compte->photo}}" alt="{{$veterinaire->compte->nom}} {{$veterinaire->compte->prenom}}" class="w-12 h-12 rounded-full object-cover mr-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">{{$veterinaire->compte->prenom}} {{$veterinaire->compte->nom}}</h3>
                                <p class="text-gray-600">{{$veterinaire->compte->email}}</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="flex items-center mb-2">

                                @if($veterinaire->region == 'non spécifiée' || $veterinaire->region == '')

                                @else
                                    <svg width="15px" height="15px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.832 2.688A4.056 4.056 0 0 0 8.02 1.5h-.04a4.056 4.056 0 0 0-4 4c-.013.75.198 1.487.606 2.117L7.734 14h.533l3.147-6.383c.409-.63.62-1.367.606-2.117a4.056 4.056 0 0 0-1.188-2.812zM7.925 2.5l.082.01.074-.01a3.075 3.075 0 0 1 2.941 3.037 2.74 2.74 0 0 1-.467 1.568l-.02.034-.017.035L8 12.279l-2.517-5.1-.017-.039-.02-.034a2.74 2.74 0 0 1-.467-1.568A3.074 3.074 0 0 1 7.924 2.5zm.612 2.169a1 1 0 1 0-1.112 1.663 1 1 0 0 0 1.112-1.663zM6.87 3.837a2 2 0 1 1 2.22 3.326 2 2 0 0 1-2.22-3.326z"/>
                                    </svg> 
                                    <span class="text-gray-700">
                                         {{$veterinaire->region}}
                                    </span>
                                @endif
                            </div>
                            <div class="flex items-center">
                                
                                @if($veterinaire->produit == 'non spécifiée' || $veterinaire->produit == '')

                                @else
                                    <span class="text-gray-700">{{$veterinaire->produit}}</span>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="font-medium text-gray-800"></h4>
                                <p class="text-gray-600 mt-1"></p>
                                <div class="mt-2">

                                    @if($veterinaire->ferme == 'non spécifié' || $veterinaire->ferme == '')

                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                         {{$veterinaire->ferme}}
                                        </span>
                                    @endif

                                    <span class="inline-flex items-center ml-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                       {{$veterinaire->compte->telephone}}
                                    </span>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0">
                                
                                <form action="{{ route('experts.show') }}" method="get">
                                    <input type="hidden" name="expert_id" value="{{$veterinaire->compte->id}}">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Voir détails
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
        </div>
</div>
@endsection
