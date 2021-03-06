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
            'description'=>"a small little bitch",
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

        DB::table('pets')->insert([
            'name'=> "Chico",
            'type'=>"bird",
            'description'=>"a real pain in the ass",
            'hourlyRate'=>8.0,
            'startDate'=>"2022-07-13",
            'endDate'=>"2022-09-02",
            'ownerId'=>2,
            'sitterId'=>1,
        ]);

        DB::table('pets')->insert([
            'name'=> "Bubble",
            'type'=>"fish",
            'description'=>"just keep swimming",
            'hourlyRate'=>4.5,
            'startDate'=>"2022-05-02",
            'endDate'=>"2022-05-29",
            'ownerId'=>1,
            'sitterId'=>2,
            'request'=>true,
        ]);

        DB::table('pets')->insert([
            'name'=> "kermit",
            'type'=>"amphibian",
            'description'=>"they call him Kermit the frog",
            'hourlyRate'=>7.5,
            'startDate'=>"2022-08-02",
            'endDate'=>"2022-08-08",
            'ownerId'=>1,
            'sitterId'=>2,
            'request'=>false,
        ]);
    }
}
