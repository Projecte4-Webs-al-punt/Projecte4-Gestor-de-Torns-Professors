<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [PageController::class, "index"])->name("home");

Route::get('/contact', [PageController::class, "contact"])->name("contact");

Route::get('/about', [PageController::class, "about"])->name("about");

Route::get('/test', [PageController::class, "test"])->name("test");

Route::get('/profile', [PageController::class, "profile"])->name("profile");

Route::get('/dashboard', [PageController::class, "admin"])->middleware(['isTeacher'])->name('dashboard');

Route::get('/doubts', [PageController::class, "doubts"])->name('doubts');


/* Routes of users */

Route::get('/users', [UserController::class, "index"])->name("users");

Route::delete('/users/{user}', [UserController::class, "destroy"])->name("delete");

Route::post('/update',[ProfileController::class, 'update'])->name("update");

require __DIR__.'/auth.php';
