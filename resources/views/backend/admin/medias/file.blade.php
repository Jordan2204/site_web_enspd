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
    <div class="row justify-content-center" >
     @if(session()->has('ok'))
          <button  id="update" hidden class="toastrDefaultSuccess">ok</button>
     @endif
    </div>
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
                            <select name="description" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                            <option  data-select2-id="30" value="livret" selected="selected">Livret Etudiant</option>
                        </select>
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
