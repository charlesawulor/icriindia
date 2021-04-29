<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhyicrihealthcarehospitalmanagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whyicrihealthcarehospitalmanagements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('why_icri_health');
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
        Schema::dropIfExists('whyicrihealthcarehospitalmanagements');
    }
}
