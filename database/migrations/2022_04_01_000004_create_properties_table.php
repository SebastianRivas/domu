<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id');
            $table->integer('property_type');
            $table->integer('property_detail');
            $table->integer('property_history');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('property_type')->references('id')->on('property_types');
            $table->foreign('property_detail')->references('id')->on('property_details');
            $table->foreign('property_history')->references('id')->on('property_histories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
