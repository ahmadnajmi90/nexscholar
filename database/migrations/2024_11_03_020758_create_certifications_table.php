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
        // Schema::create('certifications', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('academician_id')->constrained('academicians')->onDelete('cascade');
        //     $table->string('certification_name');
        //     $table->string('institution');
        //     $table->year('year')->nullable();
        //     $table->timestamps();
        // });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};