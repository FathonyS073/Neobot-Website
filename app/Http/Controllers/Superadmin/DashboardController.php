<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPsikiater = \App\Models\User::where('role', 'psikiater')->count();
        $totalClient = \App\Models\User::where('role', 'client')->count();
        $totalKonsultasi = 0; // Ganti dengan query jika sudah ada model konsultasi
        return view('admin.dashboard', compact('totalPsikiater', 'totalClient', 'totalKonsultasi'));
    }

    // Tambahkan method lain sesuai kebutuhan menu sidebar
}