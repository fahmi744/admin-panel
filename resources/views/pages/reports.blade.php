@extends('layouts.app')
@section('title', 'Reports')
@section('content')
<div class="bg-white rounded-xl shadow-sm p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-4">Laporan</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="bg-indigo-50 rounded-xl p-5 text-center">
            <p class="text-sm text-gray-500">Total Pendapatan</p>
            <p class="text-3xl font-bold text-indigo-700 mt-2">Rp 48,2 Jt</p>
        </div>
        <div class="bg-green-50 rounded-xl p-5 text-center">
            <p class="text-sm text-gray-500">Order Selesai</p>
            <p class="text-3xl font-bold text-green-700 mt-2">284</p>
        </div>
        <div class="bg-red-50 rounded-xl p-5 text-center">
            <p class="text-sm text-gray-500">Order Batal</p>
            <p class="text-3xl font-bold text-red-700 mt-2">42</p>
        </div>
    </div>
</div>
@endsection