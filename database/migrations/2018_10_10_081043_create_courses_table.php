<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('assign_teacher')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('subcategory_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();

            $table->foreign('assign_teacher')->references('id')->on('teachers');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
