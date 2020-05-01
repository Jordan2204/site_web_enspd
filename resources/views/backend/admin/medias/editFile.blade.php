@extends('admin/layouts/templateAdmin')

 @section('title')
   Admin
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
