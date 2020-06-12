    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-5 col-lg-6">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Ajout d'une nouvelle Image</h3>
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
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                           <label for="titre">Titre <span style="color: red;">*</span></label>
                            {!! Form::text('titre', null, ['class' => 'form-control ', 'placeholder' => 'titre']) !!}
                            {!! $errors->first('titre', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        
                        <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        <a href="javascript:history.back()" class="btn btn-info">
                          <i class="fa fa-chevron-circle-left"> Retour</i>  
                        </a>
                        {!! Form::submit('Ajouter', ['class' => 'btn btn-info float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>
