<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   //run all tables to phpmyadmin
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('Id');
            $table->string('Name');
            $table->integer('Student_ID');
            $table->date('Created_at');
        });
    }

    //drop database
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
