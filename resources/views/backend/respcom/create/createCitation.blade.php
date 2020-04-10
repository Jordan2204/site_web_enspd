@extends('respcom/layouts/templateRespCom')

@section('title')
   Resp Com | Création d'une citation
  @endsection

  @section('dashboard')
    Gestion des Citations
  @endsection

  @section('apresHome')
    CiationsManage/Create/Citation
  @endsection

@section('content')
    <div class="row justify-content-center align-items-center">
       
    <div class="col-md-6 col-lg-6">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title"> Ajout d'une nouvelle citation</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'citation.store', 'class' => 'form-horizontal panel']) !!}   
                    
                    <div class="form-group {!! $errors->has('nomAuteur') ? 'has-error' : '' !!}">
                      <label for="nomAuteur">Nom de l'auteur <span style="color: red;">*</span></label>
                        {!! Form::text('nomAuteur', null, ['class' => 'form-control', 'placeholder' => 'Auteur']) !!}
                        {!! $errors->first('nomAuteur', '<small class="help-block">:message</small>') !!}
                        
                    </div>
                      <div class="form-group">
                        <label>Contenu</label>
                        <textarea name="citationAuteur" class="form-control" rows="4" placeholder="Votre citation.."></textarea>
                      </div>

                    <div>
                      <a href="javascript:history.back()" class="btn btn-primary">
                          <i class="fa fa-chevron-circle-left"> Retour</i>  
                      </a>

                      {!! Form::submit('Créer', ['class' => 'btn btn-primary float-right ']) !!}</div>
                   
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
       
    </div>
    </div>
</div>


   
@endsection