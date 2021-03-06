<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guest()) {
            if(Auth::user()->isAdmin() || Auth::user()->isSuperAdmin()) {
                return view('admin/admin');
            } else {

                $student = Student::where('lrn', Auth::user()->lrn)->get();
                $data = array('student' => $student);

                return view('home')->with($data);
            }
        } else {
            return view('index');
        }

    }
}
