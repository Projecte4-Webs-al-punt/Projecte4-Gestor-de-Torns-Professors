<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::post('/send-contact', [ContactController::class, "send"])->name("send-contact");

Route::get('/profile', [PageController::class, "profile"])->middleware('auth')->name("profile");

Route::get('/dashboard', [PageController::class, "admin"])->middleware(['auth', 'isTeacher'])->name('dashboard');

Route::get('/doubts', [PageController::class, "doubts"])->middleware(['auth', 'isTeacher'])->name('doubts');

Route::get('/question',[PageController::class,'question'])->middleware(['auth', 'isStudent'])->name('question');

Route::get('/question-list',[PageController::class,'questionlist'])->middleware(['auth', 'isStudent'])->name('questionlist');

Route::get('/doubts/user',[UserController::class,'indexStudent'])->middleware(['auth', 'isStudent']);

Route::post('/senddoubt',[UserController::class,'indexStudentAdd'])->middleware(['auth', 'isStudent']);

/* Routes of users */

Route::get('/users', [UserController::class, "index"])->middleware(['auth', 'isTeacher'])->name("users");

Route::get('/generate', [UserController::class, "usergenerator"])->middleware(['auth', 'isTeacher'])->name("users");

Route::delete('/users/{user}', [UserController::class, "destroy"])->middleware(['auth', 'isTeacher'])->name("delete");

Route::post('/update',[ProfileController::class, "update"])->middleware(['auth'])->name("update");

require __DIR__.'/auth.php';
