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
        Schema::create('teaching_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_infos')->cascadeOnDelete();
            $table->json('title');
            $table->json('program');
            $table->json('type');
            $table->enum('format', ['Printed', 'Digital']);
            $table->string('isbn')->nullable();
            $table->year('year');
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_materials');
    }
};
