@extends('layouts/templatebackend')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading">Modification d'un utilisateur</div>
            <div class="panel-body"> 
                <div class="col-sm-12">
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
     </div>
@endsection