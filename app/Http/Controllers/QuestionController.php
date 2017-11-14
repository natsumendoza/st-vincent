<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $raw = base64_decode($id);
        $decoded = explode("/", $raw);
        $question = Question::find($decoded[0]);
        $view = $decoded[1];

        return view('admin/question/editquestion')->with(array('question' => $question, 'view' => $view));
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
        $raw = base64_decode($id);
        $decoded = explode("/", $raw);

        $id = $decoded[0];
        $view = $decoded[1];

        $question = Question::find($id);


        $validated_question = $this->validate($request,[
            'question1' => 'required|string|max:255',
            'question2' => 'required|string|max:255',
        ]);
        $statement = array();
        $statement[0] = $validated_question['question1'];
        $statement[1] = $validated_question['question2'];


        $question['statement'] = implode(',', $statement);
        $question->save();
        return redirect(''.$view)->with('success','Question has been updated');
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
