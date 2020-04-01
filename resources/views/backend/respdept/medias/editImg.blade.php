@extends('respdept/layouts/templateRespDept')

 @section('title')
    Responsable de département
  @endsection

  @section('dashboard')
    Gestion des Media
  @endsection

  @section('apresHome')
    MediaManage/img/update
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-6 col-sm-5 col-lg-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Mise a jour d'une image</h3>
                </div>
                <div class="card-body"> 
                    @if(session()->has('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                    @endif
                    {!! Form::model($media, ['route' => ['mediasDept.update', $media->id],'method' => 'PUT','files' => true, 'class' => 'form-horizontal panel']) !!}
                       
                        <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                            <label for="image">Nouvelle Image</label>
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        <div>
                            <a href="javascript:history.back()" class="btn btn-info float-left">Retour
                             <span class="glyphicon glyphicon-circle-arrow-left "></span>
                            </a>
                        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info float-right']) !!}
                    {!! Form::close() !!}
                        </div>
                        
                </div>
            </div>
    </div>
        
    </div>
	


@endsection
