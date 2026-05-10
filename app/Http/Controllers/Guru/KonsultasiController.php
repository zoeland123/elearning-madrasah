<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Konsultasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function index()
    {
        $guruId = Auth::id();
        
        // Get list of students who have sent messages
        $siswaList = Konsultasi::where('guru_id', $guruId)
            ->select('siswa_id', DB::raw('MAX(id) as last_id'))
            ->groupBy('siswa_id')
            ->get()
            ->map(function($item) {
                $lastMessage = Konsultasi::find($item->last_id);
                $item->last_message = $lastMessage;
                $item->siswa = User::find($item->siswa_id);
                return $item;
            })
            ->sortByDesc(function($item) {
                return $item->last_message->created_at;
            });

        return view('guru.konsultasi.index', compact('siswaList'));
    }

    public function show($siswaId)
    {
        $guruId = Auth::id();
        
        // Get all messages between guru and siswa
        $messages = Konsultasi::where(function($query) use ($guruId, $siswaId) {
            $query->where('guru_id', $guruId)
                  ->where('siswa_id', $siswaId);
        })
        ->orderBy('created_at', 'asc')
        ->get();

        // Mark messages as read
        Konsultasi::where('guru_id', $guruId)
            ->where('siswa_id', $siswaId)
            ->where('pengirim', 'siswa')
            ->update(['dibaca' => true]);

        $siswa = User::find($siswaId);

        return view('guru.konsultasi.chat', compact('messages', 'siswa'));
    }

    public function reply(Request $request, $siswaId)
    {
        $request->validate([
            'pesan' => 'required|string'
        ]);

        Konsultasi::create([
            'siswa_id' => $siswaId,
            'guru_id' => Auth::id(),
            'pesan' => $request->pesan,
            'pengirim' => 'guru',
            'dibaca' => false
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
