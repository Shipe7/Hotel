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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest'); // Guest
            $table->decimal('amount', 10, 2); // Amount (with 10 digits and 2 decimal places)
            $table->string('status'); // Status
            $table->unsignedBigInteger('created_by'); // Created by
            $table->text('details'); // I nvoice Details
            $table->text('comments')->nullable(); // Comments (nullable)
            $table->decimal('balance', 10, 2); // Balance (with 10 digits and 2 decimal places)
            $table->integer('quantity'); // Quantity
            $table->string('invoice_no'); // Invoice number
            $table->string('currency'); // Currency
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
