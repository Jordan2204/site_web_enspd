    <div class="row justify-content-center align-items-center">

         <div class="col-lg-9 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title" align="align-center">Mise a Jour</h3>
                </div>

                <div class="card-body "> 
                    <div class="col-sm-12">
                        {!! Form::model($infosFGI, ['route' => ['infosfgi.update', $infosFGI->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                        <div class="form-group {!! $errors->has('titreFECB') ? 'has-error' : '' !!}">
                            <label for="titreFECB">Titre de la page</label>                        {!! Form::text('titreFECB', null, ['class' => 'form-control','id' => 'nomDept', 'placeholder' => 'titre de la page']) !!}
                            {!! $errors->first('titreFECB', '<small class="help-block">:message</small>') !!}
                        </div>
 
                    </div>
                </div>
            </div>
                        <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                            <!-- Main content -->
                             <div class="card card-outline card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Contenu de la page </h3>
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
                                    <textarea id="editor"  name="contenuFECB"  rows="20" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $infosFGI->contenuFECB }}
                                    </textarea>
                                  </div>
                               </div>
                              </div>
                             {!! $errors->first('contenuFECB', '<small class="help-block">:message</small>') !!}
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
