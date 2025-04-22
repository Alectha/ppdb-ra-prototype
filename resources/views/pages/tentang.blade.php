@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
    <!-- Profil Sekolah Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Profil RA Almukhtarul Bayyan</h2>
            
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="flex flex-col md:flex-row items-center mb-8">
                    <div class="md:w-1/3 mb-6 md:mb-0">
                        <img src="{{ asset('images/kelas.jpg') }}" alt="Foto Sekolah" class="rounded-lg w-full">
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h3 class="text-2xl font-bold mb-4">Sekolah Kami</h3>
                        {{
                            $setting->desc_about ?? '  <p class="text-gray-700 mb-4">
                        RA Al Mukhtarul Bayyan  berlokasi di Jalan Kh Zabidi Nagarakasih RT. 01 RW. 03 Kelurahan Kersanagara Kecamatan Cibeureum Kota Tasikmalaya. Lokasi RA Al Mukhtarul Bayyan berada di wilayah Kota Tasikmalaya, letak strategis dengan adanya lembaga MI Nagarakasih I dan MI Nagarakasih II,MTsN 3Tasikmalaya, dan MA As Salam. Jalan ke sekolah bisa dilalui oleh kendaraan pribadi roda empat dan roda dua, dan angkutan umum 019. Sekolah dekat dengan kantor kelurahan Kersanagara, Puskesmas pembantu, Kantor LPPK dan pasar tradisional, sehingga stabilitas sekolah sangat baik.
                        </p>
                        <p class="text-gray-700">
                            Berdiri sejak tahun 2010, kami telah mencetak generasi muslim yang berakhlak mulia dan siap melanjutkan ke jenjang pendidikan berikutnya.
                        </p>'
                        }}
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Visi -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-green-500">Visi</h3>
                        <p class="text-gray-700">
                            {!! $setting->vision ?? 'Membentuk generasi muslim yang berakhlak mulia, cerdas, dan mandiri melalui pendidikan islami yang terpadu' !!}
                        </p>
                    </div>
                    
                    <!-- Misi -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-green-500">Misi</h3>
                        <ul class="text-gray-700 list-disc pl-5 space-y-2">
                            {!! $setting->mission ?? '
                            <li>Menanamkan nilai-nilai islami dalam kehidupan sehari-hari</li>
                            <li>Mengembangkan potensi akademik dan kreativitas anak</li>
                            <li>Membentuk karakter mandiri dan bertanggung jawab</li>
                            <li>Bekerjasama dengan orang tua dalam pendidikan anak</li>
                            ' !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Kontak Kami</h2>
            
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Alamat</h3>
                        <p class="text-gray-700 mb-6">
                        {!! nl2br($setting->address ?? "Jl. Kh zabidi Nagarakasih<br>Kel.Kersanagara Kec. Cibeureum<br>Kota Tasikmalaya") !!}
                        </p>
                        
                        <h3 class="text-xl font-bold mb-4">Jam Operasional</h3>
                        <p class="text-gray-700">
                            {!! nl2br($setting->operational_hours ?? "Senin - Kamis: 07.00 - 16.00 WIB<br>Jumat: 07.00 - 11.30 WIB<br>") !!}
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-4">Kontak</h3>
                        <p class="text-gray-700 mb-4">
                            <i class="fas fa-phone-alt mr-2"></i> {!! $setting->phone ?? '(021) 12345678' !!}
                        </p>
                        <p class="text-gray-700 mb-4">
                            <i class="fas fa-envelope mr-2"></i> {!! $setting->email ?? 'info@raalmukhtarulbayyan.sch.id' !!}
                        </p>
                        <p class="text-gray-700">
                            <i class="fas fa-globe mr-2"></i> {!! $setting->website ?? 'www.raalmukhtarulbayyan.sch.id' !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
