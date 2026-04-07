@extends('layouts.app')
@section('title', 'Reports')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div>
        <h2 class="text-2xl font-bold text-gray-800">📊 Laporan</h2>
        <p class="text-gray-500 text-sm">Ringkasan performa bisnis</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="bg-indigo-500 text-white rounded-xl p-6 shadow">
            <p class="text-sm opacity-80">Total Pendapatan</p>
            <p class="text-3xl font-bold mt-2">Rp 48,2 Jt</p>
        </div>

        <div class="bg-green-500 text-white rounded-xl p-6 shadow">
            <p class="text-sm opacity-80">Order Selesai</p>
            <p class="text-3xl font-bold mt-2">284</p>
        </div>

        <div class="bg-red-500 text-white rounded-xl p-6 shadow">
            <p class="text-sm opacity-80">Order Batal</p>
            <p class="text-3xl font-bold mt-2">42</p>
        </div>
    </div>

    <!-- Progress Section -->
    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-lg font-semibold text-gray-700 mb-4">Perbandingan Order</h3>

        <!-- Success -->
        <div class="mb-4">
            <div class="flex justify-between text-sm text-gray-600 mb-1">
                <span>Selesai</span>
                <span>87%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-green-500 h-3 rounded-full" style="width: 87%"></div>
            </div>
        </div>

        <!-- Cancel -->
        <div>
            <div class="flex justify-between text-sm text-gray-600 mb-1">
                <span>Batal</span>
                <span>13%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-red-500 h-3 rounded-full" style="width: 13%"></div>
            </div>
        </div>
    </div>

    <!-- Mini Bar Chart -->
    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-lg font-semibold text-gray-700 mb-4">Grafik Bulanan</h3>

        <div class="flex items-end justify-between h-40 space-x-2">
            <!-- Bar -->
            <div class="flex flex-col items-center w-full">
                <div class="bg-indigo-500 w-full rounded-t-lg" style="height: 40%"></div>
                <span class="text-xs mt-2 text-gray-500">Jan</span>
            </div>

            <div class="flex flex-col items-center w-full">
                <div class="bg-indigo-500 w-full rounded-t-lg" style="height: 60%"></div>
                <span class="text-xs mt-2 text-gray-500">Feb</span>
            </div>

            <div class="flex flex-col items-center w-full">
                <div class="bg-indigo-500 w-full rounded-t-lg" style="height: 75%"></div>
                <span class="text-xs mt-2 text-gray-500">Mar</span>
            </div>

            <div class="flex flex-col items-center w-full">
                <div class="bg-indigo-500 w-full rounded-t-lg" style="height: 90%"></div>
                <span class="text-xs mt-2 text-gray-500">Apr</span>
            </div>

            <div class="flex flex-col items-center w-full">
                <div class="bg-indigo-500 w-full rounded-t-lg" style="height: 65%"></div>
                <span class="text-xs mt-2 text-gray-500">Mei</span>
            </div>

            <div class="flex flex-col items-center w-full">
                <div class="bg-indigo-500 w-full rounded-t-lg" style="height: 80%"></div>
                <span class="text-xs mt-2 text-gray-500">Jun</span>
            </div>
        </div>
    </div>

</div>
@endsection