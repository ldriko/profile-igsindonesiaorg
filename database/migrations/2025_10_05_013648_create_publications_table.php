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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_infos')->cascadeOnDelete();
            $table->foreignId('publication_category_id')->constrained('publication_categories')->cascadeOnDelete();
            $table->year('year');
            $table->text('title');
            $table->enum('publication_type', ['Book', 'Journal', 'Proceeding', 'Poster', 'Chapter']);
            $table->string('journal_name')->nullable();
            $table->string('doi')->nullable();
            $table->string('url')->nullable();
            $table->string('publisher')->nullable();
            $table->enum('index_type', ['Scopus', 'Sinta', 'Other']);
            $table->string('rank')->nullable();
            $table->string('author_role')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
