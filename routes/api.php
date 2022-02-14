<?php

use App\Http\Controllers\API\DoubtController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TeacherController;
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
Route::get('/users',[UserController::class,'index']);

Route::get('/users/{id}',[UserController::class,'show']);

Route::post('/users/store',[UserController::class,'store']);

Route::post('/users/update/{id}', [UserController::class, "update"]);

Route::delete('/users/{id}', [UserController::class, "destroy"])->name("delete");

Route::get('/doubts',[DoubtController::class,'index']);

Route::get('/doubts/{id}',[DoubtController::class,'show']);

Route::delete('/doubts/{id}', [DoubtController::class, "destroy"])->name("delete");


Route::get('/teachers',[TeacherController::class,'list']);

Route::post('/senddoubt',[DoubtController::class,'store']);
