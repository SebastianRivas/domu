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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('identification_type');
            $table->bigInteger('identification_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('identification_type')->references('id')->on('identification_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
