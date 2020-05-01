
    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <button  id="update" hidden class="toastrDefaultSuccess">ok</button>
       @endif
    </div>
    <div class="row">
        @foreach ( $infosFGI as $infoFGI)
          <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                 <div class="card-header">
                    <h3 class="card-title">{!! $infoFGI->titreFECB !!}</h3>
                    <!-- tools card -->
                 @if(session('role') === "admin")
                  <div class="card-tools">
                    <button type="button" class="btn btn-danger btn-sm">
                      {!! Form::open(['method' => 'DELETE', 'route' => ['infosfgi.destroy', $infoFGI->idInfo]]) !!}
                        {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vroulez-vous vraiment supprimer ?\')']) !!}
                      {!! Form::close() !!}
                   </button>
                  <!-- /. tools -->
                </div>
                @endif
                </div>
              <div class="card-body">
               <img class="card-img-top" alt="Thumbnail [100%250]" src="/{{ $infoFGI->chemin }}/{{ $infoFGI->nom }}" style="height: 100%; width: 100%; display: block;">
                <div class="card-footer">
                  <div class="d-flex justify-content-between align-items-center">
                     @if(session('role') === "admin")
                     <div class="btn-group">
                        {!! link_to_route('mediasAdmin.edit', 'Mettre a jour l\'image', [$infoFGI->idMD], ['class' => 'btn btn-sm btn-outline-secondary  float-right']) !!}
                      </div>
                      <small class="text-muted">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/admin/infosfgiAdmin/{{ $infoFGI->idInfo }}/edit"><i class="fa fa-edit"> Modifier</i></a>
                         </button>
                      </small>

                      @elseif(session('role') == "respform")
                      <div class="btn-group">
                    
                        {!! link_to_route('mediasRespform.edit', 'Mettre a jour l\'image', [$infoFGI->idMD], ['class' => 'btn btn-sm btn-outline-secondary  float-right']) !!}
                        </div>
                        <small class="text-muted">
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/respform/infosfgi/{{ $infoFGI->idInfo }}/edit"><i class="fa fa-edit"> Modifier</i></a>
                           </button>
                        </small>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
       @endforeach
    </div>
   