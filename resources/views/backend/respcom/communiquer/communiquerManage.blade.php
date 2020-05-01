  @extends('respcom/layouts/templateRespCom')

  @section('title')
    Responsable cellule communication | Communiqué
  @endsection

  @section('dashboard')
    Citations
  @endsection

  @section('apresHome')
    CitationsManage
  @endsection

@section('content')
  @include('backend.layouts.communiquer.communiquerManage')
@endsection
