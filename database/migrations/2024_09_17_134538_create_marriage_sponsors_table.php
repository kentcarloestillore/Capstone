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
        Schema::create('marriage_sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->bigInteger('marriage_id')->unsigned();
            $table->foreign('marriage_id')->references('id')->on('marriages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_sponsors');
    }
};
