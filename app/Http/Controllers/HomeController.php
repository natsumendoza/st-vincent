<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
//        echo Auth::guest();
//        die;
        if (!Auth::guest()) {
            if(Auth::user()->isAdmin()) {
//                echo Auth::user()->role['name'];
//                die;
                return view('admin/admin');
            } else {
                return view('home');
            }
        } else {
            return view('index');
        }

    }
}
