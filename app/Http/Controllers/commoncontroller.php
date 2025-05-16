<?php
//
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class CommonController extends controller
{
    public function dashboard()
    {
        return view('advisor/maindashboard');
    }

    public function application()
    {
        return view('advisor/application');
    }

    public function courses()
    {
        return view('advisor/manage_courses');
    }

    public function igrade()
    {
        return view('advisor/i_grade');
    }

    public function progress()
    {
        return view('advisor/acadamic_progress');
    }

    public function issue()
    {
        return view('advisor/report_issue');
    }

    public function profile()
    {
        return view('advisor/manage_profiles');
    }
}
//    public function dashboards() { return view('advisor/student_main_dashboard'); }
//    public function applications() { return view('advisor/applications'); }
//    public function gradeI() { return view('advisor/i_grade'); }
//    public function conflictss() { return view('advisor/student_conflicts'); }
//    public function timetables() { return view('advisor/timetable_clash'); }
//    public function activitiess() { return view('advisor/extra_curricular_activity'); }
//    public function scholarships() { return view('advisor/scholarship'); }
//    public function profiles() { return view('advisor/manage_profile_student'); }

//Route::get('/student_main_dashboard', [CommonController::class, 'dashboard'])->name('dashboard');
//Route::get('/applications', [CommonController::class, 'application'])->name('application');
//Route::get('/i_grade', [CommonController::class, 'igrade'])->name('igrade');
//Route::get('/student_conflicts', [CommonController::class, 'conflicts'])->name('conflicts');
//Route::get('/timetable_clash', [CommonController::class, 'timetable'])->name('timetable');
//Route::get('/extra_curricular_activity', [CommonController::class, 'activities'])->name('activities');
//Route::get('/scholarship', [CommonController::class, 'scholarship'])->name('scholarship');
//Route::get('/manage_profile_student', [CommonController::class, 'profile'])->name('profile');
