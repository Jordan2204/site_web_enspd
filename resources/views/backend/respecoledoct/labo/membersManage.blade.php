@extends('admin/layouts/templateAdmin')

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
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-tous" role="tab" aria-controls="custom-content-below-tous" aria-selected="true">Tous <span class="badge badge-danger">{!! $admins->count() !!}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Membres <span class="badge badge-danger">{!! $admins->count() !!}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Membres D'Honneurs <span class="badge badge-danger">{!! $doyens->count() !!}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Coordonnateurs <span class="badge badge-danger">{!! $respDepts->count() !!}</span></a>
              </li>
             </ul>
             <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Partenaires <span class="badge badge-danger">{!! $respDepts->count() !!}</span></a>
              </li>
             </ul>

            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade active show" id="custom-content-below-tous" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                 
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
                <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tous les utilisateurs</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Poste</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{!! $admin->id !!}</td>
                                <td class="text-secondary"><strong>{!! $admin->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $admin->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $admin->poste !!}</strong></td>
                                <td>{!! link_to_route('admin.show', 'Voir', [$admin->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('admin.edit', 'Modifier', [$admin->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $admin->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            <div class="align-content-end">{!! link_to_route('admin.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right ']) !!}</div>
            <div class="align-self-end">{!! $links1 !!}</div>
     
              </div>
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                

                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des utilisateurs</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Poste</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{!! $admin->id !!}</td>
                                <td class="text-secondary"><strong>{!! $admin->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $admin->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $admin->poste !!}</strong></td>
                                <td>{!! link_to_route('admin.show', 'Voir', [$admin->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('admin.edit', 'Modifier', [$admin->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $admin->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('admin.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
            {!! $links1 !!}
        </div>
     
        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des utilisateurs</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Poste</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doyens as $doyen)
                            <tr>
                                <td>{!! $doyen->id !!}</td>
                                <td class="text-secondary"><strong>{!! $doyen->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $doyen->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $doyen->poste !!}</strong></td>
                                <td>{!! link_to_route('doyen.show', 'Voir', [$doyen->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('doyen.edit', 'Modifier', [$doyen->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['doyen.destroy', $doyen->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('doyen.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
            {!! $links2 !!}
        </div>
  
     <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des utilisateurs</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Poste</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($respDepts as $respDept)
                            <tr>
                                <td>{!! $respDept->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respDept->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respDept->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respDept->poste !!}</strong></td>
                                <td>{!! link_to_route('respDept.show', 'Voir', [$respDept->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respDept.destroy', $respDept->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('respDept.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
            
        </div>

         <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
               <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des utilisateurs</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Poste</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($respDepts as $respDept)
                            <tr>
                                <td>{!! $respDept->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respDept->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respDept->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respDept->poste !!}</strong></td>
                                <td>{!! link_to_route('respDept.show', 'Voir', [$respDept->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respDept.destroy', $respDept->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('respDept.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
            
        </div>
    
    </div>
  	</div>
  </div> 
@endsection