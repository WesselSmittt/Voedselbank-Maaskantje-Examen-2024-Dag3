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
        Schema::create('contactpergezin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezin_id');
            $table->unsignedBigInteger('contact_id');
            $table->timestamps();

            $table->foreign('gezin_id')->references('id')->on('gezin');
            $table->foreign('contact_id')->references('id')->on('contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactpergezin');
    }
};
