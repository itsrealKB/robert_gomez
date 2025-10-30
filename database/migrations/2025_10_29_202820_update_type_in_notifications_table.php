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
        Schema::table('notifications', function (Blueprint $table) {
            // Notification type
            $table->enum('type', [
                'assignment-assigned',
                'payment-detail',
                'payment-request',
                'assignment-pending',
                'assignment-accepted',
                'assignment-rejected',
                'assignment-completed',
            ])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            //
        });
    }
};
