@extends('respdept/layouts/templateRespDept')

@section('title')
    RespDept
  @endsection

  @section('dashboard')
    Utilisateur
  @endsection

  @section('apresHome')
    Consultation des informations
  @endsection


@section('content')

    @include('backend.showUsers.showRespDept')
 
@endsection