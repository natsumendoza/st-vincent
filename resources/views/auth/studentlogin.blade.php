@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 11%;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="loginType" value="student"/>
                            <div class="form-group{{ $errors->has('lrn') ? ' has-error' : '' }}">
                                <label for="lrn" class="col-md-4 control-label">LRN</label>

                                <div class="col-md-6">
                                    <input id="lrn" maxlength="12" type="text" class="form-control" name="lrn" value="{{ old('lrn') }}" required autofocus>

                                    @if ($errors->has('lrn'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lrn') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        REGISTER
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
