@extends('admin.layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Total Pendaftar Card -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                <i class="fas fa-users text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Total Pendaftar</p>
                <p class="text-2xl font-semibold">{{ $totalPendaftar }}</p>
            </div>
        </div>
    </div>

    <!-- Pendaftar Hari Ini Card -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-500">
                <i class="fas fa-user-plus text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Pendaftar Hari Ini</p>
                <p class="text-2xl font-semibold">{{ $pendaftarHariIni }}</p>
            </div>
        </div>
    </div>

    <!-- Pendaftar Bulan Ini Card -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-100 text-purple-500">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Pendaftar Bulan Ini</p>
                <p class="text-2xl font-semibold">{{ $pendaftarBulanIni }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Registrations -->
<div class="mt-8">
    <h2 class="text-xl font-semibold mb-4">Pendaftar Terbaru</h2>
    <div class="bg-white rounded-lg shadow-md">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Lahir</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($recentPendaftar as $pendaftar)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pendaftar->nama_lengkap }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pendaftar->tanggal_lahir->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $pendaftar->created_at->format('d/m/Y H:i') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('admin.pendaftar.show', $pendaftar->id) }}" class="text-blue-600 hover:text-blue-900">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
