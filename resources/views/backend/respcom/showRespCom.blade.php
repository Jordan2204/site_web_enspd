@extends('respcom/layouts/templateRespCom')

@section('title')
    RespCom | Consultation des infos
  @endsection

  @section('dashboard')
    Utilisateur
  @endsection

  @section('apresHome')
    Consultation des informations
  @endsection


@section('content')
    
     @include('backend.showUsers.showRespCom')
 
@endsection