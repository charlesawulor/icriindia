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
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('banner_image');
            $table->string('image');
            $table->string('about_course');
            $table->string('msc_course');
            $table->string('msc_eligibility');
            $table->string('msc_curriculum');
            $table->string('msc_career_prospect');
            $table->string('msc_campus');
            $table->string('bsc_course');
            $table->string('bsc_eligibility');
            $table->string('bsc_curriculum');
            $table->string('bsc_career_prospect');
            $table->string('bsc_campus');
            $table->string('pgdiploma_course');
            $table->string('pgdiploma_eligibility');
            $table->string('pgdiploma_curriculum');
            $table->string('pgdiploma_career_prospect');
            $table->string('pgdiploma_campus');
            $table->string('phd_course');
            $table->string('phd_eligibility');
            $table->string('phd_curriculum');
            $table->string('phd_career_prospect');
            $table->string('phd_campus');
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
        Schema::dropIfExists('courses');
    }
}
