<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    protected $fillable = [

    'attendance_date',
    'employee_id',
     'status',
    'auth_email'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


}
