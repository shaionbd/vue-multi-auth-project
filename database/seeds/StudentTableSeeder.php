<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 150)->create()->each(function ($u) {
            DB::table('student_settings')->insert([
                'student_id' => $u->id,
            ]);

	    });
    }
}
