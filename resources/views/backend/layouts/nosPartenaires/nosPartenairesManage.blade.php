    <div class="row justify-content-center" >
       @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
       @endif
    </div>
    <div class="row">
      @if(!empty($MediasPartenaires[0]))
        @foreach ( $MediasPartenaires as $MediaPartenaire)
           <div class="col-md-4 col-sm-6 col-xm-8 col-lg-3">
            <div class="card card-primary">   
                <div class="card-header">
                  <h3 class="card-title">{{ $MediaPartenaire->titre }}</h3>
                    <!-- tools card -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                   
                   @if(session('role') === 'admin')
                     {!! Form::open(['method' => 'DELETE', 'route' => ['mediasAdmin.destroy', $MediaPartenaire->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette image ?\')']) !!}
                    {!! Form::close() !!}
                   @elseif(session('role') === 'respcom')
                     {!! Form::open(['method' => 'DELETE', 'route' => ['mediasRespcom.destroy', $MediaPartenaire->id]]) !!}
                            {!! Form::submit('x', ['class' => 'fas fa-times','onclick' => 'return confirm(\'Vraiment supprimer cette cette image ?\')']) !!}
                    {!! Form::close() !!}
                   @endif
                   </button>

                  </div>
                  <!-- /. tools -->
                </div>
                <div class="card-body"> 
                   <img src="/{{ $MediaPartenaire->chemin }}/{{ $MediaPartenaire->nom }}" class="img-thumbnail" alt="Partenaire">
                </div>
            </div>              
         </div>

        @endforeach
      @endif
    </div>
    <div class="row  justify-content-center align-items-center">
      @if(session('role') === 'admin')
        <div>
          <a href="/admin/mediasManagePart/img" class="btn btn-info">Ajouter Partenaire</a>
          <br><br><br><br>    
      @elseif(session('role') === 'respcom')
        <a href="/respcom/mediasManagePart/img" class="btn btn-info">Ajouter Partenaire</a>
        <br><br><br><br>             
      @endif
   </div>
