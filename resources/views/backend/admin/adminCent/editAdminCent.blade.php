@extends('admin/layouts/templateAdmin')

 @section('title')
    {{ config('app.sigle') }} : Admin | Modification d'un memembre de l'administration centrale
  @endsection

  @section('dashboard')
    Gestion Des Profils
  @endsection

  @section('apresHome')
    AdminCentrale
  @endsection

@section('content')
  
   <div class="row justify-content-center align-items-center">

         <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Modification d'un Membre de l'admininstration centrale</h3>
                </div>
            <div class="card-body "> 
                <div class="col-sm-12">
                  @if(session('role') === 'admin')
                   {!! Form::model($adminCent, ['route' => ['adminCent.update', $adminCent->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                  @elseif(session('role') === 'respecoledoct')
                   {!! Form::model($adminCent, ['route' => ['personnel.updateA', $adminCent->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                  @endif
                   
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
                    <div class="form-group {!! $errors->has('postePers') ? 'has-warning' : '' !!}">
                      <label for="postePers">Poste</label>
                       <select name="postePers" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                          <option  data-select2-id="31" value="Directeur" selected >Directeur</option>
                          <option  data-select2-id="31" value="Direteur Adjoint">Direteur-Adjoint</option>
                          <option  data-select2-id="31" value="Chef division de la Scolarité et des Etudes">Chef division de la Scolarité et des Etudes</option>
                          <option  data-select2-id="31" value="Chef Cellule Informatique et des SI"> Chef de la Cellule Informatique et des systemes d'informations</option>
                        </select>
                    </div>
                 
                     <a href="javascript:history.back()" class="btn btn-primary float-left">
                        <i class="fas fa-chevron-circle-left"> Retour</i>
                     </a>
                        {!! Form::submit('Mettre a jour', ['class' => 'btn btn-primary float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       </div>
    
@endsection