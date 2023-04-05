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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('rating', 50);
            $table->text('description');
            $table->float('price');
            $table->unsignedInteger('stock');
            $table->string('image');
            $table->date('release_date');
            $table->unsignedBigInteger('console_id');
            $table->foreign('console_id')->references('id')->on('consoles')->onDelete('cascade');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
