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
            $table->id('booking_id');
            // $table->foreignId('arena_id');
            $table->foreignId('user_id');
            $table->date('booking_date');
            $table->boolean('status')->default(false);
            // $table->time('booking_time_start');
            // $table->time('booking_time_end');
            // $table->integer('qty_time');
            $table->integer('total_price');
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
