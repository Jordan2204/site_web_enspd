    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-9 col-lg-7">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Création d'un nouveau Partenaires</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                  @if(session('role') === 'admin')
                   {!! Form::open(['route' => 'partenairelaboAdmin.store', 'class' => 'form-horizontal panel']) !!} 
                  @elseif(session('role') === 'respecoledoct')
                   {!! Form::open(['route' => 'partenairelabo.store', 'class' => 'form-horizontal panel']) !!} 
                  @endif
                     <div class="form-group {!! $errors->has('gradePers') ? 'has-warning' : '' !!}">
                        <label for="gradePers">Raison Sociale</label>
                        {!! Form::text('raison_socialePLabo', null, ['class' => 'form-control','id' => 'raison_socialePLabo', 'placeholder' => 'Raison sociale']) !!}
                        {!! $errors->first('raison_socialePLabo', '<small class="help-block">:message</small>') !!}
                        
                    </div>  
                    <div class="form-group {!! $errors->has('villePLabo') ? 'has-warning' : '' !!}">
                        <label for="lieuDeServicePers">Ville</label>
                        {!! Form::text('villePLabo', null, ['class' => 'form-control','id' => 'nomPers', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('villePLabo', '<small class="help-block">:message</small>') !!}

                    </div>
                    <div class="form-group {!! $errors->has('idLabo') ? 'has-warning' : '' !!}">
                       <select name="idLabo" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; "data-select2-id="17" tabindex="-1" aria-hidden="true">
                                <option  data-select2-id="32" value="1" selected="selected">E3M</option>
                        </select>
                    </div>
                    <div>
                        <a href="javascript:history.back()" class="btn btn-primary float-left"><i class="fas fa-chevron-circle-left"> </i> Retour
                         </a>
                    
                        {!! Form::submit('Créer', ['class' => 'btn btn-primary float-right ']) !!}
                     </div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>
