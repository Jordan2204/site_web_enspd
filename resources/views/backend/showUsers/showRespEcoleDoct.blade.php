@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/ShowAdmin
  @endsection


@section('content')

 <div class="row justify-content-center align-items-center">

        <div class="col-md-6 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche d'utilisateur</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nom :</td>
                                <td><p>  {{ $respEcoleDoct->name }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $respEcoleDoct->prenom }}</p></td>
                            </tr>
                            <tr>
                                <td>Poste :</td>
                                <td><p>  {{ $respEcoleDoct->poste }}</p></td>
                            </tr>
                            <tr>
                                <td>Autorisation de modification :</td>
                                <td><p>  {{ $respEcoleDoct->auth }}</p></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><p>  {{ $respEcoleDoct->email }}</p></td>
                            </tr>
                        </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-info">
                <i class="fa fa-chevron-circle-left"> Retour</i>  
            </a>
            {!! link_to_route('respEcoleDoct.edit', 'Modifier', [$respEcoleDoct->id], ['class' => 'btn btn-warning  float-right']) !!}
        </div>
    </div>
@endsection