<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Siswa;
use App\Models\ELearning;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardGuruController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Get guru data
        $guru = Guru::first();
        
        // Get statistics
        $totalKelas = Kelas::count();
        $totalSiswa = Siswa::count();
        $totalMateri = ELearning::count();
        $totalSoal = Soal::count();
        
        return view('guru.dashboard', compact(
            'user',
            'guru',
            'totalKelas',
            'totalSiswa',
            'totalMateri',
            'totalSoal'
        ));
    }
}
