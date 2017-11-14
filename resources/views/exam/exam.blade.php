@extends('layouts.layout')

@section('content')
    <div class="content-wrapper">
                        <div class="container-fluid" style="">
                            <!-- Breadcrumbs-->

                            <!-- Area Chart Example-->

                            <div class="row">

                                <div class="col-lg-12">
                                    <!-- Example Bar Chart Card-->
                                    <div class="card mb-3">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center my-auto">
                                                    <h4>Personality Type Indicator Test</h4>
                                                </div>

                                            </div>
                                            <div class="row" style="display: none;">
                                                <ul class="nav nav-tabs">
                                                    <li><a class="active tab1" href="#tab1" data-toggle="tab">Energy</a></li>
                                                    <li><a href="#tab2" class="tab2" data-toggle="tab">Information</a></li>
                                                    <li><a href="#tab3" class="tab3" data-toggle="tab">Decision-making</a></li>
                                                    <li><a href="#tab4" class="tab4" data-toggle="tab">Learning Style</a></li>
                                                </ul>

                                            </div>
                                            <div class="row">
                                                <div class="tab-content" style="width: 100%;">
                                                    <div class="tab-pane active" id="tab1">
                                                        <div class="col-md-4 my-auto text-center">
                                                            <legend>I. Energy</legend>
                                                        </div>

                                                        <div class="col-md-12 my-auto text-center">
                                                            <form method="POST" action="{{url('result')}}">
                                                                {{ csrf_field() }}
                                                                <table class="table" style="width: 75%; margin: 0 auto;">
                                                                    <fieldset class="form-group">
                                                                        @php
                                                                            $countE = 1;
                                                                        @endphp
                                                                        @foreach($questionsEnergy as $questionE)
                                                                            @php

                                                                                $questions = explode(",", $questionE['statement']);
                                                                                $question1 = $questions[0];
                                                                                $question2 = $questions[1];

                                                                                $letterCodes = explode(",", $questionE['letter_code']);
                                                                                $letterCode1 = $letterCodes[0];
                                                                                $letterCode2 = $letterCodes[1];
                                                                            @endphp
                                                                            <tr>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline" >
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="energy{{$countE}}" id="optionsRadios1" value="{{$letterCode1}}">
                                                                                            {{$question1}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="energy{{$countE}}" id="optionsRadios2" value="{{$letterCode2}}">
                                                                                            {{$question2}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @php
                                                                                $countE++
                                                                            @endphp
                                                                        @endforeach

                                                                    </fieldset>
                                                                </table>

                                                        </div>
                                                        <div class="col-md-12 my-auto text-center">
                                                            <a class="btn btn-primary btnNext" >Next</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                        <div class="col-md-4 my-auto text-center">
                                                            <legend>II. Information</legend>
                                                        </div>

                                                        <div class="col-md-12 my-auto text-center">

                                                                <table class="table" style="width: 75%; margin: 0 auto;">
                                                                    <fieldset class="form-group">
                                                                        @php
                                                                            $countI = 1;
                                                                        @endphp

                                                                        @foreach($questionsInformation as $questionI)
                                                                            @php

                                                                                $questions = explode(",", $questionI['statement']);
                                                                                $question1 = $questions[0];
                                                                                $question2 = $questions[1];

                                                                                $letterCodes = explode(",", $questionI['letter_code']);
                                                                                $letterCode1 = $letterCodes[0];
                                                                                $letterCode2 = $letterCodes[1];
                                                                            @endphp
                                                                            <tr>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline" >
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="information{{$countI}}" id="optionsRadios1" value="{{$letterCode1}}">
                                                                                            {{$question1}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="information{{$countI}}" id="optionsRadios2" value="{{$letterCode2}}">
                                                                                            {{$question2}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @php
                                                                                $countI++
                                                                            @endphp
                                                                        @endforeach




                                                                    </fieldset>
                                                                </table>

                                                        </div>
                                                        <div class="col-md-12 my-auto text-center">
                                                            <a class="btn btn-primary btnPrevious" >Previous</a>
                                                            <a class="btn btn-primary btnNext" >Next</a>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <div class="col-md-4 my-auto text-center">
                                                            <legend>III. Decision-making</legend>
                                                        </div>

                                                        <div class="col-md-12 my-auto text-center">

                                                                <table class="table" style="width: 75%; margin: 0 auto;">
                                                                    <fieldset class="form-group">
                                                                        @php
                                                                            $countD = 1;
                                                                        @endphp
                                                                        @foreach($questionsDecisionMaking as $questionD)
                                                                            @php

                                                                                $questions = explode(",", $questionD['statement']);
                                                                                $question1 = $questions[0];
                                                                                $question2 = $questions[1];

                                                                                $letterCodes = explode(",", $questionD['letter_code']);
                                                                                $letterCode1 = $letterCodes[0];
                                                                                $letterCode2 = $letterCodes[1];
                                                                            @endphp
                                                                            <tr>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline" >
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="decisionmaking{{$countD}}" id="optionsRadios1" value="{{$letterCode1}}">
                                                                                            {{$question1}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="decisionmaking{{$countD}}" id="optionsRadios2" value="{{$letterCode2}}">
                                                                                            {{$question2}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @php
                                                                                $countD++
                                                                            @endphp
                                                                        @endforeach




                                                                    </fieldset>
                                                                </table>

                                                        </div>
                                                        <div class="col-md-12 my-auto text-center">
                                                            <a class="btn btn-primary btnPrevious" >Previous</a>
                                                            <a class="btn btn-primary btnNext" >Next</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab4">
                                                        <div class="col-md-4 my-auto text-center">
                                                            <legend>IV. Learning Style</legend>
                                                        </div>

                                                        <div class="col-md-12 my-auto text-center">

                                                                <table class="table" style="width: 75%; margin: 0 auto;">
                                                                    <fieldset class="form-group">
                                                                        @php
                                                                            $countL = 1;
                                                                        @endphp
                                                                        @foreach($questionsLearningStyle as $questionL)
                                                                            @php
                                                                                $questions = explode(",", $questionL['statement']);
                                                                                $question1 = $questions[0];
                                                                                $question2 = $questions[1];

                                                                                $letterCodes = explode(",", $questionL['letter_code']);
                                                                                $letterCode1 = $letterCodes[0];
                                                                                $letterCode2 = $letterCodes[1];
                                                                            @endphp
                                                                            <tr>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline" >
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="learningstyle{{$countL}}" id="optionsRadios1" value="{{$letterCode1}}">
                                                                                            {{$question1}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td align="left" width="300px">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input type="radio" class="form-check-input" name="learningstyle{{$countL}}" id="optionsRadios2" value="{{$letterCode2}}">
                                                                                            {{$question2}}
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @php
                                                                                $countL++;
                                                                            @endphp
                                                                        @endforeach




                                                                    </fieldset>
                                                                </table>
                                                            <div class="col-md-12 my-auto text-center">
                                                                <a class="btn btn-primary btnPrevious" >Previous</a>
                                                                <button type="submit" class="btn btn-success">
                                                                    Generate Result
                                                                </button>
                                                            </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.container-fluid-->
                                <!-- /.content-wrapper-->
                                <footer class="sticky-footer">
                                    <div class="container">
                                        <div class="text-center">
                                            {{--<small>Copyright © Your Website 2017</small>--}}
                                        </div>
                                    </div>
                                </footer>
                                <!-- Scroll to Top Button-->
                                <a class="scroll-to-top rounded" href="#page-top">
                                    <i class="fa fa-angle-up"></i>
                                </a>
                                <!-- Logout Modal-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-primary" href="login.html">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
    </div>
@endsection