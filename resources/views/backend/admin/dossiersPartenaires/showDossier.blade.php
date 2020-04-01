@extends('admin/layouts/templateAdmin')

@section('title')
    FGI Admin | Consultation d'un dossier
  @endsection

  @section('dashboard')
    Gestion des Dossiers
  @endsection

  @section('apresHome')
    DossiersManage/ShowDossier
  @endsection


@section('content')

 <div class="row justify-content-center align-items-center">

        <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Consultaion du dossier  {{ $dossierPartenaire->nomDOC }} </h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Dossier :</td>
                                <td><p>  {{ $dossierPartenaire->nomDOC }}</p></td>
                            </tr>
                            <tr>
                                <td>Num BCA :</td>
                                <td><p>  {{ $dossierPartenaire->numBCA }}</p></td>
                            </tr>
                            <tr>
                                <td>Introduit le  :</td>
                                <td><p>  {{ $dossierPartenaire->date_intr }}</p></td>
                            </tr>
                            <tr>
                                <td>Etape :</td>
                                <td><p>  {{ $dossierPartenaire->etape }}</p></td>
                            </tr>
                            <tr>
                                <td>Position Actuelle :</td>
                                <td><p>  {{ $dossierPartenaire->infosActu }}</p></td>
                            </tr>
                            <tr>
                                <td>Observations :</td>
                                <td><p>  {{ $dossierPartenaire->observations }}</p></td>
                            </tr>
                        </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
            {!! link_to_route('docPartenaires.edit', 'Modifier', [$dossierPartenaire->id], ['class' => 'btn btn-warning  float-right']) !!}
        </div>
    </div>
@endsection