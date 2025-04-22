<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftar::all(); // mengambil semua data pendaftar
        return view('admin.pendaftar.index', compact('pendaftar'));
    }

    public function show($id)
    {
        $pendaftar = Pendaftar::findOrFail($id); // mengambil data pendaftar berdasarkan ID
        return view('admin.pendaftar.show', compact('pendaftar'));
    }

    public function edit($id)
    {
        $pendaftar = Pendaftar::findOrFail($id); // mengambil data pendaftar berdasarkan ID
        return view('admin.pendaftar.edit', compact('pendaftar'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all()); 

        $request->validate([
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
            'anak_ke' => 'required|integer|min:1',
            'jumlah_saudara_kandung' => 'required|integer|min:0',
            'jumlah_saudara_tiri' => 'nullable|integer|min:0',
            'jumlah_saudara_angkat' => 'nullable|integer|min:0',
            'status_yatim' => 'required|string|in:Yatim,Piatu,Yatim Piatu,Tidak',
            'nama_ayah' => 'required|string|max:255',
            'tempat_lahir_ayah' => 'required|string|max:100',
            'tanggal_lahir_ayah' => 'required|date',
            'agama_ayah' => 'required|string|max:20',
            'kewarganegaraan_ayah' => 'required|string|max:50',
            'pendidikan_ayah' => 'required|string|max:50',
            'pekerjaan_ayah' => 'required|string|max:100',
            'nama_ibu' => 'required|string|max:255',
            'tempat_lahir_ibu' => 'required|string|max:100',
            'tanggal_lahir_ibu' => 'required|date',
            'agama_ibu' => 'required|string|max:20',
            'kewarganegaraan_ibu' => 'required|string|max:50',
            'pendidikan_ibu' => 'required|string|max:50',
            'pekerjaan_ibu' => 'required|string|max:100',
        ]);
    
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->update($request->all());
        return redirect()->route('admin.pendaftar.index')->with('success', 'Data pendaftar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->delete(); // hapus data pendaftar

        return redirect()->route('admin.pendaftar.index')->with('success', 'Data pendaftar berhasil dihapus!');
    }
}


