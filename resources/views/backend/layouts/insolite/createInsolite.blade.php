    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-6 col-lg-8">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Ajout d'une nouvelle insolites</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                     @if(session()->has('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                    @endif
                   @if(session('role') === 'admin')
                         {!! Form::open(['url' => 'admin/insolitesManage', 'files' => true]) !!}
                    @elseif(session('role') === 'respcom')
                         {!! Form::open(['url' => 'respcom/insolitesManage', 'files' => true]) !!}
                    @endif
                        {!! Form::control('text', $errors, 'titre', 'Titre','require') !!}
                        {!! Form::control('file', $errors, 'image', '','') !!}
                    
                       {!! Html::button_back() !!}
                       {!! Form::button_submit('Ajouter !') !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>
