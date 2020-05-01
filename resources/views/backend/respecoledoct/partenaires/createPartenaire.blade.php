@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    UserManage/Create Partenaires
  @endsection

@section('content')
   @include('backend.layouts.partenaires.createPartenaire')
@endsection