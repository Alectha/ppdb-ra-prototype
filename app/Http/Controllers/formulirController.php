<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class formulirController extends Controller
{
    public function formulir()
    {
        return view('ppdb.formulir');
    }

    // public function submitForm(Request $request)
    // {
    //     $request->validate([
    //         // File validations
    //         'ktp' => 'required|file|mimes:pdf,jpg,png|max:2048',
    //         'kk' => 'required|file|mimes:pdf,jpg,png|max:2048',
    //         'akta' => 'required|file|mimes:pdf,jpg,png|max:2048',
            
    //         // New field validations
    //         'agama' => 'required|string',
    //         'kewarganegaraan' => 'required|string',
    //         'bahasa_sehari_hari' => 'required|string',
    //         'anak_ke' => 'required|integer|min:1',
    //         'jumlah_saudara_kandung' => 'required|integer|min:0',
    //         'jumlah_saudara_tiri' => 'nullable|integer|min:0',
    //         'jumlah_saudara_angkat' => 'nullable|integer|min:0',
    //         'status_yatim' => 'required|string|in:Yatim,Piatu,Yatim Piatu,Tidak',
    //         'golongan_darah' => 'nullable|string|in:A,B,AB,O',
    //         'penyakit_pernah_diderita' => 'nullable|string|max:500',
    //         'imunisasi_pernah_diterima' => 'nullable|string|max:500',
    //         'ciri_khusus' => 'nullable|string|max:500'
    //     ]);

    //     $ktpPath = $request->file('ktp')->store('documents');
    //     $kkPath = $request->file('kk')->store('documents');
    //     $aktaPath = $request->file('akta')->store('documents');

    //     if ($request->ajax()) {
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Formulir berhasil dikirim!',
    //             'redirect' => url()->previous()
    //         ]);
    //     }
        
    //     return redirect()->back()->with('success', 'Formulir berhasil dikirim!');
    // }
}
