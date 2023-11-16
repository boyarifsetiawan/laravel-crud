<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [EmployeeController::class, 'index'])->name('home');
    Route::get('/create-employee', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/store-employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/show-employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/update-employee/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/destroy-employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});
