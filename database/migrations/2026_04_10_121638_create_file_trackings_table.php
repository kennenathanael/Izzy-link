<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('file_trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('reference_number')->unique(); // e.g. EG-2024-00123
            $table->enum('service_type', [
                'driving',
                'language',
                'visa'
            ]);
            $table->unsignedBigInteger('service_id'); // ID from the related table
            $table->string('current_status');
            $table->json('status_history')->nullable(); // Array of past statuses + dates
            $table->string('assigned_agent')->nullable();
            $table->date('expected_completion_date')->nullable();
            $table->text('latest_update')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('file_trackings');
    }
};
