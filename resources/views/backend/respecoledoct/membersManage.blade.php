@extends('respecoledoct/layouts/templateRespEcoleDoct')

 @section('title')
    Resp Ecole Doct
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage
  @endsection

@section('content')
	<div class="rows">
		<div class="card-body col-sm-offset-4 col-sm-12">
           <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-1-tab" data-toggle="pill" href="#custom-content-below-1" role="tab" aria-controls="custom-content-below-1" aria-selected="true">Membres D'Honneurs <span class="badge badge-danger"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-2-tab" data-toggle="pill" href="#custom-content-below-2" role="tab" aria-controls="custom-content-below-2" aria-selected="false">Membres <span class="badge badge-danger"></span></a>
              </li>
               <li class="nav-item">
                <a class="nav-link" id="custom-content-below-3-tab" data-toggle="pill" href="#custom-content-below-3" role="tab" aria-controls="custom-content-below-3" aria-selected="false">Coordonnateurs <span class="badge badge-danger"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-4-tab" data-toggle="pill" href="#custom-content-below-4" role="tab" aria-controls="custom-content-below-4" aria-selected="false">Partenaires <span class="badge badge-danger"></span></a>
              </li>
            </ul>

            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade active show" id="custom-content-below-1" role="tabpanel" aria-labelledby="custom-content-below-1-tab">
                 
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
                <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des Membres</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Lieu de service</th>
                            <th>Labo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mbresHs as $mbresH)
                            <tr>
                                <td>{!! $mbresH->id !!}</td>
                                <td class="text-secondary"><strong>{!! $mbresH->gradePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->nomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->prenomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->lieuDeServicePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbresH->nomLabo !!}</strong></td>
                               
                                <td>{!! link_to_route('personnel.show', 'Voir', [$mbresH->id], ['class' => 'btn btn-success btn-block']) !!}</td>

                                @if (empty($mbresH->postePers))
                                 <td>{!! link_to_route('personnel.edit', 'Modifier', [$mbresH->id], ['class' => 'btn btn-warning btn-block ']) !!}</td>
                                <td>

                                @else

                                <td>{!! link_to_route('personnel.edit', 'Modifier', [$mbresH->id], ['class' => 'btn btn-warning btn-block disabled']) !!}</td>
                                <td>

                                @endif

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['personnel.destroyP', $mbresH->id,'MbH' ]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            <div class="align-content-end">
              {!! Form::open(['method' => 'GET', 'route' => ['personnel.index']]) !!}
               {!! Form::text('ChoixM', 'MbH', ['class' => 'form-control','id' => 'prenomPers', 'hidden' => 'true','value' => 'MbH']) !!}
                {!! Form::submit('Ajouter', ['class' => 'btn btn-info float-right']) !!}
            {!! Form::close() !!}
            </div>
          
              </div>
              <div class="tab-pane fade" id="custom-content-below-2" role="tabpanel" aria-labelledby="custom-content-below-2-tab">
                

                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des Membres</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Lieu de service</th>
                            <th>Labo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mbres as $mbre)
                            <tr>
                                <td>{!! $mbre->id !!}</td>
                                <td class="text-secondary"><strong>{!! $mbre->gradePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbre->nomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbre->prenomPers !!}</strong></td>
                                 <td class="text-secondary"><strong>{!! $mbre->lieuDeServicePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $mbre->nomLabo !!}</strong></td>
  
                                <td>{!! link_to_route('personnel.show', 'Voir', [$mbre->id], ['class' => 'btn btn-success btn-block']) !!}</td>

                                @if($mbre->postePers == '')
                                 <td>{!! link_to_route('personnel.edit', 'Modifier', [$mbre->id], ['class' => 'btn btn-warning btn-block ']) !!}</td>
                                <td>

                                @else

                                <td>{!! link_to_route('personnel.edit', 'Modifier', [$mbre->id], ['class' => 'btn btn-warning btn-block disabled']) !!}</td>
                                <td>

                                @endif
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['personnel.destroyP', $mbre->id,'Mb']]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
             {!! Form::open(['method' => 'GET', 'route' => ['personnel.index']]) !!}
               {!! Form::text('ChoixM', 'Mb', ['class' => 'form-control','id' => 'prenomPers', 'hidden' => 'true','value' => 'Mb']) !!}
                {!! Form::submit('Ajouter', ['class' => 'btn btn-info float-right']) !!}
            {!! Form::close() !!}
         </div>
     
        <div class="tab-pane fade" id="custom-content-below-3" role="tabpanel" aria-labelledby="custom-content-below-3-tab">
                
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des Membres</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Lieu de service</th>
                            <th>Labo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coords as $coord)
                            <tr>
                                <td>{!! $coord->id !!}</td>
                                <td class="text-secondary"><strong>{!! $coord->gradePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->nomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->prenomPers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->lieuDeServicePers !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $coord->nomLabo !!}</strong></td>
                                <td>{!! link_to_route('personnel.show', 'Voir', [$coord->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('personnel.edit', 'Modifier', [$coord->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['personnel.destroyP', $coord->id,'Coord']]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
           {!! Form::open(['method' => 'GET', 'route' => ['personnel.index']]) !!}
               {!! Form::text('ChoixM', 'Coord', ['class' => 'form-control','id' => 'prenomPers', 'hidden' => 'true','value' => 'Coord']) !!}
                {!! Form::submit('Ajouter', ['class' => 'btn btn-info float-right']) !!}
            {!! Form::close() !!}
          
        </div>
  
     <div class="tab-pane fade" id="custom-content-below-4" role="tabpanel" aria-labelledby="custom-content-below-4-tab">
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des Partenaires</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Raison Sociale</th>
                            <th>Ville</th>
                            <th>Labo</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partnaires as $partnaire)
                            <tr>
                                <td>{!! $partnaire->id !!}</td>
                                <td class="text-secondary"><strong>{!! $partnaire->raison_socialePLabo !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $partnaire->villePLabo !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $partnaire->nomLabo!!}</strong></td>
                                <td>{!! link_to_route('partenairelabo.show', 'Voir', [$partnaire->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('partenairelabo.edit', 'Modifier', [$partnaire->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['partenairelabo.destroy', $partnaire->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('partenairelabo.create', 'Ajouter un partenaire', [], ['class' => 'btn btn-info float-right']) !!}

            
        </div>

        
        </div>
    
    </div>
  	</div>
  </div> 
@endsection