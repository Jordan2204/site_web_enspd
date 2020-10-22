@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Membres du laboratoire
  @endsection

  @section('apresHome')
    UserManage/Create Membre
  @endsection

@section('content')
   @include('backend.layouts.labo.createMembre')
@endsection