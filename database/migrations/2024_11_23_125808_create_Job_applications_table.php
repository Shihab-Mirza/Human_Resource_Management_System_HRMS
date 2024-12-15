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
        Schema::create('Job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string( 'city');
            $table->string( 'position');
            $table->string('cv_path');
            $table->bigInteger('cv_application_id')->unique();
            $table->date('application_date');
            $table->string('status')->default('pending');
            $table->bigInteger('job_circular_id');
            $table->string('auth_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('none_employees');
    }
};
