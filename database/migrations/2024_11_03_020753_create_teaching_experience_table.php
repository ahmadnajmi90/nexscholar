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
        // Schema::create('teaching_experience', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('academician_id')->constrained('academicians')->onDelete('cascade');
        //     $table->string('course_name');
        //     $table->string('semester');
        //     $table->text('course_description')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_experience');
    }
};