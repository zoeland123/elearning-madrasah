<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        // admin
        $userData = [
            'name' => 'Tatabiin Hairudin Ambo',
            'username' => 'atta',
            'email' => 'admin@madrasah.com',
            'role' => 'admin',
            'status' => 'Aktif',
            'password' => bcrypt('admin'),
        ];

        $user = User::updateOrCreate(['email' => 'admin@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Admin');

        // Super Admin
        $userData = [
            'name' => 'Super Admin Madrasah',
            'username' => 'superadmin',
            'email' => 'superadmin@madrasah.com',
            'role' => 'Super Admin',
            'status' => 'Aktif',
            'password' => bcrypt('admin'),
        ];

        $user = User::updateOrCreate(['email' => 'superadmin@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Super Admin');

        // Murid
        $userData = [
            'name' => 'Murid Madrasah',
            'username' => 'murid',
            'email' => 'murid@madrasah.com',
            'role' => 'Murid',
            'status' => 'Aktif',
            'password' => bcrypt('murid123'),
        ];

        $user = User::updateOrCreate(['email' => 'murid@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Murid');

        // Guru
        $userData = [
            'name' => 'Guru Madrasah',
            'username' => 'guru',
            'email' => 'guru@madrasah.com',
            'role' => 'Guru',
            'status' => 'Aktif',
            'password' => bcrypt('guru123'),
        ];

        $user = User::updateOrCreate(['email' => 'guru@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Guru');

        // Kepala Sekolah
        $userData = [
            'name' => 'Kepala Madrasah',
            'username' => 'kepala',
            'email' => 'kepala@madrasah.com',
            'role' => 'Kepala Sekolah',
            'status' => 'Aktif',
            'password' => bcrypt('kepala123'),
        ];

        $user = User::updateOrCreate(['email' => 'kepala@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Kepala Sekolah');

        // Staf
        $userData = [
            'name' => 'Staf Madrasah',
            'username' => 'staf',
            'email' => 'staf@madrasah.com',
            'role' => 'Staf',
            'status' => 'Aktif',
            'password' => bcrypt('staf123'),
        ];

        $user = User::updateOrCreate(['email' => 'staf@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Staf');

        // Orang Tua
        $userData = [
            'name' => 'Wali Murid',
            'username' => 'wali',
            'email' => 'wali@madrasah.com',
            'role' => 'Orang Tua',
            'status' => 'Aktif',
            'password' => bcrypt('wali123'),
        ];

        $user = User::updateOrCreate(['email' => 'wali@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Orang Tua');

        // Guest
        $userData = [
            'name' => 'Tamu',
            'username' => 'guest',
            'email' => 'guest@madrasah.com',
            'role' => 'Guest',
            'status' => 'Aktif',
            'password' => bcrypt('guest123'),
        ];

        $user = User::updateOrCreate(['email' => 'guest@madrasah.com'], $userData);

        if ($user->wasRecentlyCreated) {
            $this->command->info('Data User ' . $user->name . ' has been saved.');
        } else {
            // Jika data sudah ada dan diperbaharui
            $this->command->info('Data User ' . $user->name . ' has been updated.');
        }

        $user->assignRole('Guest');

    }
}
