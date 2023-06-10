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
        Schema::create('transactions', function (Blueprint $table) {
            // $table->uuid('id')->primary();
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('arena_id');
            $table->integer('arena_price');
            $table->date('booking_date');
            $table->time('booking_time_start');
            $table->time('booking_time_end');
            $table->integer('qty_time');
            $table->integer('total_price');
            $table->boolean('status_payment')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
