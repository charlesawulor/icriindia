<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInnerpagecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innerpagecourses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('about_course');
            $table->string('course_image');
            $table->string('why_course');
            $table->string('course_deliverables');
            $table->string('why_course_icri');
            $table->string('why_course_icri_image');
            $table->string('msc_eligibility');
            $table->string('msc_curriculum');
            $table->string('msc_careerprospect');
            $table->string('msccampus_name');
            $table->string('msc_campus_image');
            $table->string('msccampus_name2');
            $table->string('msc_campus_image2');
            $table->string('bsc_eligibility');
            $table->string('bsc_curriculum');
            $table->string('bsc_careerprospect');
            $table->string('bsc_campus_image');
            $table->string('pgd_eligibility');
            $table->string('pgd_curriculum');
            $table->string('pgd_careerprospect');
            $table->string('pgd_campus_image');
            $table->string('phd_eligibility');
            $table->string('phd_curriculum');
            $table->string('phd_careerprospect');
            $table->string('phd_campus_image');
            $table->string('placement_image');
            $table->string('placement_image2');
            $table->string('placement_image3');
            $table->string('placement_image4');
            $table->string('placement_image5');
            $table->string('placement_image6');
            $table->string('placement_image7');
            $table->string('placement_image8');
            $table->string('placement_image9');
            $table->string('placement_image10');
            $table->string('placement_image11');
            $table->string('placement_image12');
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
        Schema::dropIfExists('innerpagecourses');
    }
}
