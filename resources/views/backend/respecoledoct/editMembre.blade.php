@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/edit Membre
  @endsection


@section('content')
    @include('backend.layouts.labo.editMembre')
@endsection