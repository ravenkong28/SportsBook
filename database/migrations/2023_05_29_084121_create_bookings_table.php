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
            $table->foreignId('user_id');
            // $table->string('user_name');
            // $table->string('user_phone');
            // $table->string('user_address);
            $table->foreignId('arena_id');
            $table->integer('arena_price');
            // $table->date('booking_date')->nullable();
            // $table->time('booking_time_start')->nullable();
            // $table->string('booking_date')->nullable();
            // $table->string('booking_time_start')->nullable();
            // $table->string('arena_price');
            $table->string('qty_time');
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
