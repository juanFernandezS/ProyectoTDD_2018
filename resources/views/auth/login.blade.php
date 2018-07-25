@extends('layouts.app')

@section('titulo', 'Inciar sesión')

@section('content')

    <div class="row log">
        <div class="col-md-8 col-md-offset-2 p-3 mb-2 bg-white text-dark">
        <form class="form-signin" method="POST" action="{{ route('login') }} ">
            <legend>Iniciar Sesión</legend>
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row form-control-sm">
                <label for="email" class="col-3 col-md-3 control-label col-form-label">E-Mail</label>

                <div class="col-9">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row form-control-sm">
                <label class="col-3 col-md-3 control-label col-form-label">Contraseña</label>
                <div class="col-9">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class=>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-sign-in"></i> Entrar
                        </button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            olvidaste tu contraseña?
                        </a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>

@endsection
