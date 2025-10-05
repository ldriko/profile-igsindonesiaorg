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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_infos')->cascadeOnDelete();
            $table->enum('level', ['S1', 'S2', 'S3']);
            $table->string('institution');
            $table->json('department');
            $table->year('graduation_year');
            $table->json('thesis_title');
            $table->string('advisor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
