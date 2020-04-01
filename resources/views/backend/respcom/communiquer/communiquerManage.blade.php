  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Communiqué
  @endsection

  @section('dashboard')
    Citations
  @endsection

  @section('apresHome')
    CitationsManage
  @endsection

@section('content')

    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
        @foreach ( $communiques as $communiquer)
           <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title"> {!! $communiquer->destinataireCom !!}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                    {!! Form::open(['method' => 'DELETE', 'route' => ['communiquer.destroy', $communiquer->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette citation ?\')']) !!}
                    {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                    {!! $communiquer->contenuCom !!}
                </div>
            </div>              
         </div>

        @endforeach
    </div>
    <div class="row  justify-content-center align-items-center">
      <div class="align-content-end">{!! link_to_route('communiquer.create', 'Ajouter un communiquer', [],   ['class' => 'btn btn-info pull-right ']) !!}
    </div><br><br><br><br>
        


    
    </div>
@endsection
