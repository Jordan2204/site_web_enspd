@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage/Show Membre
  @endsection


@section('content')

 <div class="row justify-content-center align-items-center">

        <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche Membre</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Matricule :</td>
                                <td><p>  {{ $membre->matPers }}</p></td>
                            </tr>
                            <tr>
                                <td>Grade :</td>
                                <td><p>  {{ $membre->gradePers }}</p></td>
                            </tr>
                            <tr>
                                <td>Nom :</td>
                                <td><p>  {{ $membre->nomPers }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $membre->prenomPers }}</p></td>
                            </tr>
                            <tr>
                                <td>Lieu de service:</td>
                                <td><p>  {{ $membre->lieuDeServicePers }}</p></td>
                            </tr>
                         </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
            {!! link_to_route('personnel.edit', 'Modifier', [$membre->id], ['class' => 'btn btn-warning  float-right']) !!}
        </div>
    </div>
@endsection