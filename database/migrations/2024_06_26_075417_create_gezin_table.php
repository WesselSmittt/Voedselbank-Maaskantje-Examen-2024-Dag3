<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gezin', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('code')->unique();
            $table->integer('aantal_volwassenen');
            $table->integer('aantal_kinderen');
            $table->integer('aantal_babys');
            $table->integer('totaal_aantal_personen');
            $table->text('omschrijving')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('gezin');
    }
};
