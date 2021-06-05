<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang1 = new Barang;
        $barang1->id = "1";
        $barang1->nama = "Sepatu";
        $barang1->harga = "100000";
        $barang1->save();

        $barang2 = new Barang;
        $barang2->id = "2";
        $barang2->nama = "Baju";
        $barang2->harga = "50000";
        $barang2->save();

    }
}
