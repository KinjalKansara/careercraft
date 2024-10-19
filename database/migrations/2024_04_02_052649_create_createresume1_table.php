<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateresume1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createresume1', function (Blueprint $table) {
            $table->id();
            $table->string('title', '30');
            $table->string('fname', '20');
            $table->string('lname', '20');
            $table->string('email' ,'30');
            $table->string('phone', '10');
            $table->text('address', '60');
            $table->string('zip', '6');
            $table->string('city', '30');
            $table->string('dob');
            $table->string('placedob', '30');
            $table->string('license', '10');
            $table->string('gender', '10');
            $table->string('nationality', '20');
            $table->string('maritalsts', '10');
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
        Schema::dropIfExists('createresume1');
    }
}
