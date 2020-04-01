@extends('respecoledoct.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/respecoledoct/register') }}">
                        {{ csrf_field() }}

                         <!-- Nom -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Prenom -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- auth -->
                        <div class="form-group{{ $errors->has('auth') ? ' has-error' : '' }}">
                            <label for="auth" class="col-md-4 control-label">Authorisation</label>

                            <div class="col-md-6">
                                <input id="auth" type="text" class="form-control" name="auth" value="{{ old('auth') }}" required autofocus>

                                @if ($errors->has('auth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('auth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- poste -->
                        <div class="form-group{{ $errors->has('poste') ? ' has-error' : '' }}">
                            <label for="poste" class="col-md-4 control-label">Poste</label>

                            <div class="col-md-6">
                                <input id="poste" type="text" class="form-control" name="poste" value="{{ old('poste') }}" required autofocus>

                                @if ($errors->has('poste'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poste') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                                                      
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
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
