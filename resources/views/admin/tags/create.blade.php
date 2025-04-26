@extends('layouts.admin')

@section('title', 'Gestion des tags - Mahsoul Admin')

@section('content')

<div id="tagModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Ajouter un nouveau tag
                    </h3>
                    <div class="mt-2">
                        <form id="tagForm" action="{{ route('admin.tags.store') }}" method="POST">
                            @csrf
                            <input type="hidden" id="tagId" name="id">
                            <div class="mb-4">
                                <label for="tagName" class="block text-sm font-medium text-gray-700 text-left">Nom du tag</label>
                                <input type="text" name="name" id="tagName" class="mt-1 border border-gray-400 block w-full shadow-lg sm:text-sm rounded-md">
                            </div>
                            <div class="flex items-center justify-between gap-4">
                                <input type="submit" value="Enregisstrer" id="saveTagBtn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:col-start-2 sm:text-sm">
                                <a href="{{ route('admin.tags.index') }}" id="cancelTagBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                                    Annuler
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection