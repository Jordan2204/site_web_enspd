@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/CreateInfoFGI
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title">Nouvelle page de présentation de la FGI</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'infosfgiAdmin.store','files' => true, 'class' => 'form-horizontal panel']) !!}   
                   
                    <div class="form-group {!! $errors->has('titreFECB') ? 'has-error' : '' !!}">
                        <label for="titreFECB">Titre</label>
                        {!! Form::text('titreFECB', null, ['class' => 'form-control','id' => 'titreFECB', 'placeholder' => 'Abreviation']) !!}
                        {!! $errors->first('titreFECB', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                      <label for="image">Capture</label>
                      
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
      
                   
                    <div>
                        <a href="javascript:history.back()" class="btn btn-primary float-left">Retour
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