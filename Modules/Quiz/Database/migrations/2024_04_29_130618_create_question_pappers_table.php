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
        Schema::create('question_pappers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('instruction')->nullable();
            $table->foreign('instruction')->on('instructions')->references('id')->onDelete('cascade');
            $table->integer('examStatus')->default(0);
            $table->integer('randomQuestion')->default(0);
            $table->integer('examType');
            $table->string('duration',50);
            $table->integer('markType')->default(0);
            $table->integer('percentage')->default(0);
            $table->integer('showResultAfterExam')->default(0);
            $table->integer('showMarkAfterExam')->default(0);
            $table->integer('ispaid');
            $table->float('cost')->default(0);
            $table->integer('published')->default(0);
            $table->integer('totalNoQuestion')->default(0);
            $table->integer('totalNoSet')->default(0);
            $table->integer('questionCurrectMark')->default(0);
            $table->integer('questionWrongMark')->default(0);
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_pappers');
    }
};
