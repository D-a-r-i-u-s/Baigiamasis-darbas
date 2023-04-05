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
        Schema::create('consoles', function (Blueprint $table) {
            // `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL
            $table->id();

            // `title` VARCHAR(50) NOT NULL,
            $table->string('title', 50);

            //`created_at` TIMESTAMP NOT NULL,
            //`updated_at` TIMESTAMP NOT NULL,
            $table->timestamps();
            
            // `deleted_at` TIMESTAMP NULL DEFAULT NULL
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consoles');
    }
};
