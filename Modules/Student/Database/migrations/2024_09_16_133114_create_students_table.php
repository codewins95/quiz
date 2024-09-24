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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentID', 20); 
            $table->string('name', 100); 
            $table->string('email', 100)->unique(); 
            $table->string('phone', 15);
            $table->enum('gender', ['male', 'female', 'other']); 
            $table->date('dob');
            $table->string('religion', 50)->nullable(); 
            $table->string('country', 50); 
            $table->string('state', 50); 
            $table->text('address'); 
            $table->string('photo')->nullable(); 
            $table->string('username', 50)->unique(); 
            $table->string('password'); 
            $table->enum('role', ['student', 'admin', 'teacher']); 
            $table->unsignedBigInteger('create_userID'); 
            $table->boolean('active')->default(true); 
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
