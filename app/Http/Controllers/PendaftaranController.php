<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // Identitas Peserta Didik
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'rt_rw' => 'required|string|max:30',
            'desa_kelurahan' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kota_kabupaten' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'agama' => 'required|string|max:20',
            'kewarganegaraan' => 'required|string|max:50',
            'bahasa_sehari_hari' => 'required|string|max:50',
            
            // Informasi Keluarga
            'anak_ke' => 'required|integer|min:1',
            'jumlah_saudara_kandung' => 'required|integer|min:0',
            'jumlah_saudara_tiri' => 'nullable|integer|min:0',
            'jumlah_saudara_angkat' => 'nullable|integer|min:0',
            'status_yatim' => 'required|string|in:Yatim,Piatu,Yatim Piatu,Tidak',
            
            // Informasi Kesehatan
            'golongan_darah' => 'nullable|string|in:A,B,AB,O',
            'penyakit_pernah_diderita' => 'nullable|string',
            'imunisasi_pernah_diterima' => 'nullable|string',
            'ciri_khusus' => 'nullable|string',
            
            // Identitas Ayah
            'nama_ayah' => 'required|string|max:255',
            'tempat_lahir_ayah' => 'required|string|max:100',
            'tanggal_lahir_ayah' => 'required|date',
            'agama_ayah' => 'required|string|max:20',
            'kewarganegaraan_ayah' => 'required|string|max:50',
            'pendidikan_ayah' => 'required|string|max:50',
            'pekerjaan_ayah' => 'required|string|max:100',
            
            // Identitas Ibu
            'nama_ibu' => 'required|string|max:255',
            'tempat_lahir_ibu' => 'required|string|max:100',
            'tanggal_lahir_ibu' => 'required|date',
            'agama_ibu' => 'required|string|max:20',
            'kewarganegaraan_ibu' => 'required|string|max:50',
            'pendidikan_ibu' => 'required|string|max:50',
            'pekerjaan_ibu' => 'required|string|max:100',
        ]);
 
        try {
            // Create new pendaftar
            $pendaftar = Pendaftar::create($request->all());

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pendaftaran berhasil!',
                    'redirect' => route('pendaftaran.sukses')
                ]);
            }

            return redirect()->route('pendaftaran.sukses')->with('success', 'Pendaftaran berhasil!');

        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat memproses pendaftaran.',
                    'errors' => ['general' => [$e->getMessage()]]
                ], 500);
            }

            dd($e->getMessage());
           
        }
    }

    public function sukses()
    {
        return view('pages.pendaftaran-sukses');
    }
}
