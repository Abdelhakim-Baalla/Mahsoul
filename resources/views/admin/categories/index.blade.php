@extends('layouts.admin')

@section('title', 'Gestion des catégories - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4 text-2xl font-semibold text-gray-800">Gestion des catégories</h1>
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-folder mr-2"></i>
                <span>Catégories de produits</span>
            </div>
            <button type="button" class="bg-white text-primary-600 px-3 py-1 rounded-md text-sm font-medium hover:bg-gray-100" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                <i class="fas fa-plus mr-1"></i> Ajouter une catégorie
            </button>
        </div>
        <div class="p-4">
            <div class="flex flex-wrap md:flex-nowrap justify-between mb-4">
                <div class="w-full md:w-1/2 mb-3 md:mb-0 md:mr-2">
                    <div class="flex">
                        <input type="text" class="w-full rounded-l-md border-gray-300 focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" placeholder="Rechercher une catégorie..." id="searchCategory">
                        <button class="bg-gray-100 border border-gray-300 border-l-0 px-3 rounded-r-md hover:bg-gray-200">
                            <i class="fas fa-search"></i>
                        </button>
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
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produits</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fruits</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">fruits</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Tous types de fruits frais</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">24 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Légumes</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">legumes</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Légumes frais de saison</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">36 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Céréales</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">cereales</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Céréales et grains</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">18 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">4</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Produits laitiers</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">produits-laitiers</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Lait, fromage et autres produits laitiers</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">15 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">5</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Miel et dérivés</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">miel-et-derives</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Miel, propolis et autres produits apicoles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">8 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">18/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Huiles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">huiles</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Huiles d'olive, d'argan et autres huiles</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">12 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En révision</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">7</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Épices et herbes</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">epices-et-herbes</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Épices, herbes aromatiques et condiments</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="#" class="text-primary-600 hover:text-primary-800">20 produits</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">22/01/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-primary-600 hover:text-primary-900" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-list"></i>
                                    </a>
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

<!-- Modal Ajouter Catégorie -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary-600 text-white">
                <h5 class="modal-title" id="addCategoryModalLabel">Ajouter une catégorie</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="categoryName" class="block text-sm font-medium text-gray-700">Nom de la catégorie</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryName" required>
                    </div>
                    <div class="mb-3">
                        <label for="categorySlug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categorySlug">
                        <p class="mt-1 text-sm text-gray-500">Le slug sera généré automatiquement à partir du nom si laissé vide.</p>
                    </div>
                    <div class="mb-3">
                        <label for="categoryDescription" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="categoryImage" class="block text-sm font-medium text-gray-700">Image (optionnelle)</label>
                        <input type="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100" id="categoryImage">
                    </div>
                    <div class="mb-3 flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="categoryActive" checked>
                        <label for="categoryActive" class="ml-2 block text-sm text-gray-900">Activer cette catégorie</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700">Ajouter</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modifier Catégorie -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary-600 text-white">
                <h5 class="modal-title" id="editCategoryModalLabel">Modifier la catégorie</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="editCategoryName" class="block text-sm font-medium text-gray-700">Nom de la catégorie</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="editCategoryName" value="Fruits" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCategorySlug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="editCategorySlug" value="fruits">
                    </div>
                    <div class="mb-3">
                        <label for="editCategoryDescription" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="editCategoryDescription" rows="3">Tous types de fruits frais</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="block text-sm font-medium text-gray-700">Image actuelle</label>
                        <div class="mt-1 mb-2">
                            <img src="https://via.placeholder.com/150" alt="Image de catégorie" class="h-24 w-auto rounded-md">
                        </div>
                        <label for="newCategoryImage" class="block text-sm font-medium text-gray-700">Nouvelle image (optionnelle)</label>
                        <input type="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100" id="newCategoryImage">
                    </div>
                    <div class="mb-3 flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="editCategoryActive" checked>
                        <label for="editCategoryActive" class="ml-2 block text-sm text-gray-900">Catégorie active</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700">Enregistrer les modifications</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Supprimer Catégorie -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-red-600 text-white">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>Fruits</strong> ?</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 my-3">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                Attention : Cette catégorie contient <strong>24 produits</strong>. La suppression de cette catégorie affectera ces produits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deleteAction" class="block text-sm font-medium text-gray-700">Que souhaitez-vous faire des produits associés ?</label>
                    <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="deleteAction">
                        <option value="reassign">Réassigner à une autre catégorie</option>
                        <option value="delete">Supprimer les produits</option>
                    </select>
                </div>
                <div id="reassignCategory" class="mb-3">
                    <label for="newCategory" class="block text-sm font-medium text-gray-700">Nouvelle catégorie</label>
                    <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50" id="newCategory">
                        <option value="">Sélectionner une catégorie</option>
                        <option value="2">Légumes</option>
                        <option value="3">Céréales</option>
                        <option value="4">Produits laitiers</option>
                        <option value="5">Miel et dérivés</option>
                        <option value="6">Huiles</option>
                        <option value="7">Épices et herbes</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Supprimer</button>
            </div>
        </div>
    </div>
</div>
@endsection
