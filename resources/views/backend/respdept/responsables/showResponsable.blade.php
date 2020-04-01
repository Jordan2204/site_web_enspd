@extends('respdept/layouts/templateRespDept')

 @section('title')
    Chef Dept
  @endsection

  @section('dashboard')
    Gestion des Responsables
  @endsection

  @section('apresHome')
    ResponsablesManage
  @endsection

@section('content')
  <div class="row justify-content-center align-items-center">

         <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Fiche Responsable</h3>
                </div>
                 <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Matricule :</td>
                                <td><p>  {{ $resp->matPers }}</p></td>
                            </tr>
                            <tr>
                                <td>Nom :</td>
                                <td><p>  {{ $resp->gradePers }} {{ $resp->nomPers }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $resp->prenomPers }}</p></td>
                            </tr>
                            <tr>
                                <td>Poste :</td>
                                <td><p>  {{ $resp->postePers }}</p></td>
                            </tr>
                            <tr>
                                <td>lieu de service :</td>
                                <td><p>  {{ $resp->lieuDeServicePers }}</p></td>
                            </tr>
                        </tbody>
                        
                    </table>
                     <a href="javascript:history.back()" class="btn btn-primary">
                      <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                    {!! link_to_route('personnelDept.edit', 'Modifier', [$resp->id], ['class' => 'btn btn-warning  float-right']) !!}

                </div>
            </div>
        </div>
       </div>
@endsection