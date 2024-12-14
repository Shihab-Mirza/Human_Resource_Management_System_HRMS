<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Leave_application;
class Department_manager extends Controller
{


public function view_attendance_sheet(){

$employee=Employee::get();
return view('dp_manager.view_employee_attendence_sheet',compact('employee'));

}

public function submit_attendance_sheet(Request $request)
{

    $attendanceDate = $request->input('attendance_date');

    // Check if attendance for this date already exists
    $existingAttendance = Attendance::where('attendance_date', $attendanceDate)->exists();

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
     $data->save();

        return redirect()->back()->with('success', 'Leave application submitted successfully!');


    }



public function view_leave_application_status_dp(){


    $data=Leave_application::all();

    return view('dp_manager.view_applied_leave_application',compact('data'));










}

}

