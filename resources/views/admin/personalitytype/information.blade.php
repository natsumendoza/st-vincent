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
                                            <legend>Information</legend>
                                        </div>
                                        <div class="col-md-12 my-auto text-center">
                                            @php
                                                $count = 1;
                                            @endphp
                                            <table class="table" style="width: 75%; margin: 0 auto;">
                                                @foreach($questions as $question)
                                                    @php

                                                        $questionArray = explode(",", $question['statement']);
                                                        $question1 = $questionArray[0];
                                                        $question2 = $questionArray[1];

                                                    @endphp

                                                    <tr>
                                                        <td align="left" width="300px">
                                                            <div class="form-check form-check-inline" style="width: 100%;">
                                                                <label class="form-check-label" style="width: 100%;">
                                                                    1. {{$question1}}
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td align="left" width="300px">
                                                            <div class="form-check form-check-inline" style="width: 100%;">
                                                                <label class="form-check-label" style="width: 100%;">
                                                                    2. {{$question2}}
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td align="left" width="300px">
                                                            <div class="form-check form-check-inline" style="width: 100%;">
                                                                <label class="form-check-label" style="width: 100%;">
                                                                    <a class="btn btn-success" href="{{action('QuestionController@edit', base64_encode($question['id'].'/information'))}}">Edit</a>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>

                                        <div class="col-md-4 text-center" style="margin-top: 20px;">
                                            <legend>Add New Question</legend>
                                        </div>


                                        <div class="col-md-12 my-auto text-center">
                                            <form method="POST" action="{{url('information')}}">
                                                {{ csrf_field() }}
                                                <table class="table" style="width: 75%; margin: 0 auto;">
                                                    <fieldset class="form-group">

                                                        <tr>
                                                            <td align="left" width="300px">
                                                                <div class="form-check form-check-inline" style="width: 100%;">
                                                                    <label class="form-check-label" style="width: 100%;">
                                                                        1. <input id="question1" type="text" class="form-control" name="question1" value="{{ old('question1') }}" required>

                                                                        @if ($errors->has('question1'))
                                                                            <span class="help-block">
                                                                            <strong>{{ $errors->first('question1') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td align="left" width="300px">
                                                                <div class="form-check form-check-inline" style="width: 100%;">
                                                                    <label class="form-check-label" style="width: 100%;">
                                                                        2. <input id="question2" type="text" class="form-control" name="question2" value="{{ old('question2') }}" required>

                                                                        @if ($errors->has('question2'))
                                                                            <span class="help-block">
                                                                            <strong>{{ $errors->first('question2') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </fieldset>

                                                </table>
                                                <div class="col-md-12 my-auto text-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        Save
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
    <script>
        $(document).ready(function () {
            $('#personality-type').trigger('click');
        });
    </script>
@endsection