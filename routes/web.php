<?php

use App\Question;
use App\Question2;
use App\ExamLimit;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Result;
use App\Remark;

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

    $examLimit = ExamLimit::where('lrn', Auth::user()->lrn)->get()[0]['exam_count'];
    $student = Student::where('lrn', Auth::user()->lrn)->get();
    $grade10 = 'Grade 10';
    $grade12 = 'Grade 12';

    if(($student[0]['grade'] == $grade10) || ($student[0]['grade'] == $grade12)) {
        if($examLimit < 1) {
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
                'questionsLearningStyle' => $questionsLearningStyle,
                'student' => $student
            );

            return view('exam/exam')->with($datas);
        } else {
            return view('exam/examlimitreached')->with(array('student' => $student));
        }
    } else {
        return view('exam/graderestricted')->with(array('student' => $student));
    }
});

Route::get('/studentprofile/{id}', function ($id) {

    $student = Student::find($id);
    $results = Result::where('lrn', $student['lrn'])->take(2)->get();
    $remarks = Remark::where('lrn', $student['lrn'])->orderBy('created_at')->get();

    return view('admin/student/studentprofile')->with(array('student' => $student, 'results' => $results, 'remarks' => $remarks));
});

Route::get('/results', function () {
    $studentResults = DB::table('students')->join('results', 'students.lrn', '=', 'results.lrn')->get();

    return view('admin/student/studentresult')->with('studentResults', $studentResults);
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
Route::resource('combination', 'CombinationController');
Route::resource('question', 'QuestionController');
Route::resource('studentaccount', 'StudentAccountController');
Route::resource('adminaccount', 'AdminAccountController');
Route::resource('remark', 'RemarkController');
Route::resource('backup', 'BackupController');



Route::get('/studentlogin', function () {
    return view('auth/studentlogin');
});

Auth::routes();

Route::get('/home', 'HomeController@index');