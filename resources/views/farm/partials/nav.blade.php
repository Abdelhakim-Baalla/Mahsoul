@php
$active = $active ?? 'dashboard';
$items = [
    ['dashboard', 'Tableau de bord', 'fa-tachometer-alt', route('farm.dashboard')],
    ['lots', 'Lots & traçabilité', 'fa-barcode', route('farm.lots.index')],
    ['parcels', 'Parcelles', 'fa-map', route('farm.parcels.index')],
    ['workers', 'Ouvriers', 'fa-users', route('farm.workers.index')],
    ['attendance', 'Pointage', 'fa-clipboard-check', route('farm.attendance.index')],
    ['payroll', 'Paie', 'fa-money-bill-wave', route('farm.payroll.index')],
    ['tasks', 'Tâches', 'fa-tasks', route('farm.tasks.index')],
    ['inputs', 'Stocks', 'fa-warehouse', route('farm.inputs.index')],
    ['caisse', 'Caisse', 'fa-cash-register', route('farm.caisse.index')],
    ['invoices', 'Factures', 'fa-file-invoice', route('farm.invoices.index')],
];
@endphp
<div class="bg-white rounded-lg shadow-md p-4 mb-8 overflow-x-auto">
    <div class="flex gap-2 min-w-max">
        @foreach($items as [$key, $label, $icon, $url])
        <a href="{{ $url }}" class="px-4 py-2 rounded-md text-sm font-medium whitespace-nowrap {{ $active === $key ? 'bg-primary-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <i class="fas {{ $icon }} mr-2"></i>{{ $label }}
        </a>
        @endforeach
    </div>
</div>
