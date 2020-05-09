@extends('admin/layouts/templateAdmin')

@section('title')
    FGI Admin | Création d'un utilisateur
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/CreateRespDept
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création du chef de departement</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'respDept.store', 'class' => 'form-horizontal panel']) !!}   
                    <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        <label for="name">Nom <span style="color: red;">*</span></label>
                        {!! Form::text('name', null, ['class' => 'form-control','id' => 'name', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('name', '<small class="help-block" style="color: red;">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        <label for="prenom">Prénom</label>
                        {!! Form::text('prenom', null, ['class' => 'form-control','id' => 'prenom', 'placeholder' => 'Prénom']) !!}
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('poste') ? 'has-error' : '' !!}">
                        <label for="poste">Poste</label>
                        {!! Form::text('poste', null, ['class' => 'form-control','id' => 'poste', 'placeholder' => 'poste']) !!}
                        {!! $errors->first('poste', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('refDept') ? 'has-error' : '' !!}">
                    <label for="refDept">Département</label>
                    <select name="refDept" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option  data-select2-id="31" value="TTIC" selected >TTIC</option>
                          <option  data-select2-id="31" value="TAU">TAU</option>
                          <option  data-select2-id="31" value="HSSI">HSSI</option>
                          <option  data-select2-id="31" value="PGM">PGM</option>
                          <option  data-select2-id="31" value="GCI">GCI</option>
                          <option  data-select2-id="31" value="PGM">PGM</option>
                          <option  data-select2-id="31" value="GCH">GCH</option>
                          <option  data-select2-id="31" value="ROI">ROI</option>
                          <option  data-select2-id="31" value="TCI">TCI</option>
                          <option  data-select2-id="31" value="GPR">GPR</option>
                        </select>
                       {!! $errors->first('refDept', '<small class="help-block" style="color: red;">:message</small>') !!}
                     </div>
                    <div class="form-group {!! $errors->has('auth') ? 'has-error' : '' !!}">
                         <div class="checkbox">
                            <div class="icheck-primary d-inline ml-2">
                                {!! Form::checkbox('auth',1, null,['id'  => 'auth']) !!} Autorisation : 
                                <label for="auth"></label>
                            </div>
                        </div>
                        {!! $errors->first('auth', '<small class="help-block">:message</small>') !!}
                    </div>
                    
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        {!! Form::email('email', null, ['class' => 'form-control','id' => 'email', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block" style="color: red;">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                        <label for="password">Password <span style="color: red;">*</span></label>
                        {!! Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Mot de passe']) !!}
                        {!! $errors->first('password', '<small class="help-block" style="color: red;">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="confirmePassword">Confirm Password <span style="color: red;">*</span></label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control','id' => 'confirmePassword', 'placeholder' => 'Confirmation mot de passe']) !!}
                    </div>
                     <a href="javascript:history.back()" class="btn btn-primary float-left">         <i class="fa fa-chevron-circle-left"> Retour</i>
                        </a>
                    <div> {!! Form::submit('Créer', ['class' => 'btn btn-primary float-right ']) !!}</div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>
 
@endsection