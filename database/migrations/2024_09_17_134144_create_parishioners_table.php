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
        Schema::create('parishioners', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('residence');
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->enum('sex',['Male', 'Female'])->nullable();
            $table->string('citizenship')->nullable();
            $table->string('name_of_father')->nullable();
            $table->string('name_of_mother')->nullable();
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
        Schema::dropIfExists('parishioners');
    }
};
