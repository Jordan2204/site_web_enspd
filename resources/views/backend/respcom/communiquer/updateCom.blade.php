  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Mise a jour des communiqués
  @endsection

  @section('dashboard')
    Gestion des communiqués
  @endsection

  @section('apresHome')
    CommuniquésManage
  @endsection

@section('content')

 <div class="row justify-content-center align-items-center">
     <div class="col-md-10 col-sm-10 col-xm-9">

            {!! Form::model($communiquer, ['route' => ['communiquer.update', $communiquer->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

            <div class="form-group {!! $errors->has('contenuCom') ? 'has-error' : '' !!}">
                <!-- Main content -->
                 <div class="card card-primary ">
                    <div class="card-header">
                      <h3 class="card-title">Communiqués</h3>
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
                        <textarea id="editor"  name="contenuCom"  rows="20" 
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $communiquer->contenuCom }}
                        </textarea><br>
                        <div>
                        <a href="javascript:history.back()" class="btn btn-primary">
                          <i class="fa fa-chevron-circle-left"> Retour</i>  
                        </a>
                 {!! Form::submit('Update', ['class' => 'btn btn-primary float-right']) !!}
                {!! Form::close() !!}
            
                        </div>
                      </div>
                   </div>
                  </div>
                 {!! $errors->first('communiquer', '<small class="help-block">:message</small>') !!}
            </div>
           
        </div>
   </div>
@endsection
