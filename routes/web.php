<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

/*Route::get('/', function () {
    return view('register');
});*/
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/storeuser',[LoginController::class,'store'])->name('registration');
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/validate',[LoginController::class,'loginvalidate'])->name('loginvalid');
Route::get('/admindash',[LoginController::class,'dashboard'])->name('login');
Route::get('/logout',[LoginController::class,'dashboard'])->name('logout');
