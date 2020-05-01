@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/Create Membre
  @endsection

@section('content')
   @include('backend.layouts.labo.createMembre')
@endsection