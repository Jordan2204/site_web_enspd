@extends('respecoledoct/layouts/templateRespEcoleDoct')

 @section('title')
    Resp Ecole Doct
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