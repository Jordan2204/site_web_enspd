@extends('admin/layouts/templateAdmin')

 @section('title')
   Admin
  @endsection

  @section('dashboard')
    Personnel
  @endsection

  @section('apresHome')
    Recherche d'un Personnel
  @endsection

@section('content')
  @include('backend.layouts.labo.searchPersonnel')
@endsection