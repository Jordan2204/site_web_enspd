@extends('respecoledoct/layouts/templateRespEcoleDoct')

 @section('title')
    Responsable des formations
  @endsection

  @section('dashboard')
    Gestion des Medias
  @endsection

  @section('apresHome')
    MediaManage/file/update
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-6 col-sm-5 col-lg-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Mise a jour d'un fichiers</h3>
                </div>
                <div class="card-body"> 
                    @if(session()->has('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                    @endif
                    {!! Form::model($media, ['route' => ['mediasRespecoledoct.update', $media->id],'method' => 'PUT','files' => true, 'class' => 'form-horizontal panel']) !!}
                       
                        <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                            <label for="description">Description du fichier</label>
                            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
                            {!! $errors->first('description', '<small style="color: red;" class="form-text">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('file') ? 'has-error' : '' !!}">
                            <label for="file">Nouveau fichier</label>
                            {!! Form::file('file', ['class' => 'form-control']) !!}
                            {!! $errors->first('file', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        {!! Form::submit('Update !', ['class' => 'btn btn-info float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
    </div>
        
    </div>
	


@endsection
