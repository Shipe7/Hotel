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
        Schema::table('settings', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('area');
            $table->string('type');
            $table->integer('maxoccupancy');
            $table->string('occupancy');
            $table->string('adult');
            $table->string('status');
            $table->string('children');
            $table->string('description');
        });
    }

  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
