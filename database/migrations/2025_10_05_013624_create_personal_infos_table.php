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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('academic_titles');
            $table->string('nidn');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('marital_status');
            $table->string('functional_position');
            $table->string('structural_position');
            $table->string('academic_position');
            $table->string('institution');
            $table->text('address_office');
            $table->text('address_home');
            $table->string('phone');
            $table->string('email');
            $table->integer('produced_graduates_s1');
            $table->integer('produced_graduates_s2');
            $table->integer('produced_graduates_s3');
            $table->string('scopus_id');
            $table->string('sinta_id');
            $table->string('google_scholar_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_infos');
    }
};
