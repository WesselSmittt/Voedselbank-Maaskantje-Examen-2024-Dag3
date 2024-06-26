<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('straat', 100);
            $table->integer('huisnummer');
            $table->string('toevoeging', 50)->nullable();
            $table->string('postcode', 50);
            $table->string('woonplaats', 50);
            $table->string('email', 100);
            $table->string('telefoonnummer', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
