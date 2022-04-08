<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'review'=> "My cat loved staying with Jaap. He took really good care of her",
            'fromId'=>1,
            'toId'=>2
        ]);
    }
}
