    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
        @foreach ( $mediasAgenda as $mediaAgenda)
           <div class="col-md-4 col-sm-4 col-xm-4 col-lg-4">
            <div class="card card-primary">   
                <div class="card-header">
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                    @if(session('role') === 'admin')
                      {!! Form::open(['method' => 'DELETE', 'route' => ['mediasAdmin.destroy', $mediaAgenda->id]]) !!}
                 
                    @elseif(session('role') === 'respcom')
                      {!! Form::open(['method' => 'DELETE', 'route' => ['mediasRespcom.destroy', $mediaAgenda->id]]) !!}
                    @endif
                             {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette citation ?\')']) !!}
                    {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                   <img src="/{{ $mediaAgenda->chemin }}/{{ $mediaAgenda->nom }}" class="img-thumbnail" alt="News">
                </div>
            </div>              
         </div>

        @endforeach
    </div>
 