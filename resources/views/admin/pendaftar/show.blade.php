@extends('admin.layouts.admin')

@section('title', 'Detail Calon Siswa')
@section('header', 'Detail Calon Siswa')

@section('content')
<div class="space-y-6">
    <!-- Action Buttons -->
    <div class="flex justify-between items-center">
        <a href="{{ route('admin.pendaftar.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
        <div class="flex space-x-3">
            <a href="{{ route('admin.pendaftar.edit', $pendaftar->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg transition">
                <i class="fas fa-edit mr-2"></i> Edit
            </a>
            <form action="{{ route('admin.pendaftar.destroy', $pendaftar->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition">
                    <i class="fas fa-trash mr-2"></i> Hapus
                </button>
            </form>
        </div>
    </div>

    <!-- Identitas Peserta Didik -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
            <i class="fas fa-user mr-2 text-green-500"></i>Identitas Peserta Didik
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-sm text-gray-600">Nama Lengkap</p>
                <p class="font-medium">{{ $pendaftar->nama_lengkap }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Nama Panggilan</p>
                <p class="font-medium">{{ $pendaftar->nama_panggilan }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Jenis Kelamin</p>
                <p class="font-medium">{{ $pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Tempat, Tanggal Lahir</p>
                <p class="font-medium">{{ $pendaftar->tempat_lahir }}, {{ $pendaftar->tanggal_lahir->format('d F Y') }}</p>
            </div>
            <div class="md:col-span-2">
                <p class="text-sm text-gray-600">Alamat Lengkap</p>
                <p class="font-medium">
                    {{ $pendaftar->rt_rw }}, {{ $pendaftar->desa_kelurahan }}, {{ $pendaftar->kecamatan }}, 
                    {{ $pendaftar->kota_kabupaten }}, {{ $pendaftar->provinsi }}
                </p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Agama</p>
                <p class="font-medium">{{ $pendaftar->agama }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Kewarganegaraan</p>
                <p class="font-medium">{{ $pendaftar->kewarganegaraan }}</p>
            </div>
        </div>
    </div>

    <!-- Informasi Keluarga -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
            <i class="fas fa-users mr-2 text-blue-500"></i>Informasi Keluarga
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-sm text-gray-600">Anak Ke</p>
                <p class="font-medium">{{ $pendaftar->anak_ke }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Jumlah Saudara Kandung</p>
                <p class="font-medium">{{ $pendaftar->jumlah_saudara_kandung }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Status Yatim</p>
                <p class="font-medium">{{ $pendaftar->status_yatim }}</p>
            </div>
        </div>
    </div>

    <!-- Data Orang Tua -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
            <i class="fas fa-user-friends mr-2 text-purple-500"></i>Data Orang Tua
        </h2>
        
        <!-- Data Ayah -->
        <div class="mb-6">
            <h3 class="font-medium text-gray-700 mb-3">Data Ayah</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-gray-600">Nama Lengkap</p>
                    <p class="font-medium">{{ $pendaftar->nama_ayah }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Tempat, Tanggal Lahir</p>
                    <p class="font-medium">{{ $pendaftar->tempat_lahir_ayah }}, {{ $pendaftar->tanggal_lahir_ayah->format('d F Y') }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Pendidikan</p>
                    <p class="font-medium">{{ $pendaftar->pendidikan_ayah }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Pekerjaan</p>
                    <p class="font-medium">{{ $pendaftar->pekerjaan_ayah }}</p>
                </div>
            </div>
        </div>

        <!-- Data Ibu -->
        <div>
            <h3 class="font-medium text-gray-700 mb-3">Data Ibu</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-sm text-gray-600">Nama Lengkap</p>
                    <p class="font-medium">{{ $pendaftar->nama_ibu }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Tempat, Tanggal Lahir</p>
                    <p class="font-medium">{{ $pendaftar->tempat_lahir_ibu }}, {{ $pendaftar->tanggal_lahir_ibu->format('d F Y') }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Pendidikan</p>
                    <p class="font-medium">{{ $pendaftar->pendidikan_ibu }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Pekerjaan</p>
                    <p class="font-medium">{{ $pendaftar->pekerjaan_ibu }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
