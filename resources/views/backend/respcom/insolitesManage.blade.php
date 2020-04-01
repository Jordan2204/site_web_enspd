  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Gestion des insolites
  @endsection

  @section('dashboard')
    Insolites
  @endsection

  @section('apresHome')
    InsolitesManage
  @endsection

@section('content')

    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
        @foreach ( $insolites as $insolite)
           <div class="col-md-4 col-sm-6 col-xm-8 col-lg-3">
            <div class="card card-primary">   
                <div class="card-header">
                  <h3 class="card-title">{{ $insolite->titre }}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                    {!! Form::open(['method' => 'DELETE', 'route' => ['media.destroy', $insolite->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette citation ?\')']) !!}
                    {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                   <img src="/{{ $insolite->chemin }}/{{ $insolite->nom }}" class="img-thumbnail" alt="insolite">
                </div>
            </div>              
         </div>

        @endforeach
    </div>
    <div class="row  justify-content-center align-items-center">
      <div class="align-content-end">{!! link_to_route('insolite.create', 'Ajouter une insolite', [],   ['class' => 'btn btn-info pull-right ']) !!}
    </div><br><br><br><br>
  </div>
@endsection
