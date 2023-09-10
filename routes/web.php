<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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

// main page route

Route::get('/', [HomeController::class, 'index']);
Route::get('/resume', [ResumeController::class, 'resume']);
Route::get('/projects', [ProjectsController::class, 'projects']);
Route::get('/contacts', [ContactController::class, 'contacts']);


// ajax route
 Route::get('/heroData', [HomeController::class, 'herodata']);
 Route::get('/aboutData', [HomeController::class, 'aboutdata']);
 Route::get('/socialData', [HomeController::class, 'socialdata']);
 Route::get('/resumeLink', [ResumeController::class, 'resumelink']);
 Route::get('/experienceData', [ResumeController::class, 'experiencedata']);
 Route::get('/educationData', [ResumeController::class, 'educationdata']);
 Route::get('/skillsData', [ResumeController::class, 'skillsdata']);
 Route::get('/languagesData', [ResumeController::class, 'languagesdata']);
 Route::get('/projectData', [ProjectsController::class, 'projectdata']);
 Route::post('/contactData', [ContactController::class, 'contactdata']);



