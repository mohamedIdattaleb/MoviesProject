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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('seasons')->nullable();
            $table->integer('episodes')->nullable();
            $table->decimal('rating', 3, 1)->nullable()->checkBetween(0, 10); // Between 0 and 10
            $table->string('image_path')->nullable(); // Column to store the image file path
            $table->foreignId('genre_id')->nullable()->constrained('genres')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
