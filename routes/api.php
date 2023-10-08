<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//add category
Route::post('/store/category', [CategoryController::class, 'store'])->name('store.category');
//add subcategory
Route::post('/store/subcategory', [SubcategoryController::class, 'store'])->name('store.subcategory');
//Register (فني الصيانة)
Route::post('/Register', [App\Http\Controllers\Api\AuthController::class, 'Register'])->name('Register');
//Login 
Route::post('/Login', [App\Http\Controllers\Api\AuthController::class, 'Login'])->name('Login');
