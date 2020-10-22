@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/editAdmin
  @endsection


@section('content')
    <div class="row justify-content-center align-items-center">

        <div class="col-md-6 col-sm-7 col-xm-9">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class=" card-title">Modification d'un utilisateur</h3>
                </div>
            <div class="card-body "> 
                    {!! Form::model($admin, ['route' => ['admin.update', $admin->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}

                        {!! Form::control('text', $errors, 'name', 'Nom','require') !!}
                        {!! Form::control('text', $errors, 'prenom', 'Prenom','') !!}
                        {!! Form::control('text', $errors, 'poste', 'Poste','require') !!}
                        {!! Form::control('email', $errors, 'email', 'Email','require') !!}

                        {!! Html::button_back() !!}
                        {!! Form::button_submit('Valider !') !!}
                     
                    {!! Form::close() !!}
                </div>
            </div>
         
    </div>
@endsection