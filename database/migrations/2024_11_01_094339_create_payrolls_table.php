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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign(columns: 'employee_id')->references('id')->on('employee')->onDelete("cascade")->onUpdate('cascade');
            $table->double('base_salary_monthly')->nullable();
            $table->double('base_salary_yearly')->nullable();
            $table->double('bonus')->nullable();
            $table->double('total_salary')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
