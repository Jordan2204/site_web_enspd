@extends('respecoledoct/layouts/templateRespEcoleDoct')

 @section('title')
   Responsable de l'ecole doctorale
  @endsection

  @section('dashboard')
    Gestion des Medias
  @endsection

  @section('apresHome')
    MediaManage/file/update
  @endsection


@section('content')
    @include('backend.layouts.labo.medias.editFile')   
@endsection
