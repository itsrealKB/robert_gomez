<?php

use App\Models\Assignment;
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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            // Relationships
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade');
            $table->foreignIdFor(Assignment::class)->constrained()->onDelete('cascade');

            // Notification type
            $table->enum('type', [
                'assignment-assign',
                'assignment-action',
                'payment-detail',
                'payment-request',
            ]);

            $table->boolean('is_read')->default(false);
            $table->timestamps();

            // Indexes for better performance
            $table->index(['receiver_id', 'is_read']);
            $table->index(['receiver_id', 'created_at']);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
