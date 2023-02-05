<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





// Route::middleware('auth:sanctum')->group(function (){
//    Route::get('user', 'App\Http\Controllers\AuthController@user');
//    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
// });




// Route::post('addReport', 'App\Http\Controllers\ReportController@addReport');
// Route::get('getReport', 'App\Http\Controllers\ReportController@getReport');
// Route::delete('deleteReport/{id}', 'App\Http\Controllers\ReportController@deleteReport');
// Route::get('getReportById/{id}', 'App\Http\Controllers\ReportController@getReportById');
// Route::put('updateReport/{id}', 'App\Http\Controllers\ReportController@updateReport');

// Route::post('filterReport', 'App\Http\Controllers\ReportController@filterReport');




//get      full controller address :


// Route::post('register', 'App\Http\Controllers\AuthController@register');
// Route::post('login', 'App\Http\Controllers\AuthController@login');



//get all employees      full controller address :
Route::get('employees', 'App\Http\Controllers\EmployeeController@getEmployee');

//get spefic employee
// Route::get('employee/{id}', 'App\Http\Controllers\EmployeeController@getEmployeeById');

//add employee
// Route::post('addEmployee', 'App\Http\Controllers\EmployeeController@addEmployee');

//update employee
// Route::put('updateEmployee/{id}', 'App\Http\Controllers\EmployeeController@updateEmployee');

//delete employee
// Route::delete('deleteEmployee/{id}', 'App\Http\Controllers\EmployeeController@deleteEmployee');






//get Last ID of student      full controller address :
Route::get('studentLastID', 'App\Http\Controllers\StudentController@getStudentLastID');





//add student Docs
Route::post('addStudentDoc', 'App\Http\Controllers\StudentController@addStudentDoc');