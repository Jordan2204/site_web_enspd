@extends('admin/layouts/templateAdmin')

@section('title')
    FGI Admin | Edition d'un dossier
  @endsection

  @section('dashboard')
    Gestion des Dossiers
  @endsection

  @section('apresHome')
    DossiersManage/editDossier
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">

        <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Modification d'un Dossier</h3>
                </div>
            <div class="card-body "> 
                    {!! Form::model($dossierPartenaire, ['route' => ['docPartenaires.update', $dossierPartenaire->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                         <div class="form-group {!! $errors->has('nomDOC') ? 'has-warning' : '' !!}">
                        <label for="nomDOC">Nom du Dossier</label>
                        {!! Form::text('nomDOC', null, ['class' => 'form-control','id' => 'name', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nomDOC', '<small style="color: red;" class="form-text">:message</small>') !!}

                    </div>
                    <div class="form-group {!! $errors->has('etape') ? 'has-warning' : '' !!}">
                        <label for="etape">Etape</label>
                        {!! Form::text('etape', null, ['class' => 'form-control','id' => 'etape', 'placeholder' => 'etape']) !!}
                        {!! $errors->first('infosActu', '<small style="color: red;" class="form-text">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('infosActu') ? 'has-warning' : '' !!}">
                        <label for="infosActu">Position actuelle</label>
                        {!! Form::text('infosActu', null, ['class' => 'form-control','id' => 'infosActu', 'placeholder' => 'infosActu']) !!}
                        {!! $errors->first('infosActu', '<small style="color: red;" class="form-text">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('observations') ? 'has-warning' : '' !!}">
                        <label for="observations">Observations</label>
                        {!! Form::text('observations', null, ['class' => 'form-control','id' => 'observations', 'placeholder' => 'observations']) !!}
                        {!! $errors->first('infosActu', '<small style="color: red;" class="form-text">:message</small>') !!}
                    </div>
                        <a href="javascript:history.back()" class="btn btn-primary">
                            <i class="fa fa-chevron-circle-left"> Retour</i>
                         </a>
                    
                        {!! Form::submit('Update', ['class' => 'btn btn-primary float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
         
    </div>
@endsection