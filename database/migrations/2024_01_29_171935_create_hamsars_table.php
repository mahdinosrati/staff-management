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
        Schema::create('hamsars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('karmand_id');
            $table->foreign('karmand_id')->references('id')->on('karmands')->onDelete('cascade');

            $table->string('name');
            $table->string('family');
            $table->string('father_name');
            $table->string('kodmeli');
            $table->string('birth');
            $table->string('cellphone');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hamsars');
    }
};
