<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInnercampuscoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innercampuscourses', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('campus_name');
            $table->string('course_name');
            $table->string('degree_title');
            $table->string('what_offer');
            $table->string('first_image');
            $table->string('second_image');
            $table->string('benefit');
            $table->string('faculty_name');
            $table->string('faculty_details');
            $table->string('faculty_name2');
            $table->string('faculty_details2');
            $table->string('faculty_name3');
            $table->string('faculty_details3');
            $table->string('faculty_name4');
            $table->string('faculty_details4');

            $table->string('why_icri_campus');
            $table->string('about_icri');
            $table->string('hiring_partner');
            $table->string('hiring_partner2');
            $table->string('hiring_partner3');
            $table->string('hiring_partner4');
            $table->string('hiring_partner5');
            $table->string('hiring_partner6');
            $table->string('hiring_partner7');

       


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
        Schema::dropIfExists('innercampuscourses');
    }
}
