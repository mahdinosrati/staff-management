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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('karmand_id');
            $table->foreign('karmand_id')->references('id')->on('karmands')->onDelete('cascade');

            $table->string('sh_personeli');
            $table->string('sh_class');
            $table->string('current_rank');
            $table->string('lastp');
            $table->string('org_rank');
            $table->string('hdate');
            $table->string('recruitment_type');
            $table->string('register_type');
            $table->string('last_edu_degree');
            $table->string('edu_field');
            $table->string('sh_shenas');
            $table->string('duty_status');
            $table->string('physical_condition');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
