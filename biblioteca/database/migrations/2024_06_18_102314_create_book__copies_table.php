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
        Schema::create('book__copies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('library_id');
            $table->unsignedBigInteger('shelf_id');
            $table->integer('copy_number');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('library_id')->references('id')->on('libraries');
            $table->foreign('shelf_id')->references('id')->on('shelves');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book__copies');
    }
};
