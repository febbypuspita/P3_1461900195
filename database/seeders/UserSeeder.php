<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User;
        $user1->id = "1";
        $user1->nama = "Admin";
        $user1->username = "admin";
        $user1->password = "admin";
        $user1->save();
    }
}
