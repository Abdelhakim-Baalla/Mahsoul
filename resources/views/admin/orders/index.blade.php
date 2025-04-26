@extends('layouts.admin')

@section('title', 'Gestion des commandes - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4 text-2xl font-semibold text-gray-800">Gestion des commandes</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-primary-600 text-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-bold mb-1">1,248</h5>
                        <div class="text-sm opacity-80">Commandes totales</div>
                    </div>
                    <div>
                        <i class="fas fa-shopping-cart text-3xl opacity-80"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-yellow-500 text-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-bold mb-1">42</h5>
                        <div class="text-sm opacity-80">En attente</div>
                    </div>
                    <div>
                        <i class="fas fa-clock text-3xl opacity-80"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-green-600 text-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-bold mb-1">1,156</h5>
                        <div class="text-sm opacity-80">Livrées</div>
                    </div>
                    <div>
                        <i class="fas fa-check-circle text-3xl opacity-80"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-red-600 text-white rounded-lg shadow-md overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h5 class="text-xl font-bold mb-1">24</h5>
                        <div class="text-sm opacity-80">Annulées</div>
                    </div>
                    <div>
                        <i class="fas fa-times-circle text-3xl opacity-80"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3">
            <div class="flex items-center">
                <i class="fas fa-table mr-2"></i>
                <span>Liste des commandes</span>
            </div>
        </div>
        <div class="p-4">
            <div class="flex flex-wrap md:flex-nowrap justify-between mb-4">
                <div class="w-full md:w-2/3 mb-3 md:mb-0">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                        <select class="rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="filterStatus">
                            <option value="">Tous les statuts</option>
                            <option value="pending">En attente</option>
                            <option value="processing">En cours</option>
                            <option value="shipped">Expédiée</option>
                            <option value="delivered">Livrée</option>
                            <option value="cancelled">Annulée</option>
                        </select>
                        <input type="date" class="rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="filterDate" placeholder="Date">
                        <div class="flex">
                            <input type="text" class="w-full rounded-l-md border-gray-300 focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" placeholder="Rechercher..." id="searchOrder">
                            <button class="bg-gray-100 border border-gray-300 border-l-0 px-3 rounded-r-md hover:bg-gray-200">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-auto flex justify-end">
                    <div class="inline-flex rounded-md shadow-sm">
                        <button type="button" class="px-3 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fas fa-file-export mr-1"></i> Exporter
                        </button>
                        <button type="button" class="px-3 py-2 border border-gray-300 border-l-0 text-sm font-medium rounded-r-md text-gray-700 bg-white hover:bg-gray-50">
                            <i class="fas fa-print mr-1"></i> Imprimer
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produits</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Paiement</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#MH-2023-1458</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/36" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Ahmed Benani</div>
                                        <div class="text-sm text-gray-500">ahmed.b@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15 avril 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5 articles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1,250 DH</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Livrée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Payée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.orders.show', 1) }}" class="text-primary-600 hover:text-primary-900">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="relative inline-block text-left" x-data="{ open: false }">
                                        <button @click="open = !open" type="button" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div class="py-1" role="none">
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-print mr-2"></i> Imprimer</a>
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-file-pdf mr-2"></i> Facture</a>
                                                <div class="border-t border-gray-100 my-1"></div>
                                                <a href="#" class="text-red-600 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-trash mr-2"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#MH-2023-1457</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/36" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Fatima Zahra</div>
                                        <div class="text-sm text-gray-500">fatima.z@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15 avril 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3 articles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">780 DH</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Payée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.orders.show', 2) }}" class="text-primary-600 hover:text-primary-900">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="relative inline-block text-left" x-data="{ open: false }">
                                        <button @click="open = !open" type="button" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div class="py-1" role="none">
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-print mr-2"></i> Imprimer</a>
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-file-pdf mr-2"></i> Facture</a>
                                                <div class="border-t border-gray-100 my-1"></div>
                                                <a href="#" class="text-red-600 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-trash mr-2"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#MH-2023-1456</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/36" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Mohammed Alaoui</div>
                                        <div class="text-sm text-gray-500">m.alaoui@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14 avril 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 articles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">450 DH</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Expédiée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Payée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.orders.show', 3) }}" class="text-primary-600 hover:text-primary-900">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="relative inline-block text-left" x-data="{ open: false }">
                                        <button @click="open = !open" type="button" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div class="py-1" role="none">
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-print mr-2"></i> Imprimer</a>
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-file-pdf mr-2"></i> Facture</a>
                                                <div class="border-t border-gray-100 my-1"></div>
                                                <a href="#" class="text-red-600 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-trash mr-2"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#MH-2023-1455</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/36" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Karim Idrissi</div>
                                        <div class="text-sm text-gray-500">k.idrissi@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14 avril 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4 articles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">920 DH</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">En attente</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.orders.show', 4) }}" class="text-primary-600 hover:text-primary-900">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="relative inline-block text-left" x-data="{ open: false }">
                                        <button @click="open = !open" type="button" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div class="py-1" role="none">
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-print mr-2"></i> Imprimer</a>
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-file-pdf mr-2"></i> Facture</a>
                                                <div class="border-t border-gray-100 my-1"></div>
                                                <a href="#" class="text-red-600 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-trash mr-2"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#MH-2023-1454</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/36" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Samira Tazi</div>
                                        <div class="text-sm text-gray-500">s.tazi@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13 avril 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1 article</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">350 DH</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Annulée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Remboursée</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.orders.show', 5) }}" class="text-primary-600 hover:text-primary-900">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="relative inline-block text-left" x-data="{ open: false }">
                                        <button @click="open = !open" type="button" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                            <div class="py-1" role="none">
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-print mr-2"></i> Imprimer</a>
                                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-file-pdf mr-2"></i> Facture</a>
                                                <div class="border-t border-gray-100 my-1"></div>
                                                <a href="#" class="text-red-600 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"><i class="fas fa-trash mr-2"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="flex justify-center mt-6">
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Précédent</span>
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" aria-current="page" class="z-10 bg-primary-50 border-primary-500 text-primary-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        1
                    </a>
                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        2
                    </a>
                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                        3
                    </a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <span class="sr-only">Suivant</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
