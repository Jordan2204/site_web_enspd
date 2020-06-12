    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
      @if(!empty($insolites))
        @foreach ( $insolites as $insolite)
           <div class="col-md-4 col-sm-6 col-xm-8 col-lg-3">
            <div class="card card-primary" >   
                <div class="card-header">
                  <h3 class="card-title">{{ $insolite->titre }}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                   @if(session('role') === 'admin')
                     {!! Form::open(['method' => 'DELETE', 'route' => ['mediasAdmin.destroy', $insolite->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette insolite ?\')']) !!}
                    {!! Form::close() !!}
                   @elseif(session('role') === 'respcom')
                     {!! Form::open(['method' => 'DELETE', 'route' => ['mediasRespcom.destroy', $insolite->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette insolite ?\')']) !!}
                    {!! Form::close() !!}
                   @endif
                   </button>

                  </div>
                  <!-- /. tools -->
                </div>
                   <img src="/{{ $insolite->chemin }}/{{ $insolite->nom }}"  alt="insolite">
             </div>              
         </div>

        @endforeach
      @endif
    </div>
    <div class="row  justify-content-center align-items-center">
      @if(session('role') === 'admin')
        <div class="align-content-end">{!! link_to_route('insoliteAdmin.create', 'Ajouter une insolite', [],   ['class' => 'btn btn-info ']) !!}
        </div><br><br><br><br>    
      @elseif(session('role') === 'respcom')
       <div class="align-content-end">{!! link_to_route('insolite.create', 'Ajouter une   insolite', [],   ['class' => 'btn btn-info ']) !!}
        </div><br><br><br><br>             
      @endif
   </div>
