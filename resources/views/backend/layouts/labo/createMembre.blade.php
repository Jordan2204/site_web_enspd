 <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création d'un nouveau Membre</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    @if(session('role') === 'admin')
                     {!! Form::open(['route' => 'personnelAdmin.store', 'class' => 'form-horizontal panel']) !!} 
                    @elseif(session('role') === 'respecoledoct')
                     {!! Form::open(['route' => 'personnel.store', 'class' => 'form-horizontal panel']) !!} 
                    @endif
                   
                     <div class="form-group {!! $errors->has('gradePers') ? 'has-warning' : '' !!}">
                        <label for="gradePers">Grade</label>
                        {!! Form::text('gradePers', null, ['class' => 'form-control','id' => 'gradePers', 'placeholder' => 'Grade']) !!}
                        {!! $errors->first('gradePers', '<small class="help-block">:message</small>') !!}
                        
                    </div>  
                    <div class="form-group {!! $errors->has('nomPers') ? 'has-warning' : '' !!}">
                        <label for="lieuDeServicePers">Nom</label>
                        {!! Form::text('nomPers', null, ['class' => 'form-control','id' => 'nomPers', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nomPers', '<small class="help-block" style="color: red;">:message</small>') !!}

                    </div>

                    <div class="form-group {!! $errors->has('prenomPers') ? 'has-warning' : '' !!}">
                        <label for="prenomMLabo">Prenom</label>
                        {!! Form::text('prenomPers', null, ['class' => 'form-control','id' => 'prenomPers', 'placeholder' => 'Prenom']) !!}
                        {!! $errors->first('prenomPers', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                   
                    <div class="form-group {!! $errors->has('lieuDeServicePers') ? 'has-warning' : '' !!}">
                        <label for="lieuMLabo">Lieu</label>
                        {!! Form::text('lieuDeServicePers', null, ['class' => 'form-control','id' => 'lieuDeServicePers', 'placeholder' => 'Lieu de service']) !!}
                        {!! $errors->first('lieuDeServicePers', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('typeMLabo') ? 'has-warning' : '' !!}">
                       <select name="typeMLabo" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                                <option  data-select2-id="30" value="MbH" selected="selected">Membre D'Honneur</option>
                                <option  data-select2-id="31" value="Coord">Coordonnateur</option>
                                <option  data-select2-id="32" value="Mb">Membre</option>
                        </select>
                    </div>
                    <div class="form-group {!! $errors->has('Labo_idLabo') ? 'has-warning' : '' !!}">
                       <select name="Labo_idLabo" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                                <option  data-select2-id="32" value="1" selected="selected">E3M</option>
                        </select>
                    </div>
                    <div>
                        <a href="javascript:history.back()" class="btn btn-primary float-left"> <i class="fas fa-chevron-circle-left"> Retour</i> 
                          </a>
                    
                        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary float-right ']) !!}
                     </div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>
