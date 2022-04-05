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

        DB::table('pets')->insert([
            'name'=> "Sam",
            'type'=>"dog",
            'description'=>"kind, but scared, dog who's not easy to trust humans",
            'hourlyRate'=>7.0,
            'startDate'=>"2022-05-22",
            'endDate'=>"2022-06-03",
            'ownerId'=>2,
        ]);
    }
}
