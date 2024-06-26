<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('magazijnen', function (Blueprint $table) {
            $table->id();
            $table->date('ontvangstdatum')->nullable();
            $table->date('uitleveringsdatum')->nullable();
            $table->string('verpakkingseenheid');
            $table->integer('aantal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('magazijnen');
    }
};
