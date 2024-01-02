<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\EmployeeController;


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

// Route::get('/dashboard', function () {
//     return view ('dashboard');
// });

// Route::get('/dashboard2', function () {
//     return view ('dashboard2');
// });


Route::get('/new', function () {
    return view ('new');
});


//employee
Route::get('/test', [TestController::class, 'home']);
// Route::get('/attendance', [EmployeeController::class, 'attendance'])->name('attendance');
// Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');
Route::get('/attendance/{date?}', [EmployeeController::class, 'attendance'])->name('attendance');
Route::get('/dashboard/{date?}', [EmployeeController::class, 'dashboard'])->name('dashboard');
Route::get('/chartData', 'EmployeeController@chartData');


