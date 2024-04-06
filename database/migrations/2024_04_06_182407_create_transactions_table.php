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
            $table->string('transaction_number', 100)->index();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('transaction_employee_id');
            $table->integer('transaction_status');
            $table->integer('transaction_amount');
            $table->dateTime('transaction_date');
            $table->foreignId('user_id');
            $table->timestamps();
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
