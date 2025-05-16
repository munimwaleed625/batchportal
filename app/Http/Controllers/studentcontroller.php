<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class StudentController extends BaseController
{
    public function student_main_dashboard()
    {
        return view('students\student_main_dashboard');
    }
    public function applicationstudent() { return view('students/applications'); }
    public function gradesstudent() { return view('students/i_grade'); }
    public function conflictsstudent() { return view('students/student_conflicts'); }
    public function timetableclashstudent() { return view('students/timetable_clash'); }
    public function extraactivitystudent() { return view('students/extra_curricular_activity'); }
    public function scholershipstudent() { return view('students/scholarship'); }
    public function profilestudent() { return view('students/manage_profiles_student'); }
}
