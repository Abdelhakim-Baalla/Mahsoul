@extends('layouts.admin')

@section('title', 'Gestion des tags - Mahsoul Admin')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-900">Gestion des tags</h1>
            <a href="/admin/tag/create" id="addTagBtn" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Ajouter un tag
            </a>
        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-4 py-5 sm:px-6 bg-green-600 text-white">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                    Liste des tags
                </div>
            </div>

            <div class="px-4 py-5 sm:p-6">


            <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nom du tag
                </th>
                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 text-sm text-gray-700">12</td>
                <td class="px-6 py-4 text-sm text-gray-900">Fruits</td>
                <td class="px-6 py-4 text-right text-sm font-medium">
                    <a href="{{ route('admin.tags.update') }}" class="text-indigo-600 hover:text-indigo-900 mr-3">
                        Modifier
                    </a>
                    <a href="#" class="text-red-600 hover:text-red-900" id="supprimerBtn">
                        Supprimer
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


                <div class="mt-5">
                    <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
                        <div class="-mt-px flex w-0 flex-1">
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                                </svg>
                                Précédent
                            </a>
                        </div>
                        <div class="hidden md:-mt-px md:flex">
                            <a href="#" class="inline-flex items-center border-t-2 border-green-500 px-4 pt-4 text-sm font-medium text-green-600" aria-current="page">
                                1
                            </a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                2
                            </a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                3
                            </a>
                            <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">
                                ...
                            </span>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                8
                            </a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                9
                            </a>
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                10
                            </a>
                        </div>
                        <div class="-mt-px flex w-0 flex-1 justify-end">
                            <a href="#" class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                Suivant
                                <svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de    suppression -->
<div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Supprimer le tag
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">
                            Êtes-vous sûr de vouloir supprimer ce tag ? Cette action est irréversible.
                        </p>
                        <input type="hidden" id="tagToDelete">
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                <button type="button" id="confirmDeleteBtn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:col-start-2 sm:text-sm">
                    Supprimer
                </button>
                <button type="button" id="cancelDeleteBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    var supprimerBtn = document.getElementById('supprimerBtn');
    supprimerBtn.addEventListener('click', function() {
        console.log("clicked");

        document.getElementById('deleteModal').classList.remove('hidden');
    });

    // Fermer le modal de suppression
    document.getElementById('cancelDeleteBtn').addEventListener('click', function() {
        document.getElementById('deleteModal').classList.add('hidden');
    });

    // Confirmer la suppression
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        const tagId = document.getElementById('tagToDelete').value;
        // Envoie une requête DELETE ici, exemple :
        // fetch(`/admin/tags/${tagId}`, { method: 'DELETE', headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}})
        //     .then(() => location.reload());
        alert(`Suppression du tag avec l'ID ${tagId}`); // À remplacer par une vraie requête
        document.getElementById('deleteModal').classList.add('hidden');
    });

    // Gérer l’enregistrement (ajout ou modification)
    document.getElementById('saveTagBtn').addEventListener('click', function() {
        const id = document.getElementById('tagId').value;
        const name = document.getElementById('tagName').value;
        const color = document.getElementById('tagColor').value;

        const formData = new FormData(document.getElementById('tagForm'));
        const url = id ? `/admin/tags/${id}` : '/admin/tags';
        const method = id ? 'PUT' : 'POST';

        fetch(url, {
                method: method,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Gère le succès : tu peux rafraîchir la page ou mettre à jour le DOM
                alert('Tag enregistré avec succès');
                location.reload(); // Pour l'instant, on recharge
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
    });

    // Pré-remplissage du modal pour édition (à activer si les boutons existent)
    document.querySelectorAll('.text-indigo-600').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const row = this.closest('tr');
            const tagId = row.getAttribute('data-id');
            const tagName = row.querySelector('td:nth-child(2)').textContent.trim();

            document.getElementById('tagId').value = tagId;
            document.getElementById('tagName').value = tagName;
            document.getElementById('modal-title').textContent = 'Modifier le tag';
            document.getElementById('tagModal').classList.remove('hidden');
        });
    });
</script>
@endsection