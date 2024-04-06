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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id');
            $table->integer('transportation_type');
            $table->string('tracking_number', 100)->index();
            $table->string('carrier', 100);
            $table->dateTime('scheduled_date');
            $table->dateTime('actual_date')->nullable();
            $table->integer('shipment_status');
            $table->unsignedInteger('order_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
