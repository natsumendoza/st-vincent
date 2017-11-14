<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all()->where('role_id', 1);
        return view('admin/adminaccount/adminlist')->with(array('admins' => $admins));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/adminaccount/addadminaccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_student = $this->validate($request,[
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:9|confirmed'
        ]);

        $admin = array();
        $admin['lrn'] = '';
        $admin['role_id'] = 1;
        $admin['username'] = $validated_student['username'];
        $admin['password'] = bcrypt($validated_student['password']);

        User::create($admin);

        return redirect('adminaccount')->with('success', 'Admin has been added');
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
        $admin = User::find($id);
        return view('admin/adminaccount/editadminaccount', compact('admin'));
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
        $id = base64_decode($id);
        $admin = User::find($id);
        $validated_student = $this->validate($request,[
            'password' => 'required|string|min:9|confirmed'
        ]);

        $admin['password'] = bcrypt($validated_student['password']);
        $admin->save();

        return redirect('adminaccount')->with('success', 'Admin has been updated');
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
        $admin = User::find($id);

        $admin->delete();

        return redirect('adminaccount')->with('success', 'Student has been deleted');
    }
}
