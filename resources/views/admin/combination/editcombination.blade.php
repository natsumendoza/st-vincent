@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Combination</div>

                    <form class="form-horizontal" method="POST" action="{{ action('CombinationController@update', $id) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="panel-body">

                            <div class="form-group{{ $errors->has('combination') ? ' has-error' : '' }}">
                                <label for="combination" class="col-md-4 control-label">Combination</label>

                                <div class="col-md-6">
                                    <input id="combination" type="text" class="form-control" name="combination" value="{{ $combination['combination'] }}" required autofocus>

                                    @if ($errors->has('combination'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('combination') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('interpretation') ? ' has-error' : '' }}">
                                <label for="interpretation" class="col-md-4 control-label">Interpretation</label>

                                <div class="col-md-6">
                                    <input id="interpretation" type="text" class="form-control" name="interpretation" value="{{ $combination['interpretation'] }}" required autofocus>

                                    @if ($errors->has('interpretation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('interpretation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @php
                                $count = 1;
                            @endphp

                            @foreach(explode(',', $combination['careers']) as $career)
                                <div class="form-group{{ $errors->has('career' . $count) ? ' has-error' : '' }}">
                                    <label for="{{'career' . $count}}" class="col-md-4 control-label">Career {{$count}}</label>

                                    <div class="col-md-6">
                                        <input id="{{'career' . $count}}" type="text" class="form-control" name="{{'career' . $count}}" value="{{$career}}" required autofocus>

                                        @if ($errors->has('career' . $count))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('career' . $count) }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                @php
                                    $count++;
                                @endphp
                            @endforeach



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
