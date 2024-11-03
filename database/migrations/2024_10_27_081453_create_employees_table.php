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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_unique_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_number');

            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('department');
            $table->string('position');
            $table->string('joining_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
