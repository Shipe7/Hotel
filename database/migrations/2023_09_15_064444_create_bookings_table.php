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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bookingtype');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('adults');
            $table->integer('children');
            $table->string('room');
            $table->float('rate');
            $table->string('meal');
            $table->string('cancellation');
            $table->string('source');
            $table->string('status');
            $table->string('purpose');
            $table->string('condition');
            $table->text('note')->nullable();
            $table->text('meal_note')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
