<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performance_feedback extends Model
{
    protected $table='performance_feedbacks';
   protected $fillable = [ 'employee_id',
    'job_knowledge',
    'quality_of_work',
    'attendance',
    'communication',
    'strengths',
    'areas_of_improvement',
    'additional_comments',
    'month',
    'year',
    'overall_score',
];

public function employee(){



    return $this->belongsto(Employee::class);
}
}
