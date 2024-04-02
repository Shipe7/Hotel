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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // Define the 'image' column as a nullable string
            $table->string('name'); // Define the 'name' column as a string
            $table->text('description'); // Define the 'description' column as text
            $table->string('article_number'); // Define the 'article_number' column as a string
            $table->string('status'); // Define the 'status' column as a string
            $table->text('comment')->nullable(); // Define the 'comment' column as a nullable text field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
