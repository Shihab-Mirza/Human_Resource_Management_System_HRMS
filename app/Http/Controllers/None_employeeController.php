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

$data=Job_circular::find($id);

return view('none_employee.apply_for_job_application',compact('data'));

}



public function submit_job_application_form (Request $request,$id){




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

$existingApplication = None_employee::where('job_circular_id', $id)
->first();

if ($existingApplication) {

return redirect()->back()->with('submission_error', 'You have already applied for this job!');
}




$data = new None_employee;
$date=carbon::now()->format('y-m-d');

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

$data->job_circular_id=$id;

if ($request->hasFile('cv')) {
    $cvPath = $request->file('cv')->store('Cv_file');
    $data->cv_path = $cvPath;
}

if($request->hasFile('cv')){

 $file=$request->file('cv');
 $filename= $random_number . '.' . $file->getClientOriginalExtension();

 $filepath=$file->storeAs('Cv_file',$filename,'public');




}

$data->cv_file=$filepath;



$data->save();


return redirect()->back()->with('success','Job application submitted successfully!');

    }



public function check_job_application_status(){


$data=None_employee::get();


return view('none_employee.view_job_application_status',compact('data'));









}







}




