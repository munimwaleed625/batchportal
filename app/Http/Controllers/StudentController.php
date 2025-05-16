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
    public function applications() { return view('students/applications'); }
    public function grade_i() { return view('students/grade_i'); }
    public function student_conflicts() { return view('students/student_conflicts'); }
    public function timetable_clash() { return view('students/timetable_clash'); }
    public function extra_curricular_activity() { return view('students/extra_curricular_activity'); }
    public function scholarship() { return view('students/scholarship'); }
    public function manage_profile_student() { return view('students/manage_profiles_student'); }
}
