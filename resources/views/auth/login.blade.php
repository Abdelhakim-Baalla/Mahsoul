@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-primary-50">
    <div class="w-full h-screen flex items-center justify-center mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-lg shadow-lg overflow-hidden bg-white max-w-4xl w-full mx-auto">
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
                        <h2 class="text-2xl font-bold text-gray-800">Connectez-vous à votre compte</h2>
                        <p class="mt-2 text-gray-600">Accédez à votre espace personnel</p>
                    </div>

                    <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Email -->
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

                        <!-- Password -->
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

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" 
                                   class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                                Se souvenir de moi
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"  onclick="return validateLoginForm()" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Se connecter
                        </button>

                        <!-- Social Login -->
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">
                                    Ou connectez-vous avec
                                </span>
                            </div>
                        </div>

                        <!-- Register Link -->
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