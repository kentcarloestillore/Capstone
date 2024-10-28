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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parishioner_id')->unsigned();
            $table->foreign('parishioner_id')->references('id')->on('parishioners')->onDelete('cascade');
            $table->bigInteger('cluster_id')->unsigned();
            $table->foreign('cluster_id')->references('id')->on('clusters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
