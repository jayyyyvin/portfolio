<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;


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

Route::resource('/', FrontendController::class);

Route::middleware(['RoleChecker:admin'])->group(function () 
{
    Route::resource('users', UserController::class);
    Route::resource('profiles', AdminController::class);
});

Route::resource('admin', AdminController::class);

Route::resource('skill', SkillController::class);

Route::resource('educational', EducationalController::class);

Route::resource('experience', ExperienceController::class);

Route::resource('contacts', ContactController::class);



