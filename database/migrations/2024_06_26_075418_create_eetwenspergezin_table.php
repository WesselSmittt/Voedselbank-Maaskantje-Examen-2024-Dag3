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
        Schema::create('eetwenspergezin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezin_id');
            $table->unsignedBigInteger('eetwens_id');
            $table->timestamps();

            $table->foreign('gezin_id')->references('id')->on('gezin');
            $table->foreign('eetwens_id')->references('id')->on('eetwens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eetwenspergezin');
    }
};
