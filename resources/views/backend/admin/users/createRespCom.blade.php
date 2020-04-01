@extends('respcom/layouts/templateRespCom')

@section('title')
    FGI Admin | Création d'un utilisateur
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/CreateRespCom
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création du responsable de la cellule de communication</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'respCom.store', 'class' => 'form-horizontal panel']) !!}   
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        <label for="name">Nom</label>
                        {!! Form::text('name', null, ['class' => 'form-control','id' => 'name', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        <label for="prenom">Prenom</label>
                        {!! Form::text('prenom', null, ['class' => 'form-control','id' => 'prenom', 'placeholder' => 'Prenom']) !!}
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('poste') ? 'has-error' : '' !!}">
                        <label for="poste">Poste</label>
                        {!! Form::text('poste', null, ['class' => 'form-control','id' => 'poste', 'placeholder' => 'poste']) !!}
                        {!! $errors->first('poste', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                     <div class="form-group {!! $errors->has('auth') ? 'has-error' : '' !!}">
                         <div id="checkboxPrimary1" class="checkbox">
                            <label>
                                {!! Form::checkbox('auth',1, null) !!} Autorisation 
                            </label>
                        </div>
                        {!! $errors->first('auth', '<small class="help-block">:message</small>') !!}
                    </div>
                    
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        <label for="email">Email</label>
                        {!! Form::email('email', null, ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                        <label for="password">Password</label>
                        {!! Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Mot de passe']) !!}
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="confirmePassword">Confirm Password</label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control','id' => 'confirmePassword', 'placeholder' => 'Confirmation mot de passe']) !!}
                    </div>
                    <div>
                        <a href="javascript:history.back()" class="btn btn-primary float-left">         Retour
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