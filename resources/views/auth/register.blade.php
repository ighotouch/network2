@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal " style="padding: 16px" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="form-control-material ">
                                <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}"
                                       placeholder="Full Name">
                                <label for="name">Full Name</label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-control-material ">
                                <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}"
                                       placeholder="Full Name">
                                <label for="email">E-Mail Address</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="form-control-material ">
                                <input class="form-control" id="password" name="password" type="password" value="{{ old('password') }}"
                                       placeholder="Full Name">
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                            <div class="form-control-material ">
                                <input class="form-control" id="password-confirm" name="password-confirm" type="password"
                                       placeholder="Full Name">
                                <label for="password-confirm">Confirm Password</label>
                                @if ($errors->has('password-confirm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
