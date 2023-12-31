<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //run all tables to phpmyadmin
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title');
            $table->string('author');
        });
    }

    //drop database
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
