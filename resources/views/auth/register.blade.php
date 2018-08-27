@extends('layouts.app')

@section('content')

    <h4>Registro</h4>
    <div class="row">

        <div class="col-6 col-md-6 col-md-offset-2 p-3 mb-2 bg-white text-dark">
                    <form class="form-signin" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }} row">
                            <label for="name" class="col-2 col-md-2 control-label col-form-label">Nombre</label>

                            <div class="col-10 col-md-10">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }} row">
                            <label for="apellidos" class="col-2 col-md-2 control-label col-form-label">Apellidos</label>

                            <div class="col-10 col-md-10">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }} row">
                            <label for="rut" class="col-2 col-md-2 control-label col-form-label">Rut</label>

                            <div class="col-10 col-md-10">
                                <input id="rut" type="text" class="form-control" name="rut" value="{{ old('rut') }}" required>

                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }} row">
                            <label for="direccion" class="col-2 col-md-2 control-label col-form-label">Direccion</label>

                            <div class="col-10 col-md-10">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-2 col-md-2 control-label col-form-label">E-Mail</label>

                            <div class="col-10 col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                            <label for="password" class="col-2 col-md-2 control-label col-form-label">Contraseña</label>

                            <div class="col-10 col-md-10">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-2 col-md-2 control-label col-form-label">Confirmar Contraseña</label>

                            <div class="col-10 col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>

        </div>
    </div>

@endsection
