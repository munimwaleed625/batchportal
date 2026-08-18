<?php

namespace App\Http\Controllers;

use App\Models\grade_i;
use App\Models\student_conflicts;
use App\Models\timetable_clash;
use App\Models\extra_curricular_act;
use App\Models\scholarship;
//use App\Models\User;
use http\Client\Curl\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Applications;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;


class StudentController extends BaseController
{
    public function student_main_dashboard()
    {
        return view('students\student_main_dashboard');
    }

    public function applications()
    {
        return view('students/applications');
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
        return redirect()->route('applications')->with('success', 'Application posted successfully.');
    }
//$scanned_image_1 = '';
/*if ($request->hasFile('scanned_image_1')){6    $objUpload  =   $this->importMedia($request->file('scanned_image_1'), 'remitters/documents');    if ($objUpload->status != 1)    {        return redirect()->back()->withInput()->withErrors([$objUpload->message]);    }    else    {        $scanned_image_1   =   $objUpload->fileName;    }}
$requestData['scanned_image_1'] = $scanned_image_1;*/


    public function grade_i()
    {
        return view('students/grade_i');
    }

    public function grade_i_store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|max:150',
            'roll_no' => 'required|unique:grade_is,roll_no',
            'course_type' => 'required',
            'valid_reason' => 'required',
            'attachment_i' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:2048',
        ]);
        if ($request->hasFile('attachment_i')) {
            $objUpload = $this->importMedia($request->file('attachment_i'), 'grade_i/attachment');
            if ($objUpload->status != 1) {
                return redirect()->back()->withInput()->withErrors([$objUpload->message]);
            } else {
                $scanned_image_1 = $objUpload->fileName;
            }
        }
//        $login_user_id = (Auth::user()->id);
        grade_i::create([
            'full_name' => $request->full_name,
            'roll_no' => $request->roll_no,
            'course_type' => $request->course_type,
            'valid_reason' => $request->valid_reason,
            'attachment_i' => $scanned_image_1 ?? null,
//            'created_by' => $login_user_id,
        ]);
        return redirect()->route('grade_i')->with('success', 'Grade-I Application Posted successfully.');
    }




    public function student_conflicts()
    {
        return view('students/student_conflicts');
    }

    public function student_conflicts_store(Request $request)
    {

        $request->validate(
            [
                'first_name' => 'required|max:150',
                'first_roll_no' => 'required',
                'second_name' => 'required|max:150',
                'second_roll_no' => 'required',
                'issue_explain' => 'required',
                'date_issue' => 'required',

            ]);
        $request->except('_token');
        student_conflicts::create($request->all());
        return redirect()->route('student_conflicts')->with('success', 'Student conflicts posted successfully.');
    }

    public function timetable_clash()
    {
        return view('students/timetable_clash');
    }

    public function timetable_clash_store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate(
            [
                'full_name' => 'required|max:150',
                'roll_no' => 'required',
                'first_course' => 'required',
                'second_course' => 'required',
                'clash_date' => 'required',
                'clash_time' => 'required',
                'description_clash' => 'required',

            ]);
        $request->except('_token');
        timetable_clash::create($request->all());
        return redirect()->route('timetable_clash')->with('success', 'Application posted successfully.');
    }


    public function extra_curricular_activity()
    {
        return view('students/extra_curricular_activity');
    }


    public function extra_curricular_activity_store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate(
            [
                'full_name' => 'required|max:150',
                'roll_no' => 'required',
                'act_date' => 'required',
                'act_time' => 'required',
                'activity_type' => 'required',
                'activity_explained' => 'required',

            ]);
        $request->except('_token');
        extra_curricular_act::create($request->all());
        return redirect()->route('extra_curricular_activity')->with('success', 'Application posted successfully.');
    }


    public function scholarship()
    {
        return view('students/scholarship');
    }

    public function scholarship_store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate(
            [
                'full_name' => 'required|max:150',
                'roll_no' => 'required',
                'semester' => 'required',
                'cgpa' => 'required',
                'monthly_income' => 'required',
                'reason_scholarship' => 'required',
                'attachment' => 'required',

            ]);
        $request->except('_token');
        scholarship::create($request->all());
        return redirect()->route('scholarship')->with('success', 'Application posted successfully.');
    }
    public function manage_profile_student()
    {
        return view('students/manage_profiles_student');
    }



//    public function profile()
//    {
//        // Assuming the user is logged in
//        $user = Auth::user();
//
//        return view('students.profile', compact('user'));
//    }


    private function importMedia($file, $directory)
    {
        try {
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs($directory, $filename, 'public');

            return (object)[
                'status' => 1,
                'fileName' => $path,
                'message' => 'File uploaded successfully',
            ];
        } catch (\Exception $e) {
            return (object)[
                'status' => 0,
                'fileName' => null,
                'message' => 'Upload failed: ' . $e->getMessage(),
            ];
        }
    }
}
