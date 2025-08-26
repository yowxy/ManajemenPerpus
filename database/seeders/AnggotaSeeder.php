<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggotas')->insert([
               'nama'             => 'Budi Santoso',
                'nomor_telepon'    => '081234567890',
                'email'            => 'budi@example.com',
                'tanggal_bergabung'=> Carbon::now()->subDays(30),
                'password'         => Hash::make('password123'),
                'role'             => 'admin',
                'created_at'       => now(),
                'updated_at'       => now(),
        ]);
    }
}
