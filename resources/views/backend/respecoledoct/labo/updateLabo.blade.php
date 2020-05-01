@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
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