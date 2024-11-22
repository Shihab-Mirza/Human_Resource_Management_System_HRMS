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

if($usertype=='user')

{
    return view('user.dashboard'); }

else if ($usertype=='manager')
{
    return view('manager.dashboard');

}

else if ($usertype='none_employee')
{

  return view('none_employee.dashboard');


}

else {
    return view ('admin.dashboard');
}


}}
