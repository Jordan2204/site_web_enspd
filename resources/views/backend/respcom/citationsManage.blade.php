  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Gestion des citations
  @endsection

  @section('dashboard')
    Citations
  @endsection

  @section('apresHome')
    CitationsManage
  @endsection

@section('content')
  @include('backend.layouts.citation.citationsManage')
@endsection
