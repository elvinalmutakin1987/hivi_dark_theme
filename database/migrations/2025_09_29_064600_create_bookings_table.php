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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('slot_id');
            $table->date('date')->nullable();
            $table->integer('minutes')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->string('booking_code', 20)->nullable();
            $table->string('status', 20)->default('Created')->nullable();
            $table->integer('price_total')->nullable();
            $table->string('pay_status', 20)->default('Unpaid')->nullable();
            $table->timestamps();
            $table->foreign('slot_id')
                ->references('id')->on('slots')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
