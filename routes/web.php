<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\None_employeeController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\Department_manager_Controller;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Manager as SupportManager;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware( ['auth'])->group(function () {

    Route::get( '/home', [HomeController::class,'index_home']);


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
Route::get('/view_job_appliation',[ManagerController::class,'view_applied_job_application']);
Route::get( '/view_job_application_submitted/{id}',[ManagerController::class,'view_new_job_application']);
Route::post( '/change_job_application_status/{id}',[ManagerController::class,'change_job_applications_status']);
Route::get( '/Delete_job_application/{id}',[ManagerController::class,'delete_existing_job_application']);



Route::get('/view_all_job_circular_none_employee',[None_employeeController::class,'view_existing_job_circular']);
Route::get('/view_full_circular_none_employee/{id}',[None_employeeController::class,'view_full_circular_none_employee_user']);
Route::get('/apply_job_none_employee/{id}',[None_employeeController::class,'apply_job_application_none_employee']);
Route::post( '/submit_job_application/{id}',[None_employeeController::class,'submit_job_application_form']);
Route::get('/view_application_status',[None_employeeController::class,'check_job_application_status']);


Route::get('/Register_employee',[managerController::class,'new_employee_registration']);

Route::get('/view_notice_board_employee',[EmployeeController::class,'check_notice']);

Route::get('/Apply_for_leave',[EmployeeController::class,'create_leave_application']);


Route::get('/give_attendance',[Department_manager_Controller::class,'view_attendance_sheet']);
Route::post('/submit_attendance',[Department_manager_Controller::class,'submit_attendance_sheet']);

Route::get('/view_notice_board_dp_manager',[Department_manager_Controller::class,'view_notice']);
Route::get('/apply_for_leave_dp',[Department_manager_Controller::class,'apply_for_leave']);
Route::post('/submit_leave_application',[employeeController::class,'submit_leave']);
Route::post('/submit_leave_application_dp',[Department_manager_Controller::class,'submit_leave_dp']);

Route::get('/view_full_leave/{id}',[ManagerController::class,'view_full_leave_applications']);

Route::post( '/change_leave_application_status/{id}',[ManagerController::class,'change_leave_applications_status']);

Route::get('/view_leave_application_of_employees',[ManagerController::class,'view_leave_applications']);

Route::get('/view_leave_status',[EmployeeController::class,'view_leave_application_status']);

Route::get('/view_leave_status_dp',[Department_manager_Controller::class,'view_leave_application_status_dp']);

Route::get( '/view_employees_for_performence_feedback',[Department_manager_Controller::class,'view_employees_list_performence_feedback_dp']);

Route::get( '/give_performence_feedback/{id}',[Department_manager_Controller::class,'view_employees_performence_feeback_form']);

});














Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

