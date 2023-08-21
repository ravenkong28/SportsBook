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
        Schema::create('arenas', function (Blueprint $table) {
            $table->id('arena_id');
            $table->foreignId('category_id');
            $table->string('store_name');
            $table->string('arena_name');
            $table->string('arena_address');
            $table->string('arena_phone');
            $table->float('arena_rating')->default(3);
            $table->integer('number_of_fields')->default(1);
            $table->integer('arena_price');
            $table->string('arena_image')->nullable();
            $table->integer('banner_flag')->default(0);
            $table->integer('top_arenas_flag')->default(0);
            $table->timestamps();
        });

        // Schema::table('arenas', function (Blueprint $table) {
        //     $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arenas');
    }
};
