    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
        @foreach ( $citations as $citation)
           <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title"> {!! $citation->nomAuteur !!}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                    {!! Form::open(['method' => 'DELETE', 'route' => ['citation.destroy', $citation->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette citation ?\')']) !!}
                    {!! Form::close() !!}
                   </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                    {!! $citation->citationAuteur !!}
                </div>
            </div>              
         </div>

        @endforeach
    </div>
    <div class="row  justify-content-center align-items-center">
      @if(session('role') === 'admin')
        <div class="align-content-end">{!! link_to_route('citationAdmin.create', 'Ajouter une citation', [],   ['class' => 'btn btn-info pull-right ']) !!}
      @elseif(session('role') === 'respcom')
        <div class="align-content-end">{!! link_to_route('citation.create', 'Ajouter une citation', [],   ['class' => 'btn btn-info pull-right ']) !!}
      @endif
      </div><br><br><br><br>
     </div>
