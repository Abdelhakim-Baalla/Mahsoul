@extends('layouts.admin')

@section('title', 'Détail de la commande - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="mt-4 text-2xl font-semibold text-gray-800">Détail de la commande #MH-2023-1458</h1>
        <div>
            <a href="{{ route('admin.orders.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                <i class="fas fa-arrow-left mr-2"></i> Retour à la liste
            </a>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
            <!-- Informations de la commande -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
                    <div class="flex items-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        <span>Informations de la commande</span>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">Livrée</span>
                </div>
                <div class="p-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">Détails de la commande</h3>
                            <div class="space-y-2">
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Numéro de commande:</span>
                                    <span class="text-gray-900">#MH-2023-1458</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Date de commande:</span>
                                    <span class="text-gray-900">15 avril 2023 à 14:30</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-gray-600 w-40">Statut:</span>
                                    <select class="text-sm rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                                        <option>En attente</option>
                                        <option>En cours</option>
                                        <option>Expédiée</option>
                                        <option selected>Livrée</option>
                                        <option>Annulée</option>
                                    </select>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Paiement:</span>
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Payée</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Méthode de paiement:</span>
                                    <span class="text-gray-900">Carte bancaire</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">Informations de livraison</h3>
                            <div class="space-y-2">
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Date d'expédition:</span>
                                    <span class="text-gray-900">17 avril 2023</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Date de livraison:</span>
                                    <span class="text-gray-900">19 avril 2023</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Transporteur:</span>
                                    <span class="text-gray-900">Amana Express</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-40">Numéro de suivi:</span>
                                    <span class="text-gray-900">AE-987654321</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">Adresse de facturation</h3>
                            <div class="bg-gray-50 p-3 rounded-md">
                                <div class="font-medium text-gray-900">Ahmed Benani</div>
                                <div class="text-gray-600">123 Rue Hassan II</div>
                                <div class="text-gray-600">Quartier Maârif</div>
                                <div class="text-gray-600">Casablanca, 20100</div>
                                <div class="text-gray-600 mt-1">Tél: +212 6 12 34 56 78</div>
                                <div class="text-gray-600">Email: ahmed.b@example.com</div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3">Adresse de livraison</h3>
                            <div class="bg-gray-50 p-3 rounded-md">
                                <div class="font-medium text-gray-900">Ahmed Benani</div>
                                <div class="text-gray-600">123 Rue Hassan II</div>
                                <div class="text-gray-600">Quartier Maârif</div>
                                <div class="text-gray-600">Casablanca, 20100</div>
                                <div class="text-gray-600 mt-1">Tél: +212 6 12 34 56 78</div>
                                <div class="text-gray-600">Email: ahmed.b@example.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Articles de la commande -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex items-center">
                    <i class="fas fa-shopping-basket mr-2"></i>
                    <span>Articles de la commande</span>
                </div>
                <div class="p-4">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produit</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix unitaire</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://via.placeholder.com/50" alt="Produit">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Huile d'olive extra vierge</div>
                                                <div class="text-sm text-gray-500">1L - Pressée à froid</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">120 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">240 DH</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://via.placeholder.com/50" alt="Produit">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Miel d'eucalyptus</div>
                                                <div class="text-sm text-gray-500">500g - Bio</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">180 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">180 DH</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://via.placeholder.com/50" alt="Produit">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Oranges fraîches</div>
                                                <div class="text-sm text-gray-500">5kg - Bio</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">125 DH</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://via.placeholder.com/50" alt="Produit">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Fromage de chèvre</div>
                                                <div class="text-sm text-gray-500">250g - Artisanal</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">95 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">190 DH</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded" src="https://via.placeholder.com/50" alt="Produit">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Safran pur</div>
                                                <div class="text-sm text-gray-500">5g - Premium</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">450 DH</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">450 DH</td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-gray-50">
                                <tr>
                                    <td colspan="3" class="px-6 py-3 text-right text-sm font-medium text-gray-500">Sous-total:</td>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">1,185 DH</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="px-6 py-3 text-right text-sm font-medium text-gray-500">Frais de livraison:</td>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">65 DH</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="px-6 py-3 text-right text-sm font-medium text-gray-900">Total:</td>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm font-bold text-gray-900">1,250 DH</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Historique de la commande -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex items-center">
                    <i class="fas fa-history mr-2"></i>
                    <span>Historique de la commande</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="text-xs text-gray-500 mb-1">15 Avr</div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                <div class="flex-grow w-px bg-gray-200"></div>
                            </div>
                            <div class="flex-grow pb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <h4 class="font-medium text-gray-900">Commande passée</h4>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                                </div>
                                <p class="text-sm text-gray-500">15 avril 2023 à 14:30</p>
                                <p class="mt-1 text-sm text-gray-600">La commande a été passée par le client et confirmée.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="text-xs text-gray-500 mb-1">15 Avr</div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                <div class="flex-grow w-px bg-gray-200"></div>
                            </div>
                            <div class="flex-grow pb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <h4 class="font-medium text-gray-900">Paiement reçu</h4>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                                </div>
                                <p class="text-sm text-gray-500">15 avril 2023 à 14:35</p>
                                <p class="mt-1 text-sm text-gray-600">Paiement par carte bancaire confirmé.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="text-xs text-gray-500 mb-1">16 Avr</div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                <div class="flex-grow w-px bg-gray-200"></div>
                            </div>
                            <div class="flex-grow pb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <h4 class="font-medium text-gray-900">Commande préparée</h4>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                                </div>
                                <p class="text-sm text-gray-500">16 avril 2023 à 10:15</p>
                                <p class="mt-1 text-sm text-gray-600">La commande a été préparée et emballée.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="text-xs text-gray-500 mb-1">17 Avr</div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                <div class="flex-grow w-px bg-gray-200"></div>
                            </div>
                            <div class="flex-grow pb-4">
                                <div class="flex justify-between items-center mb-1">
                                    <h4 class="font-medium text-gray-900">Commande expédiée</h4>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                                </div>
                                <p class="text-sm text-gray-500">17 avril 2023 à 09:30</p>
                                <p class="mt-1 text-sm text-gray-600">La commande a été remise au transporteur Amana Express (Numéro de suivi: AE-987654321).</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div class="text-xs text-gray-500 mb-1">19 Avr</div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="flex-grow pb-2">
                                <div class="flex justify-between items-center mb-1">
                                    <h4 class="font-medium text-gray-900">Commande livrée</h4>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terminé</span>
                                </div>
                                <p class="text-sm text-gray-500">19 avril 2023 à 14:45</p>
                                <p class="mt-1 text-sm text-gray-600">La commande a été livrée au client.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="space-y-6">
            <!-- Informations client -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex items-center">
                    <i class="fas fa-user mr-2"></i>
                    <span>Informations client</span>
                </div>
                <div class="p-4">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/100" class="rounded-full w-20 h-20 mx-auto mb-2" alt="Avatar">
                        <h3 class="text-lg font-medium text-gray-900">Ahmed Benani</h3>
                        <p class="text-sm text-gray-500">Client depuis janvier 2023</p>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Email</p>
                            <p class="text-sm text-gray-900">ahmed.b@example.com</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Téléphone</p>
                            <p class="text-sm text-gray-900">+212 6 12 34 56 78</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Commandes totales</p>
                            <p class="text-sm text-gray-900">5 commandes</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Montant total dépensé</p>
                            <p class="text-sm text-gray-900">4,850 DH</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <a href="#" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700">
                            <i class="fas fa-user mr-2"></i> Voir le profil complet
                        </a>
                        <a href="#" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fas fa-envelope mr-2"></i> Envoyer un message
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Actions -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex items-center">
                    <i class="fas fa-cog mr-2"></i>
                    <span>Actions</span>
                </div>
                <div class="p-4 space-y-2">
                    <button type="button" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700">
                        <i class="fas fa-print mr-2"></i> Imprimer la commande
                    </button>
                    <button type="button" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                        <i class="fas fa-file-pdf mr-2"></i> Générer la facture
                    </button>
                    <button type="button" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700">
                        <i class="fas fa-edit mr-2"></i> Modifier la commande
                    </button>
                    <button type="button" class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700">
                        <i class="fas fa-trash mr-2"></i> Supprimer la commande
                    </button>
                </div>
            </div>
            
            <!-- Notes -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex items-center">
                    <i class="fas fa-sticky-note mr-2"></i>
                    <span>Notes</span>
                </div>
                <div class="p-4">
                    <label for="orderNotes" class="block text-sm font-medium text-gray-700 mb-1">Notes administratives</label>
                    <textarea id="orderNotes" rows="4" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Ajouter des notes privées concernant cette commande...">Client fidèle, livraison prioritaire.</textarea>
                    <button type="button" class="mt-3 w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700">
                        <i class="fas fa-save mr-2"></i> Enregistrer les notes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection