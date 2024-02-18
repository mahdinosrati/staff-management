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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();

            $table->foreignId('karmand_id');
            $table->foreign('karmand_id')->references('id')->on('karmands')->onDelete('cascade');

            $table->string('leave_code');
            $table->string('s_date');
            $table->string('e_date');
            $table->string('day_num');
            $table->string('type_of_leave');
            $table->string('reason');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
