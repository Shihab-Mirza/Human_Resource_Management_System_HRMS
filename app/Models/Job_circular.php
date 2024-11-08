<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_circular extends Model
{


protected $fillable = [

    'job_title',
  'company_name',
  'job_location',
   'employment_type',
    'salary_range',
    'application_deadline',
  'company_description',
 'responsibilities',
   'requirements',
'skills_required',
'contact_address',
  'contact_phone',
   'contact_email',



];



}
