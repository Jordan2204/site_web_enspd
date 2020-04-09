  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication
  @endsection

  @section('dashboard')
    News
  @endsection

  @section('apresHome')
    ActualitésManage
  @endsection

@section('content')

    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
        @foreach ( $mediasActu as $mediaActu)
           <div class="col-md-4 col-sm-4 col-xm-4 col-lg-4">
            <div class="card card-primary">   
                <div class="card-header">
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                    {!! Form::open(['method' => 'DELETE', 'route' => ['mediasRespcom.destroy', $mediaActu->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment Cette news ?\')']) !!}
                    {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                   <img src="/{{ $mediaActu->chemin }}/{{ $mediaActu->nom }}" class="img-thumbnail" alt="News">
                </div>
            </div>              
         </div>

        @endforeach
    </div>
   @endsection
