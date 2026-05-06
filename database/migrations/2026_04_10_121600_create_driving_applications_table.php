<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('driving_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->date('date_of_birth')->nullable();
            $table->enum('preferred_center', [
                'center_1',
                'center_2',
                'center_3',
                'center_4'
            ]);
            $table->enum('preferred_schedule', [
                'morning',
                'afternoon',
                'evening',
                'weekend'
            ]);
            $table->enum('license_type', [
                'A',   // Motorcycle
                'B',   // Car
                'C',   // Truck
                'D'    // Bus
            ])->default('B');
            $table->enum('status', [
                'pending',
                'reviewing',
                'approved',
                'rejected',
                'completed'
            ])->default('pending');
            $table->text('notes')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('driving_applications');
    }
};
