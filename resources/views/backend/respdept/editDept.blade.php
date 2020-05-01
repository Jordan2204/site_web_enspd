@extends('respdept/layouts/templateRespDept')

  @section('title')
      RespDept | Gestion des départements
  @endsection
  
    @section('dashboard')
      Mise a jour du département {{ $departement->nomDept }}
    @endsection

    @section('apresHome')
      DepartementManage/editDept
    @endsection


@section('content')
  @include('backend.layouts.departement.editDept')
@endsection