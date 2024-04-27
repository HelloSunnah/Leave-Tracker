<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Frontend');
});

Auth::routes();



// Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('employees', EmployeeController::class);
    Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

// for admin leave Management route
    Route::get('employee/leave/request/list', [LeaveRequestController::class, 'leave_request_list'])->name('leave.request.list');
    Route::post('employee/leave/status/update/{id}', [LeaveRequestController::class, 'leave_update'])->name('leave.update');

    // for employee 
    Route::get('/leave/request/list', [LeaveRequestController::class, 'leave_request'])->name('leave.request');
    Route::post('/leave/create', [LeaveRequestController::class, 'employee_leave'])->name('employee.leave.post');
    Route::get('/leave/remove/{id}', [HomeController::class, 'remove_request'])->name('remove.request');


