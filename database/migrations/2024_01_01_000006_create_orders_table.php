<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('customer_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('business_id')->constrained('businesses')->cascadeOnDelete();
            $table->enum('status', [
                'pending',
                'accepted',
                'preparing',
                'ready',
                'delivered',
                'cancelled',
            ])->default('pending');
            $table->unsignedInteger('total_price');
            $table->string('delivery_address')->nullable();
            $table->string('delivery_phone')->nullable();
            $table->text('note')->nullable();
            $table->dateTime('scheduled_time')->nullable();
            $table->dateTime('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
