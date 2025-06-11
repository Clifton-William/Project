<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin', // Tambahkan ini!
            'nama' => 'admin',
            'alamat' => 'Jalan Contoh',
            'telepon' => '08123456789',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin@123'),
            'jenis' => 'admin'
        ]);
    }
}
