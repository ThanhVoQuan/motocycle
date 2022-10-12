<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/main','App\Http\Controllers\CustomerController@index');

Route::prefix('/index')->group(function(){
    Route::get('/',[CustomerController::class,'index'])->name('index');
    Route::get('/single',[CustomerController::class,'single'])->name('single');
    Route::get('/about',[CustomerController::class,'about'])->name('about');
    Route::get('/contact',[CustomerController::class,'contact'])->name('contact');
    Route::get('/specials',[CustomerController::class,'specials'])->name('specials');
    Route::get('/error',[CustomerController::class,'error'])->name('error');
});