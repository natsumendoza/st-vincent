<?php

use App\Question;
use App\Question2;
use App\ExamLimit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/exam', function () {

    $examLimit = ExamLimit::where('user_id', Auth::user()->id)->get()[0]['exam_count'];

    if($examLimit < 2) {
        $letterCodeE = 'E';
        $letterCodeI = 'I';
        $letterCodeS = 'S';
        $letterCodeN = 'N';
        $letterCodeT = 'T';
        $letterCodeF = 'F';
        $letterCodeJ = 'J';
        $letterCodeP = 'P';
        $questionsEnergy = Question::all()->where('letter_code', $letterCodeE . ',' . $letterCodeI)->toArray();
        $questionsInformation = Question::all()->where('letter_code', $letterCodeS . ',' . $letterCodeN)->toArray();
        $questionsDecisionMaking = Question::all()->where('letter_code', $letterCodeT . ',' . $letterCodeF)->toArray();
        $questionsLearningStyle = Question::all()->where('letter_code', $letterCodeJ . ',' . $letterCodeP)->toArray();

        $datas = array(
            'questionsEnergy' => $questionsEnergy,
            'questionsInformation' => $questionsInformation,
            'questionsDecisionMaking' => $questionsDecisionMaking,
            'questionsLearningStyle' => $questionsLearningStyle
        );

        return view('exam/exam')->with($datas);
    } else {
        return view('exam/examlimitreached');
    }
});

Route::get('/studentresult', function () {
    return view('exam/studentresult');
});

Route::resource('energy', 'EnergyController');
Route::resource('information', 'InformationController');
Route::resource('decisionmaking', 'DecisionMakingController');
Route::resource('learningstyle', 'LearningStyleController');
Route::resource('result', 'ResultController');
Route::resource('student', 'StudentController');


Route::get('/studentlogin', function () {
    return view('auth/studentlogin');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
