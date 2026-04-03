@extends('layouts.app')
@section('title', 'Products')
@section('content')
<div class="bg-white rounded-xl shadow-sm p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Products</h2>
    <table class="w-full text-sm text-left">
        <thead class="text-xs text-gray-500 uppercase border-b">
            <tr>
                <th class="pb-3 pr-4">No</th>
                <th class="pb-3 pr-4">Nama Produk</th>
                <th class="pb-3 pr-4">Harga</th>
                <th class="pb-3">Stok</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4">1</td>
                <td class="py-3 pr-4">Laptop Gaming</td>
                <td class="py-3 pr-4">Rp 15.000.000</td>
                <td class="py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">Tersedia</span></td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4">2</td>
                <td class="py-3 pr-4">Smartphone</td>
                <td class="py-3 pr-4">Rp 5.500.000</td>
                <td class="py-3"><span class="px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs">Habis</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection