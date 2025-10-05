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
        Schema::create('publication_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(-1)->index();
            $table->integer('order')->default(0)->index();
            $table->json('title');
            $table->string('code')->nullable();
            $table->json('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_categories');
    }
};
