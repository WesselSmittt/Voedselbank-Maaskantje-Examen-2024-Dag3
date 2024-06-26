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
        Schema::create('productpervoedselpakket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voedselpakket_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('aantal_product_eenheden');
            $table->timestamps();
            $table->foreign('voedselpakket_id')->references('id')->on('voedselpakket');
            $table->foreign('product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productpervoedselpakket');
    }
};
