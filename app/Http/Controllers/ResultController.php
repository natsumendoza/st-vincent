<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Combination;
use App\Result;
use Auth;
use App\ExamLimit;
use App\Student;

class ResultController extends Controller
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

        $student = Student::where('lrn', Auth::user()->lrn)->get();

        $letterCodeE = 'E';
        $letterCodeI = 'I';
        $letterCodeS = 'S';
        $letterCodeN = 'N';
        $letterCodeT = 'T';
        $letterCodeF = 'F';
        $letterCodeJ = 'J';
        $letterCodeP = 'P';

        $questionsEnergyCount = Question::where('letter_code', $letterCodeE . ',' . $letterCodeI)->count();
        $questionsInformationCount = Question::where('letter_code', $letterCodeS . ',' . $letterCodeN)->count();
        $questionsDecisionMakingCount = Question::where('letter_code', $letterCodeT . ',' . $letterCodeF)->count();
        $questionsLearningStyleCount = Question::where('letter_code', $letterCodeJ . ',' . $letterCodeP)->count();

        $countE = 0;
        $countI = 0;
        $countS = 0;
        $countN = 0;
        $countT = 0;
        $countF = 0;
        $countJ = 0;
        $countP = 0;



        for($i = 1; $i <= $questionsEnergyCount; $i++) {
            if($request['energy' . $i] == $letterCodeE) {
                $countE += 1;
            } else {
                $countI += 1;
            }
        }

        for($i = 1; $i <= $questionsInformationCount; $i++) {
            if($request['information' . $i] == $letterCodeS) {
                $countS += 1;
            } else {
                $countN += 1;
            }
        }

        for($i = 1; $i <= $questionsDecisionMakingCount; $i++) {
            if($request['decisionmaking' . $i] == $letterCodeT) {
                $countT += 1;
            } else {
                $countF += 1;
            }
        }

        for($i = 1; $i <= $questionsLearningStyleCount; $i++) {
            if($request['learningstyle' . $i] == $letterCodeJ) {
                $countJ += 1;
            } else {
                $countP += 1;
            }
        }

        $selectedEnergy = $this->getSelected($countE, $countI, $letterCodeE, $letterCodeI);
        $selectedInformation = $this->getSelected($countS, $countN, $letterCodeS, $letterCodeN);
        $selectedDecisionmaking = $this->getSelected($countT, $countF, $letterCodeT, $letterCodeF);
        $selectedLearningStyle = $this->getSelected($countJ, $countP, $letterCodeJ, $letterCodeP);
        $combination = $this->getCombination($selectedEnergy, $selectedInformation, $selectedDecisionmaking, $selectedLearningStyle);

        $ePercentage = $this->getPercentage($questionsEnergyCount, $countE).'%';
        $iPercentage = $this->getPercentage($questionsEnergyCount, $countI).'%';
        $sPercentage = $this->getPercentage($questionsInformationCount, $countS).'%';
        $nPercentage = $this->getPercentage($questionsInformationCount, $countN).'%';
        $tPercentage = $this->getPercentage($questionsDecisionMakingCount, $countT).'%';
        $fPercentage = $this->getPercentage($questionsDecisionMakingCount, $countF).'%';
        $jPercentage = $this->getPercentage($questionsLearningStyleCount, $countJ).'%';
        $pPercentage = $this->getPercentage($questionsLearningStyleCount, $countP).'%';

        $combinationData = Combination::where('combination', $combination)->get()[0];
        $combinationFetched = $combinationData['combination'];

        $result = array();
        $result['lrn'] = Auth::user()->lrn;
        $result['e_percentage'] = $ePercentage;
        $result['i_percentage'] = $iPercentage;
        $result['s_percentage'] = $sPercentage;
        $result['n_percentage'] = $nPercentage;
        $result['t_percentage'] = $tPercentage;
        $result['f_percentage'] = $fPercentage;
        $result['j_percentage'] = $jPercentage;
        $result['p_percentage'] = $pPercentage;
        $result['interpretation'] = $combinationData['interpretation'];
        Result::create($result);

        $data = array(
            'combinationData' => $combinationData,
            'combinationFetched' => $combinationFetched,
            'J' => $this->getPercentage($questionsLearningStyleCount, $countJ),
            'P' => $this->getPercentage($questionsLearningStyleCount, $countP),
            'F' => $this->getPercentage($questionsDecisionMakingCount, $countF),
            'T' => $this->getPercentage($questionsDecisionMakingCount, $countT),
            'N' => $this->getPercentage($questionsInformationCount, $countN),
            'S' => $this->getPercentage($questionsInformationCount, $countS),
            'E' => $this->getPercentage($questionsEnergyCount, $countE),
            'I' => $this->getPercentage($questionsEnergyCount, $countI),
            'student' => $student
        );
        $this->updateExamLimit(Auth::user()->lrn);

        return view('exam/studentresult')->with($data);


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

    public function getSelected($count1, $count2, $letterCode1, $letterCode2) {
        return ($count1 > $count2) ? $letterCode1 : $letterCode2;
    }

    public function getCombination($selected1, $selected2, $selected3, $selected4) {
        return "$selected1$selected2$selected3$selected4";
    }

    public function getPercentage($count, $letterCodeCount) {
        return round((($letterCodeCount / $count) * 100), 2);
    }

    public function updateExamLimit($lrn) {
        $examLimit = ExamLimit::where('lrn', $lrn)->get()[0];
        $examLimit['exam_count'] += 1;
        $examLimit->save();
    }
}
