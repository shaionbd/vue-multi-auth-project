<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('certificate_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('is_certify')->default(0);
            $table->timestamps();

            $table->foreign('certificate_id')->references('id')->on('certificates');
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
        Schema::dropIfExists('student_certificates');
    }
}
