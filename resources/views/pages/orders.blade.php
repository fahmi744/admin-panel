@extends('layouts.app')
@section('title', 'Orders')
@section('content')
<div class="bg-white rounded-xl shadow-sm p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Orders</h2>
    <table class="w-full text-sm text-left">
        <thead class="text-xs text-gray-500 uppercase border-b">
            <tr>
                <th class="pb-3 pr-4">Order ID</th>
                <th class="pb-3 pr-4">Customer</th>
                <th class="pb-3 pr-4">Total</th>
                <th class="pb-3">Status</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4 font-medium">#ORD-001</td>
                <td class="py-3 pr-4">Budi Santoso</td>
                <td class="py-3 pr-4">Rp 15.000.000</td>
                <td class="py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">Selesai</span></td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4 font-medium">#ORD-002</td>
                <td class="py-3 pr-4">Siti Aminah</td>
                <td class="py-3 pr-4">Rp 5.500.000</td>
                <td class="py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">Proses</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection