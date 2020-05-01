@extends('admin/layouts/templateAdmin')

@section('title')
   Admin | Création d'une insolite
  @endsection

  @section('dashboard')
    Gestion des Insolites
  @endsection

  @section('apresHome')
   InsolitesManage/Create/Insolite
  @endsection

@section('content')
  @include('backend.layouts.insolite.createInsolite')
@endsection