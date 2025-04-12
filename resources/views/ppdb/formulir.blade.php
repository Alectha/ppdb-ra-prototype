<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir - Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header & Navigation -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/Logo.jpg') }}" alt="Logo RA" class="h-10 mr-3">
                <div class="text-xl font-bold text-green-500">RA Almukhtarul Bayyan</div>
            </div>
            
            <!-- Desktop Menu -->
            <nav class="desktop-menu hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="/" class="text-gray-700 hover:text-green-500 transition">Beranda</a></li>
                    <li><a href="/formulir" class="text-green-500 font-medium">Formulir</a></li>
                    <li><a href="/tentang" class="text-gray-700 hover:text-green-500 transition">Tentang</a></li>
                </ul>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu md:hidden text-gray-700" id="menu-toggle">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

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
                            <span>Pastikan file yang diupload jelas dan terbaca</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-info-circle text-green-500 mt-1 mr-2"></i>
                            <span>Field bertanda (*) wajib diisi</span>
                        </li>
                    </ul>
                </div>

                <!-- Form Panel - Right/Desktop, Bottom/Mobile -->
                <form class="md:w-2/3 bg-white p-6 rounded-lg shadow-md" method="POST" action="{{ route('form.submit') }}" enctype="multipart/form-data">
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
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Tempat dan Tanggal Lahir</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <input type="text" placeholder="Tempat" class="px-3 py-2 border rounded">
                                    <input type="date" class="px-3 py-2 border rounded">
                                </div>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Agama</label>
                                <select class="w-full px-3 py-2 border rounded">
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
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Pendidikan Terakhir</label>
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Pekerjaan</label>
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                        </div>
                    </div>

                    <!-- Ibu -->
                    <div class="mb-6">
                        <h3 class="font-semibold mb-2">Ibu Kandung/Tiri/Angkat/Wali</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 mb-1">Nama</label>
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Tempat dan Tanggal Lahir</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <input type="text" placeholder="Tempat" class="px-3 py-2 border rounded">
                                    <input type="date" class="px-3 py-2 border rounded">
                                </div>
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Agama</label>
                                <select class="w-full px-3 py-2 border rounded">
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
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Pendidikan Terakhir</label>
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-1">Pekerjaan</label>
                                <input type="text" class="w-full px-3 py-2 border rounded">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section C: Lampiran Dokumen -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold mb-4 border-b pb-2 text-green-700">LAMPIRAN DOKUMEN</h2>
                    <div class="space-y-6">
                        <!-- KTP Card -->
                        <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
                            <div class="flex flex-col md:flex-row md:items-center gap-4">
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800 mb-1">Fotocopy KTP</h3>
                                    <p class="text-sm text-gray-500 mb-2">Format: JPG/PNG/PDF (Maks. 2MB)</p>
                                    <div class="flex items-center gap-2">
                                        <label class="relative cursor-pointer">
                                            <span class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Pilih File</span>
                                            <input type="file" name="ktp" accept=".jpg,.jpeg,.png,.pdf" class="absolute inset-0 w-full h-full opacity-0" data-type="ktp" required>
                                        </label>
                                        <button type="button" class="text-red-600 hover:text-red-800 hidden" data-cancel="ktp">
                                            <i class="fas fa-trash-alt"></i> Batal
                                        </button>
                                    </div>
                                </div>
                                <div class="file-preview hidden md:w-1/4" data-preview="ktp">
                                    <div class="border border-gray-200 rounded p-2 h-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-4xl text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="error-message text-red-500 text-sm mt-2 hidden" data-error="ktp"></div>
                        </div>

                        <!-- KK Card -->
                        <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
                            <div class="flex flex-col md:flex-row md:items-center gap-4">
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800 mb-1">Fotocopy KK</h3>
                                    <p class="text-sm text-gray-500 mb-2">Format: JPG/PNG/PDF (Maks. 2MB)</p>
                                    <div class="flex items-center gap-2">
                                        <label class="relative cursor-pointer">
                                            <span class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Pilih File</span>
                                            <input type="file" name="kk" accept=".jpg,.jpeg,.png,.pdf" class="absolute inset-0 w-full h-full opacity-0" data-type="kk" required>
                                        </label>
                                        <button type="button" class="text-red-600 hover:text-red-800 hidden" data-cancel="kk">
                                            <i class="fas fa-trash-alt"></i> Batal
                                        </button>
                                    </div>
                                </div>
                                <div class="file-preview hidden md:w-1/4" data-preview="kk">
                                    <div class="border border-gray-200 rounded p-2 h-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-4xl text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="error-message text-red-500 text-sm mt-2 hidden" data-error="kk"></div>
                        </div>

                        <!-- Akta Card -->
                        <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
                            <div class="flex flex-col md:flex-row md:items-center gap-4">
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-800 mb-1">Akta Kelahiran Siswa</h3>
                                    <p class="text-sm text-gray-500 mb-2">Format: JPG/PNG/PDF (Maks. 2MB)</p>
                                    <div class="flex items-center gap-2">
                                        <label class="relative cursor-pointer">
                                            <span class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Pilih File</span>
                                            <input type="file" name="akta" accept=".jpg,.jpeg,.png,.pdf" class="absolute inset-0 w-full h-full opacity-0" data-type="akta" required>
                                        </label>
                                        <button type="button" class="text-red-600 hover:text-red-800 hidden" data-cancel="akta">
                                            <i class="fas fa-trash-alt"></i> Batal
                                        </button>
                                    </div>
                                </div>
                                <div class="file-preview hidden md:w-1/4" data-preview="akta">
                                    <div class="border border-gray-200 rounded p-2 h-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-4xl text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="error-message text-red-500 text-sm mt-2 hidden" data-error="akta"></div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-600 transition">Kirim Formulir</button>
                </div>
            </form>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Handle file selection for all file inputs
    document.querySelectorAll('input[type="file"]').forEach(input => {
        const type = input.dataset.type;
        const cancelBtn = document.querySelector(`button[data-cancel="${type}"]`);
        const preview = document.querySelector(`div[data-preview="${type}"]`);
        const errorMsg = document.querySelector(`div[data-error="${type}"]`);

        input.addEventListener('change', function(e) {
            if (this.files && this.files[0]) {
                // Show cancel button
                cancelBtn.classList.remove('hidden');
                
                // Show preview placeholder
                preview.classList.remove('hidden');
                
                // Clear any previous errors
                errorMsg.classList.add('hidden');
                errorMsg.textContent = '';
            }
        });

        // Handle cancel button click
        cancelBtn.addEventListener('click', function() {
            // Reset file input
            input.value = '';
            
            // Hide cancel button
            this.classList.add('hidden');
            
            // Hide preview
            preview.classList.add('hidden');
        });
    });

    // Handle form submission
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
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
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                const data = await response.json();
                
                if (response.ok) {
                    // Show success message
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        window.location.reload();
                    }
                } else {
                    // Clear previous errors
                    document.querySelectorAll('[data-error]').forEach(el => {
                        el.classList.add('hidden');
                        el.textContent = '';
                    });

                    // Show validation errors
                    if (data.errors) {
                        Object.entries(data.errors).forEach(([field, messages]) => {
                            const errorElement = document.querySelector(`[data-error="${field}"]`);
                            if (errorElement) {
                                errorElement.textContent = messages.join(', ');
                                errorElement.classList.remove('hidden');
                            }
                        });
                    } else {
                        // Show generic error message
                        const errorContainer = document.querySelector('.error-message');
                        if (errorContainer) {
                            errorContainer.textContent = 'Terjadi kesalahan saat mengirim formulir. Silakan coba lagi.';
                            errorContainer.classList.remove('hidden');
                        }
                    }
                }
            } catch (error) {
                console.error('Error:', error);
                // Fallback to regular form submission if AJAX fails
                form.submit();
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });
    }
});
    </script>
</body>
</html>