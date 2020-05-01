@extends('admin/layouts/templateAdmin')

@section('title')
   Admin | Création d'une citation
  @endsection

  @section('dashboard')
    Gestion des Citations
  @endsection

  @section('apresHome')
    CiationsManage/Create/Citation
  @endsection

@section('content')
   @include('backend.layouts.citation.createCitation')
@endsection