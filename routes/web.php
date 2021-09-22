<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/register',function(){ return redirect('/login');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('/results-table', function(){ return view('results');});
Route::get('/add-results', function() { return view('add-results');});
Route::get('/registered-users',[UserController::Class, 'getUsers'])->name('Members'); 
Route::get('/register-user',[UserController::Class, 'createUser']);
Route::get('/suspend-user/{id}',[UserController::Class, 'suspendUser']);
Route::get('/activate-user/{id}',[UserController::Class, 'activateUser']);
Route::get('/delete-user',[UserController::Class, 'deleteUser']);

