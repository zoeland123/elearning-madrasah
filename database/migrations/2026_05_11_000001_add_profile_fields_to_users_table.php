<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('avatar');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable()->after('phone');
            $table->text('alamat')->nullable()->after('jenis_kelamin');
            $table->date('tanggal_lahir')->nullable()->after('alamat');
            $table->string('nisn')->nullable()->after('tanggal_lahir');
            $table->string('nip')->nullable()->after('nisn');
            $table->string('mata_pelajaran')->nullable()->after('nip');
            $table->string('kelas')->nullable()->after('mata_pelajaran');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone','jenis_kelamin','alamat','tanggal_lahir','nisn','nip','mata_pelajaran','kelas']);
        });
    }
};
