@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-primary-50 py-12">
        <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-primary-800">Réinitialiser le mot de passe</h1>
                <p class="mt-2 text-lg text-gray-600">Créez un nouveau mot de passe pour votre compte</p>
            </div>
            
            <!-- Reset Password Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <!-- Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-lock-open text-primary-600 text-2xl"></i>
                        </div>
                    </div>
                    
                    <!-- Reset Password Form -->
                    <form action="/reset-password" method="POST">
                        <!-- Hidden Token Field -->
                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" value="{{ $email }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 bg-gray-100" readonly>
                        </div>
                        
                        <!-- New Password -->
                        <div class="mb-6">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Nouveau mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password" name="password" class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Le mot de passe doit contenir au moins 8 caractères</p>
                        </div>
                        
                        <!-- Confirm Password -->
                        <div class="mb-6">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required minlength="8">
                            </div>
                        </div>
                        
                        <!-- Password Strength Indicator -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Force du mot de passe</label>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-red-500 h-2.5 rounded-full" style="width: 0%" id="password-strength"></div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500" id="password-strength-text">Entrez un mot de passe</p>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 ease-in-out">
                            Réinitialiser le mot de passe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('password-strength');
            const strengthText = document.getElementById('password-strength-text');
            
            // Calculate strength
            let strength = 0;
            
            if (password.length >= 8) strength += 25;
            if (password.match(/[a-z]+/)) strength += 25;
            if (password.match(/[A-Z]+/)) strength += 25;
            if (password.match(/[0-9]+/) || password.match(/[^a-zA-Z0-9]+/)) strength += 25;
            
            // Update UI
            strengthBar.style.width = strength + '%';
            
            if (strength < 25) {
                strengthBar.className = 'bg-red-500 h-2.5 rounded-full';
                strengthText.textContent = 'Très faible';
            } else if (strength < 50) {
                strengthBar.className = 'bg-orange-500 h-2.5 rounded-full';
                strengthText.textContent = 'Faible';
            } else if (strength < 75) {
                strengthBar.className = 'bg-yellow-500 h-2.5 rounded-full';
                strengthText.textContent = 'Moyen';
            } else {
                strengthBar.className = 'bg-green-500 h-2.5 rounded-full';
                strengthText.textContent = 'Fort';
            }
        });
        
        // Password confirmation checker
        document.getElementById('password_confirmation').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmation = this.value;
            
            if (password === confirmation) {
                this.classList.remove('border-red-500');
                this.classList.add('border-green-500');
            } else {
                this.classList.remove('border-green-500');
                this.classList.add('border-red-500');
            }
        });
    </script>
@endsection
