@extends('layouts.admin')

@section('title', 'Gestion des commentaires')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-2xl font-semibold text-gray-800">Gestion des commentaires</h1>
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/admin/dashboard" class="text-gray-700 hover:text-primary-600">
                    <i class="fas fa-home mr-1"></i> Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-400 mx-2 text-sm"></i>
                    <span class="text-gray-500">Commentaires</span>
                </div>
            </li>
        </ol>
    </nav>
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-primary-600 text-white px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-comments mr-2"></i>
                <span>Liste des commentaires</span>
            </div>
            <div>
                <select class="bg-white text-gray-700 text-sm rounded-md border-0 focus:ring-2 focus:ring-primary-500" id="filter-status">
                    <option value="all">Tous les statuts</option>
                    <option value="approved">Approuvés</option>
                    <option value="pending">En attente</option>
                    <option value="spam">Spam</option>
                </select>
            </div>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Commentaire</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Article</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Ahmed Benali</div>
                                        <div class="text-sm text-gray-500">ahmed@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">Merci pour cet article très instructif sur les techniques d'irrigation. J'ai appliqué la méthode goutte à goutte et j'ai constaté une réduction significative de ma consommation d'eau.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/admin/articles/1" class="text-primary-600 hover:text-primary-900 text-sm">Techniques d'irrigation efficaces</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/04/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approuvé</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-gray-600 hover:text-gray-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Fatima Zahra</div>
                                        <div class="text-sm text-gray-500">fatima@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">J'aimerais savoir si ces techniques sont applicables pour les petites exploitations familiales ou si elles sont plutôt destinées aux grandes exploitations agricoles ?</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/admin/articles/1" class="text-primary-600 hover:text-primary-900 text-sm">Techniques d'irrigation efficaces</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">16/04/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-green-600 hover:text-green-900">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <button type="button" class="text-gray-600 hover:text-gray-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Karim Alaoui</div>
                                        <div class="text-sm text-gray-500">karim@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">Excellent article sur l'agriculture biologique ! J'ai commencé à appliquer ces principes dans mon exploitation et les résultats sont très encourageants.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/admin/articles/2" class="text-primary-600 hover:text-primary-900 text-sm">Principes de l'agriculture biologique</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">18/04/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approuvé</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-gray-600 hover:text-gray-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Utilisateur anonyme</div>
                                        <div class="text-sm text-gray-500">anonymous@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">Visitez notre site pour des produits agricoles à prix discount ! www.spam-site.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/admin/articles/3" class="text-primary-600 hover:text-primary-900 text-sm">Fertilisation naturelle des sols</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20/04/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Spam</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-gray-600 hover:text-gray-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="/placeholder.svg?height=40&width=40" alt="Avatar">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Nadia Mansouri</div>
                                        <div class="text-sm text-gray-500">nadia@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">Pourriez-vous faire un article sur les techniques de compostage adaptées au climat marocain ?</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="/admin/articles/3" class="text-primary-600 hover:text-primary-900 text-sm">Fertilisation naturelle des sols</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">22/04/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button type="button" class="text-green-600 hover:text-green-900">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <button type="button" class="text-gray-600 hover:text-gray-900">
                                        <i class="fas fa-eye"></i>
                                    </button>
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Code pour filtrer les commentaires par statut
        const filterStatus = document.getElementById('filter-status');
        if (filterStatus) {
            filterStatus.addEventListener('change', function() {
                // Implémenter la logique de filtrage ici
                console.log('Filtrer par:', this.value);
            });
        }
    });
</script>
@endsection
