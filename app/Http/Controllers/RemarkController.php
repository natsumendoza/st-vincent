<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Remark;

class RemarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $validated_comment = $this->validate($request,[
            'comment' => 'required|string|max:255',
        ]);

        $student = Student::where('lrn', $request['lrnVal'])->get()[0];

        $remark = array();
        $remark['lrn'] = $request['lrnVal'];
        $remark['comment'] = $validated_comment['comment'];

        Remark::create($remark);

        return redirect('studentprofile/'.$student['id'])->with('success', 'Remark has been added');
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
        $student = Student::where('lrn', base64_decode($id))->get()[0];
        return view('admin/student/addremark', compact('student'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
