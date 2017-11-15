@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Student Remark</div>

                    <form class="form-horizontal" method="POST" action="{{ url('remark') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="lrnVal" value="{{ $student['lrn'] }}" />
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="lrn" class="col-md-4 control-label">LRN</label>

                                <div class="col-md-6">
                                    <input id="lrn" type="text" class="form-control" name="lrn" value="{{ $student['lrn'] }}" disabled>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Comment</label>

                                <div class="col-md-6">
                                    <input id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required autofocus>

                                    @if ($errors->has('comment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
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
