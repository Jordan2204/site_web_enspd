@extends('admin/layouts/templateAdmin')

@section('title')
    FGI Admin | Création d'un dossier
  @endsection

  @section('dashboard')
    Gestion des dossiers partenaires
  @endsection

  @section('apresHome')
   DossiersManage/Create Dossier
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création d'un nouveau Dossier</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'docPartenaires.store', 'class' => 'form-horizontal panel']) !!}   
                    <div class="form-group {!! $errors->has('nomDOC') ? 'has-warning' : '' !!}">
                        <label for="nomDOC">Nom du Dossier <span style="color: red;">*</span></label>
                        {!! Form::text('nomDOC', null, ['class' => 'form-control','id' => 'name', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nomDOC', '<small style="color: red;" class="form-text">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('numBCA') ? 'has-warning' : '' !!}">
                        <label for="prenom">Numero BCA <span style="color: red;">*</span></label>
                        {!! Form::text('numBCA', null, ['class' => 'form-control','id' => 'prenom', 'placeholder' => 'numBCA']) !!}
                        {!! $errors->first('prenumBCAnom', '<small style="color: red;" class="form-text">:message</small>') !!}
                        
                    </div>
                    <div class="form-group {!! $errors->has('date_intr') ? 'has-warning' : '' !!}">
                        <label for="datemask">Date d'introduction</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                        <input type="text" id="datemask" name="date_intr" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                        {!! $errors->first('date_intr', '<small style="color: red;" class="form-text">:message</small>') !!}
                        
                    </div>
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
                    <a href="javascript:history.back()" class="btn btn-primary align-items-center float-left">Retour
                       <span class="glyphicon glyphicon-circle-arrow-left "></span>
                     </a>
                    <div>{!! Form::submit('Envoyer', ['class' => 'btn btn-primary float-right ']) !!}</div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


   
@endsection