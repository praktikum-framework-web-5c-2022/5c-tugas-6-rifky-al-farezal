<?php

namespace Database\Seeders;

use App\Models\Merk;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Merk::create([
            'merk_produk' => 'Samsung'
        ]);
        Merk::create([
            'merk_produk' => 'Apple'
        ]);
        Merk::create([
            'merk_produk' => 'Oppo'
        ]);
        Merk::create([
            'merk_produk' => 'Xiaomi'
        ]);

        Produk::create([
            'kode_produk' => '10011',
            'tipe' => 'Samsung S21',
            'harga' => '15000000',
            'merk_id' => '1',
        ]);
        Produk::create([
            'kode_produk' => '10012',
            'tipe' => 'Samsung Galaxy Z Fold',
            'harga' => '20000000',
            'merk_id' => '1',
        ]);
        Produk::create([
            'kode_produk' => '20011',
            'tipe' => 'Iphone 11 Pro',
            'harga' => '13000000',
            'merk_id' => '2',
        ]);
        Produk::create([
            'kode_produk' => '20012',
            'tipe' => 'Iphone 14 Pro',
            'harga' => '21000000',
            'merk_id' => '2',
        ]);
        Produk::create([
            'kode_produk' => '30011',
            'tipe' => 'Oppo Find X',
            'harga' => '16000000',
            'merk_id' => '3',
        ]);
        Produk::create([
            'kode_produk' => '40011',
            'tipe' => 'Xiaomi Mi 12',
            'harga' => '12000000',
            'merk_id' => '4',
        ]);
        
    }
}
