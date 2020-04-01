@extends('layouts/templatebackend')
 
 
@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-6">
         @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des utilisateurs</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{!! $admin->id !!}</td>
                            <td class="text-primary"><strong>{!! $admin->name !!}</strong></td>
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
        {!! link_to_route('admin.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
        {!! $links !!}
    </div>
@endsection
