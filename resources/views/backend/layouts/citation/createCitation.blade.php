    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-6 col-lg-8">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Ajout d'une nouvelle citation</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                     @if(session('role') === 'admin')
                         {!! Form::open(['route' => 'citationAdmin.store']) !!}
                      @elseif(session('role') === 'respcom')
                         {!! Form::open(['route' => 'citation.store']) !!}
                      @endif

                      {!! Form::control('text', $errors, 'nomAuteur', 'Nom de l\'Auteur','require') !!}
                      {!! Form::control('textarea', $errors, 'contenu', 'Contenu', 'require') !!}

                      {!! Html::button_back() !!}
                      {!! Form::button_submit('Créer !') !!}
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
 </div>
