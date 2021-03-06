@extends('respdept/layouts/templateRespDept')

 @section('title')
    Chef Dept
  @endsection

  @section('dashboard')
    <i class="fas fa-users"></i> Gestion des Responsables
  @endsection

  @section('apresHome')
    ResponsablesManage
  @endsection

@section('content')
  <div class="rows">
    <div class="card-body col-sm-offset-4 col-sm-12">
          
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade active show" id="custom-content-below-1" role="tabpanel" aria-labelledby="custom-content-below-1-tab">
                 
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                    @elseif(session()->has('er'))
                       <div class="alert alert-danger alert-dismissible">{!! session('er') !!}</div>
                    @endif
                <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des Responsables</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Grade</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Poste</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($resps as $resp)
                            <tr>
                                <td>{{ $resp->id }}</td>
                                <td class="text-secondary"><strong>{{ $resp->gradePers }}</strong></td>
                                <td class="text-secondary"><strong>{{ $resp->nomPers }}</strong></td>
                                <td class="text-secondary"><strong>{{ $resp->prenomPers }}</strong></td>
                                <td class="text-secondary"><strong>{{ $resp->postePers }}</strong></td>
                             
                                 <td>
                                  <a href="{{ route('personnelDept.show',[$resp->id])}}" class="btn btn-success btn-block">
                                    <i class="fa fa-eye" aria-hidden="true">  Voir</i>
                                  </a> 
                                </td>
                                <td>
                                  <a href="{{ route('personnelDept.edit',[$resp->id])}}" class="btn btn-warning btn-block">
                                    <i class="fas fa-edit" aria-hidden="true">  Modifier</i>
                                  </a> 
                                </td>
  
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['personnel.destroyD',$resp->id,'R']]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                       @endforeach 
                    </tbody>
                </table>
           </div>
            <div class="row justify-content-center">
              <a href="/respdept/personnelDept/create" class="btn btn-info float-left">
                <i class="fas fa-plus"> Nouveau</i></a>
            </div>
          
          </div>
             
        </div>
     </div>
    </div>
  </div> 
@endsection