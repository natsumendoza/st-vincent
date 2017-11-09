@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Combination</div>

                    <form class="form-horizontal" method="POST" action="{{ action('CombinationController@update', $id) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="panel-body">

                            <div class="form-group{{ $errors->has('career') ? ' has-error' : '' }}">
                                <label for="career" class="col-md-4 control-label">Career</label>

                                <div class="col-md-6">
                                    <input id="career" type="text" class="form-control" name="career" value="{{ old('career') }}" required autofocus>

                                    @if ($errors->has('career'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('career') }}</strong>
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
