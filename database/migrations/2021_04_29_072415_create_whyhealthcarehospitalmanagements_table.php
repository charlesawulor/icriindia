<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhyhealthcarehospitalmanagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whyhealthcarehospitalmanagements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('why_healthcarehospital');
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
        Schema::dropIfExists('whyhealthcarehospitalmanagements');
    }
}
