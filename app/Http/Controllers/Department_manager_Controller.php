<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Leave_application;
use Illuminate\Support\Facades\Auth;

class Department_manager_Controller extends Controller
{


public function view_attendance_sheet(){

$usertype=Auth::user()->usertype;
if ($usertype=='production_department_manager')
{
$employee=Employee::where('department','production')->get();
return view('dp_manager.view_employee_attendence_sheet',compact('employee'));

}
if ($usertype=='finance_department_manager')
{
$employee=Employee::where('department','finance')->get();
return view('dp_manager.view_employee_attendence_sheet',compact('employee'));

}
if ($usertype=='marketing_department_manager')
{
$employee=Employee::where('department','marketing')->get();
return view('dp_manager.view_employee_attendence_sheet',compact('employee'));

}

}

public function submit_attendance_sheet(Request $request)
{

    $attendanceDate = $request->input('attendance_date');
    $data1=Auth::user()->email;
    $existingAttendance = Attendance::where('attendance_date', $attendanceDate)->where('auth_email',$data1)->exists();
    if ($existingAttendance) {
        return redirect()->back()->with('error', 'Attendance has already been submitted for this date.');
    }
    $validated = $request->validate([
        'attendance_date' => 'required|date',
        'attendance' => 'required|array',
        'attendance.*' => 'in:present,absent,leave|required',
    ]);

    foreach ($request->attendance as $employeeId => $status) {
        Attendance::create([
            'employee_id' => $employeeId,
            'attendance_date' => $request->attendance_date,
            'status' => $status,
            'auth_email' => Auth::user()->email,
        ]);
    }

    return redirect()->back()->with('success','Attendance saved sucessfully!');


}


public function view_notice()
{


    $data = Notice::get();

    return view('dp_manager.view_notice_board',compact('data'));

}


public function apply_for_leave()


{

    return view('dp_manager.create_new_leave_application');


}


public function submit_leave_dp(Request $request){

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



public function view_leave_application_status_dp(){


    $data1=Auth::user()->email;

    $data=Leave_application::where('auth_email',$data1)->get();

    return view('dp_manager.view_applied_leave_application',compact('data'));
}


   public function view_employees_list_performence_feedback_dp(){



    $usertype=Auth::user()->usertype;
    if ($usertype=='production_department_manager')
    {
    $employee_data=Employee::where('department','production')->get();
    return view('dp_manager.view_performence_feedback_form',compact('employee_data'));

    }
    if ($usertype=='finance_department_manager')
    {
    $employee_data=Employee::where('department','finance')->get();
    return view('dp_manager.view_performence_feedback_form',compact('employee_data'));

    }
    if ($usertype=='marketing_department_manager')
    {
    $employee_data=Employee::where('department','marketing')->get();
    return view('dp_manager.view_performence_feedback_form',compact('employee_data'));

    }

   }

public function view_employees_performence_feeback_form($id){


$data=Employee::find($id);


return view('dp_manager.view_performence_feedback_form',compact('data'));





}




   }






}


