<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;


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
//dashborad Admin
Route::group(['middleware' => ['auth','checkAdmin']], function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    //user
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

//route to Acceptance or pending order User Login
Route::post('active/{id}',[AdminController::class,'active'])->name('active');


});