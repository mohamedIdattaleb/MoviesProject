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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('duration')->nullable();
            $table->decimal('rating', 3, 1)->nullable()->checkBetween(0, 10);
            $table->foreignId('genre_id')->nullable()->constrained('genres')->onDelete('set null');
            $table->string('image_path')->nullable(); // Column for storing the image path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
