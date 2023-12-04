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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('state_id')->nullable()->constrained('zz_states');
            $table->foreignId('district_id')->nullable()->constrained('zz_districts');
            $table->foreignId('sub_district_id')->nullable()->constrained('zz_sub_districts');
            $table->foreignId('religion_id')->nullable()->constrained('zz_religions');
            $table->foreignId('race_id')->nullable()->constrained('zz_races');
            $table->foreignId('education_level_id')->nullable()->constrained('zz_education_levels');
            $table->foreignId('occupation_status_id')->nullable()->constrained('zz_occupation_statuses');
            $table->foreignId('registration_status_id')->nullable()->constrained('zz_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
