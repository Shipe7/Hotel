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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable(); // Avatar field (nullable)
            $table->string('email')->unique(); // Email field with unique constraint
            $table->string('lastname'); // Last name field
            $table->string('firstname'); // First name field
            $table->unsignedBigInteger('created_by')->nullable(); // Created by (if applicable)
            $table->text('comments')->nullable(); // Comments field (nullable)
            $table->string('company')->nullable(); // Company field (nullable)
            $table->string('phone')->nullable(); // Phone field (nullable)
            $table->string('address')->nullable(); // Address field (nullable)
            $table->string('gender')->nullable(); // Gender field (nullable)
            $table->string('title')->nullable(); // Title field (nullable)
            $table->date('date_of_birth')->nullable(); // Date of birth field (nullable)
            $table->string('nationality')->nullable(); // Nationality field (nullable)
            $table->string('city')->nullable(); // City field (nullable)
            $table->string('region')->nullable(); // Region field (nullable)
            $table->string('passportid')->nullable(); // Passport ID field (nullable)
            $table->string('religion')->nullable(); // Religion field (nullable)
            $table->string('status')->nullable(); // Status field (nullable)
            $table->integer('discount')->default(0); // Discount field with default value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
