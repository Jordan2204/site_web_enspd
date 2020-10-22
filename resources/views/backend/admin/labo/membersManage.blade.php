@extends('admin/layouts/templateAdmin')

 @section('title')
    Administrateur
  @endsection

  @section('dashboard')
    Gestion des Membres
  @endsection

  @section('apresHome')
    MembersManage
  @endsection

@section('content')
	@include('backend.layouts.labo.membersManage')
@endsection