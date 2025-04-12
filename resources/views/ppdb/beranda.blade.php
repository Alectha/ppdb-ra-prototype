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
                    <li><a href="/" class="text-green-500 font-medium">Beranda</a></li>
                    <li><a href="/formulir" class="text-gray-700 hover:text-green-500 transition">Formulir</a></li>
                    <li><a href="/tentang" class="text-gray-700 hover:text-green-500 transition">Tentang</a></li>
                </ul>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu md:hidden text-gray-700" id="menu-toggle">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-green-500 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Penerimaan Peserta Didik Baru</h1>
            <p class="text-xl mb-8">RA Almukhtarul Bayyan Tahun Ajaran 2025/2026</p>
            <a href="/formulir" class="bg-white text-green-500 font-bold py-3 px-8 rounded-lg hover:bg-green-50 transition">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Info Pendaftaran Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Informasi Pendaftaran</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card Pendaftaran -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Periode Pendaftaran</h3>
                    <p class="text-gray-700">
                        <span class="font-semibold">Buka:</span> 1 Januari 2026<br>
                        <span class="font-semibold">Tutup:</span> 30 Juni 2026
                    </p>
                </div>

                <!-- Card Persyaratan -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Persyaratan</h3>
                    <ul class="text-gray-700 list-disc pl-5">
                        <li>Usia minimal 4 tahun</li>
                        <li>Fotocopy akta kelahiran</li>
                        <li>fotocopy Kartu Keluarga</li>
                        <li>fotocopy KTP orangtua</li>
                    </ul>
                </div>

                <!-- Card Kontak -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Kontak</h3>
                    <p class="text-gray-700">
                        <i class="fas fa-phone mr-2"></i> 0812-3456-7890<br>
                        <i class="fas fa-envelope mr-2"></i> ppdb@almukhtarulbayyan.sch.id
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Alur Pendaftaran</h2>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 h-full w-1 bg-green-500 transform -translate-x-1/2"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-8 md:space-y-0">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row items-center md:odd:flex-row-reverse">
                        <div class="md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold mb-2 text-green-500">1. Pendaftaran Online</h3>
                                <p class="text-gray-700">Isi formulir pendaftaran secara online melalui website ini</p>
                            </div>
                        </div>
                        <div class="md:w-1/2 p-4 text-center">
                            <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto text-2xl font-bold">1</div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex flex-col md:flex-row items-center md:odd:flex-row-reverse">
                        <div class="md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold mb-2 text-green-500">2. Verifikasi Dokumen</h3>
                                <p class="text-gray-700">Bawa dokumen asli ke sekolah untuk verifikasi</p>
                            </div>
                        </div>
                        <div class="md:w-1/2 p-4 text-center">
                            <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto text-2xl font-bold">2</div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex flex-col md:flex-row items-center md:odd:flex-row-reverse">
                        <div class="md:w-1/2 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold mb-2 text-green-500">3. Pasti Diterima!</h3>
                                <p class="text-gray-700">Selama formulir diisi dengan benar dan dokumen asli sesuai, maka anak anda pasti diterima!</p>
                            </div>
                        </div>
                        <div class="md:w-1/2 p-4 text-center">
                            <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto text-2xl font-bold">3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 RA Almukhtarul Bayyan. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
