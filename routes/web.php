<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserloginController;
use App\Http\Controllers\UsersignupController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


/feed

/Profile

*/


Route::get('/', function () {
    return view('welcome');

});





Route::get('/landingpage', [LandingpageController::class,'index'] );
Route::get('/userlogin', [UserloginController::class,'login']);
Route::get('/usersignup', [UsersignupController::class,'signup']);
Route::get('/dashboard', [DashboardController::class,'dashboard']);
