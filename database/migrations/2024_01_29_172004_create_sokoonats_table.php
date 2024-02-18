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
        Schema::create('sokoonats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('karmand_id');
            $table->foreign('karmand_id')->references('id')->on('karmands')->onDelete('cascade');

            $table->string('homing_status');
            $table->string('homing_status_org');
            $table->text('karmand_address');
            $table->string('postal_code');
            $table->string('bank_name');
            $table->string('shaba_num');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sokoonats');
    }
};
