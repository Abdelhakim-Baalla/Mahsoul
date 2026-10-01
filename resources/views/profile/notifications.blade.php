@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-primary-800">Notifications</h1>
            <p class="mt-2 text-lg text-gray-600">Suivez l'activité de vos commandes et consultations</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                @include('profile.partials.sidebar', ['active' => 'notifications'])
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-xl font-bold text-gray-800">Activité récente ({{ $notifications->count() }})</h2>
                    </div>
                    @if($notifications->isEmpty())
                    <div class="p-10 text-center">
                        <i class="far fa-bell text-gray-300 text-5xl mb-4"></i>
                        <p class="text-gray-600">Aucune notification pour le moment.</p>
                    </div>
                    @else
                    <ul class="divide-y divide-gray-200">
                        @foreach($notifications as $notif)
                        <li class="p-6 flex gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center">
                                <i class="fas {{ $notif['icon'] }} text-primary-600"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800">{{ $notif['title'] }}</p>
                                <p class="text-sm text-gray-600 mt-1">{{ $notif['body'] }}</p>
                                <p class="text-xs text-gray-400 mt-1">{{ $notif['date'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
