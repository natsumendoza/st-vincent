@extends('admin/layouts/layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" style="">
            @if (\Session::has('success'))
                <div class="alert alert-success text-center">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i>Student Profile</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-right">
                                    <img width="196" height="178" alt="" src="{{asset('image/student/'.$student['image_path'])}}">
                                </div>
                                <div class="col-md-8">
                                    <table>
                                        <tr>
                                            <td><h3>LRN:</h3></td>
                                            <td>{{$student['lrn']}}</td>
                                        </tr>
                                        <tr>
                                            <td><h3>Name:</h3></td>
                                            <td>{{$student['first_name'].' '.$student['middle_name'] . ' ' .$student['last_name']}}</td>
                                        </tr>
                                        <tr>
                                            <td><h3>Gender:</h3></td>
                                            <td>{{$student['gender']}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 185px;"><h3>Grade Level:</h3></td>
                                            <td>{{$student['grade']}}</td>
                                        </tr><tr>
                                            <td><h3>Section:</h3></td>
                                            <td>{{$student['section']}}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                            <hr>

                            <div class="row" style="">
                                <ul class="nav nav-tabs" style="margin: 0 auto;">
                                    <li class=""><a class="active tab1 btn btn-primary" href="#tab1" data-toggle="tab">Basic Information</a></li>
                                    <li><a href="#tab2" class="tab2 btn btn-primary" data-toggle="tab">Student Records</a></li>
                                    <li><a href="#tab3" class="tab3 btn btn-primary" data-toggle="tab">Personality Type Indicator Test Result</a></li>
                                </ul>

                            </div>

                            <div class="row" style="margin-top: 10px">
                                <div class="tab-content" style="width: 100%;">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="row">
                                            <div class="col-md-2 my-auto">
                                            </div>
                                            <div class="col-md-10 my-auto">
                                                <table style="margin-left: 62px;">
                                                    <tr>
                                                        <td><h5>Age:</h5></td>
                                                        <td>{{$student['age']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5>Birthday:</h5></td>
                                                        <td>{{$student['birthday']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5>Guardian:</h5></td>
                                                        <td>{{$student['name_guardian']}}</td>
                                                    </tr><tr>
                                                        <td><h5>Contact #:</h5></td>
                                                        <td>{{$student['contact_number']}}</td>
                                                    </tr>

                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
                                            <div class="col-md-2 my-auto">
                                            </div>
                                            <div class="col-md-10 my-auto">
                                                <div style="margin-left: 65px;">
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    @foreach($remarks as $remark)
                                                        <h5>{{$count++}}. {{$remark['comment']}}</h5>
                                                    @endforeach
                                                    <a class="btn btn-success" href="{{action('RemarkController@edit', base64_encode($student['lrn']))}}">Add remarks</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="col-md-12 my-auto text-center">
                                            <div class="row">
                                                <div class="col-md-2 my-auto">
                                                </div>
                                                <div class="col-md-10 my-auto text-left">
                                                    <table style="margin-left: 62px;">
                                                        @if(count($results) > 0)
                                                            <tr>
                                                                <td><h5>Grade 10: </h5></td>
                                                                <td>{{$results[0]['interpretation']}}</td>
                                                            </tr>
                                                            @if(isset($results[1]))
                                                                    <tr>
                                                                        <td><h5>Grade 12: </h5></td>
                                                                        <td>{{$results[1]['interpretation']}}</td>
                                                                    </tr>
                                                            @endif
                                                        @endif

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection