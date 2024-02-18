<?php

use App\Http\Controllers\Admin\ChildController;
use App\Http\Controllers\Admin\EncouragementController;
use App\Http\Controllers\Admin\HamsarController;
use App\Http\Controllers\Admin\KarmandController;
use App\Http\Controllers\Admin\LeaveController;
use App\Http\Controllers\Admin\PersonalController;
use App\Http\Controllers\Admin\SokoonatController;
use App\Http\Controllers\Admin\TakafolController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('admin.index');
});

Route::resource('users', UserController::class);
Route::resource('karmands', KarmandController::class);
Route::resource('personals', PersonalController::class);
Route::resource('hamsars', HamsarController::class);
Route::resource('children', ChildController::class);
Route::resource('takafols', TakafolController::class);
Route::resource('sokoonats', SokoonatController::class);
Route::resource('encouragements', EncouragementController::class);
Route::resource('leaves', LeaveController::class);

