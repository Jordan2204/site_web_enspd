@extends('admin/layouts/templateAdmin')

 @section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Media
  @endsection

  @section('apresHome')
    Medias/img/update
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
                    <?php 
                        $urlPage = 'http://fgi-udo.local/admin/mediasAdminCent/'.$media->id.'/edit';
                         $urlPage2 = 'http://fgi-udo.local/admin/mediasAdmin/'.$media->id.'/edit';
                     ?>
                   @if(url()->current() === $urlPage)
                    {!! Form::model($media, ['route' => ['mediasAdminCent.update', $media->id],'method' => 'PUT','files' => true, 'class' => 'form-horizontal panel']) !!}
                   @elseif(url()->current() === $urlPage2)
                     {!! Form::model($media, ['route' => ['mediasAdmin.update', $media->id],'method' => 'PUT','files' => true, 'class' => 'form-horizontal panel']) !!}
                   @endif
                       
                        <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                            <label for="description">Description de l'image</label>
                            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
                            {!! $errors->first('description', '<small style="color: red;" class="form-text">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                            <label for="image">Nouvelle Image</label>
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        <div>
                            <a href="javascript:history.back()" class="btn btn-info float-left">
                                <i class="fa fa-chevron-circle-left"> Retour</i>
                            </a>
                            {!! Form::submit('Envoyer !', ['class' => 'btn btn-info float-right']) !!}
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
    </div>
        
    </div>
	


@endsection
