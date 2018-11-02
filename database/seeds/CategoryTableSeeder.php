<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Programming', 'Design', 'Communication', 'Marketing'];
    	
        for($i = 0; $i < sizeof($categories); $i++){
            DB::table('categories')->insert([
                'name' => $categories[$i],
            ]);
        }
    }
}
