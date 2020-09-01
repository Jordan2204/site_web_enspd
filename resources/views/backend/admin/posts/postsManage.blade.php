@extends('admin/layouts/templateAdmin')

 @section('title')
    {{ config('app.sigle') }} : Admin | Gestion Articles
  @endsection

  @section('dashboard')
     <li class="fas fa-edit"></li>Articles
  @endsection

  @section('apresHome')
    Articles
  @endsection

@section('content')
	
    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <button  id="update" hidden class="toastrDefaultSuccess">ok</button>
       @endif
    </div>
    <div class="row">
        @foreach ( $posts as $post)
          <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-4 box-shadow" style="height: 100%;">
                 <div class="card-header">
                    <h3 class="card-title">{!! $post->created_at !!}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-danger btn-sm">
                      {!! Form::open(['method' => 'DELETE', 'route' => ['postsAdmin.destroy', $post->id]]) !!}
                              {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vroulez-vous vraiment supprimer ?\')']) !!}
                      {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                 @foreach ($medias as $media)
                    @if ($post->media_id == $media->id)
                     <img class="card-img-top" src="/{{$media->chemin}}/{{$media->nom}}"
                    alt="Card image cap" style="height: 300px;">
                    @endif
                  @endforeach
                <div class="card-body">
                  <hr>
                  <p class="card-text">{!! strtoupper($post->titre) !!}</p>
                    <small class="text-muted">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/postsAdmin/{{ $post->id }}/edit"><i class="fa fa-edit"> Mettre a jour</i></a>
                      </button>
                    </small>
                  </div>
                </div>
              </div>
       @endforeach
    </div>
    <div class="row justify-content-center">
       <a href="/admin/postsAdmin/create" class="btn btn-info btn-lg float-left">
        <i class=" fa fa-plus">  Ajouter un Article</i></a>
    </div><br>
    
@endsection