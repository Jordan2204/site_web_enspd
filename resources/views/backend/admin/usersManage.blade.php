@extends('admin/layouts/templateAdmin')

 @section('title')
    FGI Admin | Gestion des utilisateurs
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage
  @endsection

@section('content')
	<div class="rows">
		<div class="card-body col-sm-offset-4 col-sm-12">
           <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Admin <span class="badge badge-danger">{!! $admins->count() !!}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Doyen <span class="badge badge-danger"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Resp dept <span class="badge badge-danger">{!! $respDepts->count() !!}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-respCentIncs" role="tab" aria-controls="custom-content-below-respCentIncs" aria-selected="false">Resp centre inc <span class="badge badge-danger"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-RespForm" role="tab" aria-controls="custom-content-below-RespForm" aria-selected="false">Resp form <span class="badge badge-danger"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-RespDoct" role="tab" aria-controls="custom-content-below-RespDoct" aria-selected="false">Resp ecole doct <span class="badge badge-danger"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-Respcom" role="tab" aria-controls="custom-content-below-Respcom" aria-selected="false">Resp com <span class="badge badge-danger"></span></a>
              </li>
            </ul>

            <div class="tab-content" id="custom-content-below-tabContent">
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
                            <th>Autorisation</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($respDepts as $respDept)
                            <tr>
                                <td>{!! $respDept->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respDept->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respDept->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respDept->poste !!}</strong></td>
                                <td class="text-secondary">
                                  <div class="icheck-primary d-inline ml-2">
                                    @if($respDept->auth)
                                      <input type="checkbox" checked value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @else
                                      <input type="checkbox" value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @endif
                                 </div>
                                </td>
                                <td>{!! link_to_route('respDept.show', 'Voir', [$respDept->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respDept.destroy', $respDept->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        <?php $i += 1; ?>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('respDept.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
            
        </div>
    
       <div class="tab-pane fade" id="custom-content-below-respCentIncs" role="tabpanel" aria-labelledby="custom-content-below-respCentIncs-tab">
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
                            <th>Autorisation</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $i = 1; ?>
                        @foreach ($respCentIncs as $respCentInc)
                            <tr>
                                <td>{!! $respCentInc->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respCentInc->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respCentInc->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respCentInc->poste !!}</strong></td>
                                <td class="text-secondary">
                                  <div class="icheck-primary d-inline ml-2">
                                    @if($respCentInc->auth)
                                      <input type="checkbox" checked value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @else
                                      <input type="checkbox" value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @endif
                                 </div>
                                </td>
                                <td>{!! link_to_route('respCentInc.show', 'Voir', [$respCentInc->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respCentInc.edit', 'Modifier', [$respCentInc->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respCentInc.destroy', $respCentInc->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        <?php $i += 1; ?>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('respCentInc.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
           
        </div>
     
       <div class="tab-pane fade" id="custom-content-below-RespForm" role="tabpanel" aria-labelledby="custom-content-below-RespForm-tab">

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
                            <th>Autorisation</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        @foreach ($respForms as $respForm)
                            <tr>
                                <td>{!! $respForm->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respForm->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respForm->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respForm->poste !!}</strong></td>
                                 <td class="text-secondary">
                                  <div class="icheck-primary d-inline ml-2">
                                    @if($respForm->auth)
                                      <input type="checkbox" checked value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @else
                                      <input type="checkbox" value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @endif
                                 </div>
                                </td>
                                <td>{!! link_to_route('respForm.show', 'Voir', [$respForm->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respForm.edit', 'Modifier', [$respForm->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respForm.destroy', $respForm->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        <?php $i += 1;  ?>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('respForm.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
            
        </div>
   
        <div class="tab-pane fade" id="custom-content-below-RespDoct" role="tabpanel" aria-labelledby="custom-content-below-RespDoct-tab">

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
                        <?php $i = 1; ?>
                        @foreach ($respEcoleDocts as $respEcoleDoct)
                            <tr>
                                <td>{!! $respEcoleDoct->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respEcoleDoct->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respEcoleDoct->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respEcoleDoct->poste !!}</strong></td>
                                 <td class="text-secondary">
                                  <div class="icheck-primary d-inline ml-2">
                                    @if($respEcoleDoct->auth)
                                      <input type="checkbox" checked value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @else
                                      <input type="checkbox" value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @endif
                                 </div>
                                </td>
                                <td>{!! link_to_route('respEcoleDoct.show', 'Voir', [$respEcoleDoct->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respEcoleDoct.edit', 'Modifier', [$respEcoleDoct->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respEcoleDoct.destroy', $respEcoleDoct->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        <?php $i +=1; ?>
                        @endforeach
                    </tbody>
                </table>
           </div>
            <span class="align-self-end">{!! link_to_route('respEcoleDoct.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}</span>
         </div>
 
          <div class="tab-pane fade" id="custom-content-below-Respcom" role="tabpanel" aria-labelledby="custom-content-below-Respcom-tab">
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
                            <th>Autorisation</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                        @foreach ($respComs as $respCom)
                            <tr>
                                <td>{!! $respCom->id !!}</td>
                                <td class="text-secondary"><strong>{!! $respCom->name !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respCom->prenom !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $respCom->poste !!}</strong></td>
                                <td class="text-secondary">
                                  <div class="icheck-primary d-inline ml-2">
                                    @if($respCom->auth)
                                      <input type="checkbox" checked value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @else
                                      <input type="checkbox" value="" name="todo{!! $i !!}" id="todoCheck{!! $i !!}" disabled>
                                     <label for="todoCheck{!! $i !!}"></label>
                                     @endif
                                 </div>
                                </td>
                                <td>{!! link_to_route('respCom.show', 'Voir', [$respCom->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('respCom.edit', 'Modifier', [$respCom->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['respCom.destroy', $respCom->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        <?php $i +=1; ?>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('respCom.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info float-right']) !!}
     </div>
    </div>
  	</div>
  </div> 
@endsection