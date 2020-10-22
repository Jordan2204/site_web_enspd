@extends('admin/layouts/templateAdmin')

 @section('title')
    {{ config('app.sigle') }} : Admin | Gestion des memembres de l'administration centrale
  @endsection

  @section('dashboard')
     <li class="fas fa-edit"></li> L'administratrion centrale de la FGI
  @endsection

  @section('apresHome')
    AdminCentrale
  @endsection

@section('content')
	
    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <button  id="update" hidden class="toastrDefaultSuccess">ok</button>
       @endif
    </div>
    <div class="row">
        @foreach ( $persoAdminCents as $persoAdminCent)
          <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-4 box-shadow">
                 <div class="card-header">
                    <h3 class="card-title">{!! $persoAdminCent->gradePers !!} {!! $persoAdminCent->nomPers !!} {!! $persoAdminCent->prenomPers !!}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-danger btn-sm">
                      {!! Form::open(['method' => 'DELETE', 'route' => ['adminCent.destroyP', $persoAdminCent->idPers,'MAdminCent']]) !!}
                              {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vroulez-vous vraiment supprimer ?\')']) !!}
                      {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <img class="card-img-top" alt="Thumbnail [100%250]" src="/{{ $persoAdminCent->chemin }}/{{ $persoAdminCent->nom }}" style="height: 250px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">{!! strtoupper($persoAdminCent->postePers) !!}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     {!! link_to_route('mediasAdminCent.edit', 'Mettre a jour l\'image', [$persoAdminCent->idM], ['class' => 'btn btn-sm btn-outline-secondary  float-right']) !!}
                    </div>
                    <small class="text-muted">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/adminCent/{{ $persoAdminCent->idPers }}/edit"><i class="fa fa-edit"> Modifier</i></a>
                      </button>
                    </small>
                  </div>
                </div>
              </div>
            </div>
       @endforeach
    </div>
    <div class="row justify-content-center">
       <a href="/admin/adminCent/create" class="btn btn-info btn-lg float-left">
        <i class=" fa fa-plus">  Nouveau</i></a>
    </div><br>
    
@endsection