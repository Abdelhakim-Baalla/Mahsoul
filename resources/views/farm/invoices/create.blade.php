@extends('farm.layout', ['navActive' => 'invoices'])

@section('farm_content')
<h2 class="text-xl font-bold text-gray-800 mb-6">Nouvelle facture</h2>
<div class="bg-white rounded-3xl shadow-md p-8 max-w-3xl">
    <form action="{{ route('farm.invoices.store') }}" method="POST" class="space-y-5">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Client</label>
                <input type="text" name="client_nom" value="{{ old('client_nom') }}" placeholder="Ex : Wazo Packaging" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">TVA (%)</label>
                <input type="number" step="0.01" min="0" max="100" name="tva" value="{{ old('tva', 0) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Échéance</label>
            <input type="date" name="date_echeance" value="{{ old('date_echeance') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500 sm:w-1/3">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Lignes de facture</label>
            <div id="items" class="space-y-3">
                <div class="grid grid-cols-12 gap-2 item-row">
                    <input type="text" name="items[0][description]" placeholder="Description" class="col-span-6 px-3 py-2 border border-gray-300 rounded-md" required>
                    <input type="number" step="0.01" name="items[0][quantite]" placeholder="Qté" class="col-span-2 px-3 py-2 border border-gray-300 rounded-md" required>
                    <input type="number" step="0.01" name="items[0][prix_unitaire]" placeholder="P.U. DH" class="col-span-3 px-3 py-2 border border-gray-300 rounded-md" required>
                    <button type="button" onclick="this.parentElement.remove()" class="col-span-1 text-red-500 hover:text-red-700"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <button type="button" onclick="addRow()" class="mt-3 text-sm text-primary-600 hover:underline"><i class="fas fa-plus mr-1"></i>Ajouter une ligne</button>
        </div>
        <div class="flex gap-3">
            <button type="submit" class="px-6 py-3 bg-primary-600 text-white font-medium rounded-md hover:bg-primary-700">Créer la facture</button>
            <a href="{{ route('farm.invoices.index') }}" class="px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-md hover:bg-gray-200">Annuler</a>
        </div>
    </form>
</div>
<script>
let rowIndex = 1;
function addRow() {
    const div = document.createElement('div');
    div.className = 'grid grid-cols-12 gap-2 item-row';
    div.innerHTML = `
        <input type="text" name="items[${rowIndex}][description]" placeholder="Description" class="col-span-6 px-3 py-2 border border-gray-300 rounded-md" required>
        <input type="number" step="0.01" name="items[${rowIndex}][quantite]" placeholder="Qté" class="col-span-2 px-3 py-2 border border-gray-300 rounded-md" required>
        <input type="number" step="0.01" name="items[${rowIndex}][prix_unitaire]" placeholder="P.U. DH" class="col-span-3 px-3 py-2 border border-gray-300 rounded-md" required>
        <button type="button" onclick="this.parentElement.remove()" class="col-span-1 text-red-500 hover:text-red-700"><i class="fas fa-times"></i></button>`;
    document.getElementById('items').appendChild(div);
    rowIndex++;
}
</script>
@endsection
