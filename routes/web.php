<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\AbsensiGuruController;
use App\Http\Controllers\backend\AbsensiSiswaController;
use App\Http\Controllers\backend\ELearningController;
use App\Http\Controllers\backend\GuruController;
use App\Http\Controllers\backend\JawabanController;
use App\Http\Controllers\backend\JenjangController;
use App\Http\Controllers\backend\JurusanController;
use App\Http\Controllers\backend\KelasController;
use App\Http\Controllers\backend\MataPelajaranController;
use App\Http\Controllers\backend\NilaiController;
use App\Http\Controllers\backend\RaportController;
use App\Http\Controllers\backend\SiswaController;
use App\Http\Controllers\backend\SoalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Siswa\DashboardSiswaController;
use App\Http\Controllers\Guru\DashboardGuruController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\EventController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

// frontend
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('course', [CourseController::class, 'index'])->name('course');
Route::get('event', [EventController::class, 'index'])->name('event');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');

    Route::resource('jenjang', JenjangController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('mapel', MataPelajaranController::class);
    Route::resource('kelas_admin', KelasController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('e_learning', ELearningController::class);
    Route::resource('soal', SoalController::class);
    Route::resource('jawaban', JawabanController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('raports', RaportController::class);
    Route::resource('absensi-guru', AbsensiGuruController::class);
    Route::resource('absensi_siswa', AbsensiSiswaController::class);
});

// Siswa Routes
Route::middleware(['auth'])->prefix('student')->name('siswa.')->group(function () {
    Route::get('/dashboard', [DashboardSiswaController::class, 'index'])->name('dashboard');
    Route::get('/test', function() { return 'Siswa route works!'; })->name('test');
    Route::get('/elearning', function () { return view('siswa.elearning.index'); })->name('elearning');
    Route::get('/nilai', function () { return view('siswa.nilai.index'); })->name('nilai');
    Route::get('/absensi', function () { return view('siswa.absensi.index'); })->name('absensi');
    Route::get('/jadwal', function () { return view('siswa.jadwal.index'); })->name('jadwal');
    Route::get('/pengumuman', function () { return view('siswa.pengumuman.index'); })->name('pengumuman');
    Route::get('/konsultasi', function () { return view('siswa.konsultasi.index'); })->name('konsultasi');
    Route::get('/profil', [\App\Http\Controllers\Siswa\ProfilController::class, 'index'])->name('profil');
    Route::post('/profil/avatar', [\App\Http\Controllers\Siswa\ProfilController::class, 'updateAvatar'])->name('profil.avatar');
});

// Guru Routes
Route::middleware(['auth'])->prefix('teacher')->name('guru.')->group(function () {
    Route::get('/dashboard', [DashboardGuruController::class, 'index'])->name('dashboard');
    Route::get('/kelas', function () { return view('guru.kelas.index'); })->name('kelas');
    Route::get('/materi', function () { return view('guru.materi.index'); })->name('materi');
    Route::get('/tugas', function () { return view('guru.tugas.index'); })->name('tugas');
    Route::get('/nilai', function () { return view('guru.nilai.index'); })->name('nilai');
    Route::get('/absensi', [\App\Http\Controllers\Guru\AbsensiController::class, 'index'])->name('absensi');
    Route::get('/absensi/siswa/{kelasId}', [\App\Http\Controllers\Guru\AbsensiController::class, 'getSiswa']);
    Route::post('/absensi/store', [\App\Http\Controllers\Guru\AbsensiController::class, 'store'])->name('absensi.store');
    Route::get('/jadwal', function () { return view('guru.jadwal.index'); })->name('jadwal');
    Route::get('/konsultasi', [\App\Http\Controllers\Guru\KonsultasiController::class, 'index'])->name('konsultasi');
    Route::get('/konsultasi/{siswaId}', [\App\Http\Controllers\Guru\KonsultasiController::class, 'show'])->name('konsultasi.show');
    Route::post('/konsultasi/{siswaId}/reply', [\App\Http\Controllers\Guru\KonsultasiController::class, 'reply'])->name('konsultasi.reply');
    Route::get('/profil', [\App\Http\Controllers\Guru\ProfilController::class, 'index'])->name('profil');
    Route::post('/profil/avatar', [\App\Http\Controllers\Guru\ProfilController::class, 'updateAvatar'])->name('profil.avatar');
});

Auth::routes();
