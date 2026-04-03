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
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500">Revenue</p>
            <p class="text-2xl font-bold text-gray-800">Rp 48,2 Jt</p>
            <p class="text-xs text-green-500 font-medium">↑ 8% dari bulan lalu</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500">Orders</p>
            <p class="text-2xl font-bold text-gray-800">326</p>
            <p class="text-xs text-red-500 font-medium">↓ 3% dari bulan lalu</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </svg>
        </div>
        <div>
            <p class="text-sm text-gray-500">Products</p>
            <p class="text-2xl font-bold text-gray-800">89</p>
            <p class="text-xs text-green-500 font-medium">↑ 5 produk baru</p>
        </div>
    </div>

</div>

{{-- Tabel Recent Orders --}}
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
                    <td class="py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Selesai</span></td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 pr-4 font-medium">#ORD-002</td>
                    <td class="py-3 pr-4">Siti Aminah</td>
                    <td class="py-3 pr-4">Smartphone</td>
                    <td class="py-3 pr-4">Rp 5.500.000</td>
                    <td class="py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium">Proses</span></td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 pr-4 font-medium">#ORD-003</td>
                    <td class="py-3 pr-4">Eko Prasetyo</td>
                    <td class="py-3 pr-4">Headphone</td>
                    <td class="py-3 pr-4">Rp 850.000</td>
                    <td class="py-3"><span class="px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">Batal</span></td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 pr-4 font-medium">#ORD-004</td>
                    <td class="py-3 pr-4">Dewi Rahayu</td>
                    <td class="py-3 pr-4">Monitor 4K</td>
                    <td class="py-3 pr-4">Rp 4.200.000</td>
                    <td class="py-3"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Dikirim</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection