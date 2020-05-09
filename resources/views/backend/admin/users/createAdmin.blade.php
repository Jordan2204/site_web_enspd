@extends('admin/layouts/templateAdmin')

@section('title')
    FGI Admin | Création d'un utilisateur
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/CreateAdmin
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création d'un nouvel Administrateur</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'admin.store', 'class' => 'form-horizontal panel']) !!}   
                    <div class="form-group {!! $errors->has('name') ? 'has-warning' : '' !!}">
                        <label for="name">Nom <span style="color: red;">*</span></label>
                        {!! Form::text('name', null, ['class' => 'form-control','id' => 'name', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name', '<small style="color: red;" class="form-text">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('prenom') ? 'has-warning' : '' !!}">
                        <label for="prenom">Prénom</label>
                        {!! Form::text('prenom', null, ['class' => 'form-control','id' => 'prenom', 'placeholder' => 'Prénom']) !!}
                        {!! $errors->first('prenom', '<small style="color: red;" class="form-text">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('poste') ? 'has-warning' : '' !!}">
                        <label for="poste">Poste  <span style="color: red;">*</span></label>
                        {!! Form::text('poste', null, ['class' => 'form-control','id' => 'poste', 'placeholder' => 'poste']) !!}
                        {!! $errors->first('poste', '<small style="color: red;" class="form-text">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-warning' : '' !!}">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        {!! Form::email('email', null, ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small style="color: red;" class="form-text">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-warning' : '' !!}">
                        <label for="password">Password <span style="color: red;">*</span></label>
                        {!! Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Mot de passe']) !!}
                        {!! $errors->first('password', '<small style="color: red;" class="form-text">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="confirmePassword">Confirm Password <span style="color: red;">*</span></label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control','id' => 'confirmePassword', 'placeholder' => 'Confirmation mot de passe']) !!}
                    </div>
                    <div>
                        <a href="javascript:history.back()" class="btn btn-primary float-left">         <i class="fa fa-chevron-circle-left"> Retour</i>
                            <span class="glyphicon glyphicon-circle-arrow-left "></span>
                        </a>
                        {!! Form::submit('Créer', ['class' => 'btn btn-primary float-right ']) !!}
                    </div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


   
@endsection