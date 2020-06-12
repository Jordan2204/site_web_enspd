@extends('admin/layouts/templateAdmin')

@section('title')
    FGI Admin | création d'un département
  @endsection

  @section('dashboard')
     <li class="fas fa-edit"></li>  Gestion des departements
  @endsection

  @section('apresHome')
    DepartementManager/CreateDept
  @endsection

@section('content')
    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <button  id="update" hidden class="toastrDefaultSuccess">ok</button>
       @endif
    </div>
    <div class="row justify-content-center">
      @foreach ($depts as $dept) 
      <div class="col-md-4 col-sm-4">
        <div class="card card-info" style="height: 100%;">
          <div class="card-header ">
            <h4 class="card-title" align="center">
              {{ $dept->nomDept }} ({{ $dept->ABBR }})
            </h4>
          <!-- tools card -->
              <div class="card-tools">
                <button type="button" class="btn btn-danger btn-sm">
                  {!! Form::open(['method' => 'DELETE', 'route' => ['departementAdmin.destroy', $dept->id]]) !!}
                          {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vroulez-vous vraiment supprimer ?\')']) !!}
                  {!! Form::close() !!}
               </button>
              </div>
                  <!-- /. tools -->
          </div>
            @foreach ($medias as $media)
              @if ($dept->media_id == $media->id)
               <img class="card-img-top" alt="Thumbnail [100%250]" src="/{{ $media->chemin }}/{{ $media->nom }}" style="height: 250px; width: 100%; display: block;">
              <p class="card-text">{!! $dept->infoDept !!}</p>
              <hr class="solid"></hr>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 {!! link_to_route('mediasAdmin.edit', 'Mettre a jour l\'image', [$media->id], ['class' => 'btn btn-sm btn-outline-secondary  float-right']) !!}
                </div>
                <small class="text-muted">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/departementAdmin/{{ $dept->id }}/edit"><i class="fa fa-edit"> Modifier</i></a>
                  </button>
                </small>
              </div>

              @endif
            @endforeach
          </div>
        </div>
        @endforeach
      </div> 
   
@endsection