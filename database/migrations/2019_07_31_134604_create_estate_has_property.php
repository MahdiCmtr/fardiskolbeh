<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstateHasProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estate_id');
            $table->unsignedBigInteger('property_id');
            $table->string('value');
            $table->timestamps();

            $table->foreign('estate_id')
                ->references('id')
                ->on('estate');
            $table->foreign('property_id')
                ->references('id')
                ->on('property');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate_property');
    }
}
