@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage/Show Membre
  @endsection


@section('content')
     @include('backend.layouts.labo.showMembre')    
@endsection