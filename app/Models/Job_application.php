<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_application extends Model
{

protected $fillable = [


    'first_name',
    'last_name',
    'date_of_birth',
    'gender',
    'email',
    'phone',
    'address',
   ' city',
    'position',
    'cv_path'


];


}
