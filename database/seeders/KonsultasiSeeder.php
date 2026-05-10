<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Konsultasi;
use App\Models\User;

class KonsultasiSeeder extends Seeder
{
    public function run(): void
    {
        $guru = User::where('email', 'guru@madrasah.com')->first();
        $siswa = User::where('email', 'murid@madrasah.com')->first();

        if ($guru && $siswa) {
            // Pesan dari siswa
            Konsultasi::create([
                'siswa_id' => $siswa->id,
                'guru_id' => $guru->id,
                'pesan' => 'Assalamualaikum pak, saya mau tanya tentang materi trigonometri yang kemarin.',
                'pengirim' => 'siswa',
                'dibaca' => false
            ]);

            Konsultasi::create([
                'siswa_id' => $siswa->id,
                'guru_id' => $guru->id,
                'pesan' => 'Soal nomor 5 yang tentang sin cos tan itu bagaimana cara mengerjakannya pak?',
                'pengirim' => 'siswa',
                'dibaca' => false
            ]);

            $this->command->info('Konsultasi dummy data created successfully.');
        } else {
            $this->command->error('Guru or Siswa user not found!');
        }
    }
}
