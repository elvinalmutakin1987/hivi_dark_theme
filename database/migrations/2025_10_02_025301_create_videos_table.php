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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('court_id');
            $table->unsignedBigInteger('camera_id');
            $table->string('title', 100)->nullable();
            $table->date('date')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->text('file_path')->nullable();
            $table->text('thumbnail_url')->nullable();
            $table->text('screenshot')->nullable();
            $table->integer('price')->default(0)->nullable();
            $table->timestamps();
            $table->foreign('court_id')
                ->references('id')->on('courts')
                ->onDelete('cascade');
            $table->foreign('camera_id')
                ->references('id')->on('cameras')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
