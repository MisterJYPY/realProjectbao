@extends('connect')

@section('content')

    <div class=" page login-page">
<div class="container">
    <div class="form-outer text-center d-flex align-items-center">
        <div class="form-inner">
            <div class="logo text-uppercase"><span>Dash</span><strong class="text-primary">Express</strong></div>
            <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>

                    <form class="form-horizontal" id="register-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group-material">
                            <input id="register-email" type="email" name="email" value="{{ old('email') }}" class="input-material" required  autofocus>
                            <label for="register-email" class="label-material">Email Address      </label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group-material">
                            <input id="register-passowrd" type="password" name="password" required class="input-material">
                            <label for="register-passowrd" class="label-material">Password        </label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"> Entrer
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
