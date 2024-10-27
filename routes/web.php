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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
