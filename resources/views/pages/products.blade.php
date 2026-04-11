@extends('layouts.app') 
@section('title', 'Products')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">📦 Produk</h1>
            <p class="text-gray-500 text-sm">Daftar produk dalam sistem</p>
        </div>
        <button class="mt-3 md:mt-0 bg-indigo-600 text-white px-5 py-2 rounded-xl shadow hover:bg-indigo-700 hover:scale-105 transition">
            + Tambah Produk
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
                        <th class="py-4 px-4">#</th>
                        <th class="py-4 px-4">Produk</th>
                        <th class="py-4 px-4">Harga</th>
                        <th class="py-4 px-4">Status</th>
                    </tr>
                </thead>

                <!-- Body -->
                <tbody class="divide-y">

                    <tr class="hover:bg-indigo-50 transition">
                        <td class="py-4 px-4 font-semibold">1</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">💻</span>
                            Laptop Gaming
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 15.000.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Tersedia</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition bg-gray-50">
                        <td class="py-4 px-4 font-semibold">2</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">📱</span>
                            Smartphone
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 5.500.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Habis</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition">
                        <td class="py-4 px-4 font-semibold">3</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">🎧</span>
                            Headset Gaming
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 750.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Tersedia</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition bg-gray-50">
                        <td class="py-4 px-4 font-semibold">4</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">⌨️</span>
                            Keyboard Mechanical
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 1.200.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">Terbatas</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition">
                        <td class="py-4 px-4 font-semibold">5</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">🖱️</span>
                            Mouse Wireless
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 300.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Tersedia</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition bg-gray-50">
                        <td class="py-4 px-4 font-semibold">6</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">🖥️</span>
                            Monitor 24 Inch
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 2.500.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Habis</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-indigo-50 transition">
                        <td class="py-4 px-4 font-semibold">7</td>
                        <td class="py-4 px-4 flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">💾</span>
                            Flashdisk 64GB
                        </td>
                        <td class="py-4 px-4 text-indigo-600 font-semibold">Rp 120.000</td>
                        <td class="py-4 px-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Tersedia</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection