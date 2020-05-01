@extends('respecoledoct/layouts/templateRespEcoleDoct')

 @section('title')
    Resp Ecole Doct
  @endsection

  @section('dashboard')
    <i class="fas fa-users"></i>Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage
  @endsection

@section('content')
  @include('backend.layouts.labo.membersManage')
@endsection