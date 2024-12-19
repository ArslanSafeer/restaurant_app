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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/users',[AdminController::class,'user']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::post('/reservation',[AdminController::class,'reservation']);
Route::get('/adminreservation',[AdminController::class,'adminreservation']);
Route::get('/deletereservation/{id}',[AdminController::class,'deletereservation']);
Route::get('/adminchef',[AdminController::class,'adminchef']);
Route::post('/uploadchef',[AdminController::class,'uploadchef']);
Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);
Route::get('/updatechef/{id}',[AdminController::class,'updatechef']);
Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodchef']);
Route::post('/upload',[AdminController::class,'upload']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::post('/confirmorder',[HomeController::class,'confirmorder']);
Route::get('/search',[AdminController::class,'search']);
Route::get('/delete/{id}',[HomeController::class,'delete']);
Route::get('/showcartitem/{id}',[HomeController::class,'showcartitem']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/deletefood/{id}',[AdminController::class,'deletefood']);
Route::get('/updatefood/{id}',[AdminController::class,'updatefood']);
Route::get('/order',[AdminController::class,'order']);
Route::get('/deleteorder/{id}',[AdminController::class,'deleteorder']);
Route::post('/update/{id}',[AdminController::class,'update']);
Route::get('/redirects',[HomeController::class,'redirects']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
