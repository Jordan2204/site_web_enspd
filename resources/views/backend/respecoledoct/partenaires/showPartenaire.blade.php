@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage/Show Partenaire
  @endsection


@section('content')
 @include('backend.layouts.partenaires.showPartenaire')
@endsection