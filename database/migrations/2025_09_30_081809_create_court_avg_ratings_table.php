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
        Schema::create('court_avg_ratings', function (Blueprint $table) {
            $table->unsignedBigInteger('court_id');
            $table->primary('court_id');
            $table->decimal('avg_rating', 3, 2)->nullable();
            $table->integer('rating_count')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('court_id')
                ->references('id')->on('courts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('court_avg_ratings');
    }
};
