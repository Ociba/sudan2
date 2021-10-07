<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\HomeController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
//})->name('dashboard');
Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard',[HomeController::Class, 'getDashboard'])->name('dashboard');
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('/add-results/{id}', [ResultsController::Class, 'addResults'])->name('Enter Results');
Route::get('/registered-users',[UserController::Class, 'getUsers'])->name('Members'); 
Route::get('/register-user',[UserController::Class, 'createUser']);
Route::get('/suspend-user/{id}',[UserController::Class, 'suspendUser']);
Route::get('/activate-user/{id}',[UserController::Class, 'activateUser']);
Route::get('/delete-user',[UserController::Class, 'deleteUser']);
Route::post('/import',[ResultsController::Class, 'import'])->name('import');
Route::get('/get-results',[ResultsController::Class, 'getUploadedResults']);
Route::get('/enter-results/{id}',[ResultsController::Class, 'createResults']);
Route::get('/get-schools-performance',[ResultsController::Class, 'getSchoolPerformance'])->name('Schools Performance');
Route::get('/get-students-performance',[ResultsController::Class, 'getStudentsPerformance'])->name('Students Performance');
Route::get('/get-gender-performance',[ResultsController::Class, 'getGenderPerformance'])->name('Girls and Boys Performance');
Route::get('/get-states-performance',[ResultsController::Class, 'getStatesPerformance'])->name('States Performance');
});

