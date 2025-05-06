@extends('layouts.app')

@section('content')



<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 order-2 lg:order-1">
                <h2 class="text-3xl font-bold text-primary-800 mb-8">Envoyez-nous un message</h2>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                            <input type="text" id="first_name" name="first_name"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200 ease-in-out">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                            <input type="text" id="last_name" name="last_name"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200 ease-in-out">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200 ease-in-out">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone <span class="text-gray-400">(Optionnel)</span></label>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200 ease-in-out">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Sujet</label>
                        <select id="subject" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200 ease-in-out appearance-none bg-white pr-8">
                            <option value="">Sélectionnez un sujet</option>
                            <option value="consultation">Demande de consultation</option>
                            <option value="marketplace">Question sur la Marketplace</option>
                            <option value="formation">Question sur la Formation</option>
                            <option value="technical">Support technique</option>
                            <option value="partnership">Partenariat</option>
                             <option value="other">Autre demande</option>
                        </select>
                         <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700" style="position: absolute; right: 0.5rem; top: 70%; transform: translateY(-50%);">
                           <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                         </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Votre Message</label>
                        <textarea id="message" name="message" rows="5"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition duration-200 ease-in-out"></textarea>
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="privacy" name="privacy" type="checkbox"
                                   class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="privacy" class="text-gray-600">
                                J'accepte la <a href="/privacy" class="text-primary-600 hover:text-primary-700 font-medium underline">politique de confidentialité</a>.
                            </label>
                        </div>
                    </div>

                    <button type="submit"
                            class="w-full px-8 py-4 text-center font-medium rounded-full text-white bg-gradient-to-r from-primary-500 to-primary-700 hover:shadow-lg transform hover:-translate-y-1 transition duration-300 inline-flex items-center justify-center">
                 
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 16.571V11a1 1 0 112 0v5.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                        <span>Envoyer le message</span>
                    </button>
                </form>
            </div>

            <div class="space-y-8 order-1 lg:order-2">
                <div class="bg-gradient-to-br from-primary-50 to-primary-100 rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-bold text-primary-800 mb-8">Nos Coordonnées</h2>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-white text-primary-600 flex items-center justify-center shadow-md">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900">Adresse</h3>
                                <p class="text-gray-700 mt-1">123 Rue de l'Agriculture, AgroPole, 10000 Ville, Maroc</p> 
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-white text-primary-600 flex items-center justify-center shadow-md">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900">Téléphone</h3>
                                <p class="text-gray-700 mt-1"><a href="tel:+212620022074" class="hover:text-primary-700">+212 620022074</a></p> {{-- Replace X with actual number --}}
                                <p class="text-gray-600 text-sm">Lun-Ven: 9h00 - 18h00</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-xl bg-white text-primary-600 flex items-center justify-center shadow-md">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                                <p class="text-gray-700 mt-1"><a href="mailto:contact@mahsoul.ma" class="hover:text-primary-700">contact@mahsoul.ma</a></p>
                                <p class="text-gray-700 mt-1"><a href="mailto:support@mahsoul.ma" class="hover:text-primary-700">support@mahsoul.ma</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-6 border-t border-primary-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Suivez-nous</h3>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Facebook" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" aria-label="Twitter" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                             <a href="#" aria-label="Instagram" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" aria-label="LinkedIn" class="w-10 h-10 bg-primary-600 hover:bg-primary-700 rounded-full flex items-center justify-center text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-secondary-500 to-primary-500 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Besoin d'une réponse rapide ?</h2>
        <p class="text-xl text-primary-100 max-w-3xl mx-auto mb-8">
            Contactez-nous directement par téléphone ou par email pour une assistance immédiate.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="tel:+212620022074"
               class="inline-block px-8 py-4 text-center font-medium rounded-full bg-white text-primary-700 hover:bg-gray-100 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                <i class="fas fa-phone-alt mr-2"></i> Appelez-nous
            </a>
             <span class="text-primary-200 hidden sm:inline-block">ou</span>
            <a href="mailto:support@mahsoul.ma"
               class="inline-block px-8 py-4 text-center font-medium rounded-full text-white border-2 border-white hover:bg-white hover:text-primary-700 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                <i class="fas fa-envelope mr-2"></i> Envoyez un email
            </a>
        </div>
    </div>
</section>

@endsection