@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-primary-50">
    <div class="w-full h-screen flex items-center justify-center mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl shadow-xl overflow-hidden bg-white max-w-4xl w-full mx-auto">
            @if($errors->any())
            <div class="px-4 py-2 bg-red-100">
                @foreach($errors->all() as $error)
                <p class="my-2 text-red-500">{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/5 lg:w-1/2 relative h-64 md:h-auto">
                    <img src="{{ asset('images/baby-sheep.jpg') }}" 
                         alt="Connexion à Mahsoul"
                         class="absolute w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                </div>

                <div class="md:w-3/5 lg:w-1/2 p-8 md:p-10">
                    <div class="text-center mb-8">
                        <h2 class="font-display text-2xl font-extrabold text-forest">Connectez-vous à votre compte</h2>
                        <p class="mt-2 text-gray-600">Accédez à votre espace personnel</p>
                    </div>

                    <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                                       class="w-full pl-10 pr-4 py-2 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-md focus:ring-primary-500 focus:border-primary-500" 
                                       required>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <a href="{{ route('password.request') }}" class="text-sm text-primary-600 hover:text-primary-700">Mot de passe oublié ?</a>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password"
                                       class="w-full pl-10 pr-4 py-2 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-md focus:ring-primary-500 focus:border-primary-500" 
                                       required>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" 
                                   class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                                Se souvenir de moi
                            </label>
                        </div>

                        <button type="submit"  onclick="return validateLoginForm()" class="w-full bg-forest hover:bg-leaf text-white font-display font-bold py-3 px-4 rounded-full transition duration-200">
                            Se connecter
                        </button>

                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600">
                                Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="text-primary-600 hover:text-primary-700 font-medium">Inscrivez-vous</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/login-validation.js') }}"></script>
@endsection