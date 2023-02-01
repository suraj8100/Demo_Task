<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\send_mailController;
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

Route::get('/registration',[RegisterController::class,'view']);
Route::get('/getData_state/{country_id}',[RegisterController::class,'getState']);
Route::get('/getData_city/{id}',[RegisterController::class,'getCity']);
Route::post('/submit_information',[RegisterController::class,'store']);
Route::post('/login_to_dash',[RegisterController::class,'log_to']);
Route::post('logout',[RegisterController::class,'log_out']); 
Route::get('/dashboard',[RegisterController::class,'dashboard']); 
Route::get('/login',function(){
    return view('login');
});


