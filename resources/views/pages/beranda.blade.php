@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section -->
    <section class="bg-green-500 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">{{$setting->slogan ?? 'Penerimaan Peserta Didik Baru'}}</h1>
            <div class="mb-10 mt-5 text-3xl">

                {!! $setting->slogan_desc ?? 'RA Almukhtarul Bayyan Tahun Ajaran 2025/2026' !!}
            </div>
            <a href="{{ route('pendaftaran') }}" class="bg-white text-green-500 -mb-10 font-bold py-3 px-8 rounded-lg hover:bg-green-50 transition">Daftar Sekarang</a>
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
                        {!! $setting->periode_desc ?? "Buka: 1 Januari 2026<br>Tutup: 30 Juni 2026" !!}
                    </p>

                </div>

                <!-- Card Persyaratan -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Persyaratan</h3>
                   {!! $setting->persayratan_desc ?? '1. Fotokopi Akta Kelahiran<br>2. Fotokopi Kartu Keluarga<br>3. Pas Foto 3x4 (2 lembar)<br>4. Mengisi Formulir Pendaftaran' !!}
                </div>

                <!-- Card Kontak -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-green-500 text-4xl mb-4">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Kontak</h3>
                    {!!
                        $setting->contact_desc ?? 'No. Telepon: 08123456789 
                        Email: [info@raalmukhtarulbayyan.sch.id](mailto:info@
raalmukhtarulbayyan.sch.id)
                        Alamat: Jl. Raya No. 123, Desa Sukamaju, Kec. Sukaraja, Kab. Sukabumi'
                    !!}
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
@endsection
