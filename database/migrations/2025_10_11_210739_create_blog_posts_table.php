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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->nullable()->constrained()->cascadeOnDelete();
            $table->json('title'); // translatable
            $table->string('slug')->unique();
            $table->json('excerpt')->nullable(); // translatable
            $table->json('content'); // translatable
            $table->string('status')->default('draft'); // draft, published
            $table->timestamp('published_at')->nullable();
            $table->json('meta_description')->nullable(); // translatable SEO
            $table->timestamps();

            $table->index(['status', 'published_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
