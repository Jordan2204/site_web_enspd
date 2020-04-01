@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage/Show Partenaire
  @endsection


@section('content')

 <div class="row justify-content-center align-items-center">

        <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche Partenaire</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Raison sociale:</td>
                                <td><p>  {{ $partenaire->raison_socialePLabo }}</p></td>
                            </tr>
                            <tr>
                                <td>Ville :</td>
                                <td><p>  {{ $partenaire->villePLabo }}</p></td>
                            </tr>
                         </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
            {!! link_to_route('partenairelabo.edit', 'Modifier', [$partenaire->id], ['class' => 'btn btn-warning  float-right']) !!}
        </div>
    </div>
@endsection