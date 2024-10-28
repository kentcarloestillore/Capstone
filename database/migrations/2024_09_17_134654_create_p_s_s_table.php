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
        Schema::create('p_s_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('member_id')->unsigned();
            $table->bigInteger('receipt_id')->unsigned()->nullable();
            $table->date('date_paid');
            $table->decimal('amount', 9, 2);
            $table->string('month');
            $table->string('year');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('receipt_id')->references('id')->on('receipts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_s_s');
    }
};
