@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
     Labo E3M
  @endsection

  @section('apresHome')
    Labo/Update labo
  @endsection

@section('content')
   @include('backend.layouts.labo.updateLabo')
@endsection