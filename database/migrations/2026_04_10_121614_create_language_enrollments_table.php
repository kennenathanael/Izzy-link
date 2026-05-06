<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('language_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->enum('language', ['english', 'german']);
            $table->enum('course_type', [
                // English
                'ielts_preparation',
                'toefl_preparation',
                // German
                'german_a1',
                'german_a2',
                'german_b1',
                'german_b2'
            ]);
            $table->enum('preferred_schedule', [
                'morning',
                'afternoon',
                'evening',
                'weekend'
            ]);
            $table->enum('preferred_center', [
                'nkomo',
                'carrefour',
                'essos',
                'bonas',
                'makepe'
            ]);
            $table->enum('current_level', [
                'beginner',
                'elementary',
                'intermediate',
                'advanced'
            ])->default('beginner');
            $table->enum('status', [
                'pending',
                'enrolled',
                'in_progress',
                'completed',
                'dropped'
            ])->default('pending');
            $table->text('notes')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('language_enrollments');
    }
};
