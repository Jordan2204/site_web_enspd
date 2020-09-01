    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
      @if(!empty($livrets[0]))
        @foreach ( $livrets as $livret)
           <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card card-primary">   
                <div class="card-header">
                  <h3 class="card-title">{{ $livret->titre }}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                   @if(session('role') === 'admin')
                     {!! Form::open(['method' => 'DELETE', 'route' => ['mediasAdmin.destroy', $livret->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette image ?\')']) !!}
                    {!! Form::close() !!}
                   @elseif(session('role') === 'respcom')
                     {!! Form::open(['method' => 'DELETE', 'route' => ['mediasRespcom.destroy', $livret->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette cette image ?\')']) !!}
                    {!! Form::close() !!}
                   @endif
                   </button>

                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                  <a href="/{{ $livret->chemin }}/{{ $livret->nom }}" target="_blank">Telecharger</a>
                  
                </div>
            </div>              
         </div>

        @endforeach
      @endif
    </div>
   