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
        Schema::create('pamisas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prayer_intention');
            $table->string('prayer_intention_to');
            $table->string('mass_schedule');
            $table->date('date');
            $table->bigInteger('receipt_id')->unsigned();
            $table->bigInteger('church_id')->unsigned();
            $table->foreign('receipt_id')->references('id')->on('receipts')->onDelete('cascade');
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pamisas');
    }
};
