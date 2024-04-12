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
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table->string('compagnia');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->dateTime('partenza');
            $table->dateTime('arrivo');
            $table->string('codice', 6);
            $table->tinyInteger('carrozze');
            $table->boolean('is_on_time');
            $table->boolean('is_cancelled');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
