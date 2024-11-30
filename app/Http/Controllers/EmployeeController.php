<?php

namespace App\Http\Controllers;
use App\Models\Notice;

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


}
