<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
public function index_home(){



if (Auth::id() )

$usertype=Auth::User()->usertype;

 if ($usertype=='manager')
{
    return view('manager.dashboard');

}

else if ($usertype=='none_employee')
{

  return view('none_employee.dashboard');


}
else if ($usertype=='employee')
{

  return view('employee.dashboard');

}
else if($usertype=='department_manager')
{

return view('dp_manager.dashboard');

}

else {
    return view ('admin.dashboard');
}

}}
