<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/personalitytype/information');
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
        $letterCodeS = 'S';
        $letterCodeN = 'N';
        $statementType = 'Information';

        $validated_question = $this->validate($request,[
            'question1' => 'required',
            'question2' => 'required',
        ]);


        $question = array();
        $question['letter_code'] = $letterCodeS . ',' . $letterCodeN;
        $question['statement'] = $validated_question['question1'] . ',' . $validated_question['question2'];
        $question['statement_type'] = $statementType;

        $insertedQuestion1 = Question::create($question);

        $this->updateQuestionNo($insertedQuestion1->id);

        return redirect('information')->with('success', 'Question has been added');
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
        //
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

    public function updateQuestionNo($id) {
        $questionNo = $id;

        $question = Question::find($id);

        $question['question_no'] = $questionNo;

        $question->save();
    }
}
