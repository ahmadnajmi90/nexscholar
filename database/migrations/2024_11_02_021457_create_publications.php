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
        // Schema::create('publications', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('academician_id')->constrained()->onDelete('cascade');
        //     $table->string('title');
        //     $table->string('journal_name');
        //     $table->integer('year');
        //     $table->string('doi')->nullable();
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
