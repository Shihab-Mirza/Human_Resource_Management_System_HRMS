<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave_application extends Model
{

    protected $fillable = [
        'employee_name',
        'employee_id',
        'leave_type',
        'leave_start_date',
        'leave_end_date',
        'subject',
        'application',
        'additional_notes',
        'auth_email',
    ];
}
