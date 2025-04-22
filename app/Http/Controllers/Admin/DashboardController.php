<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // total pendaftar
        $totalPendaftar = Pendaftar::count();

        // pendaftar hari ini
        $pendaftarHariIni = Pendaftar::whereDate('created_at', Carbon::today())->count();

        // pendaftar bulan ini
        $pendaftarBulanIni = Pendaftar::whereMonth('created_at', Carbon::now()->month)
                                     ->whereYear('created_at', Carbon::now()->year)
                                     ->count();

        // 
        $recentPendaftar = Pendaftar::latest()
                                   ->take(10)
                                   ->get();

        return view('admin.dashboard', compact(
            'totalPendaftar',
            'pendaftarHariIni',
            'pendaftarBulanIni',
            'recentPendaftar'
        ));
    }
}
