<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;





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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',[HomeController::class,'index']);
Route::get('/users',[AdminController::class,'users']);
Route::get('/deletecar/{id}',[AdminController::class,'deletecar']);
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/update/{id}',[AdminController::class,'update']);
Route::get('/carlist',[AdminController::class,'carlist']);
Route::post('/uploadcar',[AdminController::class,'upload']);
Route::post('/availability',[AdminController::class,'availability']);
Route::get('/deleteusers/{id}',[AdminController::class,'deleteusers']);



Route::get('/redirect',[HomeController::class,'redirect']);

