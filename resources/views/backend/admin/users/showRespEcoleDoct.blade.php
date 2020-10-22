@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    Gestion des Utilisateurs
  @endsection

  @section('apresHome')
    UserManage/ShowRespecoldoct
  @endsection


@section('content')
    @include('backend.showUsers.showRespEcoleDoct')
@endsection