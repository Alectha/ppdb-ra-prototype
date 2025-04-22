@extends('admin.layouts.admin')

@section('title', 'Edit Calon Siswa')
@section('header', 'Edit Calon Siswa')

@section('content')
<!-- catchall error -->
@if ($errors->any())
 <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('admin.pendaftar.update', $pendaftar->id) }}" method="POST" class="space-y-6">
    @csrf
    @method('PUT')

    <!-- Action Buttons -->
    <div class="flex justify-between items-center">
        <a href="{{ route('admin.pendaftar.show', $pendaftar->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition">
            <i class="fas fa-save mr-2"></i> Simpan Perubahan
        </button>
    </div>

    <!-- Identitas Peserta Didik -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
            <i class="fas fa-user mr-2 text-green-500"></i>Identitas Peserta Didik
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $pendaftar->nama_lengkap) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                @error('nama_lengkap')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Panggilan</label>
                <input type="text" name="nama_panggilan" value="{{ old('nama_panggilan', $pendaftar->nama_panggilan) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="L" {{ old('jenis_kelamin', $pendaftar->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('jenis_kelamin', $pendaftar->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $pendaftar->tempat_lahir) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pendaftar->tanggal_lahir->format('Y-m-d')) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">RT/RW</label>
                <input type="text" name="rt_rw" value="{{ old('rt_rw', $pendaftar->rt_rw) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Desa/Kelurahan</label>
                <input type="text" name="desa_kelurahan" value="{{ old('desa_kelurahan', $pendaftar->desa_kelurahan) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kecamatan</label>
                <input type="text" name="kecamatan" value="{{ old('kecamatan', $pendaftar->kecamatan) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kota/Kabupaten</label>
                <input type="text" name="kota_kabupaten" value="{{ old('kota_kabupaten', $pendaftar->kota_kabupaten) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Provinsi</label>
                <input type="text" name="provinsi" value="{{ old('provinsi', $pendaftar->provinsi) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Agama</label>
                <input type="text" name="agama" value="{{ old('agama', $pendaftar->agama) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan" value="{{ old('kewarganegaraan', $pendaftar->kewarganegaraan) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Bahasa Sehari-hari</label>
                <input type="text" name="bahasa_sehari_hari" value="{{ old('bahasa_sehari_hari', $pendaftar->bahasa_sehari_hari) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
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
                <label class="block text-sm font-medium text-gray-700 mb-2">Anak Ke</label>
                <input type="number" name="anak_ke" value="{{ old('anak_ke', $pendaftar->anak_ke) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Saudara Kandung</label>
                <input type="number" name="jumlah_saudara_kandung" value="{{ old('jumlah_saudara_kandung', $pendaftar->jumlah_saudara_kandung) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Saudara Tiri</label>
                <input type="number" name="jumlah_saudara_tiri" value="{{ old('jumlah_saudara_tiri', $pendaftar->jumlah_saudara_tiri) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Saudara Angkat</label>
                <input type="number" name="jumlah_saudara_angkat" value="{{ old('jumlah_saudara_angkat', $pendaftar->jumlah_saudara_angkat) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status Yatim</label>
                <select name="status_yatim" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="Tidak" {{ old('status_yatim', $pendaftar->status_yatim) == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                    <option value="Yatim" {{ old('status_yatim', $pendaftar->status_yatim) == 'Yatim' ? 'selected' : '' }}>Yatim</option>
                    <option value="Piatu" {{ old('status_yatim', $pendaftar->status_yatim) == 'Piatu' ? 'selected' : '' }}>Piatu</option>
                    <option value="Yatim Piatu" {{ old('status_yatim', $pendaftar->status_yatim) == 'Yatim Piatu' ? 'selected' : '' }}>Yatim Piatu</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Informasi Kesehatan -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">
            <i class="fas fa-heartbeat mr-2 text-red-500"></i>Informasi Kesehatan
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Golongan Darah</label>
                <input type="text" name="golongan_darah" value="{{ old('golongan_darah', $pendaftar->golongan_darah) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Penyakit Pernah Diderita</label>
                <input type="text" name="penyakit_pernah_diderita" value="{{ old('penyakit_pernah_diderita', $pendaftar->penyakit_pernah_diderita) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Imunisasi Pernah Diterima</label>
                <input type="text" name="imunisasi_pernah_diterima" value="{{ old('imunisasi_pernah_diterima', $pendaftar->imunisasi_pernah_diterima) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Ciri Khusus</label>
                <input type="text" name="ciri_khusus" value="{{ old('ciri_khusus', $pendaftar->ciri_khusus) }}" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
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
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Ayah</label>
                    <input type="text" name="nama_ayah" value="{{ old('nama_ayah', $pendaftar->nama_ayah) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir Ayah</label>
                    <input type="text" name="tempat_lahir_ayah" value="{{ old('tempat_lahir_ayah', $pendaftar->tempat_lahir_ayah) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir Ayah</label>
                    <input type="date" name="tanggal_lahir_ayah" value="{{ old('tanggal_lahir_ayah', $pendaftar->tanggal_lahir_ayah->format('Y-m-d')) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pendidikan Ayah</label>
                    <input type="text" name="pendidikan_ayah" value="{{ old('pendidikan_ayah', $pendaftar->pendidikan_ayah) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $pendaftar->pekerjaan_ayah) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Agama Ayah</label>
                    <input type="text" name="agama_ayah" value="{{ old('agama_ayah', $pendaftar->agama_ayah) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kewarganegaraan Ayah</label>
                    <input type="text" name="kewarganegaraan_ayah" value="{{ old('kewarganegaraan_ayah', $pendaftar->kewarganegaraan_ayah) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
            </div>
        </div>

        <!-- Data Ibu -->
        <div>
            <h3 class="font-medium text-gray-700 mb-3">Data Ibu</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Ibu</label>
                    <input type="text" name="nama_ibu" value="{{ old('nama_ibu', $pendaftar->nama_ibu) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir Ibu</label>
                    <input type="text" name="tempat_lahir_ibu" value="{{ old('tempat_lahir_ibu', $pendaftar->tempat_lahir_ibu) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir Ibu</label>
                    <input type="date" name="tanggal_lahir_ibu" value="{{ old('tanggal_lahir_ibu', $pendaftar->tanggal_lahir_ibu->format('Y-m-d')) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pendidikan Ibu</label>
                    <input type="text" name="pendidikan_ibu" value="{{ old('pendidikan_ibu', $pendaftar->pendidikan_ibu) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $pendaftar->pekerjaan_ibu) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Agama Ibu</label>
                    <input type="text" name="agama_ibu" value="{{ old('agama_ibu', $pendaftar->agama_ibu) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kewarganegaraan Ibu</label>
                    <input type="text" name="kewarganegaraan_ibu" value="{{ old('kewarganegaraan_ibu', $pendaftar->kewarganegaraan_ibu) }}" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
