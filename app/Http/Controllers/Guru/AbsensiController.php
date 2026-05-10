<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\AbsensiSiswa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function index()
    {
        $kelasList = Kelas::all();
        return view('guru.absensi.index', compact('kelasList'));
    }

    public function getSiswa($kelasId)
    {
        $siswa = Siswa::where('kelas_id', $kelasId)->get();
        return response()->json($siswa);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required',
            'tanggal' => 'required|date',
            'absensi' => 'required|array'
        ]);

        foreach ($request->absensi as $siswaId => $kehadiran) {
            AbsensiSiswa::updateOrCreate(
                [
                    'siswa_id' => $siswaId,
                    'tanggal' => $request->tanggal
                ],
                [
                    'kehadiran' => $kehadiran,
                    'jenjang' => 'SMA'
                ]
            );
        }

        return redirect()->back()->with('success', 'Absensi berhasil disimpan!');
    }
}
