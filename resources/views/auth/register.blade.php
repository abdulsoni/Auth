@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin: 60px 0px;">
        <h3 style="text-align: center">Enter Details to Sign Up </h3>
        <center>
            @if(Session::has('flash'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <span class="fa fa-check"></span>
                    <em> {!! session('flash') !!}</em></div>
            @endif
        </center>
        <form class="form-horizontal" style="padding: 15px;" method="post" action="{{route('register')}}">
            @csrf
            <fieldset>
                <!-- Text input-->
                <div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="name" value="{{ old('name') }}" placeholder="Insert your Name" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="textinput">Email</label>
                    <div class="col-md-4">
                        <input id="textinput" name="email" value="{{ old('email') }}" placeholder="Insert your Email Address" class="form-control input-md" required="" type="email">
                        <span class="help-block"> </span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="textinput">Address</label>
                    <div class="col-md-4">
                        <input id="textinput" name="address" value="{{ old('address') }}" placeholder="Insert your Address" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                        @if ($errors->has('address'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="textinput">Mobile</label>
                    <div class="col-md-4">
                        <input id="textinput" name="mobile" value="{{ old('mobile') }}" placeholder="Insert your Mobile Number" class="form-control input-md" required="" type="text">
                        <span class="help-block"> </span>
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="textinput">Password</label>
                    <div class="col-md-4">
                        <input id="textinput" name="password"  placeholder="Insert your Password" class="form-control input-md" required="" type="password">
                        <span class="help-block"> </span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Confirm Password</label>
                    <div class="col-md-4">
                        <input id="textinput" name="password_confirmation" placeholder="Confirm your Password" class="form-control input-md" required="" type="password">
                        <span class="help-block"> </span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"> </label>
                    <div class="col-md-4">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>
@endsection
