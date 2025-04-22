@extends('layouts.app')

@section('title', 'Pendaftaran')

@section('content')
    <!-- Form Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold mb-8 text-center">FORMULIR PENDAFTARAN</h1>
            
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Information Panel - Left/Desktop, Top/Mobile -->
                <div class="md:w-1/3 bg-green-50 p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4 text-green-700">Petunjuk Pengisian</h2>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-info-circle text-green-500 mt-1 mr-2"></i>
                            <span>Isi data dengan lengkap dan benar sesuai dokumen resmi</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-info-circle text-green-500 mt-1 mr-2"></i>
                            <span>Data yang sudah diisi tidak dapat diubah setelah submit</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-info-circle text-green-500 mt-1 mr-2"></i>
                            <span>Field bertanda (*) wajib diisi</span>
                        </li>
                    </ul>
                </div>

                <!-- Form Panel - Right/Desktop, Bottom/Mobile -->
                <form class="md:w-2/3 bg-white p-6 rounded-lg shadow-md" method="POST" action="{{ route('pendaftaran.store') }}">
                    @csrf
                    @if(session('success'))
                    <div role="alert" class="alert alert-success mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif

                    <!-- Section A: Identitas Peserta Didik -->
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-4 border-b pb-2 text-green-700">IDENTITAS PESERTA DIDIK</h2>
                        
                        <div class="space-y-6">
                            <!-- Nama Card -->
                            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                <h3 class="font-semibold mb-4 text-lg text-gray-800">Nama Peserta Didik</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Nama Lengkap <span class="text-red-500">*</span></label>
                                        <input type="text" name="nama_lengkap" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                        <p class="text-sm text-gray-500 mt-1">Sesuai akta kelahiran</p>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Nama Panggilan</label>
                                        <input type="text" name="nama_panggilan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                                    </div>
                                </div>
                            </div>

                            <!-- Biodata Card -->
                            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                <h3 class="font-semibold mb-4 text-lg text-gray-800">Biodata</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Jenis Kelamin <span class="text-red-500">*</span></label>
                                        <select name="jenis_kelamin" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Tempat dan Tanggal Lahir <span class="text-red-500">*</span></label>
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                            </div>
                                            <div>
                                                <input type="date" name="tanggal_lahir" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Alamat Card -->
                            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                <h3 class="font-semibold mb-4 text-lg text-gray-800">Alamat Rumah <span class="text-red-500">*</span></h3>
                                <div class="space-y-4">
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 mb-2 font-medium">RT/RW</label>
                                            <input type="text" name="rt_rw" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" placeholder="Contoh: 001/002">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 mb-2 font-medium">Desa/Kelurahan</label>
                                            <input type="text" name="desa_kelurahan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-3 gap-6">
                                        <div>
                                            <label class="block text-gray-700 mb-2 font-medium">Kecamatan</label>
                                            <input type="text" name="kecamatan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 mb-2 font-medium">Kota/Kabupaten</label>
                                            <input type="text" name="kota_kabupaten" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 mb-2 font-medium">Provinsi</label>
                                            <input type="text" name="provinsi" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Info Card -->
                            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                <h3 class="font-semibold mb-4 text-lg text-gray-800">Informasi Tambahan</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Agama <span class="text-red-500">*</span></label>
                                        <select name="agama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                            <option value="">Pilih Agama</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Konghucu</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Kewarganegaraan <span class="text-red-500">*</span></label>
                                        <input type="text" name="kewarganegaraan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Bahasa Sehari-hari <span class="text-red-500">*</span></label>
                                        <input type="text" name="bahasa_sehari_hari" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Family Information Card -->
                            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                <h3 class="font-semibold mb-4 text-lg text-gray-800">Informasi Keluarga</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Anak Ke <span class="text-red-500">*</span></label>
                                        <input type="number" name="anak_ke" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required min="1">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Jumlah Saudara Kandung <span class="text-red-500">*</span></label>
                                        <input type="number" name="jumlah_saudara_kandung" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required min="0">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Jumlah Saudara Tiri</label>
                                        <input type="number" name="jumlah_saudara_tiri" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" min="0">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Jumlah Saudara Angkat</label>
                                        <input type="number" name="jumlah_saudara_angkat" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" min="0">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Status Yatim <span class="text-red-500">*</span></label>
                                        <select name="status_yatim" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                                            <option value="">Pilih Status</option>
                                            <option value="Yatim">Yatim</option>
                                            <option value="Piatu">Piatu</option>
                                            <option value="Yatim Piatu">Yatim Piatu</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Health Information Card -->
                            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                                <h3 class="font-semibold mb-4 text-lg text-gray-800">Informasi Kesehatan</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Golongan Darah</label>
                                        <select name="golongan_darah" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                                            <option value="">Pilih Golongan Darah</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>AB</option>
                                            <option>O</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Penyakit Pernah Diderita</label>
                                        <textarea name="penyakit_pernah_diderita" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" rows="2"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Imunisasi Pernah Diterima</label>
                                        <textarea name="imunisasi_pernah_diterima" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" rows="2"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2 font-medium">Ciri Khusus</label>
                                        <textarea name="ciri_khusus" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section B: Identitas Orang Tua -->
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-4 border-b pb-2 text-green-700">IDENTITAS ORANG TUA</h2>
                        
                        <!-- Ayah -->
                        <div class="mb-6">
                            <h3 class="font-semibold mb-2">Ayah Kandung/Tiri/Angkat/Wali</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 mb-1">Nama</label>
                                    <input type="text" name="nama_ayah" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Tempat dan Tanggal Lahir</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <input type="text" name="tempat_lahir_ayah" placeholder="Tempat" class="px-3 py-2 border rounded">
                                        <input type="date" name="tanggal_lahir_ayah" class="px-3 py-2 border rounded">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Agama</label>
                                    <select name="agama_ayah" class="w-full px-3 py-2 border rounded">
                                        <option value="">Pilih</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Buddha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan_ayah" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Pendidikan Terakhir</label>
                                    <input type="text" name="pendidikan_ayah" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ayah" class="w-full px-3 py-2 border rounded">
                                </div>
                            </div>
                        </div>

                        <!-- Ibu -->
                        <div class="mb-6">
                            <h3 class="font-semibold mb-2">Ibu Kandung/Tiri/Angkat/Wali</h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 mb-1">Nama</label>
                                    <input type="text" name="nama_ibu" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Tempat dan Tanggal Lahir</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <input type="text" name="tempat_lahir_ibu" placeholder="Tempat" class="px-3 py-2 border rounded">
                                        <input type="date" name="tanggal_lahir_ibu" class="px-3 py-2 border rounded">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Agama</label>
                                    <select name="agama_ibu" class="w-full px-3 py-2 border rounded">
                                        <option value="">Pilih</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Buddha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan_ibu" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Pendidikan Terakhir</label>
                                    <input type="text" name="pendidikan_ibu" class="w-full px-3 py-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-1">Pekerjaan</label>
                                    <input type="text" name="pekerjaan_ibu" class="w-full px-3 py-2 border rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-600 transition">Kirim Formulir</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        let token = '{{ csrf_token() }}';
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin mengirim formulir pendaftaran?',
                    icon: 'question',

                    showCancelButton: true,
                    confirmButtonText: 'Ya, kirim',
                    confirmButtonColor: 'oklch(79.2% 0.209 151.711)',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        const submitBtn = form.querySelector('button[type="submit"]');
                        const originalBtnText = submitBtn.innerHTML;
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';

                        try {
                            const formData = new FormData(form);
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': token,
                                }
                            });

                            const data = await response.json();

                            if (response.ok) {
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: data.message || 'Formulir berhasil dikirim.',
                                    icon: 'success',
                                    confirmButtonColor: 'oklch(79.2% 0.209 151.711)',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    window.location.href = `{{ route('pendaftaran.sukses') }}`;
                                });
                                form.reset();
                            } else {
                                Swal.fire({
                                    title: 'Gagal',
                                    text: data.message || 'Terjadi kesalahan saat mengirim formulir.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        } catch (error) {
                            Swal.fire({
                                title: 'Gagal',
                                text: 'Terjadi kesalahan jaringan: ' + error.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        } finally {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalBtnText;
                        }
                    }
                });
            });
        }
    });
</script>

@endsection
