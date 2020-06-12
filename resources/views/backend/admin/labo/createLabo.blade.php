@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li> Gestion des Labobatoires
  @endsection

  @section('apresHome')
    Labo/CreateLabo
  @endsection

@section('content')
    <div class="row justify-content-center ">
       
	    <div class="col-md-9 col-lg-9">
	        <div class="card card-primary">   
	            <div class="card-header">
	                <h3 class="card-title"> Création d'un nouveau Laboratoire</h3>
	            </div>
	            <div class="card-body"> 
	                <div class="col-sm-12">

						{!! Form::open(['route' => 'labo.store', 'class' => 'form-horizontal panel']) !!}

            		<div class="form-group {!! $errors->has('nomLabo') ? 'has-error' : '' !!}">
                    {!! Form::text('nomLabo', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                    {!! $errors->first('nomLabo', '<small class="help-block">:message</small>') !!}

            		</div>
            		<div class="form-group {!! $errors->has('strucRattach') ? 'has-error' : '' !!}">
                    {!! Form::text('strucRattach', null, ['class' => 'form-control', 'placeholder' => 'Structure de rattachement']) !!}
                    {!! $errors->first('strucRattach', '<small class="help-block">:message</small>') !!}

            		</div>

            		<div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                    <!-- Main content -->
                     <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">Description</h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad" style="display: block;">
                          <div class="mb-3">
                            <textarea id="editor"  name="description"  rows="20" 
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                          </div>
                       </div>
                      </div>
                     {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                	</div>

            		<div class="form-group {!! $errors->has('objectif') ? 'has-error' : '' !!}">
                    <!-- Main content -->
                     <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">Objectif </h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad" style="display: block;">
                          <div class="mb-3">
                            <textarea id="editor2"  name="objectif"  rows="20" 
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                          </div>
                       </div>
                      </div>
                     {!! $errors->first('objectif', '<small class="help-block">:message</small>') !!}
                </div>
            		
            		<div>
            			{!! Form::submit('Créer', ['class' => 'btn btn-primary float-right ']) !!}
            		</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection