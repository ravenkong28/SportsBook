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
            // $table->unsignedBigInteger('category_id');
            $table->string('arena_type');
            $table->string('arena_name');
            $table->string('arena_address');
            $table->string('arena_phone');
            $table->float('arena_rating');
            $table->integer('number_of_fields');
            $table->integer('arena_price');
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
