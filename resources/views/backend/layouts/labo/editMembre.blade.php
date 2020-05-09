@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/edit Membre
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">

        <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Modification d'un Membre</h3>
                </div>
            <div class="card-body "> 
                    {!! Form::model($membre, ['route' => ['personnel.update', $membre->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

                    <div class="form-group {!! $errors->has('gradePers') ? 'has-warning' : '' !!}">
                        <label for="gradePers">Grade</label>
                        {!! Form::text('gradePers', null, ['class' => 'form-control','id' => 'gradePers', 'placeholder' => 'Grade']) !!}
                        {!! $errors->first('gradePers', '<small class="help-block">:message</small>') !!}
                        
                    </div>  
                    <div class="form-group {!! $errors->has('nomPers') ? 'has-warning' : '' !!}">
                        <label for="lieuDeServicePers">Nom</label>
                        {!! Form::text('nomPers', null, ['class' => 'form-control','id' => 'nomPers', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nomPers', '<small class="help-block">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('prenomPers') ? 'has-warning' : '' !!}">
                        <label for="prenomMLabo">Prenom</label>
                        {!! Form::text('prenomPers', null, ['class' => 'form-control','id' => 'prenomPers', 'placeholder' => 'Prenom']) !!}
                        {!! $errors->first('prenomPers', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                   
                    <div class="form-group {!! $errors->has('lieuDeServicePers') ? 'has-warning' : '' !!}">
                        <label for="lieuMLabo">Lieu de service</label>
                        {!! Form::text('lieuDeServicePers', null, ['class' => 'form-control','id' => 'lieuDeServicePers', 'placeholder' => 'Lieu de service']) !!}
                        {!! $errors->first('lieuDeServicePers', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('typeMLabo') ? 'has-warning' : '' !!}">
                       <select name="typeMLabo" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                                <option  data-select2-id="30" value="MbH" selected="selected">Membre D'Honneur</option>
                                <option  data-select2-id="31" value="Coord">Coordonnateur</option>
                                <option  data-select2-id="32" value="Mb">Membre</option>
                        </select>
                    </div>
                    <div class="form-group {!! $errors->has('Labo_idLabo') ? 'has-warning' : '' !!}">
                       <select name="Labo_idLabo" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                                <option  data-select2-id="32" value="1" selected="selected">E3M</option>
                        </select>
                    </div>
                        <a href="javascript:history.back()" class="btn btn-primary float-left"><i class="fas fa-chevron-circle-left"> Retour</i> 
                         </a>
                    
                    
                        {!! Form::submit('Update', ['class' => 'btn btn-primary float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
         
    </div>
@endsection