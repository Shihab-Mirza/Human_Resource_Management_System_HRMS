<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{ use HasFactory;
    protected $table='payrolls';
    protected $fillable = [ 'employee_id','base_salary_monthly',
    'bonus','base_salary_yearly','total_salary',

];


public function employee(){


return $this->belongsTo(Employee::class);
}
}
