@extends('respdept/layouts/templateRespDept')

@section('title')
    RespDept
  @endsection

  @section('dashboard')
    Mise a jour du département {{ $departement->nomDept }}
  @endsection

  @section('apresHome')
    DepartementManage/editDept
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">

         <div class="col-lg-9 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title" align="align-center">Modification du departement</h3>
                </div>

                <div class="card-body "> 
                    <div class="col-sm-12">
                        {!! Form::model($departement, ['route' => ['departement.update', $departement->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                        <div class="form-group {!! $errors->has('nomDept') ? 'has-error' : '' !!}">
                            <label for="nomDept">Nom du departement</label>                        {!! Form::text('nomDept', null, ['class' => 'form-control','id' => 'nomDept', 'placeholder' => 'Nom Departement']) !!}
                            {!! $errors->first('nomDept', '<small class="help-block">:message</small>') !!}
                        </div>
       
                        <div class="form-group {!! $errors->has('infoDept') ? 'has-error' : '' !!}">
                            <label for="respStage">Domaines de formation </label>    
                            {!! Form::text('infoDept', null, ['class' => 'form-control','id' => 'infoDept', 'placeholder' => 'Possibilités offertes par le départment']) !!}
                            {!! $errors->first('infoDept', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                </div>
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
                                    <textarea class="textarea" name="description"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $departement->description }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                        </div>


                        <div class="form-group {!! $errors->has('deboucheDept') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Débouchés</h3>
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
                                    <textarea class="textarea" name="deboucheDept"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $departement->deboucheDept }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('deboucheDept', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('optionDept') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Options</h3>
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
                                    <textarea  class="textarea" name="optionDept"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $departement->optionDept }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('optionDept', '<small class="help-block">:message</small>') !!}
                        </div>
                        

                        <div class="form-group {!! $errors->has('emploisDuTempsDept') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Emplois du temps</h3>
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
                                    <textarea class="textarea" name="emploisDuTempsDept"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $departement->emploisDuTempsDept }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('emploisDuTempsDept', '<small class="help-block">:message</small>') !!}
                        </div>
                        

                        <div class="form-group {!! $errors->has('coursEnLigneDept') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Cours en ligne</h3>
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
                                    <textarea class="textarea" name="coursEnLigneDept"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $departement->coursEnLigneDept }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('coursEnLigneDept', '<small class="help-block">:message</small>') !!}
                        </div>
                        

                        <div class="form-group {!! $errors->has('contactDept') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Contacts</h3>
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
                                    <textarea class="textarea" name="contactDept"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $departement->contactDept }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('contactDept', '<small class="help-block">:message</small>') !!}
                        </div>
                          
                        <div>
                            <a href="javascript:history.back()" class="btn btn-primary">
                                    <span class=""></span> <span>Retour</span>
                            </a>
                             {!! Form::submit('Envoyer', ['class' => 'btn btn-primary float-right']) !!}
                            {!! Form::close() !!}
                        
                        </div>
                    </div>
               </div>
@endsection