<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\ExamLimit;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = Student::all()->toArray();
        $data = array('students' => $students);

        return view('admin/student/studentlist')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/student/addstudent');
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
            'lrn' => 'required|numeric|unique:students',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'extName' => 'max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,PNG,JPG,JPEG|max:2048',
            'birthday' => 'required|string|max:255',
            'age' => 'numeric',
            'gender' => 'required|string|max:255',
            'placeOfBirth' => 'required|string|max:255',
            'homeAddress' => 'required|string|max:255',
            'contactNumber' => 'required|numeric',
            'grade' => 'required|string|max:255',
            'section' => 'required|string|max:255'
        ]);

        $student = array();
        $student['lrn'] = $validated_student['lrn'];
        $student['first_name'] = $validated_student['firstName'];
        $student['middle_name'] = $request['middleName'];
        $student['last_name'] = $validated_student['lastName'];
        $student['name_ext'] = $validated_student['extName'];

        if($request['image'] != NULL) {
            $cleanName = preg_replace('/\s+/', '_', $validated_student['lrn']);
            $imageName =   $cleanName . (Auth::user()->id * 2) . time() . '.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('image/student'), $imageName);

            $student['image_path'] = $imageName;
        }

        $student['birthday'] = $validated_student['birthday'];
        $student['age'] = $request['ageVal'];
        $student['gender'] = $validated_student['gender'];
        $student['place_of_birth'] = $validated_student['placeOfBirth'];
        $student['home_address'] = $validated_student['homeAddress'];
        $student['contact_number'] = $validated_student['contactNumber'];
        $student['grade'] = $validated_student['grade'];
        $student['section'] = $validated_student['section'];

        // Father
        $student['first_name_father'] = $request['firstNameFather'];
        $student['middle_name_father'] = $request['middleNameFather'];
        $student['last_name_father'] = $request['lastNameFather'];
        $student['birthday_father'] = $request['birthdayFather'];
        $student['occupation_father'] = $request['occupationFather'];
        $student['home_address_father'] = $request['homeAddressFather'];
        $student['contact_number_father'] = $request['contactNumberFather'];

        // Mother
        $student['first_name_mother'] = $request['firstNameMother'];
        $student['middle_name_mother'] = $request['middleNameMother'];
        $student['last_name_mother'] = $request['lastNameMother'];
        $student['birthday_mother'] = $request['birthdayMother'];
        $student['occupation_mother'] = $request['occupationMother'];
        $student['home_address_mother'] = $request['homeAddressMother'];
        $student['contact_number_mother'] = $request['contactNumberMother'];

        // Guardian
        $student['first_name_guardian'] = $request['firstNameGuardian'];
        $student['middle_name_guardian'] = $request['middleNameGuardian'];
        $student['last_name_guardian'] = $request['lastNameGuardian'];
        $student['birthday_guardian'] = $request['birthdayGuardian'];
        $student['occupation_guardian'] = $request['occupationGuardian'];
        $student['home_address_guardian'] = $request['homeAddressGuardian'];
        $student['contact_number_guardian'] = $request['contactNumberGuardian'];

        // Sibling
        $student['first_name_sibling'] = $request['firstNameSlibling'];
        $student['middle_name_sibling'] = $request['middleNameSlibling'];
        $student['last_name_sibling'] = $request['lastNameSlibling'];
        $student['age_sibling'] = $request['ageSibling'];

        //Educational Profile
        // Kindergarten
        $student['school_attended_kindergarten'] = $request['schoolAttendedKinder'];
        $student['year_completed_kindergarten'] = $request['yearCompletedKinder'];
        $student['academic_standing_kindergarten'] = $request['academicStandingKinder'];

        $student['school_attended_grade1'] = $request['schoolAttendedGrade1'];
        $student['year_completed_grade1'] = $request['yearCompletedGrade1'];
        $student['academic_standing_grade1'] = $request['academicStandingGrade1'];

        $student['school_attended_grade2'] = $request['schoolAttendedGrade2'];
        $student['year_completed_grade2'] = $request['yearCompletedGrade2'];
        $student['academic_standing_grade2'] = $request['academicStandingGrade2'];

        $student['school_attended_grade3'] = $request['schoolAttendedGrade3'];
        $student['year_completed_grade3'] = $request['yearCompletedGrade3'];
        $student['academic_standing_grade3'] = $request['academicStandingGrade3'];

        $student['school_attended_grade4'] = $request['schoolAttendedGrade4'];
        $student['year_completed_grade4'] = $request['yearCompletedGrade4'];
        $student['academic_standing_grade4'] = $request['academicStandingGrade4'];

        $student['school_attended_grade5'] = $request['schoolAttendedGrade5'];
        $student['year_completed_grade5'] = $request['yearCompletedGrade5'];
        $student['academic_standing_grade5'] = $request['academicStandingGrade5'];

        $student['school_attended_grade6'] = $request['schoolAttendedGrade6'];
        $student['year_completed_grade6'] = $request['yearCompletedGrade6'];
        $student['academic_standing_grade6'] = $request['academicStandingGrade6'];

        $student['school_attended_grade7'] = $request['schoolAttendedGrade7'];
        $student['year_completed_grade7'] = $request['yearCompletedGrade7'];
        $student['academic_standing_grade7'] = $request['academicStandingGrade7'];

        $student['school_attended_grade8'] = $request['schoolAttendedGrade8'];
        $student['year_completed_grade8'] = $request['yearCompletedGrade8'];
        $student['academic_standing_grade8'] = $request['academicStandingGrade8'];

        $student['school_attended_grade9'] = $request['schoolAttendedGrade9'];
        $student['year_completed_grade9'] = $request['yearCompletedGrade9'];
        $student['academic_standing_grade9'] = $request['academicStandingGrade9'];

        $student['school_attended_grade10'] = $request['schoolAttendedGrade10'];
        $student['year_completed_grade10'] = $request['yearCompletedGrade10'];
        $student['academic_standing_grade10'] = $request['academicStandingGrade10'];

        $student['school_attended_grade11'] = $request['schoolAttendedGrade11'];
        $student['year_completed_grade11'] = $request['yearCompletedGrade11'];
        $student['academic_standing_grade11'] = $request['academicStandingGrade11'];

        $student['school_attended_grade12'] = $request['schoolAttendedGrade12'];
        $student['year_completed_grade12'] = $request['yearCompletedGrade12'];
        $student['academic_standing_grade12'] = $request['academicStandingGrade12'];

        $createdUser = Student::create($student);

        $examLimit = array();
        $examLimit['lrn'] = $createdUser->lrn;
        $examLimit['exam_count'] = 0;
        ExamLimit::create($examLimit);


        return redirect('student/create')->with('success', 'Student has been added');


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
        $student = Student::find($id);

        return view('admin/student/editstudent', compact('student', $student));
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
        $student = Student::find($id);
        $validated_student = $this->validate($request,[
            'lrn' => 'required|numeric',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'extName' => 'max:255',
            'birthday' => 'required|string|max:255',
            'age' => 'numeric',
            'gender' => 'required|string|max:255',
            'placeOfBirth' => 'required|string|max:255',
            'homeAddress' => 'required|string|max:255',
            'contactNumber' => 'required|numeric',
            'grade' => 'required|string|max:255',
            'section' => 'required|string|max:255'
        ]);

        $student['lrn'] = $validated_student['lrn'];
        $student['first_name'] = $validated_student['firstName'];
        $student['middle_name'] = $request['middleName'];
        $student['last_name'] = $validated_student['lastName'];
        $student['name_ext'] = $validated_student['extName'];

        if($request['image'] != NULL) {

            $cleanName = preg_replace('/\s+/', '_', $validated_student['lrn']);
            $imageName =   $cleanName . (Auth::user()->id * 2) . time() . '.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('image/student'), $imageName);

            $student['image_path'] = $imageName;
        }

        $student['birthday'] = $validated_student['birthday'];
        $student['age'] = $request['ageVal'];
        $student['gender'] = $validated_student['gender'];
        $student['place_of_birth'] = $validated_student['placeOfBirth'];
        $student['home_address'] = $validated_student['homeAddress'];
        $student['contact_number'] = $validated_student['contactNumber'];
        $student['grade'] = $validated_student['grade'];
        $student['section'] = $validated_student['section'];

        // Father
        $student['first_name_father'] = $request['firstNameFather'];
        $student['middle_name_father'] = $request['middleNameFather'];
        $student['last_name_father'] = $request['lastNameFather'];
        $student['birthday_father'] = $request['birthdayFather'];
        $student['occupation_father'] = $request['occupationFather'];
        $student['home_address_father'] = $request['homeAddressFather'];
        $student['contact_number_father'] = $request['contactNumberFather'];

        // Mother
        $student['first_name_mother'] = $request['firstNameMother'];
        $student['middle_name_mother'] = $request['middleNameMother'];
        $student['last_name_mother'] = $request['lastNameMother'];
        $student['birthday_mother'] = $request['birthdayMother'];
        $student['occupation_mother'] = $request['occupationMother'];
        $student['home_address_mother'] = $request['homeAddressMother'];
        $student['contact_number_mother'] = $request['contactNumberMother'];

        // Guardian
        $student['first_name_guardian'] = $request['firstNameGuardian'];
        $student['middle_name_guardian'] = $request['middleNameGuardian'];
        $student['last_name_guardian'] = $request['lastNameGuardian'];
        $student['birthday_guardian'] = $request['birthdayGuardian'];
        $student['occupation_guardian'] = $request['occupationGuardian'];
        $student['home_address_guardian'] = $request['homeAddressGuardian'];
        $student['contact_number_guardian'] = $request['contactNumberGuardian'];

        // Sibling
        $student['first_name_sibling'] = $request['firstNameSlibling'];
        $student['middle_name_sibling'] = $request['middleNameSlibling'];
        $student['last_name_sibling'] = $request['lastNameSlibling'];
        $student['age_sibling'] = $request['ageSibling'];

        //Educational Profile
        // Kindergarten
        $student['school_attended_kindergarten'] = $request['schoolAttendedKinder'];
        $student['year_completed_kindergarten'] = $request['yearCompletedKinder'];
        $student['academic_standing_kindergarten'] = $request['academicStandingKinder'];

        $student['school_attended_grade1'] = $request['schoolAttendedGrade1'];
        $student['year_completed_grade1'] = $request['yearCompletedGrade1'];
        $student['academic_standing_grade1'] = $request['academicStandingGrade1'];

        $student['school_attended_grade2'] = $request['schoolAttendedGrade2'];
        $student['year_completed_grade2'] = $request['yearCompletedGrade2'];
        $student['academic_standing_grade2'] = $request['academicStandingGrade2'];

        $student['school_attended_grade3'] = $request['schoolAttendedGrade3'];
        $student['year_completed_grade3'] = $request['yearCompletedGrade3'];
        $student['academic_standing_grade3'] = $request['academicStandingGrade3'];

        $student['school_attended_grade4'] = $request['schoolAttendedGrade4'];
        $student['year_completed_grade4'] = $request['yearCompletedGrade4'];
        $student['academic_standing_grade4'] = $request['academicStandingGrade4'];

        $student['school_attended_grade5'] = $request['schoolAttendedGrade5'];
        $student['year_completed_grade5'] = $request['yearCompletedGrade5'];
        $student['academic_standing_grade5'] = $request['academicStandingGrade5'];

        $student['school_attended_grade6'] = $request['schoolAttendedGrade6'];
        $student['year_completed_grade6'] = $request['yearCompletedGrade6'];
        $student['academic_standing_grade6'] = $request['academicStandingGrade6'];

        $student['school_attended_grade7'] = $request['schoolAttendedGrade7'];
        $student['year_completed_grade7'] = $request['yearCompletedGrade7'];
        $student['academic_standing_grade7'] = $request['academicStandingGrade7'];

        $student['school_attended_grade8'] = $request['schoolAttendedGrade8'];
        $student['year_completed_grade8'] = $request['yearCompletedGrade8'];
        $student['academic_standing_grade8'] = $request['academicStandingGrade8'];

        $student['school_attended_grade9'] = $request['schoolAttendedGrade9'];
        $student['year_completed_grade9'] = $request['yearCompletedGrade9'];
        $student['academic_standing_grade9'] = $request['academicStandingGrade9'];

        $student['school_attended_grade10'] = $request['schoolAttendedGrade10'];
        $student['year_completed_grade10'] = $request['yearCompletedGrade10'];
        $student['academic_standing_grade10'] = $request['academicStandingGrade10'];

        $student['school_attended_grade11'] = $request['schoolAttendedGrade11'];
        $student['year_completed_grade11'] = $request['yearCompletedGrade11'];
        $student['academic_standing_grade11'] = $request['academicStandingGrade11'];

        $student['school_attended_grade12'] = $request['schoolAttendedGrade12'];
        $student['year_completed_grade12'] = $request['yearCompletedGrade12'];
        $student['academic_standing_grade12'] = $request['academicStandingGrade12'];

        $student->save();

        $grade10 = 'Grade 10';
        $grade12 = 'Grade 12';

        if($request['grade'] == $grade10) {
            $examLimitObj= ExamLimit::where('lrn', $student['lrn'])->get()[0];
            $examLimit = ExamLimit::find($examLimitObj['id']);
            $examLimit['exam_count'] = 1;
            $examLimit->save();
        } else if($request['grade'] == $grade12) {
            $examLimitObj= ExamLimit::where('lrn', $student['lrn'])->get()[0];
            $examLimit = ExamLimit::find($examLimitObj['id']);
            $examLimit['exam_count'] = 0;
            $examLimit->save();
        }

        return redirect('student')->with('success', 'Student has been updated');
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
