@extends('admin/layouts/templateAdmin')

@section('title')
    Admin
  @endsection

  @section('dashboard')
    <li class="fas fa-edit"></li> Labo E3M
  @endsection

  @section('apresHome')
    Labo/Update labo
  @endsection

@section('content')
   @include('backend.layouts.labo.updateLabo')
@endsection