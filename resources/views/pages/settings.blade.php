@extends('layouts.app')
@section('title', 'Settings')
@section('content')
<div class="bg-white rounded-xl shadow-sm p-6 max-w-lg">
    <h2 class="text-lg font-semibold text-gray-700 mb-6">Pengaturan Akun</h2>
    <div class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Nama</label>
            <input type="text" value="Admin User"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
            <input type="email" value="admin@example.com"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Password Baru</label>
            <input type="password" placeholder="••••••••"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400">
        </div>
        <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg text-sm hover:bg-indigo-700 transition">
            Simpan Perubahan
        </button>
    </div>
</div>
@endsection