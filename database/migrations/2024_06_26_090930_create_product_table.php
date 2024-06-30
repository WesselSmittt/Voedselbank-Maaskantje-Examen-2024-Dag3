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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('categorie_id')->nullable();
            $table->string('naam', 100)->nullable();
            $table->string('soortallergie', 100)->nullable();
            $table->biginteger('barcode')->nullable();
            $table->date('houdbaarheidsdatum');
            $table->string('omschrijving', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
