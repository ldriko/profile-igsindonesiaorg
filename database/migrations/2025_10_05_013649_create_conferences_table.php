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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_infos')->cascadeOnDelete();
            $table->year('year');
            $table->json('title');
            $table->json('conference_name');
            $table->json('location')->nullable();
            $table->enum('role', ['Presenter', 'Participant', 'Committee', 'KeynoteSpeaker']);
            $table->json('paper_title')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
