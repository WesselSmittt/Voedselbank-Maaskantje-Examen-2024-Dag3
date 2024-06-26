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
        Schema::create('producten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categorieen');
            $table->string('naam');
            $table->string('soort_allergie')->nullable();
            $table->string('barcode');
            $table->date('houdbaarheidsdatum');
            $table->text('omschrijving')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producten');
    }
};
