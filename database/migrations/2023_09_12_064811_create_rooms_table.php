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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('type_id')->nullable()->constrained();
            $table->text('description')->nullable();
            $table->char('room_no')->nullable();
            $table->char('floor_no')->nullable();
            $table->char('building_no')->nullable();
            $table->integer('price');
            $table->integer('security_deposit')->default(30000);
            $table->json('meta')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('featured_at')->nullable();
            $table->authors();
            $table->timestamps();

            $table->fullText(['name', 'description', 'room_no', 'floor_no', 'building_no']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
