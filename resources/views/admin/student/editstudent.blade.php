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

                    <form class="form-horizontal" method="POST" action="{{ action('StudentController@update', base64_encode($student['id'])) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="panel-heading">I. Personal Profile</div>
                        <div class="panel-body">

                            <div class="form-group{{ $errors->has('lrn') ? ' has-error' : '' }}">
                                <label for="lrn" class="col-md-4 control-label">LRN</label>

                                <div class="col-md-6">
                                    <input id="lrn" type="text" class="form-control" name="lrn" value="{{ $student['lrn'] }}" required autofocus>

                                    @if ($errors->has('lrn'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lrn') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $student['name'] }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                                    <input id="age" type="text" class="form-control" name="age" value="{{ $student['age'] }}" required autofocus>

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
                                    <input id="placeOfBirth" type="text" class="form-control" name="placeOfBirth" value="{{ $student['place_of_birth'] }}" required autofocus>

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
                                <label for="contactNumber" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumber" type="text" class="form-control" name="contactNumber" value="{{ $student['contact_number'] }}" required autofocus>

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
                                    <input id="grade" type="text" class="form-control" name="grade" value="{{ $student['grade'] }}" required autofocus>

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
                        <hr>

                        <div class="panel-heading">II. Family Profile</div>
                        <div class="panel-heading">Father</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="nameFather" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameFather" type="text" class="form-control" name="nameFather" value="{{ old('nameFather') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birthdayFather" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthdayFather" type="text" class="form-control" name="birthdayFather" value="{{ old('birthdayFather') }}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="occupationFather" class="col-md-4 control-label">Occupation</label>

                                <div class="col-md-6">
                                    <input id="occupationFather" type="text" class="form-control" name="occupationFather" value="{{ old('occupationFather') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="homeAddressFather" class="col-md-4 control-label">Home Address</label>

                                <div class="col-md-6">
                                    <input id="homeAddressFather" type="text" class="form-control" name="homeAddressFather" value="{{ old('homeAddressFather') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contactNumberFather" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumberFather" type="text" class="form-control" name="contactNumberFather" value="{{ old('contactNumberFather') }}">
                                </div>
                            </div>

                        </div>

                        <div class="panel-heading">Mother</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="nameMother" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameMother" type="text" class="form-control" name="nameMother" value="{{ old('nameMother') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birthdayMother" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthdayMother" type="text" class="form-control" name="birthdayMother" value="{{ old('birthdayMother') }}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="occupationMother" class="col-md-4 control-label">Occupation</label>

                                <div class="col-md-6">
                                    <input id="occupationMother" type="text" class="form-control" name="occupationMother" value="{{ old('occupationMother') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="homeAddressMother" class="col-md-4 control-label">Home Address</label>

                                <div class="col-md-6">
                                    <input id="homeAddressMother" type="text" class="form-control" name="homeAddressMother" value="{{ old('homeAddressMother') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contactNumberMother" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumberMother" type="text" class="form-control" name="contactNumberMother" value="{{ old('contactNumberMother') }}">
                                </div>
                            </div>

                        </div>

                        <div class="panel-heading">Guardian</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="nameGuardian" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameGuardian" type="text" class="form-control" name="nameGuardian" value="{{ old('nameGuardian') }}">
                                </div>
                            </div>

                            <div class="form-group}">
                                <label for="birthdayGuardian" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthdayGuardian" type="text" class="form-control" name="birthdayGuardian" value="{{ old('birthdayGuardian') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="occupationGuardian" class="col-md-4 control-label">Occupation</label>

                                <div class="col-md-6">
                                    <input id="occupationGuardian" type="text" class="form-control" name="occupationGuardian" value="{{ old('occupationGuardian') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="homeAddressGuardian" class="col-md-4 control-label">Home Address</label>

                                <div class="col-md-6">
                                    <input id="homeAddressGuardian" type="text" class="form-control" name="homeAddressGuardian" value="{{ old('homeAddressGuardian') }}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contactNumberGuardian" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumberGuardian" type="text" class="form-control" name="contactNumberGuardian" value="{{ old('contactNumberGuardian') }}">
                                </div>
                            </div>

                        </div>

                        <div class="panel-heading">Siblings</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="nameSlibling" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameSlibling" type="text" class="form-control" name="nameSlibling" value="{{ old('nameSlibling') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ageSibling" class="col-md-4 control-label">Age</label>

                                <div class="col-md-6">
                                    <input id="ageSibling" type="text" class="form-control" name="ageSibling" value="{{ old('ageSibling') }}">
                                </div>
                            </div>


                        </div>

                        <hr>

                        <div class="panel-heading">III. Educational Profile</div>
                        <div class="panel-heading">Kindergarten</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedKinder" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedKinder" type="text" class="form-control" name="schoolAttendedKinder" value="{{ old('schoolAttendedKinder') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedKinder" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedKinder" type="text" class="form-control" name="yearCompletedKinder" value="{{ old('yearCompletedKinder') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingKinder" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingKinder" type="text" class="form-control" name="academicStandingKinder" value="{{ old('academicStandingKinder') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 1</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade1" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade1" type="text" class="form-control" name="schoolAttendedGrade1" value="{{ old('schoolAttendedGrade1') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade1" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade1" type="text" class="form-control" name="yearCompletedGrade1" value="{{ old('yearCompletedGrade1') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade1" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade1" type="text" class="form-control" name="academicStandingGrade1" value="{{ old('academicStandingGrade1') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 2</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade2" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade2" type="text" class="form-control" name="schoolAttendedGrade2" value="{{ old('schoolAttendedGrade2') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade2" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade2" type="text" class="form-control" name="yearCompletedGrade2" value="{{ old('yearCompletedGrade2') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade2" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade2" type="text" class="form-control" name="academicStandingGrade2" value="{{ old('academicStandingGrade2') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 3</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade3" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade3" type="text" class="form-control" name="schoolAttendedGrade3" value="{{ old('schoolAttendedGrade3') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade3" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade3" type="text" class="form-control" name="yearCompletedGrade3" value="{{ old('yearCompletedGrade3') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade3" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade3" type="text" class="form-control" name="academicStandingGrade3" value="{{ old('academicStandingGrade3') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 4</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade4" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade4" type="text" class="form-control" name="schoolAttendedGrade4" value="{{ old('schoolAttendedGrade4') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade4" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade4" type="text" class="form-control" name="yearCompletedGrade4" value="{{ old('yearCompletedGrade4') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade4" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade4" type="text" class="form-control" name="academicStandingGrade4" value="{{ old('academicStandingGrade4') }}" >
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 5</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade5" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade5" type="text" class="form-control" name="schoolAttendedGrade5" value="{{ old('schoolAttendedGrade5') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade5" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade5" type="text" class="form-control" name="yearCompletedGrade5" value="{{ old('yearCompletedGrade5') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade5" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade5" type="text" class="form-control" name="academicStandingGrade5" value="{{ old('academicStandingGrade5') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 6</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade6" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade6" type="text" class="form-control" name="schoolAttendedGrade6" value="{{ old('schoolAttendedGrade6') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade6" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade6" type="text" class="form-control" name="yearCompletedGrade6" value="{{ old('yearCompletedGrade6') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade6" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade6" type="text" class="form-control" name="academicStandingGrade6" value="{{ old('academicStandingGrade6') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 7</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade7" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade7" type="text" class="form-control" name="schoolAttendedGrade7" value="{{ old('schoolAttendedGrade7') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade7" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade7" type="text" class="form-control" name="yearCompletedGrade7" value="{{ old('yearCompletedGrade7') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade7" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade7" type="text" class="form-control" name="academicStandingGrade7" value="{{ old('academicStandingGrade7') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 8</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade8" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade8" type="text" class="form-control" name="schoolAttendedGrade8" value="{{ old('schoolAttendedGrade8') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade8" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade8" type="text" class="form-control" name="yearCompletedGrade8" value="{{ old('yearCompletedGrade8') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade8" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade8" type="text" class="form-control" name="academicStandingGrade8" value="{{ old('academicStandingGrade8') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 9</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade9" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade9" type="text" class="form-control" name="schoolAttendedGrade9" value="{{ old('schoolAttendedGrade9') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade9" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade9" type="text" class="form-control" name="yearCompletedGrade9" value="{{ old('yearCompletedGrade9') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade9" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade9" type="text" class="form-control" name="academicStandingGrade9" value="{{ old('academicStandingGrade9') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 10</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade10" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade10" type="text" class="form-control" name="schoolAttendedGrade10" value="{{ old('schoolAttendedGrade10') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade10" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade10" type="text" class="form-control" name="yearCompletedGrade10" value="{{ old('yearCompletedGrade10') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStanding10" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStanding10" type="text" class="form-control" name="academicStanding10" value="{{ old('academicStanding10') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 11</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade11" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade11" type="text" class="form-control" name="schoolAttendedGrade11" value="{{ old('schoolAttendedGrade11') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade11" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade11" type="text" class="form-control" name="yearCompletedGrade11" value="{{ old('yearCompletedGrade11') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade11" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade11" type="text" class="form-control" name="academicStandingGrade11" value="{{ old('academicStandingGrade11') }}">
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 12</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="schoolAttendedGrade12" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade12" type="text" class="form-control" name="schoolAttendedGrade12" value="{{ old('schoolAttendedGrade12') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearCompletedGrade12" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade12" type="text" class="form-control" name="yearCompletedGrade12" value="{{ old('yearCompletedGrade12') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="academicStandingGrade12" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade12" type="text" class="form-control" name="academicStandingGrade12" value="{{ old('academicStandingGrade12') }}">
                                </div>
                            </div>


                        </div>


                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
