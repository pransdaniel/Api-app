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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->string('productID', 10);
        $table->string('productName', 100);
        $table->string('amount', 10);
        $table->string('customerName', 100);
        $table->tinyInteger('status');
        $table->dateTime('transactionDate');
        $table->string('createBy', 100);
        $table->dateTime('createOn');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
