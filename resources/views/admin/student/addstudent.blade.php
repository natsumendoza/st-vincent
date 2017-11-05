@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Student</div>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="panel-heading">I. Personal Profile</div>
                    <div class="panel-body">

                            <div class="form-group{{ $errors->has('lrn') ? ' has-error' : '' }}">
                                <label for="lrn" class="col-md-4 control-label">LRN</label>

                                <div class="col-md-6">
                                    <input id="lrn" type="text" class="form-control" name="lrn" value="{{ old('lrn') }}" required autofocus>

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
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                    <input id="birthday" type="text" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>

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
                                    <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" required autofocus>

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
                                    <select id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>
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
                                    <input id="placeOfBirth" type="text" class="form-control" name="placeOfBirth" value="{{ old('placeOfBirth') }}" required autofocus>

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
                                    <input id="homeAddress" type="text" class="form-control" name="homeAddress" value="{{ old('homeAddress') }}" required autofocus>

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
                                    <input id="contactNumber" type="text" class="form-control" name="contactNumber" value="{{ old('contactNumber') }}" required autofocus>

                                    @if ($errors->has('contactNumber'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contactNumber') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                    </div>
                        <hr>

                        <div class="panel-heading">II. Family Profile</div>
                        <div class="panel-heading">Father</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('nameFather') ? ' has-error' : '' }}">
                                <label for="nameFather" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameFather" type="text" class="form-control" name="nameFather" value="{{ old('nameFather') }}" required autofocus>

                                    @if ($errors->has('nameFather'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nameFather') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthdayFather') ? ' has-error' : '' }}">
                                <label for="birthdayFather" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthdayFather" type="text" class="form-control" name="birthdayFather" value="{{ old('birthdayFather') }}" required autofocus>

                                    @if ($errors->has('birthdayFather'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdayFather') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('occupationFather') ? ' has-error' : '' }}">
                                <label for="occupationFather" class="col-md-4 control-label">Occupation</label>

                                <div class="col-md-6">
                                    <input id="occupationFather" type="text" class="form-control" name="occupationFather" value="{{ old('occupationFather') }}" required autofocus>

                                    @if ($errors->has('occupationFather'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('occupationFather') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('homeAddressFather') ? ' has-error' : '' }}">
                                <label for="homeAddressFather" class="col-md-4 control-label">Home Address</label>

                                <div class="col-md-6">
                                    <input id="homeAddressFather" type="text" class="form-control" name="homeAddressFather" value="{{ old('homeAddressFather') }}" required autofocus>

                                    @if ($errors->has('homeAddressFather'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('homeAddressFather') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contactNumberFather') ? ' has-error' : '' }}">
                                <label for="contactNumberFather" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumberFather" type="text" class="form-control" name="contactNumberFather" value="{{ old('contactNumberFather') }}" required autofocus>

                                    @if ($errors->has('contactNumberFather'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contactNumberFather') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="panel-heading">Mother</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('nameMother') ? ' has-error' : '' }}">
                                <label for="nameMother" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameMother" type="text" class="form-control" name="nameMother" value="{{ old('nameMother') }}" required autofocus>

                                    @if ($errors->has('nameMother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nameMother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthdayMother') ? ' has-error' : '' }}">
                                <label for="birthdayMother" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthdayMother" type="text" class="form-control" name="birthdayMother" value="{{ old('birthdayMother') }}" required autofocus>

                                    @if ($errors->has('birthdayMother'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdayMother') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('occupationMother') ? ' has-error' : '' }}">
                                <label for="occupationMother" class="col-md-4 control-label">Occupation</label>

                                <div class="col-md-6">
                                    <input id="occupationMother" type="text" class="form-control" name="occupationMother" value="{{ old('occupationMother') }}" required autofocus>

                                    @if ($errors->has('occupationMother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('occupationMother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('homeAddressMother') ? ' has-error' : '' }}">
                                <label for="homeAddressMother" class="col-md-4 control-label">Home Address</label>

                                <div class="col-md-6">
                                    <input id="homeAddressMother" type="text" class="form-control" name="homeAddressMother" value="{{ old('homeAddressMother') }}" required autofocus>

                                    @if ($errors->has('homeAddressMother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('homeAddressMother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contactNumberMother') ? ' has-error' : '' }}">
                                <label for="contactNumberMother" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumberMother" type="text" class="form-control" name="contactNumberMother" value="{{ old('contactNumberMother') }}" required autofocus>

                                    @if ($errors->has('contactNumberMother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contactNumberMother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="panel-heading">Guardian</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('nameGuardian') ? ' has-error' : '' }}">
                                <label for="nameGuardian" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameGuardian" type="text" class="form-control" name="nameGuardian" value="{{ old('nameGuardian') }}" required autofocus>

                                    @if ($errors->has('nameGuardian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nameGuardian') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthdayGuardian') ? ' has-error' : '' }}">
                                <label for="birthdayGuardian" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthdayGuardian" type="text" class="form-control" name="birthdayGuardian" value="{{ old('birthdayGuardian') }}" required autofocus>

                                    @if ($errors->has('birthdayGuardian'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdayGuardian') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('occupationGuardian') ? ' has-error' : '' }}">
                                <label for="occupationGuardian" class="col-md-4 control-label">Occupation</label>

                                <div class="col-md-6">
                                    <input id="occupationGuardian" type="text" class="form-control" name="occupationGuardian" value="{{ old('occupationGuardian') }}" required autofocus>

                                    @if ($errors->has('occupationGuardian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('occupationGuardian') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('homeAddressGuardian') ? ' has-error' : '' }}">
                                <label for="homeAddressGuardian" class="col-md-4 control-label">Home Address</label>

                                <div class="col-md-6">
                                    <input id="homeAddressGuardian" type="text" class="form-control" name="homeAddressGuardian" value="{{ old('homeAddressGuardian') }}" required autofocus>

                                    @if ($errors->has('homeAddressGuardian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('homeAddressGuardian') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contactNumberGuardian') ? ' has-error' : '' }}">
                                <label for="contactNumberGuardian" class="col-md-4 control-label">Contact Number</label>

                                <div class="col-md-6">
                                    <input id="contactNumberGuardian" type="text" class="form-control" name="contactNumberGuardian" value="{{ old('contactNumberGuardian') }}" required autofocus>

                                    @if ($errors->has('contactNumberGuardian'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contactNumberGuardian') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="panel-heading">Siblings</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('nameSlibling') ? ' has-error' : '' }}">
                                <label for="nameSlibling" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="nameSlibling" type="text" class="form-control" name="nameSlibling" value="{{ old('nameSlibling') }}" required autofocus>

                                    @if ($errors->has('nameSlibling'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nameSlibling') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('ageSibling') ? ' has-error' : '' }}">
                                <label for="ageSibling" class="col-md-4 control-label">Age</label>

                                <div class="col-md-6">
                                    <input id="ageSibling" type="text" class="form-control" name="ageSibling" value="{{ old('ageSibling') }}" required autofocus>

                                    @if ($errors->has('ageSibling'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ageSibling') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <hr>

                        <div class="panel-heading">III. Educational Profile</div>
                        <div class="panel-heading">Kindergarten</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedKinder') ? ' has-error' : '' }}">
                                <label for="schoolAttendedKinder" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedKinder" type="text" class="form-control" name="schoolAttendedKinder" value="{{ old('schoolAttendedKinder') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedKinder'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedKinder') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedKinder') ? ' has-error' : '' }}">
                                <label for="yearCompletedKinder" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedKinder" type="text" class="form-control" name="yearCompletedKinder" value="{{ old('yearCompletedKinder') }}" required autofocus>

                                    @if ($errors->has('yearCompletedKinder'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedKinder') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingKinder') ? ' has-error' : '' }}">
                                <label for="academicStandingKinder" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingKinder" type="text" class="form-control" name="academicStandingKinder" value="{{ old('academicStandingKinder') }}" required autofocus>

                                    @if ($errors->has('academicStandingKinder'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingKinder') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 1</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade1') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade1" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade1" type="text" class="form-control" name="schoolAttendedGrade1" value="{{ old('schoolAttendedGrade1') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade1'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade1') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade1" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade1" type="text" class="form-control" name="yearCompletedGrade1" value="{{ old('yearCompletedGrade1') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade1') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade1" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade1" type="text" class="form-control" name="academicStandingGrade1" value="{{ old('academicStandingGrade1') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 2</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade2') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade2" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade2" type="text" class="form-control" name="schoolAttendedGrade2" value="{{ old('schoolAttendedGrade2') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade2'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade2') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade2" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade2" type="text" class="form-control" name="yearCompletedGrade2" value="{{ old('yearCompletedGrade2') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade2') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade2" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade2" type="text" class="form-control" name="academicStandingGrade2" value="{{ old('academicStandingGrade2') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 3</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade3') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade3" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade3" type="text" class="form-control" name="schoolAttendedGrade3" value="{{ old('schoolAttendedGrade3') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade3'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade3') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade3') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade3" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade3" type="text" class="form-control" name="yearCompletedGrade3" value="{{ old('yearCompletedGrade3') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade3') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade3" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade3" type="text" class="form-control" name="academicStandingGrade3" value="{{ old('academicStandingGrade3') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 4</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade4') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade4" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade4" type="text" class="form-control" name="schoolAttendedGrade4" value="{{ old('schoolAttendedGrade4') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade4'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade4') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade4') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade4" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade4" type="text" class="form-control" name="yearCompletedGrade4" value="{{ old('yearCompletedGrade4') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade4'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade4') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade4') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade4" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade4" type="text" class="form-control" name="academicStandingGrade4" value="{{ old('academicStandingGrade4') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade4'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade4') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 5</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade5') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade5" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade5" type="text" class="form-control" name="schoolAttendedGrade5" value="{{ old('schoolAttendedGrade5') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade5'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade5') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade5') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade5" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade5" type="text" class="form-control" name="yearCompletedGrade5" value="{{ old('yearCompletedGrade5') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade5'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade5') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade5') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade5" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade5" type="text" class="form-control" name="academicStandingGrade5" value="{{ old('academicStandingGrade5') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade5'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade5') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 6</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade6') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade6" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade6" type="text" class="form-control" name="schoolAttendedGrade6" value="{{ old('schoolAttendedGrade6') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade6'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade6') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade6') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade6" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade6" type="text" class="form-control" name="yearCompletedGrade6" value="{{ old('yearCompletedGrade6') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade6'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade6') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade6') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade6" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade6" type="text" class="form-control" name="academicStandingGrade6" value="{{ old('academicStandingGrade6') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade6'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade6') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 7</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade7') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade7" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade7" type="text" class="form-control" name="schoolAttendedGrade7" value="{{ old('schoolAttendedGrade7') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade7'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade7') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade7') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade7" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade7" type="text" class="form-control" name="yearCompletedGrade7" value="{{ old('yearCompletedGrade7') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade7'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade7') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade7') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade7" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade7" type="text" class="form-control" name="academicStandingGrade7" value="{{ old('academicStandingGrade7') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade7'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade7') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 8</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade8') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade8" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade8" type="text" class="form-control" name="schoolAttendedGrade8" value="{{ old('schoolAttendedGrade8') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade8'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade8') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade8') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade8" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade8" type="text" class="form-control" name="yearCompletedGrade8" value="{{ old('yearCompletedGrade8') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade8'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade8') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade8') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade8" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade8" type="text" class="form-control" name="academicStandingGrade8" value="{{ old('academicStandingGrade8') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade8'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade8') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 9</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade9') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade9" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade9" type="text" class="form-control" name="schoolAttendedGrade9" value="{{ old('schoolAttendedGrade9') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade9'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade9') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade9') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade9" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade9" type="text" class="form-control" name="yearCompletedGrade9" value="{{ old('yearCompletedGrade9') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade9'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade9') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade9') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade9" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade9" type="text" class="form-control" name="academicStandingGrade9" value="{{ old('academicStandingGrade9') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade9'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade9') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 10</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade10') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade10" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade10" type="text" class="form-control" name="schoolAttendedGrade10" value="{{ old('schoolAttendedGrade10') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade10'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade10') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade10') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade10" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade10" type="text" class="form-control" name="yearCompletedGrade10" value="{{ old('yearCompletedGrade10') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade10'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade10') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStanding10') ? ' has-error' : '' }}">
                                <label for="academicStanding10" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStanding10" type="text" class="form-control" name="academicStanding10" value="{{ old('academicStanding10') }}" required autofocus>

                                    @if ($errors->has('academicStanding10'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStanding10') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 11</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade11') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade11" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade11" type="text" class="form-control" name="schoolAttendedGrade11" value="{{ old('schoolAttendedGrade11') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade11'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade11') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade11') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade11" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade11" type="text" class="form-control" name="yearCompletedGrade11" value="{{ old('yearCompletedGrade11') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade11'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade11') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade11') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade11" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade11" type="text" class="form-control" name="academicStandingGrade11" value="{{ old('academicStandingGrade11') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade11'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade11') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        </div>

                        <div class="panel-heading">Grade 12</div>
                        <div class="panel-body">
                            <div class="form-group{{ $errors->has('schoolAttendedGrade12') ? ' has-error' : '' }}">
                                <label for="schoolAttendedGrade12" class="col-md-4 control-label">School Attended</label>

                                <div class="col-md-6">
                                    <input id="schoolAttendedGrade12" type="text" class="form-control" name="schoolAttendedGrade12" value="{{ old('schoolAttendedGrade12') }}" required autofocus>

                                    @if ($errors->has('schoolAttendedGrade12'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('schoolAttendedGrade12') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('yearCompletedGrade12') ? ' has-error' : '' }}">
                                <label for="yearCompletedGrade12" class="col-md-4 control-label">Year Completed</label>

                                <div class="col-md-6">
                                    <input id="yearCompletedGrade12" type="text" class="form-control" name="yearCompletedGrade12" value="{{ old('yearCompletedGrade12') }}" required autofocus>

                                    @if ($errors->has('yearCompletedGrade12'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yearCompletedGrade12') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('academicStandingGrade12') ? ' has-error' : '' }}">
                                <label for="academicStandingGrade12" class="col-md-4 control-label">Academic Standing</label>

                                <div class="col-md-6">
                                    <input id="academicStandingGrade12" type="text" class="form-control" name="academicStandingGrade12" value="{{ old('academicStandingGrade12') }}" required autofocus>

                                    @if ($errors->has('academicStandingGrade12'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academicStandingGrade12') }}</strong>
                                        </span>
                                    @endif
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
