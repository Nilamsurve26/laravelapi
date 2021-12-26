<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;
use App\Models\Device;

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
Route::get('data',[apicontroller::class,'getdata']);
Route::get('data',[apicontroller::class,'list']);
Route::post('add',[apicontroller::class,'add']);
Route::put('update',[apicontroller::class,'update']);
Route::delete('delete/{id}',[apicontroller::class,'delete']);
