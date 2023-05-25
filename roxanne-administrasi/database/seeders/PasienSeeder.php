<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
                'nama_pasien' => 'Ilham Indra',
                'jenis_kelamin' => 'L',
                'alamat' => 'Sepanjang jalan kenangan',
                'tanggal_lahir' => '1990-01-01',
                'nomor_telepon' => '081332189791',
                'email' => 'ilham@example.com',
                
                ]);
    }
}
