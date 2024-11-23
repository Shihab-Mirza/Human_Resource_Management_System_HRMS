<?php

namespace App\Http\Controllers;
use App\Models\Job_circular;
use App\Models\None_employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

public function apply_job_application_none_employee($id){



return view('none_employee.apply_for_job_application');

}



public function submit_job_application_form (Request $request){


$data = new None_employee;

$request->validate([

    'first_name' => 'required|string',
    'last_name' => 'required|string',
    'cv'=>'required|file|mimes:pdf,doc,docx',
    'address'=>'required|string',
    'city' => 'required|string',
    'position' => 'required|string',
    'dob' => 'required|date',
    'gender' => 'required|string',
    'phone' => 'required|numeric',
    'email' => 'required|email',

]);

$date=carbon::now()->format('d-m-y');

$random_number= random_int(200000,500000);

$data->cv_application_id=$random_number;

$data->application_date = $date;

$data->first_name = $request->first_name;
$data->last_name = $request->last_name;
$data->date_of_birth = $request->dob;
$data->gender = $request->gender;
$data->email = $request->email;
$data->phone = $request->phone;
$data->address = $request->address;
$data->city = $request->city;
$data->position = $request->position;

if($request->hasFile('cv')){

 $file=$request->file('cv');
 $filename= $random_number . '.' . $file->getClientOriginalExtension();

 $filepath=$file->storeAs('Cv_file',$filename,'public');




}

$data->cv_file=$filepath;



$data->save();


return redirect()->back()->with('success','Job application submitted successfully!');




}
}
