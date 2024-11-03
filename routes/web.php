<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index_home']);

Route::get('/add_new_employee',[ManagerController::class,'add_employee']);
Route::post('/submit_new_employee_form',[ManagerController::class,'submit_employee_form']);
Route::get('/payroll_management',[ManagerController::class,'view_payroll']);
Route::get('/view_employee/{department}',[ManagerController::class,'view_department_employee']);
Route::get('/notice_board',[ManagerController::class,'add_notice']);
Route::post('/submit_new_notice',[ManagerController::class,'submit_notice']);

Route::get('/view_notice_board',[ManagerController::class,'view_notice']);

Route::get('/update_notice/{id}',[ManagerController::class,'update_exsiting_notice']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
