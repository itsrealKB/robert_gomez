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
        Schema::table('assignments', function (Blueprint $table) {
            $table->string('adjuster')->nullable()->after('appointment_date');
            $table->string('date_of_loss')->nullable()->after('adjuster');
            $table->string('deductible_amount')->nullable()->after('date_of_loss');
            $table->string('insured_name')->nullable()->after('deductible_amount');
            $table->string('claim_for')->nullable()->after('insured_name');
            $table->string('policy_number')->nullable()->after('claim_for');
            $table->string('date_first_contacted')->nullable()->after('policy_number');
            $table->string('business_name')->nullable()->after('date_first_contacted');
            $table->string('owner_first_name')->nullable()->after('business_name');
            $table->string('owner_last_name')->nullable()->after('owner_first_name');
            $table->string('owner_city')->nullable()->after('owner_last_name');
            $table->string('owner_address')->nullable()->after('owner_city');
            $table->string('owner_state')->nullable()->after('owner_address');
            $table->string('owner_zip')->nullable()->after('owner_state');
            $table->string('owner_work_phone')->nullable()->after('owner_zip');
            $table->string('owner_mobile_phone')->nullable()->after('owner_work_phone');
            $table->string('location_address')->nullable()->after('owner_mobile_phone');
            $table->string('location_state')->nullable()->after('location_address');
            $table->string('location_city')->nullable()->after('location_state');
            $table->string('location')->nullable()->after('owner_mobile_phone');
            $table->string('vehicle_year')->nullable()->after('location_city');
            $table->string('vehicle_mileage')->nullable()->after('vehicle_year');
            $table->string('vehicle_make')->nullable()->after('vehicle_mileage');
            $table->string('vehicle_model')->nullable()->after('vehicle_make');
            $table->string('vehicle_vin')->nullable()->after('vehicle_model');
            $table->string('vehicle_color')->nullable()->after('vehicle_vin');
            $table->string('vehicle_license_plate')->nullable()->after('vehicle_color');
            $table->string('vehicle_damage')->nullable()->after('vehicle_license_plate');
            $table->string('adjuster_phone')->nullable()->after('adjuster');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropColumn([
                'adjuster',
                'adjuster_phone',
                'date_of_loss',
                'deductible_amount',
                'insured_name',
                'claim_for',
                'policy_number',
                'date_first_contacted',
                'business_name',
                'owner_first_name',
                'owner_last_name',
                'owner_city',
                'owner_address',
                'owner_state',
                'owner_zip',
                'owner_work_phone',
                'owner_mobile_phone',
                'location_address',
                'location_state',
                'location_city',
                'location',
                'vehicle_year',
                'vehicle_mileage',
                'vehicle_make',
                'vehicle_model',
                'vehicle_vin',
                'vehicle_color',
                'vehicle_license_plate',
                'vehicle_damage'
            ]);
        });
    }
};
