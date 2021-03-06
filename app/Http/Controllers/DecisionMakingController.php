<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class DecisionMakingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statementType = 'Decision Making';
        $questions = Question::where('statement_type', $statementType)->get();


        return view('admin/personalitytype/decisionmaking')->with('questions', $questions);
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
        $letterCodeT = 'T';
        $letterCodeF = 'F';
        $statementType = 'Decision Making';

        $validated_question = $this->validate($request,[
            'question1' => 'required',
            'question2' => 'required',
        ]);


        $question = array();
        $question['letter_code'] = $letterCodeT . ',' . $letterCodeF;
        $question['statement'] = $validated_question['question1'] . ',' . $validated_question['question2'];
        $question['statement_type'] = $statementType;

        $insertedQuestion1 = Question::create($question);

        $this->updateQuestionNo($insertedQuestion1->id);

        return redirect('decisionmaking')->with('success', 'Question has been added');
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
