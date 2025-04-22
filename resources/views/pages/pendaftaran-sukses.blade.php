@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Success Icon -->
            <div class="mb-8">
                <i class="fas fa-check-circle text-7xl text-green-500"></i>
            </div>
            
            <!-- Success Message -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Pendaftaran Berhasil!</h1>
            <p class="text-xl text-gray-600 mb-8">
                Terima kasih telah mendaftar di RA Almukhtarul Bayyan. Data pendaftaran Anda telah kami terima.
            </p>
            
            <!-- Next Steps -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Langkah Selanjutnya</h2>
                <ul class="text-left space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-file-alt text-green-500 mt-1 mr-3"></i>
                        <span>Siapkan dokumen asli (Akta Kelahiran, KK, dan KTP Orangtua) untuk dibawa ke sekolah</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-calendar-check text-green-500 mt-1 mr-3"></i>
                        <span>Kunjungi sekolah untuk verifikasi dokumen pada jam kerja (Senin-Jumat, 08.00-14.00 WIB)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone text-green-500 mt-1 mr-3"></i>
                        <span>Jika ada pertanyaan, silakan hubungi kami di nomor (021) 12345678</span>
                    </li>
                </ul>
            </div>
            
            <!-- Navigation Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('beranda') }}" class="inline-block bg-gray-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-600 transition">
                    <i class="fas fa-home mr-2"></i> Kembali ke Beranda
                </a>
                <a href="{{ route('tentang') }}" class="inline-block bg-green-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-green-600 transition">
                    <i class="fas fa-info-circle mr-2"></i> Informasi Sekolah
                </a>
            </div>
        </div>
    </div>
</section>
@endsection