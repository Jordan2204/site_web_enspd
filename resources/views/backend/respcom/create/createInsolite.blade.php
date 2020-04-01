@extends('respcom/layouts/templateRespCom')

@section('title')
   Resp Com| Création d'une insolite
  @endsection

  @section('dashboard')
    Gestion des Insolites
  @endsection

  @section('apresHome')
   InsolitesManage/Create/Insolite
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-5 col-lg-6">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Ajout d'une nouvelle insolites</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                     @if(session()->has('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                    @endif
                    {!! Form::open(['url' => 'respcom/insolitesManage', 'files' => true]) !!}
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            {!! Form::text('titre', null, ['class' => 'form-control ', 'placeholder' => 'titre']) !!}
                            {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
                        </div>
                        
                        <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                        </div>
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
</div>


   
@endsection