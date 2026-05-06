<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('transaction_reference')->unique();
            $table->enum('payment_method', [
                'mtn_momo',
                'orange_money',
                'card'
            ]);
            $table->string('phone_number')->nullable(); // For MoMo/Orange
            $table->decimal('amount', 10, 2);
            $table->string('currency')->default('XAF'); // CFA Franc
            $table->enum('purpose', [
                'app_activation',
                'driving_registration',
                'language_enrollment',
                'visa_assistance'
            ])->default('app_activation');
            $table->enum('status', [
                'initiated',
                'pending',
                'successful',
                'failed',
                'refunded'
            ])->default('initiated');
            $table->string('payment_proof')->nullable(); // Screenshot upload
            $table->text('notes')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
