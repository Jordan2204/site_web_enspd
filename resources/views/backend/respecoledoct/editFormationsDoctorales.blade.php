@extends('respecoledoct/layouts/templateRespEcoleDoct')

@section('title')
    RespEcoleDoct
  @endsection

  @section('dashboard')
   <i class="fas fa-edit"></i> FormationsDoctorales
  @endsection

  @section('apresHome')
    UFD/Update Formations Doctorales
  @endsection

@section('content')
   @include('backend.layouts.labo.editFormationsDoctorales')
@endsection