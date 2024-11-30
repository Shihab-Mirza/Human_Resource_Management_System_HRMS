<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Job_circular;
Use App\Models\Payroll;
USE App\Models\Notice;
USE App\Models\None_employee;


class ManagerController extends Controller
{
    public function dashboard_view(){

return  view('manager.dashboard');


    }




    public function add_employee(){

  return view('manager.add_new_employee');

    }

    public function submit_employee_form(Request $request){

   $data = new Employee;
   $payroll_data = new Payroll;
   $request->validate([
    'employee_email'=> 'required|email||unique:employee,email',
    'phone'=> 'required|unique:employee,phone_number',

   ]);



   $data->first_name=$request->first_name;
   $data->last_name=$request->last_name;
   $data->date_of_birth=$request->dob;
   $data->gender=$request->gender;
   $data->email =$request->employee_email;
   $data->phone_number=$request->phone;
   $data->address=$request->address;
   $data->city=$request->city;
   $data->country=$request->country;
   $data->department=$request->department;
   $data->position=$request->position;
   $data->joining_date=$request->joining_date;

   do {
    $randomNumber = random_int(1000, 9999);
} while (Employee::where('employee_unique_id', $randomNumber)->exists());

$data->employee_unique_id = $randomNumber;

   $data->save();

   $payroll_data->employee_id=$data->id;

   $payroll_data->save();

   return redirect()->back()->with('success', 'New Employee Form submitted Successfully!');

    }



public function view_payroll(){


$employee = Employee::with('payroll')->get();


return view ('manager.payroll_management',compact('employee'));


}


public function view_department_employee($department){

    $employee_data = Employee::where('department',$department)->get();
    $department_name = $department;

    return view('manager.view_department_employee',compact('employee_data','department_name'));


}


public function add_notice(){

return view('manager.notice_board');

}

public function submit_notice(Request $request){


$notice_data = new Notice;

$notice_data->title = $request->title;
$notice_data->notice_to = $request->notice_to;
$notice_data->message = $request->message;
$notice_data->date_created = $request->date;

$notice_data->save();
return redirect()->back()->with('success', 'Notice submitted successfully!');


}

public function view_notice(){

$view_notice_data = Notice::all();
return view ('manager.view_notice_board',compact('view_notice_data'));



}

public function update_existing_notice($id){


$existing_notice_data=Notice::find($id);



return view('manager.update_notice',compact('existing_notice_data'));


}

public function update_existing_submitted_notice(Request $request,$id ){


$updated_notice_data=Notice::find($id);

$updated_notice_data->title=$request->title;
$updated_notice_data->notice_to=$request->notice_to;
$updated_notice_data->message=$request->message;
$updated_notice_data->date_created=$request->date;
$updated_notice_data->save();


return redirect()->back()->with('success','Notice Updated Successfully!');


}


public function delete_notices($id){

$delete_notice_data=Notice::find($id);

$delete_notice_data->delete();

return redirect()->back();

}







public function update_payrolls($id){

    $payroll_data=payroll::find($id);

    $existing_payroll_data=Employee::with('payroll')->find($id);


    return view ('manager.update_payroll',compact('existing_payroll_data','payroll_data'));


}


public function update_submitted_payroll(Request $request , $id){


$updated_payroll_data = Payroll::find($id);


$updated_payroll_data->bonus=$request->bonus;
$updated_payroll_data->base_salary_monthly=$request->base_salary_monthly;
$updated_payroll_data->base_salary_yearly=$request->base_salary_monthly*12;
$updated_payroll_data->total_salary=$updated_payroll_data->base_salary_yearly+$request->bonus;



$updated_payroll_data->save();


return redirect()->back();

}



public function view_full_employee_profile($id){

$employee_full_data=Employee::find($id);


return view('manager.view_employee_full_profile',compact('employee_full_data'));


}


public function view_update_full_employee_profile($id){


$employee_existing_profile_data=Employee::find($id);


return view('manager.update_full_employee_profile',compact('employee_existing_profile_data'));
}


public function update_full_employee_profile(Request $request, $id){


    $update_employee_data=Employee::find($id);



    $update_employee_data->first_name=$request->first_name;
    $update_employee_data->last_name=$request->last_name;
    $update_employee_data->date_of_birth=$request->dob;
    $update_employee_data->gender=$request->gender;
    $update_employee_data->email =$request->employee_email;
    $update_employee_data->phone_number=$request->phone;
    $update_employee_data->address=$request->address;
    $update_employee_data->city=$request->city;
    $update_employee_data->country=$request->country;
    $update_employee_data->department=$request->department;
    $update_employee_data->position=$request->position;
    $update_employee_data->joining_date=$request->joining_date;
    $update_employee_data->save();

    return redirect()->back()->with('success','Employee profile updated Successfully!');

}

public function  delete_full_employee_profile($id){

$delete_profile_data =Employee::find($id);

$delete_profile_data->delete();

return redirect()->back()->with('success','Successfully deleted Employee profile!');

}



public function create_new_job_circular(){



return view('manager.create_new_job_circular_form');



}


public function submitted_job_circular_form(Request $request){


$jobCircular = new Job_circular;

 $request->validate([

            'job_title'=>'required|string',
            'company_name'=>'required|string',
            'employment_type' => 'required|string',
            'salary' => 'required|string',
            'application_deadline' => 'required|date',
            'company_description' => 'required|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
            'skills_required' => 'required|string',
            'contact_address' => 'required|string',
            'contact_phone' => 'required|numeric',
            'contact_email' => 'required|email',

 ]);

 $jobCircular->job_title=$request->job_title;
 $jobCircular->company_name=$request->company_name;
 $jobCircular->job_location = $request->job_location;
 $jobCircular->employment_type = $request->employment_type;
 $jobCircular->salary_range = $request->salary;
 $jobCircular->application_deadline = $request->application_deadline;
 $jobCircular->company_description = $request->company_description;
 $jobCircular->responsibilities = $request->responsibilities;
 $jobCircular->requirements = $request->requirements;
 $jobCircular->skills_required = $request->skills_required;
 $jobCircular->contact_address = $request->contact_address;
 $jobCircular->contact_phone = $request->contact_phone;
 $jobCircular->contact_email = $request->contact_email;


 $jobCircular->save();


 return redirect()->back()->with('success','Successfully created Job circular form!');



}

public function view_existing_job_circular(){



 $job_circular_data=Job_circular::all();


 return view('manager.view_job_circular',compact('job_circular_data'));


}

public function update_existing_job_circular($id){


 $existing_job_circular_data=Job_circular::find($id);


 return view('manager.update_exisitng_job_circular',compact('existing_job_circular_data'));

}

public function update_existing_job_circular_form(Request $request,$id){


    $jobCircular =Job_circular::find($id);

    $request->validate([

               'job_title'=>'required|string',
               'company_name'=>'required|string',
               'employment_type' => 'required|string',
               'salary' => 'required|string',
               'application_deadline' => 'required|date',
               'company_description' => 'required|string',
               'responsibilities' => 'required|string',
               'requirements' => 'required|string',
               'skills_required' => 'required|string',
               'contact_address' => 'required|string',
               'contact_phone' => 'required|numeric',
               'contact_email' => 'required|email',

    ]);

    $jobCircular->job_title=$request->job_title;
    $jobCircular->company_name=$request->company_name;
    $jobCircular->job_location = $request->job_location;
    $jobCircular->employment_type = $request->employment_type;
    $jobCircular->salary_range = $request->salary;
    $jobCircular->application_deadline = $request->application_deadline;
    $jobCircular->company_description = $request->company_description;
    $jobCircular->responsibilities = $request->responsibilities;
    $jobCircular->requirements = $request->requirements;
    $jobCircular->skills_required = $request->skills_required;
    $jobCircular->contact_address = $request->contact_address;
    $jobCircular->contact_phone = $request->contact_phone;
    $jobCircular->contact_email = $request->contact_email;


    $jobCircular->save();


    return redirect()->back()->with('success','Successfully updated Job circular form!');



}



public function delete_existing_job_circular($id){


 $delete_job_circular_data=Job_circular::find($id);

$delete_job_circular_data->delete();

return redirect()->back();

}



public function view_applied_job_application ()
{


 $data = None_employee::get();

 return view('manager.view_new_job_application',compact('data'));





}





public function view_new_job_application($id){


$data=None_employee::find($id);


return view('manager.view_submitted_job_application',compact('data'));}


public function change_job_applications_status(Request $request,$id){


$data=None_employee::find($id);

if ($request->has('accepted')) {

    $data->status = 'accepted';
} if ($request->has('rejected')) {

    $data->status = 'rejected'; }


    $data->save();

return redirect()->back()->with('success','Status changed sucessfully!');
}

public function delete_existing_job_application($id){


    $delete_job_application_data=None_employee::find($id);

   $delete_job_application_data->delete();

   return redirect()->back();

   }

}







