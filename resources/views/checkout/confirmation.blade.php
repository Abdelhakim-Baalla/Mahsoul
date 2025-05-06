@extends('layouts.app')

@section('content')
    <div class="bg-primary-50 min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                            <span class="text-primary-600 font-medium">Confirmation de commande</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <div class="mb-8">
                <div class="flex items-center justify-center">
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Panier</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Informations</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Paiement</div>
                    </div>
                    <div class="flex-auto border-t-2 border-primary-600"></div>
                    <div class="flex items-center text-primary-600 relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary-600 bg-primary-600 text-white flex items-center justify-center">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium text-primary-600">Confirmation</div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6 bg-primary-600 text-white text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check text-primary-600 text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold">Merci pour votre commande !</h1>
                    <p class="mt-2">Votre commande a été confirmée et sera traitée rapidement.</p>
                </div>
                
                <div class="p-6 text-center">
                    <p class="text-gray-700 mb-4">Un email de confirmation a été envoyé à votre adresse email.</p>
                    <p class="text-gray-700 mb-4">Vous pouvez suivre l'état de votre commande dans votre espace client.</p>
                    <p class="text-gray-700 mb-6">Si vous avez des questions concernant votre commande, n'hésitez pas à nous contacter.</p>
                    
                    <div class="mt-8">
                        <a href="/" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i class="fas fa-home mr-2"></i> Retour à l'accueil
                        </a>
                        <a href="/profile" class="ml-4 inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i class="fas fa-user mr-2"></i> Mon compte
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection