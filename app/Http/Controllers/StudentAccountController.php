<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;

class StudentAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all()->where('role_id', '');
        return view('admin/studentaccount/studentaccountlist')->with(array('students' => $students));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);
        $student = User::find($id);

        return view('admin/studentaccount/editstudentaccount', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        echo '<pre>';
//        echo $request;
//        die;
        $id = base64_decode($id);
        $student = User::find($id);
        $validated_student = $this->validate($request,[
            'password' => 'required|string|min:9|confirmed'
        ]);

        $student['password'] = bcrypt($validated_student['password']);
        $student->save();

        return redirect('studentaccount')->with('success', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        $user = User::find($id);
        $student = Student::all()->where('lrn' , $user['lrn'])->get('0');

        if(count($user) > 0) {
			$user->delete();
		}
//        $student->delete();

        return redirect('studentaccount')->with('success', 'Student has been deleted');
    }
}
