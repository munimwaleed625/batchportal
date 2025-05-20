<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CommonController;


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

//Route::get('/login', function () {
//    return view('advisor/login');
//});


use App\Http\Controllers\Auth\RegisterController;

Route::get('/signup', [RegisterController::class, 'showForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'store'])->name('signup.store');

//Route::get('/dashboard', [\App\Http\Controllers\advisorcontroller::class, 'dashboard']);
//Route::get('/application', [\App\Http\Controllers\advisorcontroller::class, 'application']);
//Route::get('/courses', [\App\Http\Controllers\advisorcontroller::class, 'courses']);
//Route::get('/grades', [\App\Http\Controllers\advisorcontroller::class, 'grades']);
//Route::get('/progress', [\App\Http\Controllers\advisorcontroller::class, 'progress']);
//Route::get('/issue', [\App\Http\Controllers\advisorcontroller::class, 'issue']);
//Route::get('/profile', [\App\Http\Controllers\advisorcontroller::class, 'profile']);




//Route::controller(AdvisorController::class)->group(function () {
//    Route::get('/dashboard', 'dashboard');
//    Route::get('/application', 'application');
//    Route::get('/courses', 'courses');
//    Route::get('/grades', 'grades');
//    Route::get('/progress', 'progress');
//    Route::get('/issue', 'issue');
//    Route::get('/manage_profile', 'profile');
//});

//Route::controller(StudentController::class)->group(function () {
//    Route::get('/dashboardstudent', 'dashboardstudent');
//    Route::get('/applicationstudent', 'applicationstudent');
//    Route::get('/gradesstudent', 'gradesstudent');
//    Route::get('/conflictsstudent', 'conflictsstudent');
//    Route::get('/timetableclashstudent', 'timetableclashstudent');
//    Route::get('/extraactivitystudent', 'extraactivitystudent');
//    Route::get('/scholershipstudent', 'scholershipstudent');
//    Route::get('/profilestudent', 'profile\student');
//});
//


// Dashboard Route
//Route::get('/maindashboard', [CommonController::class, 'dashboard'])->name('dashboard');
//
//// Applications Page Route
//Route::get('/application', [CommonController::class, 'application'])->name('application');
//
//// I-Grade Page Route
//Route::get('/i-grade', [CommonController::class, 'igrade'])->name('igrade');
//
//// Add more routes as needed:
//Route::get('/courses', [CommonController::class, 'courses'])->name('courses');
//Route::get('/issue', [CommonController::class, 'issue'])->name('issue');
//Route::get('/progress', [CommonController::class, 'progress'])->name('progress');
//Route::get('/profile', [CommonController::class, 'profile'])->name('profile');
//Route::get('/scholarship', [CommonController::class, 'scholarship'])->name('scholarship');



Route::get('/dashboard', [CommonController::class, 'dashboard'])->name('dashboard');
Route::get('/application', [CommonController::class, 'application'])->name('application');
Route::get('/manage_courses', [CommonController::class, 'courses'])->name('courses');
Route::get('/i_grade', [CommonController::class, 'igrade'])->name('igrade');
Route::get('/acadamic_progress', [CommonController::class, 'progress'])->name('progress');
Route::get('/report_issue', [CommonController::class, 'issue'])->name('issue');
Route::get('/manage_profile', [CommonController::class, 'profile'])->name('profile');



Route::get('/student_main_dashboard', [StudentController::class, 'student_main_dashboard'])->name('student_main_dashboard');
Route::get('/applications', [StudentController::class, 'applications'])->name('applications');
Route::get('/grade_i', [StudentController::class, 'grade_i'])->name('grade_i');
Route::get('/student_conflicts', [StudentController::class, 'student_conflicts'])->name('student_conflicts');
Route::get('/timetable_clash', [StudentController::class, 'timetable_clash'])->name('timetable_clash');
Route::get('/extra_curricular_activity', [StudentController::class, 'extra_curricular_activity'])->name('extra_curricular_activity');
Route::get('/scholarship', [StudentController::class, 'scholarship'])->name('scholarship');
Route::get('/manage_profile_student', [StudentController::class, 'manage_profile_student'])->name('manage_profile_student');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
