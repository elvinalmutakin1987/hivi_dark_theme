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
        Schema::create('partners', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->primary('user_id');
            $table->string('org_name', 150)->nullable();
            $table->string('org_type', 40)->default('Venue')->nullable();
            $table->string('tax_id', 60)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 80)->nullable();
            $table->string('kyc_status', 20)->default('Pending')->nullable();
            $table->json('payout_bank')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('partners');
    }
};
