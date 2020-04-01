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

         <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Modification d'un Responsable</h3>
                </div>
            <div class="card-body "> 
                <div class="col-sm-12">
                    {!! Form::model($resp, ['route' => ['personnelDept.update', $resp->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('gradePers') ? 'has-error' : '' !!}">
                        {!! Form::text('gradePers', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('gradePers', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('nomPers') ? 'has-error' : '' !!}">
                        {!! Form::text('nomPers', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nomPers', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class="form-group {!! $errors->has('prenomPers') ? 'has-error' : '' !!}">
                        {!! Form::text('prenomPers', null, ['class' => 'form-control', 'placeholder' => 'Prenom']) !!}
                        {!! $errors->first('prenomPers', '<small class="help-block">:message</small>') !!}
                    </div>
    
                    <label>Rôle(s)</label>
                    <div class="form-group {!! $errors->has('respStage') ? 'has-error' : '' !!}">
                         <div class="icheck-primary d-inline ml-2">
                              @if(!empty($etaitrespStage))
                               <input type="checkbox" name="respStage" checked> Responsable Stages :
                               <label for="auth"></label>
                              @else
                                {!! Form::checkbox('respStage',1, null,['id'  => 'auth']) !!} Responsable Stage
                                <label for="auth"></label>
                              @endif
                         </div>
                        {!! $errors->first('respStage', '<small class="help-block">:message</small>') !!}
                    </div>
                     <div class="form-group {!! $errors->has('respAcad') ? 'has-error' : '' !!}">
                         <div class="icheck-primary d-inline ml-2">
                              @if(!empty($etaitrespAcad))
                               <input type="checkbox" name="respAcad" checked> Responsable Académique :
                               <label for="auth"></label>
                              @else
                                {!! Form::checkbox('respAcad',1, null,['id'  => 'auth']) !!} Responsable Académique
                                <label for="auth"></label>
                              @endif
                        </div>
                        {!! $errors->first('RespAcad', '<small class="help-block">:message</small>') !!}
                    </div>
                     <a href="javascript:history.back()" class="btn btn-primary float-left">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                     </a>
                        {!! Form::submit('Metre a jour', ['class' => 'btn btn-primary float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       </div>
@endsection