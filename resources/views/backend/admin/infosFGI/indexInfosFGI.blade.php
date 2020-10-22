@extends('admin/layouts/templateAdmin')
@section('title')
  FGI Admin |  Gestion des formations
@endsection

@section('dashboard')
  <li class="fas fa-edit"></li> Gestion des formations
@endsection

@section('apresHome')
  formations
@endsection

@section('content')

 @include('backend.layouts.infosFGI.indexInfosFGI')

@endsection

   
   
