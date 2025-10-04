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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('court_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('open_play_id');
            $table->unsignedBigInteger('payment_gateway_id');
            $table->unsignedBigInteger('video_id');
            $table->string('type', 50)->default('Court Booking')->nullable();
            $table->integer('ammount')->default(0)->nullable();
            $table->string('method', 50)->default('Card')->nullable();
            $table->string('status', 50)->default('Initiated')->nullable();
            $table->timestamps();
            $table->foreign('court_id')
                ->references('id')->on('courts')
                ->onDelete('cascade');
            $table->foreign('booking_id')
                ->references('id')->on('bookings')
                ->onDelete('cascade');
            $table->foreign('open_play_id')
                ->references('id')->on('open_plays')
                ->onDelete('cascade');
            $table->foreign('payment_gateway_id')
                ->references('id')->on('payment_gateways')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
