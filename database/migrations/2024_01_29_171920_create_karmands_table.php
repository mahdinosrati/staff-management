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
        Schema::create('karmands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('avatar')->default(asset('assets/img/default.png'));
            $table->string('father_name');
            $table->string('sh_shenas');
            $table->string('sodoor_loc');
            $table->string('birth');
            $table->string('birth_loc');
            $table->string('kodmeli');
            $table->string('blood_type');
            $table->string('edu_level');
            $table->string('edu_field');
            $table->string('cellphone');
            $table->string('home_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karmands');
    }
};
