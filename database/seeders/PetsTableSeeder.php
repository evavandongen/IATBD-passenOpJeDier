<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name'=> "Puk",
            'type'=>"cat",
            'description'=>"small black cat who loves to be outside",
            'hourlyRate'=>4.5,
            'startDate'=>"2022-04-15",
            'endDate'=>"2022-04-27",
            'ownerId'=>1,
        ]);
    }
}
