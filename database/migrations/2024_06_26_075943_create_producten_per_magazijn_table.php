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
        Schema::create('producten_per_magazijn', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('producten');
            $table->foreignId('magazijn_id')->constrained('magazijnen');
            $table->string('locatie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producten_per_magazijn');
    }
};
