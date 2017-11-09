<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Combination;

class CombinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $combinations = Combination::all()->toArray();

        return view('admin/combination/combinationlist')->with(array('combinations' => $combinations));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

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

        $passed = explode("_", $id);

        if($passed[1] == 'add') {
            $combination = Combination::find($passed[0]);
            return view('admin/combination/addcombination',compact('combination','id'));
        } else {
            $combination = Combination::find($passed[0]);
            return view('admin/combination/editcombination',compact('combination','id'));
        }


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

        $passed = explode('_', $id);

        $combination = Combination::find($passed[0]);

        if ($passed[1] == 'add') {
            $careersAddArr = explode(",", $combination['careers']);

            $validated_career = $this->validate($request,[
                'career' => 'required|string|max:255',
            ]);

            $careersAddArr[$combination['career_count'] + 1] = $validated_career['career'];
            $combination['career_count'] = $combination['career_count'] + 1;
            $combination['careers'] = implode(",", $careersAddArr);
            $combination->save();
            return redirect('combination')->with('success','Combination has been added');
        } else {

            $validated_combination = $this->validate($request,[
                'combination' => 'required|string|max:255',
                'interpretation' => 'required|string|max:255',
            ]);

            $combination['combination'] = $validated_combination['combination'];
            $combination['interpretation'] = $validated_combination['interpretation'];

            $careersArr = [];
            for ($i = 1; $i <= $combination['career_count']; $i++) {
                $careersArr[$i] = $request['career' . $i];
            }

            $careers = implode(",", $careersArr);
            $combination['careers'] = $careers;

            $combination->save();

            return redirect('combination')->with('success','Combination has been updated');

        }

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
