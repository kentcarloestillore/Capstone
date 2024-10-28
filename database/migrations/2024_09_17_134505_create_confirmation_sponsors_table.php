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
        Schema::create('confirmation_sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->bigInteger('confirmation_id')->unsigned();
            $table->foreign('confirmation_id')->references('id')->on('confirmations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confirmation_sponsors');
    }
};
