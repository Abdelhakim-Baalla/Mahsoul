@extends('layouts.app')

@section('content')
<div class="bg-primary-50 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-primary-800 mb-6">Gestion de l'exploitation</h1>
        @include('farm.partials.nav', ['active' => $navActive ?? 'dashboard'])
        @if(session('success'))
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
            <p class="text-sm text-green-700">{{ session('success') }}</p>
        </div>
        @endif
        @if(session('info'))
        <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-md">
            <p class="text-sm text-blue-700">{{ session('info') }}</p>
        </div>
        @endif
        @if($errors->any())
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
            <ul class="list-disc pl-5 text-sm text-red-700 space-y-1">
                @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
        @endif
        @yield('farm_content')
    </div>
</div>
@endsection
