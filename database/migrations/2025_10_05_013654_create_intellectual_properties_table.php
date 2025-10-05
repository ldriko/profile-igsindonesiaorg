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
        Schema::create('intellectual_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_info_id')->constrained('personal_infos')->cascadeOnDelete();
            $table->json('title');
            $table->enum('type', ['Patent', 'Copyright', 'Trademark', 'Design', 'Software']);
            $table->string('registration_number')->nullable();
            $table->year('year');
            $table->enum('status', ['Registered', 'Pending', 'Granted', 'Published']);
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intellectual_properties');
    }
};
