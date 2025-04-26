@extends('layouts.admin')

@section('title', 'Gestion des tags - Mahsoul Admin')

@section('content')

<div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-primary-600 text-white px-4 py-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="font-medium">Ajouter un nouveau tag</span>
                </div>
                <div class="p-5">
                    <form action="/admin/tags/ajoute" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom du tag</label>
                            <input type="text" id="name" name="name" required 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <button type="submit" 
                            class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-2 px-4 rounded-md transition duration-150 ease-in-out">
                            Ajouter le tag
                        </button>
                    </form>
                </div>
            </div>
        </div>

@endsection