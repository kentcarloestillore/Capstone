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
        Schema::create('confirmations', function (Blueprint $table) {
            $table->id();
            $table->string('book_number');
            $table->string('page_number');
            $table->string('serial_number');
            $table->bigInteger('parishioner_id')->unsigned();
            $table->string('officiating_clergy');
            $table->date('date_of_confirmation');
            $table->bigInteger('church_id')->unsigned();
            $table->string('place_of_confirmation');
            $table->foreign('parishioner_id')->references('id')->on('parishioners')->onDelete('cascade');
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confirmations');
    }
};
