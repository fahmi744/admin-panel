@extends('layouts.app')
@section('title', 'Orders')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">🧾 Orders</h1>
            <p class="text-gray-500 text-sm">Daftar pesanan pelanggan</p>
        </div>
        <button class="mt-3 md:mt-0 bg-indigo-600 text-white px-5 py-2 rounded-xl shadow hover:bg-indigo-700 hover:scale-105 transition">
            + Tambah Order
        </button>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">

                <!-- Head -->
                <thead class="bg-indigo-900 text-indigo-200 uppercase text-xs">
                    <tr>
                        <th class="py-4 px-4">Order ID</th>
                        <th class="py-4 px-4">Customer</th>
                        <th class="py-4 px-4">Total</th>
                        <th class="py-4 px-4">Status</th>
                    </tr>
                </thead>

                <!-- Body -->
                <tbody class="divide-y">

                    <tr class="hover:bg-indigo-50 transition">
                        <td class="py-4 px-4 font-semibold">#ORD-001</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">👤</span>
                            Budi Santoso
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 15.000.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Selesai</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition bg-gray-50">
                        <td class="py-4 px-4 font-semibold">#ORD-002</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">👤</span>
                            Siti Aminah
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 5.500.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">Proses</span>
                        </td>
                    </tr>

                    <!-- Tambahan Data -->
                    <tr class="hover:bg-indigo-50 transition">
                        <td class="py-4 px-4 font-semibold">#ORD-003</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">👤</span>
                            Andi Wijaya
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 2.000.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Batal</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition bg-gray-50">
                        <td class="py-4 px-4 font-semibold">#ORD-004</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">👤</span>
                            Dewi Lestari
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 8.750.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Dikirim</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection