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
        Schema::create('cashbooks', function (Blueprint $table) {
            $table->id();
            $table->string('cashbook');
            $table->string('cashbookid');
            $table->string('cashbook_report');
            $table->dateTime('datetime');
            $table->unsignedBigInteger('ledgerid');
            $table->unsignedBigInteger('subid');
            $table->string('billing');
            $table->decimal('cashin', 10, 2); // Assuming you want to store as decimal with 10 total digits and 2 decimal places
            $table->decimal('cashout', 10, 2); // Same assumption as cashin
            $table->decimal('balance', 10, 2); // Same assumption as cashin
            $table->unsignedBigInteger('account');
            $table->string('accountname');
            $table->string('cashpoint');
            $table->string('cashpointsub');            
            $table->timestamps();
        
            // Define foreign key constraints
            // $table->foreign('ledgerid')->references('id')->on('ledger');
            // // $table->foreign('subid')->references('id')->on('sub_table_name');
            // $table->foreign('account')->references('id')->on('account');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashbooks');
    }
};
