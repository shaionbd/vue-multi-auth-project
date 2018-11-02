<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profile_url')->nullable();
            $table->string('company')->nullable();
            $table->integer('looking_for_job')->default(1);
            $table->string('billing_address')->nullable();
            $table->string('country')->nullable();
            $table->integer('is_online')->default(0);
            $table->string('referral_code')->nullable();
            $table->integer('is_activate')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
