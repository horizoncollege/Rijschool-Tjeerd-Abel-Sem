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
        Schema::create('pakkets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('prijs');
            $table->integer('prijs_los');
            $table->integer('aantal_lessen');
            $table->string('auto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakkets');
    }
};
