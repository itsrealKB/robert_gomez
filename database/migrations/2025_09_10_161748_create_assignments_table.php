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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->integer('serial_number')->nullable();
            $table->string('company');
            $table->string('owner');
            $table->string('owner_phone');
            $table->string('owner_email');
            $table->string('claim');
            $table->string('claim_type');
            $table->string('loss_type');
            $table->string('vehicle_location');
            $table->datetime('appointment_date');
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
