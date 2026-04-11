@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

{{-- Stat Cards --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

    <div class="bg-white rounded-xl shadow-sm p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500">Total Users</p>
            <p class="text-2xl font-bold text-gray-800">1,284</p>
            <p class="text-xs text-green-500 font-medium">↑ 12% dari bulan lalu</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600">
            💰
        </div>
        <div>
            <p class="text-sm text-gray-500">Revenue</p>
            <p class="text-2xl font-bold text-gray-800">Rp 48,2 Jt</p>
            <p class="text-xs text-green-500 font-medium">↑ 8% dari bulan lalu</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600">
            📦
        </div>
        <div>
            <p class="text-sm text-gray-500">Orders</p>
            <p class="text-2xl font-bold text-gray-800">326</p>
            <p class="text-xs text-red-500 font-medium">↓ 3% dari bulan lalu</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-500">
            🛒
        </div>
        <div>
            <p class="text-sm text-gray-500">Products</p>
            <p class="text-2xl font-bold text-gray-800">89</p>
            <p class="text-xs text-green-500 font-medium">↑ 5 produk baru</p>
        </div>
    </div>

</div>


{{-- Tabel Recent Orders (TIDAK DIUBAH) --}}
<div class="bg-white rounded-xl shadow-sm p-6">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Recent Orders</h2>
        <a href="#" class="text-sm text-indigo-600 hover:underline">Lihat Semua</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-gray-500 uppercase border-b">
                <tr>
                    <th class="pb-3 pr-4">Order ID</th>
                    <th class="pb-3 pr-4">Customer</th>
                    <th class="pb-3 pr-4">Product</th>
                    <th class="pb-3 pr-4">Total</th>
                    <th class="pb-3">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 pr-4 font-medium">#ORD-001</td>
                    <td class="py-3 pr-4">Budi Santoso</td>
                    <td class="py-3 pr-4">Laptop Gaming</td>
                    <td class="py-3 pr-4">Rp 15.000.000</td>
                    <td class="py-3">
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">
                            Selesai (49%)
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 pr-4 font-medium">#ORD-002</td>
                    <td class="py-3 pr-4">Siti Aminah</td>
                    <td class="py-3 pr-4">Smartphone</td>
                    <td class="py-3 pr-4">Rp 5.500.000</td>
                    <td class="py-3">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium">
                            Proses (25%)
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


{{-- Grafik --}}
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">

    <div class="bg-white rounded-xl shadow-sm p-6 xl:col-span-2">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Grafik Orders Bulan</h2>
        <canvas id="ordersChart" height="120"></canvas>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6 relative">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Status Orders</h2>
        <canvas id="statusChart" height="200"></canvas>

        {{-- TEXT TENGAH --}}
        <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
            <p class="text-gray-400 text-sm">Total Orders</p>
            <p class="text-xl font-bold text-gray-800">370</p>
        </div>
    </div>

</div>

@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const dataStatus = [180, 90, 40, 60];
    const labelsStatus = ['Selesai','Proses','Batal','Dikirim'];

    const total = dataStatus.reduce((a, b) => a + b, 0);

    const labelsDenganPersen = dataStatus.map((val, i) => {
        const persen = Math.round((val / total) * 100);
        return `${labelsStatus[i]} (${persen}%)`;
    });

    new Chart(document.getElementById('ordersChart'), {
        type: 'bar',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
            datasets: [{
                data: [50,80,65,90,120,100],
                backgroundColor: '#4f46e5',
                borderRadius: 6
            }]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });

    new Chart(document.getElementById('statusChart'), {
        type: 'doughnut',
        data: {
            labels: labelsDenganPersen,
            datasets: [{
                data: dataStatus,
                backgroundColor: ['#22c55e','#f59e0b','#ef4444','#3b82f6']
            }]
        },
        options: {
            cutout: '70%',
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

});
</script>

@endsection