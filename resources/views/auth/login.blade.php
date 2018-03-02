@extends('layouts.app')

@section('content')

<div class="container" style="margin: 140px 0px;">
    <div class="row justify-content-center">
        @if ($errors->has('msg'))
            <div class="alert alert-warning">
                {{ $errors->first('msg') }}
                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
        @endif
        <div class="col-md-8 col-md-offset-3">
            <div class="card card-default">
                <h3 style="text-align: center">Enter Details to Sign In </h3>
                <center>
                    @if(Session::has('flash'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="fa fa-check"></span>
                            <em> {!! session('flash') !!}</em></div>
                    @endif
                </center>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="text-align: right" for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="text-align: right" for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">


                            <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                                Login with Facebook
                            </a>

                            <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                                Login with Twitter
                            </a>

                            <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                                Login with Google
                            </a>

                            <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default btn-block">
                                Login with Github
                            </a>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
