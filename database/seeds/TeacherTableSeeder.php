<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teacher::class, 150)->create()->each(function ($u) {
            DB::table('teacher_settings')->insert([
                'teacher_id' => $u->id,
            ]);
            
	    });
    }
}
