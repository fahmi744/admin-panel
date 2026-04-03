@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="bg-white rounded-xl shadow-sm p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-4">Daftar Users</h2>
    <table class="w-full text-sm text-left">
        <thead class="text-xs text-gray-500 uppercase border-b">
            <tr>
                <th class="pb-3 pr-4">No</th>
                <th class="pb-3 pr-4">Nama</th>
                <th class="pb-3 pr-4">Email</th>
                <th class="pb-3">Role</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4">1</td>
                <td class="py-3 pr-4">Budi Santoso</td>
                <td class="py-3 pr-4">budi@example.com</td>
                <td class="py-3"><span class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs">Admin</span></td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4">2</td>
                <td class="py-3 pr-4">Siti Aminah</td>
                <td class="py-3 pr-4">siti@example.com</td>
                <td class="py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">User</span></td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="py-3 pr-4">3</td>
                <td class="py-3 pr-4">Eko Prasetyo</td>
                <td class="py-3 pr-4">eko@example.com</td>
                <td class="py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">User</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection