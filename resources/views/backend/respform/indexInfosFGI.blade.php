@extends('respform/layouts/templateRespForm')
@section('title')
  FGI RespForm |  Gestion des formations
@endsection

@section('dashboard')
  Gestion des formations
@endsection

@section('apresHome')
  formations
@endsection

@section('content')

 @include('backend.layouts.infosFGI.indexInfosFGI')

@endsection

   
   
