@extends('admin/layouts/templateAdmin')

 @section('title')
    {{ config('app.sigle') }} : Admin | Gestion Articles
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li>  Gestion Articles
  @endsection

  @section('apresHome')
    <a href="usersManage">postsManages</a>
  @endsection


@section('content')
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">Mise a jour d'un article</div>
            <div class="card-body"> 
                {!! Form::model($post, ['route' => ['postsAdmin.update', $post->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                        {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre']) !!}
                        {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                       <textarea id="editor"  name="contenu"  rows="20" 
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->contenu }}
                        </textarea>
                        {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info float-right']) !!}
                {!! Form::close() !!}
                 <a href="javascript:history.back()" class="btn btn-primary float-left">
                    <span class="fa fa-chevron-circle-left "></span> Retour
                 </a>
            </div>
        </div>
       
    </div>
@endsection