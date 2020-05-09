    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-5 col-lg-6">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Ajout d'une nouvelle News</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                     @if(session()->has('error'))
                        <div class="alert alert-danger">{!! session('error') !!}</div>
                    @endif
                    @if(session('role') === 'admin')
                      {!! Form::open(['url' => 'admin/newsManage', 'files' => true]) !!}
                  
                    @elseif(session('role') === 'respcom')
                      {!! Form::open(['url' => 'respcom/newsManage', 'files' => true]) !!}
                   @endif
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                            <label for="titre">Titre <span style="color: red;">*</span></label>
                            {!! Form::text('titre', null, ['class' => 'form-control ', 'placeholder' => 'titre']) !!}
                            {!! $errors->first('titre', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
               
                        <label>Sources</label>
                        <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                            <label for="image">Image <span style="color: red;">*</span></label>
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                            {!! $errors->first('image', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        <label>OU</label>
                        <div class="form-group {!! $errors->has('url') ? 'has-error' : '' !!}">
                            {!! Form::text('url', null, ['class' => 'form-control ', 'placeholder' => 'url  de l\'images ou vidéos']) !!}
                            {!! $errors->first('url', '<small class="help-block" style="color: red;">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
                            <label for="categorie">Catégorie : <span style="color: red;">*</span></label>
                             <select name="categorie" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                                    <option  data-select2-id="30" value="agenda" selected="selected">Agenda</option>
                                    <option  data-select2-id="31" value="actualites">Actualités</option>
                                   
                            </select>
                        </div>
                        <div>
                            <a href="javascript:history.back()" class="btn btn-info">
                                 <i class="fa fa-chevron-circle-left"> Retour</i>  
                            </a>
                            {!! Form::submit('Créer !', ['class' => 'btn btn-info float-right']) !!}
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>
