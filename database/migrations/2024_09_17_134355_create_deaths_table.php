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
        Schema::create('deaths', function (Blueprint $table) {
            $table->id();
            $table->string('book_number');
            $table->string('page_number');
            $table->string('serial_number');
            $table->bigInteger('parishioner_id')->unsigned();
            $table->string('name_of_clergy');
            $table->string('partner_name');
            $table->bigInteger('church_id')->unsigned();
            $table->date('date_of_death');
            $table->date('date_of_burial');
            $table->string('cause_of_death');
            $table->string('name_of_cemetery');
            $table->boolean('received_any_sacrament');
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
        Schema::dropIfExists('deaths');
    }
};
