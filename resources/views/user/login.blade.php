@include('user.header.head');
<div class="container" style="min-height: 480px;margin-top: 60px;">
    <div class="row" style="margin: 40px 0px;">
        <h3 style="text-align: center">Enter Details to Sign In </h3>
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
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="email" value="{{ old('email') }}" placeholder="Insert your Registered Email" class="form-control input-md" required="" type="email">
                        <span class="help-block"> </span>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Password</label>
                    <div class="col-md-4">
                        <input id="textinput" name="email" value="{{ old('password') }}" placeholder="Insert your Email Password" class="form-control input-md" required="" type="password">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"> </label>
                    <div class="col-md-4">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Sign In</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>
@include('user.footer.footer')