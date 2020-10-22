@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    Responsable de l'école doctorale
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/ShowRespecoledoct
  @endsection


@section('content')
    @include('backend.showUsers.showRespEcoleDoct')
@endsection