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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->string('leave_application_id')->unique();
            $table->string('employee_name');
            $table->string('employee_id');
            $table->enum('leave_type', ['Sick Leave', 'Casual Leave', 'Annual Leave']);
            $table->date('leave_start_date');
            $table->date('leave_end_date');
            $table->string('subject');
            $table->text('application');
            $table->text('additional_notes')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_applications');
    }
};
