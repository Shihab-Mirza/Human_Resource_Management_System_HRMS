<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use Illuminate\Database\Capsule\Manager;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index_home']);

Route::get('/add_new_employee',[ManagerController::class,'add_employee']);
Route::post('/submit_new_employee_form',[ManagerController::class,'submit_employee_form']);
Route::get('/payroll_management',[ManagerController::class,'view_payroll']);
Route::get('/view_employee/{department}',[ManagerController::class,'view_department_employee']);
Route::get('/view_full_profile/{id}',[ManagerController::class,'view_full_employee_profile']);

Route::get('/update_employee_profile/{id}',[ManagerController::class,'view_update_full_employee_profile']);
Route::get('/update_employee_profile/{id}',[ManagerController::class,'view_update_full_employee_profile']);
Route::post('/update_employee_form/{id}',[ManagerController::class,'update_full_employee_profile']);
Route::get('/delete_employee_profile/{id}',[ManagerController::class,'delete_full_employee_profile']);

Route::get('/notice_board',[ManagerController::class,'add_notice']);
Route::post('/submit_new_notice',[ManagerController::class,'submit_notice']);

Route::get('/view_notice_board',[ManagerController::class,'view_notice']);

Route::get('/update_notice/{id}' ,[ManagerController::class,'update_existing_notice']);

Route::post('/update_submitted_notice/{id}',[ManagerController::class,'update_existing_submitted_notice']);

Route::get('/delete_notice/{id}',[ManagerController::class,'delete_notices']);

Route::get('/update_payroll/{id}',[ManagerController::class,'update_payrolls']);

Route::post('/submitted_payroll_data/{id}',[ManagerController::class,'update_submitted_payroll']);


Route::get('/create_job_circular',[ManagerController::class,'create_new_job_circular']);
Route::post('/submit_job_circular',[ManagerController::class,'submitted_job_circular_form']);
Route::get('/view_all_job_circular',[ManagerController::class,'view_existing_job_circular']);
Route::get('/update_job_circular/{id}',[ManagerController::class,'update_existing_job_circular']);
Route::post('/update_existing_job_circular_form/{id}',[ManagerController::class,'update_existing_job_circular_form']);
Route::get('/delete_job_circular/{id}',[ManagerController::class,'delete_existing_job_circular']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

