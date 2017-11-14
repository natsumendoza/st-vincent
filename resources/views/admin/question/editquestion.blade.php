@extends('layouts.app')

@section('content')
    <div class="container">

        @php
            $questionArray = explode(",", $question['statement']);
            $question1 = $questionArray[0];
            $question2 = $questionArray[1];
        @endphp

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Question</div>

                    <form class="form-horizontal" method="POST" action="{{ action('QuestionController@update', base64_encode($question['id'].'/'.$view)) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="panel-body">

                            <div class="form-group{{ $errors->has('question1') ? ' has-error' : '' }}">
                                <label for="question1" class="col-md-4 control-label">Question 1</label>

                                <div class="col-md-6">
                                    <input id="question1" type="text" class="form-control" name="question1" value="{{ $question1 }}" required autofocus>

                                    @if ($errors->has('question1'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('question1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('question2') ? ' has-error' : '' }}">
                                <label for="question2" class="col-md-4 control-label">Question 2</label>

                                <div class="col-md-6">
                                    <input id="question2" type="text" class="form-control" name="question2" value="{{ $question2 }}" required autofocus>

                                    @if ($errors->has('question2'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('question2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                        </div>


                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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
