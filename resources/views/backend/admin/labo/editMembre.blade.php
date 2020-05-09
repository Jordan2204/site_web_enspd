@extends('admin/layouts/templateAdmin')

@section('title')
  Admin
@endsection

  @section('dashboard')
    Gestion des Membres du laboratoire
  @endsection

  @section('apresHome')
    UserManage/edit Membre
  @endsection


@section('content')
   @include('backend.layouts.labo.editMembre')
@endsection