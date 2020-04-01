@extends('admin/layouts/templateAdmin')

 @section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Media
  @endsection

  @section('apresHome')
    MediaManage/img
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-6 col-sm-5 col-lg-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Envoi d'un fichier</h3>
                </div>
                <div class="card-body"> 
                    @if(session()->has('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                    @endif
                    {!! Form::open(['url' => 'admin/mediasManage/file', 'files' => true]) !!}
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            {!! Form::text('titre', null, ['class' => 'form-control ', 'placeholder' => 'titre']) !!}
                            {!! $errors->first('titre', '<small style="color: red;" class="form-text">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
                            {!! $errors->first('description', '<small style="color: red;" class="form-text">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('file') ? 'has-error' : '' !!}">
                            {!! Form::file('file', ['class' => 'form-control']) !!}
                            {!! $errors->first('file', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
    </div>
        
    </div>
	


@endsection
