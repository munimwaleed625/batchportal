<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

//class advisorcontroller extends BaseController
//{
//    public function dashboard(){
//        return view('advisor.maindashboard');
//    }
//
//    public function application(){
//        return view('advisor.application');
//    }
//
//
//    public function courses(){
//        return view('advisor.manage_courses');
//    }
//
//    public function grades(){
//        return view('advisor.i_grade');
//    }
//
//    public function progress(){
//        return view('advisor.acadamic_progress');
//    }
//
//    public function issue(){
//        return view('advisor.report_issue');
//    }
//
//    public function profile(){
//        return view('advisor.manage_profiles');
//    }
//}


class AdvisorController extends Controller
{
    public function dashboard() { return view('advisor/maindashboard'); }
    public function application() { return view('advisor/application'); }
    public function courses() { return view('advisor/manage_courses'); }
    public function grades() { return view('advisor/i_grade'); }
    public function progress() { return view('advisor/acadamic_progress'); }
    public function issue() { return view('advisor/report_issue'); }
    public function profile() { return view('advisor/manage_profile'); }
}

public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'phone' => 'required',
        'username' => 'required|unique:users,username',
        'password' => 'required|confirmed|min:6',
    ]);
}
