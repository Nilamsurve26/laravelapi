<?php

use App\Http\Controllers\BlogsController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create',function(){
    return view('create');
});

Route::post('/insert',[App\Http\Controllers\HomeController::class,'add'])->name('add');
Route::get('/update/{id}',[App\Http\Controllers\HomeController::class,'update'])->name('update');
Route::post('/edit/{id}',[App\Http\Controllers\HomeController::class,'edit'])->name('edit');
Route::get('/read/{id}',[App\Http\Controllers\HomeController::class,'read'])->name('read');
Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class,'delete'])->name('delete');

