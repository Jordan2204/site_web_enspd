@extends('respcentinc/layouts/templateRespCentInc')

@section('title')
    {{ config('app.sigle') }} : Admin | Création d'un utilisateur
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/CreateRespCentinc
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création du responsable du centre d'incubation</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'respCentInc.store', 'class' => 'form-horizontal panel']) !!} 
                        {!! Form::control('text', $errors, 'name', 'Nom','require') !!}
                        {!! Form::control('text', $errors, 'prenom', 'Prenom','') !!}
                        {!! Form::control('text', $errors, 'poste', 'Poste','require') !!}
                        {!! Form::control('email', $errors, 'email', 'Email','require') !!}
                        <!-- {!! Form::control('password', $errors, 'password', 'Mot de passe','require') !!}
                        {!! Form::control('password', $errors, 'password_confirmation', 'Confirmation mot de passe','require') !!} -->

                    <div class="form-group {!! $errors->has('auth') ? 'has-error' : '' !!}">
                         <div class="checkbox">
                            <div class="icheck-primary d-inline ml-2">
                            {!! Form::checkbox('auth',1, null,['id'  => 'auth']) !!} Autorisation : 
                            <label for="auth"></label>
                        </div>
                        </div>
                        {!! $errors->first('auth', '<small class="help-block">:message</small>') !!}
                    </div>
                    
                    <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                        <label for="password">Password <span style="color: red;">*</span></label>
                        {!! Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Mot de passe']) !!}
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="confirmePassword">Confirm Password <span style="color: red;">*</span></label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control','id' => 'confirmePassword', 'placeholder' => 'Confirmation mot de passe']) !!}
                    </div>
                        {!! Html::button_back() !!}
                        {!! Form::button_submit('Créer !') !!}
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
     </div>
    </div>
@endsection