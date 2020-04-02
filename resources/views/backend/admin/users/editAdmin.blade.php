@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/editAdmin
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">

        <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Modification d'un utilisateur</h3>
                </div>
            <div class="card-body "> 
                    {!! Form::model($admin, ['route' => ['admin.update', $admin->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                            {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prenom']) !!}
                            {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('poste') ? 'has-error' : '' !!}">
                            {!! Form::text('poste', null, ['class' => 'form-control', 'placeholder' => 'Poste']) !!}
                            {!! $errors->first('poste', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                         <a href="javascript:history.back()" class="btn btn-primary float-left">         <i class="fa fa-chevron-circle-left"> Retour</i>
                            <span class="glyphicon glyphicon-circle-arrow-left "></span>
                        </a>
                    
                        {!! Form::submit('Valider', ['class' => 'btn btn-primary float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
         
    </div>
@endsection