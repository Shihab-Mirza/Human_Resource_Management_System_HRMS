<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('performence_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee')->onDelete('cascade')->onUpdate('cascade');
            $table->string('job_knowledge');
            $table->string('quality_of_work');
            $table->string('attendance');
            $table->string('communication');
            $table->text('strengths');
            $table->text('areas_of_improvement');
            $table->integer( 'overall_score');
            $table->text('additional_comments')->nullable();
            $table->string('month');
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performence_feedbacks');
    }
};
