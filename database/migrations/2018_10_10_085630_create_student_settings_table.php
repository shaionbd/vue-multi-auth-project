<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('n_add_new_course')->default(1);
            $table->integer('n_payment_confirm')->default(1);
            $table->integer('n_something_bad')->default(1);
            $table->integer('n_new_attachment')->default(1);
            $table->integer('n_some_get_in_touch')->default(1);
            $table->integer('n_exam_result_public')->default(1);
            $table->integer('n_exam_comming_soon')->default(1);
            $table->integer('n_other')->default(1);
            $table->integer('s_online')->default(1);
            $table->integer('s_certification')->default(1);
            $table->integer('s_my_profile')->default(1);
            $table->integer('s_other')->default(1);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_settings');
    }
}
