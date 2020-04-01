@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
     Labo E3M
  @endsection

  @section('apresHome')
    Labo/Update labo
  @endsection

@section('content')
    <div class="row justify-content-center ">
       
	    <div class="col-md-9 col-lg-9">
	        <div class="card card-primary">   
	            <div class="card-header">
	                <h3 class="card-title"> Mise a Jour du  Laboratoire E3M</h3>
	            </div>
	            <div class="card-body"> 
	                <div class="col-sm-12">

						{!! Form::model($labo, ['route' => ['labo.update', $labo->id], 'class' => 'form-horizontal panel','method' => 'PUT']) !!}

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
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $labo->description }}
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
                                    <textarea class="textarea"  name="objectif"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $labo->objectif }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('objectif', '<small class="help-block">:message</small>') !!}
                        </div>
                    		
                    		<div>
                    			{!! Form::submit('Enregistrer', ['class' => 'btn btn-primary float-right ']) !!}
                    		</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection