@extends('admin/layouts/templateAdmin')

@section('title')
    {{ config('app.sigle') }} : Admin | création d'un département
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li> Gestion des departements
  @endsection

  @section('apresHome')
    DepartementManager/CreateDept
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
	    <div class="col-md-9 col-lg-9">
	        <div class="card card-primary">   
	            <div class="card-header">
	                <h3 class="card-title"> Création d'un nouveau département</h3>
	            </div>
	            <div class="card-body"> 
	                <div class="col-sm-12">

						{!! Form::open(['route' => 'departementAdmin.store','files' => true , 'class' => 'form-horizontal panel']) !!}

						   	<div class="form-group {!! $errors->has('ABBR') ? 'has-error' : '' !!}">
                    <label for="ABBR">Abréviation <span style="color: red;">*</span></label>
                      {!! Form::text('ABBR', null, ['class' => 'form-control', 'placeholder' => 'Abreviation']) !!}
                      {!! $errors->first('ABBR', '<small class="help-block">:message</small>') !!}

              		</div>
              		<div class="form-group {!! $errors->has('nomDept') ? 'has-error' : '' !!}">
                    <label for="nomDept">Nom de département <span style="color: red;">*</span></label>
                      {!! Form::text('nomDept', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                      {!! $errors->first('nomDept', '<small class="help-block">:message</small>') !!}

              		</div>
              		<div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                		<label for="image">Image du département <span style="color: red;">*</span></label>
                
                      {!! Form::file('image', ['class' => 'form-control']) !!}
                      {!! $errors->first('image', '<small class="help-block" style="color: red;">:message</small>') !!}
                  </div>
              		<div>
                    <a href="javascript:history.back()" class="btn btn-primary float-left">
                      <i class="fas fa-chevron-circle-left"> Retour</i>
                    </a>
              			{!! Form::submit('Créer', ['class' => 'btn btn-primary float-right ']) !!}
              		</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection