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
        Schema::create('contactperleverancier', function (Blueprint $table) {
            $table->id();
            $table->integer('leverancier_id')->references('id')->on('leverancier');
            $table->integer('contact_id')->references('id')->on('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactperleverancier');
    }
};
