<?php

namespace App\Http\Controllers;
use App\Models\Leave_application;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
   public function  check_notice(){

 $data = Notice::get();

 return view('employee.view_notice_board',compact('data'));




   }

public function create_leave_application(){


 return view('employee.create_new_leave_application');



}


public function submit_leave(Request $request){

$data=new Leave_application;

    $validated = $request->validate([
        'employee_name' => 'required|string|max:255',
        'employee_id' => 'required|string|max:255',
        'leave_type' => 'required|in:Sick Leave,Casual Leave,Annual Leave',
        'leave_start_date' => 'required|date',
        'leave_end_date' => 'required|date|after_or_equal:leave_start_date',
        'subject' => 'required|string',
        'application' => 'required|string',
    ]);

    do {
        $randomLeaveId = random_int(5000000, 9999999);
    } while (Leave_application::where('leave_application_id', $randomLeaveId)->exists());
    $data->employee_name=$request->employee_name;
    $data->employee_id=$request->employee_id;
    $data->leave_type=$request->leave_type;
    $data->leave_start_date=$request->leave_start_date;
    $data->leave_end_date =$request->leave_end_date;
    $data->subject=$request->subject;
    $data->application=$request->application;

    do {
     $randomNumber = random_int(5000000, 9999999);
 } while (Leave_application::where('leave_application_id', $randomNumber)->exists());
 $data->leave_application_id=$randomNumber;
 $data->auth_email=Auth::user()->email;
 $data->save();

    return redirect()->back()->with('success', 'Leave application submitted successfully!');


}

public function view_leave_application_status(){

    $data1=Auth::user()->email;

$data=Leave_application::where('auth_email',$data1)->get();

return view('employee.view_applied_leave_application',compact('data'));






}

}
