<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();

            // 1st method of add foreign key
            // $table->bigInteger('camp_id')->unsigned();
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            
            // 2nd method of add foreign key
            $table->foreignId('camp_id')->constrained();
            // requirement: name id must be same as table
            
            $table->string('name');
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
        Schema::dropIfExists('camp_benefits');
    }
}
