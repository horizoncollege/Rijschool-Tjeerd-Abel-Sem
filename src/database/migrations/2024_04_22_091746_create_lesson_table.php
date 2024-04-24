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
        Schema::create('lesson', function (Blueprint $table) {
            $table->id();
            $table->string('goal');
            $table->string('status');
            $table->integer('lesson_number');
            $table->date('start_date');
            $table->date('day_of_month');
            $table->date('end_date');
            $table->foreignId('teacher_id')->constrained()->cascadeOnDelete();
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson');
    }
};
