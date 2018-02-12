@extends('connect')

@section('content')

    <div class=" page login-page">
<div class="container">
    <div class="form-outer text-center d-flex align-items-center">
        <div class="form-inner">
            <div class="logo text-uppercase"><span>BAO</span><strong class="text-danger"> Technologie</strong></div>
            <p>Vous essayez de vous connecter sur le compte administrateur,
                Cela requiert une authentifiaction préalable. Veuillez donc remplir les champs
                ci-dessous et appuyer sur le bouton de soumission.</p>

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
                                    Mot de passe oublié?
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
