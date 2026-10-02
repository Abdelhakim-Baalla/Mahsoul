@php
$active = $active ?? 'profile';
$link = function ($key, $url, $icon, $label) use ($active) {
    $on = $active === $key;
    return '<li><a href="' . $url . '" class="flex items-center px-4 py-2 rounded-md ' . ($on ? 'bg-primary-50 text-primary-700 font-medium' : 'text-gray-700 hover:bg-gray-100') . '"><i class="fas ' . $icon . ' mr-3"></i>' . $label . '</a></li>';
};
@endphp
<div class="bg-white rounded-3xl shadow-md overflow-hidden">
    @if(Auth::user()->type == 'agricole')
    <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/agricole-banner.jpg') }}'); background-size: cover; background-position: center;">
        @elseif(Auth::user()->type == 'veterinaire')
        <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/veterinaire-banner.jpg') }}'); background-size: cover; background-position: center;">
            @elseif(Auth::user()->type == 'client')
            <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/client-banner.jpg') }}'); background-size: cover; background-position: center;">
                @else
                <div class="p-6 text-white relative" style="background-image: url('{{ asset('images/paysage.jpg') }}'); background-size: cover; background-position: center;">
                    @endif
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="relative z-10 flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-20 w-20 rounded-full object-cover border-4 border-white" src="{{ Auth::user()->photo ?? asset('images/default-avatar.jpg') }}" alt="Photo de profil">
                        </div>
                        <div class="ml-4">
                            <h2 class="text-xl font-bold text-white">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
                            <div class="mt-1 flex items-center space-x-2">
                                @switch(Auth::user()->type)
                                @case('admin')
                                <i class="fas fa-crown text-yellow-400"></i>
                                <span class="text-white font-medium">ADMINISTRATEUR</span>
                                @break
                                @case('veterinaire')
                                <i class="fas fa-stethoscope text-blue-300"></i>
                                <span class="text-white font-medium">VÉTÉRINAIRE</span>
                                @break
                                @case('agricole')
                                <i class="fas fa-tractor text-green-300"></i>
                                <span class="text-white font-medium">AGRICOLE</span>
                                @break
                                @case('client')
                                <i class="fas fa-user-circle text-purple-300"></i>
                                <span class="text-white font-medium">CLIENT</span>
                                @break
                                @default
                                <i class="fas fa-user text-gray-300"></i>
                                <span class="text-white font-medium">UTILISATEUR</span>
                                @endswitch
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="p-4">
                    <ul class="space-y-2">
                        {!! $link('profile', '/profile', 'fa-user', 'Informations personnelles') !!}
                        {!! $link('orders', '/profile/orders', 'fa-shopping-bag', 'Mes commandes') !!}
                        {!! $link('consultations', '/profile/consultations', 'fa-calendar-check', 'Mes consultations') !!}
                        {!! $link('favorites', '/profile/favorites', 'fa-heart', 'Mes favoris') !!}
                        {!! $link('security', '/profile/security', 'fa-shield-alt', 'Sécurité') !!}
                        {!! $link('notifications', '/profile/notifications', 'fa-bell', 'Notifications') !!}
                    </ul>
                </nav>

                <div class="p-4 border-t border-gray-200">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-red-50 rounded-md">
                            <i class="fas fa-sign-out-alt mr-3"></i>
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
