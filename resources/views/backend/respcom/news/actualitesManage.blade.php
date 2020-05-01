  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication
  @endsection

  @section('dashboard')
    News
  @endsection

  @section('apresHome')
    ActualitésManage
  @endsection

@section('content')
  @include('backend.layouts.new.actualitesManage')
@endsection
