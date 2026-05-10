<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\AbsensiSiswa;
use App\Models\ELearning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSiswaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Get siswa data (for now, get first siswa as example)
        // TODO: Add user_id column to siswa table for proper relation
        $siswa = Siswa::first();
        
        // Get statistics
        $totalMapel = MataPelajaran::count();
        $totalTugas = ELearning::count();
        $totalNilai = Nilai::where('siswa_id', $siswa->id ?? 0)->count();
        
        // Get recent absensi
        $recentAbsensi = AbsensiSiswa::where('siswa_id', $siswa->id ?? 0)
            ->orderBy('tanggal', 'desc')
            ->take(5)
            ->get();
        
        // Calculate attendance percentage
        $totalHadir = AbsensiSiswa::where('siswa_id', $siswa->id ?? 0)
            ->where('kehadiran', 'hadir')
            ->count();
        $totalAbsensi = AbsensiSiswa::where('siswa_id', $siswa->id ?? 0)->count();
        $persentaseKehadiran = $totalAbsensi > 0 ? round(($totalHadir / $totalAbsensi) * 100, 1) : 0;
        
        return view('siswa.dashboard', compact(
            'user',
            'siswa',
            'totalMapel',
            'totalTugas',
            'totalNilai',
            'recentAbsensi',
            'persentaseKehadiran'
        ));
    }
}
