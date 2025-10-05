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
        Schema::create('book_writings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_infos')->cascadeOnDelete();
            $table->year('year');
            $table->json('title');
            $table->json('publisher');
            $table->string('isbn')->nullable();
            $table->enum('type', ['Textbook', 'ReferenceBook', 'Monograph', 'Chapter']);
            $table->string('authors');
            $table->enum('role', ['Author', 'CoAuthor', 'Editor']);
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_writings');
    }
};
