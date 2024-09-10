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
        Schema::create('question_banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('papper_id')->constrained('question_pappers');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('level_id')->constrained('question_levels');
            $table->string('type', 2)->comment('1 for single, 2 for multi ans, 3 for fill in the blanks');
            $table->text('question')->nullable();
            $table->integer('upload')->nullable();
            $table->text('explanation')->nullable();
            $table->text('hints')->nullable();
            $table->integer('totalOption')->nullable();
            $table->foreignId('create_user_id')->constrained('users');
            // $table->string('trueFalse', 1)->nullable()->comment('F = false, T = true ');
            $table->tinyInteger('active_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_banks');
    }
};
