<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TypesOfPetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types_of_pets_array = ["amphibian","bird","cat","dog","fish","insects/arachnid","reptile","rodent","other"];

        foreach($types_of_pets_array as $type){
            DB::table("types_of_pets")->insert([
                'type'=>$type
            ]);
        }
    }
}
