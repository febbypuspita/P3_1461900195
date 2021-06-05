<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi1 = new Transaksi;
        $transaksi1->id = "1";
        $transaksi1->id_pelanggan = "1";
        $transaksi1->id_barang = "2";
        $transaksi1->save();
        
        $transaksi2 = new Transaksi;
        $transaksi2->id = "2";
        $transaksi2->id_pelanggan = "3";
        $transaksi2->id_barang = "1";
        $transaksi2->save();

        $transaksi3 = new Transaksi;
        $transaksi3->id = "3";
        $transaksi3->id_pelanggan = "2";
        $transaksi3->id_barang = "1";
        $transaksi3->save();

        $transaksi4 = new Transaksi;
        $transaksi4->id = "4";
        $transaksi4->id_pelanggan = "1";
        $transaksi4->id_barang = "1";
        $transaksi4->save();
}
