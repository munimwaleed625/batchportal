<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Applications;
use Illuminate\Routing\Controller as BaseController;





class StudentController extends BaseController
{
    public function student_main_dashboard()
    {
        return view('students\student_main_dashboard');
    }

    public function application_store(Request $request)
    {
        $request->validate(
            [
                'full_name' => 'required|max:150',
                'roll_no' => 'required',
                'leave_type' => 'required',
                'from_date' => 'required',
                'to_date' => 'required',
                'reason' => 'required',
                ]);
        $request->except('_token');
        Applications::create($request->all());
        return redirect()->route('applications')->with('success', 'Post created successfully.');
    }
//$scanned_image_1 = '';
/*if ($request->hasFile('scanned_image_1')){6    $objUpload  =   $this->importMedia($request->file('scanned_image_1'), 'remitters/documents');    if ($objUpload->status != 1)    {        return redirect()->back()->withInput()->withErrors([$objUpload->message]);    }    else    {        $scanned_image_1   =   $objUpload->fileName;    }}
$requestData['scanned_image_1'] = $scanned_image_1;*/



//    public function garde_i_store(Request $request)
//    {
//        $request->validate(
//            [
//                'full_name' => 'required|max:150',
//                'roll_no' => 'required',
//                'leave_type' => 'required',
//                'from_date' => 'required',
//                'to_date' => 'required',
//                'reason' => 'required',
//            ]);
//        $request->except('_token');
//        Applications::create($request->all());
//        return redirect()->route('applications')->with('success', 'Post created successfully.');
//    }
    public function applications()
    {
        return view('students/applications');
    }

    public function grade_i()
    {
        return view('students/grade_i');
    }

    public function student_conflicts()
    {
        return view('students/student_conflicts');
    }

    public function timetable_clash()
    {
        return view('students/timetable_clash');
    }

    public function extra_curricular_activity()
    {
        return view('students/extra_curricular_activity');
    }

    public function scholarship()
    {
        return view('students/scholarship');
    }

    public function manage_profile_student()
    {
        return view('students/manage_profiles_student');
    }
}
