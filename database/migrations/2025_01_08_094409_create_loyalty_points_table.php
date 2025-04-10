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
        Schema::create('loyalty_points', function (Blueprint $table) {
            $table->id();
            $table->integer('one_point_value');
            $table->integer('min_val_for_loyalitypoint');
            $table->integer('points_expiry_period');
            $table->integer('redumption_value');
            $table->integer('max_percentage_redumption');
            $table->integer('min_invoice_val_redumption');
            $table->unsignedBigInteger('party_id');
            $table->foreign('party_id')->references('id')->on('parties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loyalty_points');
    }
};
