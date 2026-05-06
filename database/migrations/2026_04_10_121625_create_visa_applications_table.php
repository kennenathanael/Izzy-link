<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visa_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->date('date_of_birth')->nullable();
            $table->string('passport_number')->nullable();
            $table->enum('destination_country', [
                'germany',
                'france',
                'lithuania'
            ]);
            $table->enum('visa_type', [
                // Germany
                'germany_study',
                'germany_work',
                'germany_business',
                // France
                'france_student',
                // Lithuania
                'lithuania_student'
            ]);
            $table->enum('preferred_center', [
                'nkomo',
                'carrefour',
                'essos',
                'bonas',
                'makepe'
            ]);
            $table->date('intended_travel_date')->nullable();
            $table->enum('status', [
                'pending',
                'documents_review',
                'submitted_to_embassy',
                'approved',
                'rejected',
                'completed'
            ])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visa_applications');
    }
};
