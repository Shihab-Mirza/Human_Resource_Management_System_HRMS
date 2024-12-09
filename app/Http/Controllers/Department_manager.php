<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;

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


}

