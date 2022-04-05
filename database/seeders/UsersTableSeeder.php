<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> "Eva van Dongen",
            'email'=>"eva@email.nl",
            'password'=>bcrypt('eva1234'),
            'role'=>"Admin",
        ]);

        DB::table('users')->insert([
            'name'=> "Jaap Kanbier",
            'email'=>"jaap@email.nl",
            'password'=>bcrypt('jaap1234'),
            'role'=>"User",
        ]);
    }
}
