@extends('respdept/layouts/templateRespDept')

 @section('title')
    Chef Dept
  @endsection

  @section('dashboard')
    Gestion des Responsables
  @endsection

  @section('apresHome')
    ResponsablesManage
  @endsection

@section('content')
  <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création d'un responsable de departement</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => ['personnelDept.store', 'class' => 'form-horizontal panel']]) !!}
                    <div class="form-group {!! $errors->has('gradePers') ? 'has-error' : '' !!}">
                        <label for="namePers">Nom</label>
                        {!! Form::text('gradePers', null, ['class' => 'form-control','id' => 'namePers', 'placeholder' => 'Grade']) !!}
                        {!! $errors->first('gradePers', '<small class="help-block">:message</small>') !!}

                    </div>
                    <div class="form-group {!! $errors->has('nomPers') ? 'has-error' : '' !!}">
                        <label for="namePers">Nom</label>
                        {!! Form::text('nomPers', null, ['class' => 'form-control','id' => 'namePers', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nomPers', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('prenomPers') ? 'has-error' : '' !!}">
                        <label for="prenom">Prénom</label>
                        {!! Form::text('prenomPers', null, ['class' => 'form-control','id' => 'prenom', 'placeholder' => 'Prénom']) !!}
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                     <label>Rôle(s)</label>
                    <div class="form-group {!! $errors->has('respStage') ? 'has-error' : '' !!}">
                         <div class="checkbox">
                            <label>
                                {!! Form::checkbox('respStage',1, null) !!} Responsable de Stage
                            </label>
                        </div>
                        {!! $errors->first('respStage', '<small class="help-block">:message</small>') !!}
                    </div>
                     <div class="form-group {!! $errors->has('respAcad') ? 'has-error' : '' !!}">
                         <div class="checkbox">
                            <label>
                                {!! Form::checkbox('respAcad',1, null) !!} Responsable Académique
                            </label>
                        </div>
                        {!! $errors->first('respAcad', '<small class="help-block">:message</small>') !!}
                    </div>
                    <a href="javascript:history.back()" class="btn btn-primary align-items-center  float-left">Retour
                        <span class="glyphicon glyphicon-circle-arrow-left  "></span>
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