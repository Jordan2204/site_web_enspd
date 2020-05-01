@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
   <i class="fas fa-edit"></i> FormationsDoctorales
  @endsection

  @section('apresHome')
    UFD/Update Formations Doctorales
  @endsection

@section('content')
    <div class="row justify-content-center ">
       
	    <div class="col-md-9 col-lg-9">
	        <div class="card card-primary">   
	            <div class="card-header">
	                <h3 class="card-title"> Mise a jours des formations doctorales</h3>
	            </div>
	            <div class="card-body"> 
	                <div class="col-sm-12">

						{!! Form::model($formationsDoct, ['route' => ['formationsdoctorales.update', $formationsDoct->id], 'class' => 'form-horizontal panel','method' => 'PUT']) !!}

                    		<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
		                        {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre de la page']) !!}
		                        {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}

                    		</div>
                    	
                    		<div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Contenu</h3>
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
                                    <textarea id="editor"  name="contenu"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $formationsDoct->contenu }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
                        	</div>
       		
                    		<div>
                    			{!! Form::submit('Update', ['class' => 'btn btn-primary float-right ']) !!}
                    		</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection