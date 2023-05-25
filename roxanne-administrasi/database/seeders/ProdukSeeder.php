<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'kode_produk' => 'KP001',
            'nama_produk' => 'Produk 1',
            'deskripsi_produk' => 'Deskripsi Produk 1',
            'jumlah_produk' => 10,
            'harga_produk' => 10000,
            
            ]);
    }
}
