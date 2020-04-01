@extends('respform/layouts/templateRespForm')

@section('title')
    RespForm
  @endsection

  @section('dashboard')
    Utilisateur
  @endsection

  @section('apresHome')
    Consultation des informations
  @endsection


@section('content')
    
     @include('backend.showUsers.showRespForm')
 
@endsection