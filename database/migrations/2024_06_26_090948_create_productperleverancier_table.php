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
        Schema::create('productperleverancier', function (Blueprint $table) {
            $table->id();
            $table->integer('leverancier_id')->references('id')->on('leverancier');
            $table->integer('product_id')->references('id')->on('product');
            $table->date('datumaangeleverd');
            $table->date('datumeerstvolgendelevering');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productperleverancier');
    }
};
