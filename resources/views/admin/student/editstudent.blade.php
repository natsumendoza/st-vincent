@extends('layouts.app')

@section('content')
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Student</div>

                    <div class="row" style="">
                        <ul class="nav nav-tabs">
                            <li style="margin-left: 15px;"><a class="active tab1" href="#tab1" data-toggle="tab">Personal Profile</a></li>
                            <li><a href="#tab2" class="tab2" data-toggle="tab">Family Profile</a></li>
                            <li><a href="#tab3" class="tab3" data-toggle="tab">Educational Profile</a></li>
                        </ul>

                    </div>

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ action('StudentController@update', base64_encode($student['id'])) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <input name="ageVal" type="hidden" value="{{$student['age']}}">
                        <div class="tab-content" style="width: 100%;">
                            <div class="tab-pane active" id="tab1">
                                <div class="panel-heading">I. Personal Profile</div>
                                <div class="panel-body">

                                    <div class="form-group{{ $errors->has('lrn') ? ' has-error' : '' }}">
                                        <label for="lrn" class="col-md-4 control-label">LRN</label>

                                        <div class="col-md-6">
                                            <input id="lrn" type="text" class="form-control" name="lrn" minlength="12" maxlength="12" value="{{ $student['lrn'] }}" required autofocus>

                                            @if ($errors->has('lrn'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('lrn') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                        <label for="firstName" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="firstName" type="text" class="form-control" name="firstName" value="{{ $student['first_name'] }}" required autofocus>

                                            @if ($errors->has('firstName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('middleName') ? ' has-error' : '' }}">
                                        <label for="middleName" class="col-md-4 control-label">Middle Name</label>

                                        <div class="col-md-6">
                                            <input id="middleName" type="text" class="form-control" name="middleName" value="{{ $student['middle_name'] }}" autofocus required>
                                            <input id="noMiddle" type="checkbox"><label for="noMiddle">no middle name</label>
                                            @if ($errors->has('middleName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                                        <label for="lastName" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="lastName" type="text" class="form-control" name="lastName" value="{{ $student['last_name'] }}" required autofocus>

                                            @if ($errors->has('lastName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('extName') ? ' has-error' : '' }}">
                                        <label for="extName" class="col-md-4 control-label">Extension Name</label>

                                        <div class="col-md-6">
                                            <input id="extName" placeholder="Extension Name" type="text" class="form-control" name="extName" value="{{ $student['name_ext'] }}" autofocus>
                                            (e.g. JR, III, IV, V)
                                            @if ($errors->has('extName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('extName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="image" class="col-md-4 control-label">Picture (optional)</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control" name="image" value="">

                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                        <label for="birthday" class="col-md-4 control-label">Birthday</label>

                                        <div class="col-md-6">
                                            <input id="birthday" type="text" class="form-control" name="birthday" value="{{ $student['birthday'] }}" required autofocus>

                                            @if ($errors->has('birthday'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('birthday') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                        <label for="age" class="col-md-4 control-label">Age</label>

                                        <div class="col-md-6">
                                            <input id="age" type="number" min="5" class="form-control" name="age" value="{{ $student['age'] }}" required autofocus disabled>

                                            @if ($errors->has('age'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <label for="gender" class="col-md-4 control-label">Gender</label>

                                        <div class="col-md-6">
                                            <select id="gender" type="text" class="form-control" name="gender" value="{{ $student['gender'] }}" required autofocus>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @if ($errors->has('gender'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('placeOfBirth') ? ' has-error' : '' }}">
                                        <label for="placeOfBirth" class="col-md-4 control-label">Place of birth</label>

                                        <div class="col-md-6">
                                            <input id="placeOfBirth" placeholder="Municipality, Province" type="text" class="form-control" name="placeOfBirth" value="{{ $student['place_of_birth'] }}" required autofocus>

                                            @if ($errors->has('placeOfBirth'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('placeOfBirth') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('homeAddress') ? ' has-error' : '' }}">
                                        <label for="homeAddress" class="col-md-4 control-label">Home Address</label>

                                        <div class="col-md-6">
                                            <input id="homeAddress" type="text" class="form-control" name="homeAddress" value="{{ $student['home_address'] }}" required autofocus>

                                            @if ($errors->has('homeAddress'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('homeAddress') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('contactNumber') ? ' has-error' : '' }}">
                                        <label for="contactNumber" class="col-md-4 control-label">Cellphone Number</label>

                                        <div class="col-md-6">
                                            <input id="contactNumber" minlength="11" maxlength="11" type="number" class="form-control" name="contactNumber" value="{{ $student['contact_number'] }}" required autofocus>

                                            @if ($errors->has('contactNumber'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('contactNumber') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                                        <label for="contactNumber" class="col-md-4 control-label">Grade</label>

                                        <div class="col-md-6">
                                            <select id="grade" type="text" class="form-control" name="grade" value="{{ $student['grade'] }}" required autofocus>
                                                <option value="Grade 1" {{ ($student['grade'] == 'Grade 1') ? "selected" : "" }}>Grade 1</option>
                                                <option value="Grade 2" {{ ($student['grade'] == 'Grade 2') ? "selected" : "" }}>Grade 2</option>
                                                <option value="Grade 3" {{ ($student['grade'] == 'Grade 3') ? "selected" : "" }}>Grade 3</option>
                                                <option value="Grade 4" {{ ($student['grade'] == 'Grade 4') ? "selected" : "" }}>Grade 4</option>
                                                <option value="Grade 5" {{ ($student['grade'] == 'Grade 5') ? "selected" : "" }}>Grade 5</option>
                                                <option value="Grade 6" {{ ($student['grade'] == 'Grade 6') ? "selected" : "" }}>Grade 6</option>
                                                <option value="Grade 7" {{ ($student['grade'] == 'Grade 7') ? "selected" : "" }}>Grade 7</option>
                                                <option value="Grade 8" {{ ($student['grade'] == 'Grade 8') ? "selected" : "" }}>Grade 8</option>
                                                <option value="Grade 9" {{ ($student['grade'] == 'Grade 9') ? "selected" : "" }}>Grade 9</option>
                                                <option value="Grade 10" {{ ($student['grade'] == 'Grade 10') ? "selected" : "" }}>Grade 10</option>
                                                <option value="Grade 11" {{ ($student['grade'] == 'Grade 11') ? "selected" : "" }}>Grade 11</option>
                                                <option value="Grade 12" {{ ($student['grade'] == 'Grade 12') ? "selected" : "" }}>Grade 12</option>
												<option value="Transferee" {{ ($student['grade'] == 'Transferee') ? "selected" : "" }}>Transferee</option>
												<option value="Drop out" {{ ($student['grade'] == 'Drop out') ? "selected" : "" }}>Drop out</option>
												<option value="Graduate" {{ ($student['grade'] == 'Graduate') ? "selected" : "" }}>Graduate</option>
											</select>
                                            @if ($errors->has('grade'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                                        <label for="contactNumber" class="col-md-4 control-label">Section</label>

                                        <div class="col-md-6">
                                            <input id="section" type="text" class="form-control" name="section" value="{{ $student['section'] }}" required autofocus>

                                            @if ($errors->has('section'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="panel-heading">II. Family Profile</div>
                                <div class="panel-heading">Father</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="firstNameFather" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="firstNameFather" type="text" class="form-control" name="firstNameFather" value="{{ $student['first_name_father'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middleNameFather" class="col-md-4 control-label">Middle Name</label>

                                        <div class="col-md-6">
                                            <input id="middleNameFather" type="text" class="form-control" name="middleNameFather" value="{{ $student['middle_name_father'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastNameFather" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="lastNameFather" type="text" class="form-control" name="lastNameFather" value="{{ $student['last_name_father'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="birthdayFather" class="col-md-4 control-label">Birthday</label>

                                        <div class="col-md-6">
                                            <input id="birthdayFather" type="text" class="form-control" name="birthdayFather" value="{{ $student['birthday_father'] }}">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="occupationFather" class="col-md-4 control-label">Occupation</label>

                                        <div class="col-md-6">
                                            <input id="occupationFather" type="text" class="form-control" name="occupationFather" value="{{ $student['occupation_father'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="homeAddressFather" class="col-md-4 control-label">Home Address</label>

                                        <div class="col-md-6">
                                            <input id="homeAddressFather" type="text" class="form-control" name="homeAddressFather" value="{{ $student['home_address_father'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="contactNumberFather" class="col-md-4 control-label">Cellphone Number</label>

                                        <div class="col-md-6">
                                            <input id="contactNumberFather" type="number" class="form-control" name="contactNumberFather" value="{{ $student['contact_number_father'] }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="panel-heading">Mother</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="firstNameMother" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="firstNameMother" type="text" class="form-control" name="firstNameMother" value="{{ $student['first_name_mother'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middleNameMother" class="col-md-4 control-label">Middle Name</label>

                                        <div class="col-md-6">
                                            <input id="middleNameMother" type="text" class="form-control" name="middleNameMother" value="{{ $student['middle_name_mother'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastNameMother" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="lastNameMother" type="text" class="form-control" name="lastNameMother" value="{{ $student['last_name_mother'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="birthdayMother" class="col-md-4 control-label">Birthday</label>

                                        <div class="col-md-6">
                                            <input id="birthdayMother" type="text" class="form-control" name="birthdayMother" value="{{ $student['birthday_mother'] }}">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="occupationMother" class="col-md-4 control-label">Occupation</label>

                                        <div class="col-md-6">
                                            <input id="occupationMother" type="text" class="form-control" name="occupationMother" value="{{ $student['occupation_mother'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="homeAddressMother" class="col-md-4 control-label">Home Address</label>

                                        <div class="col-md-6">
                                            <input id="homeAddressMother" type="text" class="form-control" name="homeAddressMother" value="{{ $student['home_address_mother'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="contactNumberMother" class="col-md-4 control-label">Cellphone Number</label>

                                        <div class="col-md-6">
                                            <input id="contactNumberMother" maxlength="11" type="number" class="form-control" name="contactNumberMother" value="{{ $student['contact_number_mother'] }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="panel-heading">Guardian</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="firstNameGuardian" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="firstNameGuardian" type="text" class="form-control" name="firstNameGuardian" value="{{ $student['first_name_guardian'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middleNameGuardian" class="col-md-4 control-label">Middle Name</label>

                                        <div class="col-md-6">
                                            <input id="middleNameGuardian" type="text" class="form-control" name="middleNameGuardian" value="{{ $student['middle_name_guardian'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastNameGuardian" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="lastNameGuardian" type="text" class="form-control" name="lastNameGuardian" value="{{ $student['last_name_guardian'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group}">
                                        <label for="birthdayGuardian" class="col-md-4 control-label">Birthday</label>

                                        <div class="col-md-6">
                                            <input id="birthdayGuardian" type="text" class="form-control" name="birthdayGuardian" value="{{ $student['birthday_guardian'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="occupationGuardian" class="col-md-4 control-label">Occupation</label>

                                        <div class="col-md-6">
                                            <input id="occupationGuardian" type="text" class="form-control" name="occupationGuardian" value="{{ $student['occupation_guardian'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="homeAddressGuardian" class="col-md-4 control-label">Home Address</label>

                                        <div class="col-md-6">
                                            <input id="homeAddressGuardian" type="text" class="form-control" name="homeAddressGuardian" value="{{ $student['home_address_guardian'] }}">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="contactNumberGuardian" class="col-md-4 control-label">Cellphone Number</label>

                                        <div class="col-md-6">
                                            <input id="contactNumberGuardian" type="number" class="form-control" name="contactNumberGuardian" value="{{ $student['contact_number_guardian'] }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="panel-heading">Siblings</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="firstNameSlibling" class="col-md-4 control-label">First Name</label>

                                        <div class="col-md-6">
                                            <input id="firstNameSlibling" type="text" class="form-control" name="firstNameSlibling" value="{{ $student['first_name_sibling'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middleNameSlibling" class="col-md-4 control-label">Middle Name</label>

                                        <div class="col-md-6">
                                            <input id="middleNameSlibling" type="text" class="form-control" name="middleNameSlibling" value="{{ $student['middle_name_sibling'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastNameSlibling" class="col-md-4 control-label">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="lastNameSlibling" type="text" class="form-control" name="lastNameSlibling" value="{{ $student['last_name_sibling'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ageSibling" class="col-md-4 control-label">Age</label>

                                        <div class="col-md-6">
                                            <input id="ageSibling" type="text" class="form-control" name="ageSibling" value="{{ $student['age_sibling'] }}">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="tab-pane" id="tab3">
                                <div class="panel-heading">III. Educational Profile</div>
                                <div class="panel-heading">Kindergarten</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedKinder" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedKinder" type="text" class="form-control" name="schoolAttendedKinder" value="{{ $student['school_attended_kinder'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedKinder" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedKinder" type="text" class="form-control" name="yearCompletedKinder" value="{{ $student['year_completed_kinder'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingKinder" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingKinder" type="text" class="form-control" name="academicStandingKinder" value="{{ $student['academic_standing_kinder'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 1</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade1" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade1" type="text" class="form-control" name="schoolAttendedGrade1" value="{{ $student['school_attended_grade1'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade1" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade1" type="text" class="form-control" name="yearCompletedGrade1" value="{{ $student['year_completed_grade1'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade1" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade1" type="text" class="form-control" name="academicStandingGrade1" value="{{ $student['academic_standing_grade1'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 2</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade2" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade2" type="text" class="form-control" name="schoolAttendedGrade2" value="{{ $student['school_attended_grade2'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade2" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade2" type="text" class="form-control" name="yearCompletedGrade2" value="{{ $student['year_completed_grade2'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade2" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade2" type="text" class="form-control" name="academicStandingGrade2" value="{{ $student['academic_standing_grade2'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 3</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade3" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade3" type="text" class="form-control" name="schoolAttendedGrade3" value="{{ $student['school_attended_grade3'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade3" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade3" type="text" class="form-control" name="yearCompletedGrade3" value="{{ $student['year_completed_grade3'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade3" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade3" type="text" class="form-control" name="academicStandingGrade3" value="{{ $student['academic_standing_grade3'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 4</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade4" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade4" type="text" class="form-control" name="schoolAttendedGrade4" value="{{ $student['school_attended_grade4'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade4" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade4" type="text" class="form-control" name="yearCompletedGrade4" value="{{ $student['year_completed_grade4'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade4" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade4" type="text" class="form-control" name="academicStandingGrade4" value="{{ $student['academic_standing_grade4'] }}" >
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 5</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade5" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade5" type="text" class="form-control" name="schoolAttendedGrade5" value="{{ $student['school_attended_grade5'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade5" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade5" type="text" class="form-control" name="yearCompletedGrade5" value="{{ $student['year_completed_grade5'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade5" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade5" type="text" class="form-control" name="academicStandingGrade5" value="{{ $student['academic_standing_grade5'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 6</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade6" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade6" type="text" class="form-control" name="schoolAttendedGrade6" value="{{ $student['school_attended_grade6'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade6" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade6" type="text" class="form-control" name="yearCompletedGrade6" value="{{ $student['year_completed_grade6'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade6" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade6" type="text" class="form-control" name="academicStandingGrade6" value="{{ $student['academic_standing_grade6'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 7</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade7" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade7" type="text" class="form-control" name="schoolAttendedGrade7" value="{{ $student['school_attended_grade7'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade7" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade7" type="text" class="form-control" name="yearCompletedGrade7" value="{{ $student['year_completed_grade7'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade7" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade7" type="text" class="form-control" name="academicStandingGrade7" value="{{ $student['academic_standing_grade7'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 8</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade8" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade8" type="text" class="form-control" name="schoolAttendedGrade8" value="{{ $student['school_attended_grade8'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade8" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade8" type="text" class="form-control" name="yearCompletedGrade8" value="{{ $student['year_completed_grade8'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade8" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade8" type="text" class="form-control" name="academicStandingGrade8" value="{{ $student['academic_standing_grade8'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 9</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade9" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade9" type="text" class="form-control" name="schoolAttendedGrade9" value="{{ $student['school_attended_grade9'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade9" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade9" type="text" class="form-control" name="yearCompletedGrade9" value="{{ $student['year_completed_grade9'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade9" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade9" type="text" class="form-control" name="academicStandingGrade9" value="{{ $student['academic_standing_grade9'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 10</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade10" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade10" type="text" class="form-control" name="schoolAttendedGrade10" value="{{ $student['school_attended_grade10'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade10" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade10" type="text" class="form-control" name="yearCompletedGrade10" value="{{ $student['year_completed_grade10'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStanding10" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStanding10" type="text" class="form-control" name="academicStanding10" value="{{ $student['academic_standing_grade10'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 11</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade11" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade11" type="text" class="form-control" name="schoolAttendedGrade11" value="{{ $student['school_attended_grade11'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade11" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade11" type="text" class="form-control" name="yearCompletedGrade11" value="{{ $student['year_completed_grade11'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade11" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade11" type="text" class="form-control" name="academicStandingGrade11" value="{{ $student['academic_standing_grade11'] }}">
                                        </div>
                                    </div>


                                </div>

                                <div class="panel-heading">Grade 12</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="schoolAttendedGrade12" class="col-md-4 control-label">School Attended</label>

                                        <div class="col-md-6">
                                            <input id="schoolAttendedGrade12" type="text" class="form-control" name="schoolAttendedGrade12" value="{{ $student['school_attended_grade12'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearCompletedGrade12" class="col-md-4 control-label">Year Completed</label>

                                        <div class="col-md-6">
                                            <input id="yearCompletedGrade12" type="text" class="form-control" name="yearCompletedGrade12" value="{{ $student['year_completed_grade12'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="academicStandingGrade12" class="col-md-4 control-label">Academic Standing</label>

                                        <div class="col-md-6">
                                            <input id="academicStandingGrade12" type="text" class="form-control" name="academicStandingGrade12" value="{{ $student['academic_standing_grade12'] }}">
                                        </div>
                                    </div>


                                </div>



                            </div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" id="save-btn" class="btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
