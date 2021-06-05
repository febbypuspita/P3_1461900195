<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan1 = new Pelanggan;
        $pelanggan1->id = "1";
        $pelanggan1->nama = "Ade";
        $pelanggan1->alamat = "Surabaya";
        $pelanggan1->save();

        $pelanggan2 = new Pelanggan;
        $pelanggan2->id = "2";
        $pelanggan2->nama = "Zam";
        $pelanggan2->alamat = "Kalimantan";
        $pelanggan2->save();

        $pelanggan3= new Pelanggan;
        $pelanggan3->id = "3";
        $pelanggan3->nama = "Arif";
        $pelanggan3->alamat = "Sidoarjo";
        $pelanggan3->save();
    }
}
