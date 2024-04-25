<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/registration', [HomeController::class, 'registration'])->name('registration');





Route::get('/employee/create', [EmployeeController::class, 'employee_create'])->name('employee.create');






Route::post('/employee/create/post', [EmployeeController::class, 'employee_create_post'])->name('employee.create.post');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'employee_edit'])->name('employee.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'employee_update'])->name('employee.update');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'employee_delete'])->name('employee.delete');
Route::get('/employee/view/{id}', [EmployeeController::class, 'employee_view'])->name('employee.view');
Route::get('/employee/list', [EmployeeController::class, 'employee_list'])->name('employee.list');
