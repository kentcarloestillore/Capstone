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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('book_number');
            $table->string('page_number');
            $table->string('serial_number');
            $table->bigInteger('husband_id')->unsigned();
            $table->bigInteger('wife_id')->unsigned();
            $table->string('name_of_clergy');
            $table->bigInteger('church_id')->unsigned();
            $table->date('date_of_marriage');
            $table->string('place_of_marriage');
            $table->string('name_of_church');
            $table->foreign('husband_id')->references('id')->on('parishioners')->onDelete('cascade');
            $table->foreign('wife_id')->references('id')->on('parishioners')->onDelete('cascade');
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriages');
    }
};
