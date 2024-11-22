<?php

namespace App\Http\Controllers;
use App\Models\Job_circular;

use Illuminate\Http\Request;

class None_employeeController extends Controller
{

public function view_existing_job_circular(){



$job_circular_data=Job_circular::all();


return view('none_employee.view_job_circular',compact('job_circular_data'));



}


public function view_full_circular_none_employee_user($id){


 $existing_job_circular_data=Job_circular::find($id);

return view('none_employee.view_full_job_circular_non_employee',compact('existing_job_circular_data'));



}

public function view_job_application_none_employee($id){










}





}
