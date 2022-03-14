<?php

use Illuminate\Support\Facades\Route;

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

//registeration
Route::get('/student/register', [\App\Http\Controllers\StudentController::class, 'register']);
Route::get('/staff/register', [\App\Http\Controllers\StaffController::class, 'register']);
Route::get('/tutor/register', [\App\Http\Controllers\TutorController::class, 'register']);
