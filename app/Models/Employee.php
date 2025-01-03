<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employee extends Model
{
    use HasFactory;
    protected $table='employee';
    protected $fillable =[

        'id',
        'employee_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'email',
        'phone_number',
        'address',
        'department',
        'position',
        'joining_date',
        'employee_image',

    ];

    public function payroll()

{

return $this->hasOne(Payroll::class,'employee_id');

}

public function attendances()
{
    return $this->hasMany(Attendance::class,'employee_id');
}


public function performance_feedbacks(){

    return $this->hasMany(Performance_feedback::class,'employee_id');
}
}
