@extends('admin/layouts/templateAdmin')

@section('title')
   Admin | Nos Partenaires
  @endsection

  @section('dashboard')
    Gestion des Partenaires
  @endsection

  @section('apresHome')
   InsolitesManage/Create/Partenaire
  @endsection

@section('content')
  @include('backend.layouts.nosPartenaires.createNosPartenaires')
@endsection