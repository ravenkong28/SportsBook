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
        Schema::create('bookings_detail', function (Blueprint $table) {
            $table->id('booking_detail_id');
            $table->foreignId('arena_id');
            $table->foreignId('booking_id');
            $table->integer('qty_time');
            $table->date('booking_date');
            $table->time('booking_time_start');
            // $table->time('booking_time_end');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings_detail');
    }
};
