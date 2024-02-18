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
        Schema::create('takafols', function (Blueprint $table) {
            $table->id();

            $table->foreignId('karmand_id');
            $table->foreign('karmand_id')->references('id')->on('karmands')->onDelete('cascade');

            $table->foreignId('hamsar_id');
            $table->foreign('hamsar_id')->references('id')->on('hamsars')->onDelete('cascade');

            $table->foreignId('child_id');
            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');

            $table->string('relation_stats');
            $table->string('takafol_people_count_and_gender');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takafols');
    }
};
