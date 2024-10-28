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
        Schema::create('chapels', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_chapel');
            $table->string('address');
            $table->string('chapel_treasurer');
            $table->string('chapel_chairman');
            $table->bigInteger('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapels');
    }
};
