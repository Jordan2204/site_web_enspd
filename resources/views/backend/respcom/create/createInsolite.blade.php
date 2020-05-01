@extends('respcom/layouts/templateRespCom')

@section('title')
   Resp Com| Création d'une insolite
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