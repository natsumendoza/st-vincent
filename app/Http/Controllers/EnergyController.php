<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Question2;

class EnergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letterCodeE = 'E';
        $letterCodeI = 'I';
        $letterCodeS = 'S';
        $letterCodeN = 'N';
        $letterCodeT = 'T';
        $letterCodeF = 'F';
        $letterCodeJ = 'J';
        $letterCodeP = 'P';
//        $questionsEnergyE = Question::where('letter_code', '$letterCodeE')->orderBy('question_no');
        return view('admin/personalitytype/energy');
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

        $letterCodeE = 'E';
        $letterCodeI = 'I';
        $statementType = 'Energy';

        $validated_question = $this->validate($request,[
            'question1' => 'required',
            'question2' => 'required',
        ]);


        $question = array();
        $question['letter_code'] = $letterCodeE . ',' . $letterCodeI;
        $question['statement'] = $validated_question['question1'] . ',' . $validated_question['question2'];
        $question['statement_type'] = $statementType;

        $insertedQuestion1 = Question::create($question);

        $this->updateQuestionNo($insertedQuestion1->id);

        return redirect('energy')->with('success', 'Question has been added');

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
