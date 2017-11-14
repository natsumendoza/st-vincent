@extends('admin/layouts/layout')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid" style="">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i>Student Profile</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-right">
                                    <img src="{{asset('image/SVSF-Logo.JPG')}}">
                                </div>
                                <div class="col-md-8">
                                    <table>
                                        <tr>
                                            <td><h3>Name:</h3></td>
                                            <td>Roxel Roll M. Mendoza</td>
                                        </tr>
                                        <tr>
                                            <td><h3>Gender:</h3></td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 185px;"><h3>Grade Level:</h3></td>
                                            <td>2</td>
                                        </tr><tr>
                                            <td><h3>Section:</h3></td>
                                            <td>Rose</td>
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
                                                        <td>15</td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5>Birthday:</h5></td>
                                                        <td>11/14/2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td><h5>Guardian:</h5></td>
                                                        <td>Gol D. Roger</td>
                                                    </tr><tr>
                                                        <td><h5>Contact #:</h5></td>
                                                        <td>09501234561</td>
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
                                                    <h5>1. Good Student</h5>
                                                    <h5>2. Honest</h5>
                                                    <a href="" class="btn btn-success">Add remarks</a>
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
                                                        <tr>
                                                            <td><h5>Grade 10: </h5></td>
                                                            <td>Realist who are quick to make practical decisions.</td>
                                                        </tr>
                                                        <tr>
                                                            <td><h5>Grade 12: </h5></td>
                                                            <td>Hard workers who value their responsibilities and commitments.</td>
                                                        </tr>


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