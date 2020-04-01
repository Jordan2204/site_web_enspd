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

        <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche d'utilisateur</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nom :</td>
                                <td><p>  {{ $admin->name }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $admin->prenom }}</p></td>
                            </tr>
                            <tr>
                                <td>Poste :</td>
                                <td><p>  {{ $admin->poste }}</p></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><p>  {{ $admin->email }}</p></td>
                            </tr>
                        </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
            {!! link_to_route('admin.edit', 'Modifier', [$admin->id], ['class' => 'btn btn-warning  float-right']) !!}
        </div>
    </div>
@endsection