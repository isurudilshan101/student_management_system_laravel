<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::get('/student_list', [App\Http\Controllers\StudentController::class, 'student_list'])->name('student_list');
Route::get('/{id}/delete_student', [App\Http\Controllers\StudentController::class, 'delete_student'])->name('delete_student');
Route::get('/edit_student/{id}', [App\Http\Controllers\StudentController::class, 'edit_student'])->name('edit_student');
Route::post('/update_student/{id}', [App\Http\Controllers\StudentController::class, 'update_student'])->name('update_student');
